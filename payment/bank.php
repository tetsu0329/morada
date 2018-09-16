<?php

/*****
 * Note (20171126)
 * For Cashpoint (bank.php)
 *  > Make sure the following are set:
 *      //$_SESSION["points"][1] = (Discount ID?)(eg: USER_POINTS)
 *      //$_SESSION["points"][2] = (Name?)  (eg: Less: Points)
 *      //$_SESSION["points"][3] = (price?) (how much less) (this should be in negative)
 *
 *  > Make sure to call (IN cashpoint.php)
 *      // finalizeCashPointsPayment() AND OR cancelCashPointsPayment() when payment was received / order cancelled.
 *
 * > TODO: Handle HTML Email when there is a discount.
 *
 ****/

session_start();
ob_start();
include_once("config.php");
include_once("cashpoint.php");

// NOTE: Please set to $_SESSION["paymentAck"] = "BANK_DEPOSIT" before executing/calling payment/bank.php

if(!isset($_SESSION["product"]) || isset($_SESSION["payment"]) || !isset($_SESSION["paymentAck"]) || !isset($_SESSION["customerid"]) )
{
    header('Location:../');
    exit;
}

if($_SESSION["paymentAck"] == "BANK_DEPOSIT")
{
    $noteCashPoint = '';

    if(isset($_SESSION["paypal_products"])){
        unset($_SESSION["paypal_products"]);;
    }

    $userId = $_SESSION["customerid"];
    $GrandTotal = 0.00;
    $ItemTotalPrice = 0.00;
    $ShippingFeeAmount = 0.00;
    $procc = "COD";
    // Create New Transaction Record
    $insert_row = $mysqli->query("INSERT INTO transactiontable
                (`userID`, `transactionStatus`, `paymentMethod`, `paypalTransactionID`, `totalAmount`, `itemAmount`, `shippingFeeAmount`, `note`)
                VALUES
                ('$userId','_INIT','Money Transfer','', $GrandTotal, $ItemTotalPrice, $ShippingFeeAmount, '$procc')
              ");

    if($insert_row){
        $transactionID = $mysqli->insert_id;
        $getuseremail = $mysqli->query("SELECT * FROM usertable WHERE id = $userId");
        $getuser = mysqli_fetch_assoc($getuseremail);
        $emailll = $getuser['emailadd'];
        $userrr = $getuser['fname'];
        $userrr2 = $getuser['fname']." ".$getuser['lname'];
        $userAdd = $getuser['street']." ".$getuser['barangay']." ".$getuser['city'];
        
        
        

    }else{
        die('Error : ('. $mysqli->errno .') '. $mysqli->error);
    }

    // Add Product ordered
    $ItemTotalPrice = 0;
    $ItemTotalQty = 0;
    $maills = " ";
    foreach ($_SESSION["product"] as $cart_item)
    {
        $orderedProductId = $cart_item[1];  //$cart_item[1] = productId (PK)
        $getuseremail2 = $mysqli->query("SELECT * FROM producttbl WHERE id= $orderedProductId");
        $getuser2 = mysqli_fetch_assoc($getuseremail2);
        $proddd = $getuser2['productname'];
        $piccc =  $getuser2['productimage'];
        $orderedProductPrice = $cart_item[5] * 1.00;    //$cart_item[3] = price
        $orderedProductQty = $cart_item[4];             //$cart_item[4] = qty
        $orderedProductSize = "Default";
        $option1 = $cart_item[6];
        $option2 = $cart_item[7];
        $option3 = $cart_item[8];
        $option4 = $cart_item[9];
        $option5 = $cart_item[10];
        $option6 = $cart_item[11];
        $option7 = $cart_item[12];
        $option8 = $cart_item[13];
        $option9 = $cart_item[14];
        $option10 = $cart_item[15];
        $option11 = $cart_item[16];
          
        $insert_row = $mysqli->query("INSERT INTO itemtransactiontable
                  (`transactionID`, `productID`, `qty`, `price`, `size`, `note`, `option1`, `option2`, `option3`, `option4`, `option5`, `option6`, `option7`, `option8`, `option9`, `option10`, `lastoption`) VALUES
                  ('$transactionID','$orderedProductId','$orderedProductQty','$orderedProductPrice','$orderedProductSize','','$option1','$option2','$option3','$option4','$option5','$option6','$option7','$option8', '$option9','$option10', '$option11')
              ");

        if(!$insert_row){
            die('Error : ('. $mysqli->errno .') '. $mysqli->error);
        }

        // item price X quantity
        $subtotal = $orderedProductPrice*$orderedProductQty;
        $ItemTotalQty = $ItemTotalQty + $orderedProductQty;

        //total price
        $ItemTotalPrice = $ItemTotalPrice + $subtotal;
    }
    // Update total price
    if($mysqli->query("UPDATE transactiontable SET `transactionStatus`='PENDING', `totalAmount` = '$ItemTotalPrice', 
                `itemAmount` = '$ItemTotalPrice', `shippingFeeAmount` = '$ShippingFeeAmount'
                WHERE `userID` = '$userId' AND `transactionID` = '$transactionID'")) {
    } 
    else {
        die('Error : ('. $mysqli->errno .') '. $mysqli->error);
    }
    // Acknowledge Transaction Compelete
    unset($_SESSION["paymentAck"]);
    unset($_SESSION["product"]);
    
    echo "<script>alert('Transaction Successful');window.location.replace('../thankyou.php?TransactionCode=$transactionID')</script>";

    //TODO: DEBUG
    //var_dump($_SESSION);

}
?>