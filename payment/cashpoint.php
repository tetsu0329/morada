<?php

function terminatePage($errorMessage, $redirect = false) {
    if($redirect)
        //header('Location:../');

    die ('ERROR: '.$errorMessage);
    exit;
}

function checkCashPoints($conn, $userID) {
    if(!is_numeric($userID) || !isset($conn))
        terminatePage('Check CP > parameter invalid.');

    $results = $conn->query("SELECT SUM(ut.floatingBalance) AS floatingBalance, SUM(ut.availableBalance) AS availableBalance, SUM(vt.cashpointBalance) AS cpBalance 
                      FROM `cashpoint_usertable` AS ut INNER JOIN `cashpoint_vaulttable` AS vt 
                      WHERE ut.cashpointId = vt.id AND ut.userId = $userID AND ut.enabled = true AND vt.datetimeexpiry > now();");
    $obj = $results->fetch_object();
    $floatingBalance = $obj->floatingBalance;
    $availableBalance = $obj->availableBalance;

    if($availableBalance != $obj->cpBalance)
        return 0;

    $results = $conn->query("SELECT SUM(tt.amount) AS floatingAmountTransaction, SUM(et.amount) AS floatingAmountExchange
                  FROM cashtable_transactiontable AS tt
                   INNER JOIN (SELECT SUM(amount) AS amount, transactionId, finish FROM cashpoint_exchangetable GROUP BY transactionId) AS et
                  WHERE tt.reasonid != 1 AND tt.id = et.transactionId AND tt.userid = $userID AND et.finish = false AND (tt.success = false AND tt.cancelled = false);");
    $obj = $results->fetch_object();

    if(!is_null($obj->floatingAmountExchange) && ($obj->floatingAmountExchange != $obj->floatingAmountTransaction || $obj->floatingAmountExchange != $floatingBalance))
        return 0;

    return $availableBalance;
}

function updateTransactionReferenceID($conn, $userID, $cpTransactionID, $referenceID){
    if(!is_numeric($userID) || !isset($conn) || !is_numeric($cpTransactionID) || !isset($referenceID))
        terminatePage('Request CP > parameter invalid.');

    if($conn->query("UPDATE cashtable_transactiontable SET `referenceid`='$referenceID'
                WHERE `userid` = '$userID' AND `id` = '$cpTransactionID'")) {
        return true;
    } else {
        //die('Error : ('. $conn->errno .') '. $conn->error);
        return false;
    }
}

// $referenceID = transaction id in transactiontable
function requestCashPointsPayment($conn, $userID, $cpAmount, $referenceID, $reason = '') {
    if(!is_numeric($userID) || !isset($conn) || !is_numeric($cpAmount) || !isset($referenceID))
        terminatePage('Request CP > parameter invalid.');

    $balance = checkCashPoints($conn, $userID);
    $transactionId = -1;
    if($balance <= 0 || $cpAmount <= 0 || $balance < $cpAmount)
        terminatePage("Error1");

    $insert_row = $conn->query("INSERT INTO cashtable_transactiontable
              (amount, userid, referenceid, reasonid, reason) VALUES
              ($cpAmount, $userID, '$referenceID', 2, '$reason')
            ");

    if(!$insert_row)
        terminatePage(' ('. $conn->errno .') '. $conn->error);

    $transactionId = $conn->insert_id;

    $result = $conn->query("SELECT vt.id AS cpID, vt.cashpointbalance AS cpBalance 
                FROM cashpoint_usertable AS ut INNER JOIN cashpoint_vaulttable AS vt 
                WHERE vt.id = ut.cashpointId AND ut.userId = $userID AND ut.enabled = true AND vt.cashpointbalance = ut.availableBalance
                    AND ut.availableBalance > 0 AND vt.datetimeexpiry > now();");

    if ($result->num_rows <= 0)
        terminatePage("Error2");

    $remainingBalance = $cpAmount;

    while($row = $result->fetch_assoc()) {
        $cpID = $row['cpID'];
        $cpBalance = $row['cpBalance'];

        $balanceToSubtract = 0.00;
        if($cpBalance >= $remainingBalance)
            $balanceToSubtract = $remainingBalance;
        else
            $balanceToSubtract = $cpBalance;

        $remainingBalance = $remainingBalance - $balanceToSubtract;

        $insert_row = $conn->query("INSERT INTO cashpoint_exchangetable
              (transactionId, cashpointId, amount) VALUES
              ($transactionId, $cpID, $balanceToSubtract)
            ");

        if(!$insert_row)
            terminatePage(' ('. $conn->errno .') '. $conn->error);

        if(!$conn->query("UPDATE cashpoint_usertable 
                SET floatingBalance = floatingBalance + $balanceToSubtract, availableBalance = availableBalance - $balanceToSubtract 
                WHERE `userid` = '$userID' AND cashpointId = '$cpID'"))
            terminatePage(' ('. $conn->errno .') '. $conn->error);

        if(!$conn->query("UPDATE cashpoint_vaulttable 
                SET cashpointbalance = cashpointbalance - $balanceToSubtract 
                WHERE id = '$cpID'"))
            terminatePage(' ('. $conn->errno .') '. $conn->error);

        if($remainingBalance <= 0)
            break;
    }

    $balance = checkCashPoints($conn, $userID);
    if($balance < 0)
        terminatePage("Error3");

    return $transactionId;
}

function cancelCashPointsPayment($conn, $userID, $cpTransactionID) {
    if(!is_numeric($userID) || !isset($conn) || !is_numeric($cpTransactionID))
        terminatePage('Cancel CP > parameter invalid.');

    $results = $conn->query("SELECT id FROM cashtable_transactiontable 
                  WHERE id=$cpTransactionID AND cancelled=FALSE AND success=FALSE AND userid=$userID");
    $obj = $results->fetch_object();

    if(is_null($obj) || $obj->id != $cpTransactionID)
        return -1;

    if(!$conn->query("UPDATE cashtable_transactiontable 
                SET cancelled = true
                WHERE id = '$cpTransactionID' AND userid = $userID"))
        terminatePage(' ('. $conn->errno .') '. $conn->error);


    $result = $conn->query("SELECT id, cashpointID, amount FROM cashpoint_exchangetable WHERE transactionId=$cpTransactionID AND finish=FALSE");
    if ($result->num_rows <= 0)
        return -1;

    while($row = $result->fetch_assoc()) {
        $cpID = $row['cashpointID'];
        $cpBalance = $row['amount'];
        $exchId = $row['id'];

        if(!$conn->query("UPDATE cashpoint_exchangetable SET finish=TRUE
              WHERE `id` = '$exchId' AND cashpointId = '$cpID' AND transactionId=$cpTransactionID"))
            terminatePage(' ('. $conn->errno .') '. $conn->error);

        if(!$conn->query("UPDATE cashpoint_usertable 
              SET floatingBalance = floatingBalance - $cpBalance, availableBalance = availableBalance + $cpBalance
              WHERE userId='$userID' AND cashpointId='$cpID'"))
            terminatePage(' ('. $conn->errno .') '. $conn->error);

        if(!$conn->query("UPDATE cashpoint_vaulttable SET cashpointbalance = cashpointbalance + $cpBalance WHERE id='$cpID'"))
            terminatePage(' ('. $conn->errno .') '. $conn->error);
    }



    if(!$conn->query("UPDATE cashtable_transactiontable 
                SET cancelled = true
                WHERE id = '$cpTransactionID' AND userid = $userID"))
        terminatePage(' ('. $conn->errno .') '. $conn->error);

    return $cpTransactionID;
}

function finalizeCashPointsPayment($conn, $userID, $cpTransactionID, $transactionID) {
    if(!is_numeric($userID) || !isset($conn)|| !is_numeric($cpTransactionID)|| !is_numeric($transactionID))
        terminatePage('Finalize CP > parameter invalid.');

    // 1: Check if CpTID is correct
    $results = $conn->query("SELECT id FROM cashtable_transactiontable 
                  WHERE id=$cpTransactionID AND cancelled=FALSE AND success=FALSE AND userid=$userID");
    $obj = $results->fetch_object();

    if(is_null($obj) || $obj->id != $cpTransactionID)
        return -1;

    // 2: Update Transaction Reference ID
    updateTransactionReferenceID($conn, $userID, $cpTransactionID, $transactionID);

    // 3: Update Exchange, User & Transaction Table
    if(!$conn->query("UPDATE cashtable_transactiontable 
                SET cancelled=FALSE, success=TRUE
                WHERE id = '$cpTransactionID' AND userid = $userID"))
        terminatePage(' ('. $conn->errno .') '. $conn->error);

    $result = $conn->query("SELECT id, cashpointID, amount FROM cashpoint_exchangetable WHERE transactionId=$cpTransactionID AND finish=FALSE");
    if ($result->num_rows <= 0)
        return -1;

    while($row = $result->fetch_assoc()) {
        $cpID = $row['cashpointID'];
        $cpBalance = $row['amount'];
        $exchId = $row['id'];

        if(!$conn->query("UPDATE cashpoint_exchangetable SET finish=TRUE
              WHERE `id` = '$exchId' AND cashpointId = '$cpID' AND transactionId=$cpTransactionID"))
            terminatePage(' ('. $conn->errno .') '. $conn->error);

        if(!$conn->query("UPDATE cashpoint_usertable SET floatingBalance = floatingBalance - $cpBalance
              WHERE userId='$userID' AND cashpointId='$cpID'"))
            terminatePage(' ('. $conn->errno .') '. $conn->error);

        $conn->query("UPDATE cashpoint_usertable SET enabled=FALSE 
              WHERE userId='$userID' AND cashpointId='$cpID' AND floatingBalance <= 0 AND availableBalance <= 0");
    }

    return $cpTransactionID;
}

?>