<?php

/*****
 * Note (20171126)
 * For Cashpoint (index.php)
 *  > Make sure the following are set:
 *      //$_SESSION["points"][1] = (Discount ID?)(eg: USER_POINTS)
 *      //$_SESSION["points"][2] = (Name?)  (eg: Less: Points)
 *      //$_SESSION["points"][3] = (price?) (how much less) (this should be in negative)
 *
 * > TODO: Handle When error occured  (line 410 and 436) >> TODO: Redirect to error page.
 *
 ****/

session_start();
ob_start();
include_once("config.php");
include_once("cashpoint.php");
include_once("paypal.class.php");

$paypalmode = ($PayPalMode=='sandbox') ? '.sandbox' : '';

if(!isset($_SESSION["product"]) || !isset($_SESSION["customerid"]) )
{
    header('Location:../');
    exit;
}

//TODO
//var_dump($_GET);

if(isset($_SESSION["product"]) && !isset($_SESSION["payment"])) //Post Data received from product list page.
{
    //Other important variables like tax, shipping cost

    $paypal_data ='';
    $ItemTotalPrice = 0;
    $ItemTotalQty = 0;
    $i = 0;

    foreach ($_SESSION["product"] as $cart_item)
    {
        //$cart_item[1] = productId (PK)
        //$cart_item[2] = productName
        //$cart_item[3] = price
        //$cart_item[4] = qty
        //$cart_item[5] = size (string)

        // $product[1] = $queryhold['id'];
        //   $product[2] = $queryhold['productcode'];
        //   $product[3] = $queryhold['productname'];
		// 			$product[4] = $_POST['quantity'];
        // 			$product[5] = $queryhold['itemprice'];
        // $product[6] = $_POST['option'];
		// 			$product[7] = $_POST['option2'];
		// 			$product[8] = $_POST['option3'];

        $productID 	= filter_var($cart_item[1], FILTER_SANITIZE_STRING);

        $results = $mysqli->query("SELECT productcode, productname, productdesc, itemprice FROM producttbl WHERE id='$productID' LIMIT 1");
        $obj = $results->fetch_object();

        $paypal_data .= '&L_PAYMENTREQUEST_0_NAME'.$i.'='.urlencode($obj->productname).' - '.urlencode($cart_item[3]);
        $paypal_data .= '&L_PAYMENTREQUEST_0_NUMBER'.$i.'='.urlencode($obj->productcode);
        $paypal_data .= '&L_PAYMENTREQUEST_0_AMT'.$i.'='.urlencode($cart_item[5]);
        $paypal_data .= '&L_PAYMENTREQUEST_0_QTY'.$i.'='. urlencode($cart_item[4]); //$cart_item[4] = qty

        // item price X quantity
        $subtotal = ($cart_item[5]*$cart_item[4]); //$cart_item[4] = qty
        $ItemTotalQty = $ItemTotalQty + $cart_item[4];

        //total price
        $ItemTotalPrice = $ItemTotalPrice + $subtotal;

        //create items for session
        $paypal_product['items'][$i] = array(
            'itm_name'=>$obj->productname,
            'itm_price'=>$cart_item[5],
            'itm_code'=>$obj->productcode,
            'itm_id'=>$productID,
            'itm_qty'=>$cart_item[4],                    //$cart_item[4] = qty
            'option1'=>$cart_item[6],
            'option2'=>$cart_item[7],
            'option3'=>$cart_item[8],
            'option4'=>$_cart_item[9],                    
            'option5'=>$cart_item[10],
            'option6'=>$cart_item[11],
            'option7'=>$cart_item[12],
            'option8'=>$_cart_item[13],                    
            'option9'=>$cart_item[14],
            'option10'=>$cart_item[15],
            'option11'=>$cart_item[16]
        );
        $i++;
    }

    //$_SESSION["points"][1] = (Discount ID?)(eg: USER_POINTS)
    //$_SESSION["points"][2] = (Name?)  (eg: Less: Points)
    //$_SESSION["points"][3] = (price?) (how much less) (this should be in negative)
    if(isset($_SESSION["points"]) && is_numeric($_SESSION["points"][3])){
        $userID = $_SESSION['CustomerID'];
        $discountProductName = $_SESSION["points"][1].' - '.$_SESSION["points"][2];
        $cashPointsAmount = $_SESSION["points"][3];

        if($cashPointsAmount <= $ItemTotalPrice){
            $cashPointTransactionId = requestCashPointsPayment($mysqli, $userID, abs($cashPointsAmount),  '');

            if($cashPointTransactionId >= 0){
                $paypal_data .= '&L_PAYMENTREQUEST_0_NAME'.$i.'='.urlencode($discountProductName);
                $paypal_data .= '&L_PAYMENTREQUEST_0_NUMBER'.$i.'='.urlencode('CP-'.$cashPointTransactionId);
                $paypal_data .= '&L_PAYMENTREQUEST_0_AMT'.$i.'='.urlencode($cashPointsAmount);
                $paypal_data .= '&L_PAYMENTREQUEST_0_QTY'.$i.'='. urlencode(1); //$cart_item[4] = qty

                $ItemTotalPrice = $ItemTotalPrice + $cashPointsAmount;

                $paypal_product['items'][$i] = array(
                    'itm_name'=>$discountProductName,
                    'itm_price'=>$cashPointsAmount,
                    'itm_code'=>$obj->productCode,
                    'itm_id'=>'CP-'.$cashPointTransactionId,
                );
                $paypal_product['cashpoint'] = $cashPointTransactionId;
                $i++;
            }

            unset($_SESSION["points"]);
        }
    }

    // GrandTotal = Item Total Price + Shipping Cost
    $calculatedShippingCost = $shippingCost["first3"];
  
    if($ItemTotalQty > 3) {
        $calculatedShippingCost += $shippingCost["next5"];
        if ($ItemTotalQty > 8) {
            $calculatedShippingCost += ceil(($ItemTotalQty - 8) / 3) * $shippingCost["additional"];
        }
    }

    /* Fail safe */
    if ($calculatedShippingCost <= 0)
        $calculatedShippingCost = 0.00; // In case some problem occurred. Fail-safe
    else if($_GET['process']=="Pickup")
    	$calculatedShippingCost = 0.00;

    if ($ItemTotalPrice <= 0)
        $ItemTotalPrice = 500000.00; // In case some problem occurred. Fail-safe
    /* End of Fail Safe */

    $GrandTotal = ($ItemTotalPrice + $calculatedShippingCost);

    $paypal_product['assets'] = array(
        'shippin_cost'=>$calculatedShippingCost,
        'grand_total'=>$GrandTotal
    );

    //create session array for later use
    $_SESSION["paypal_products"] = $paypal_product;

    //Parameters for SetExpressCheckout, which will be sent to PayPal
    $padata = 	'&METHOD=SetExpressCheckout'.
        '&RETURNURL='.urlencode($PayPalReturnURL ).
        '&CANCELURL='.urlencode($PayPalCancelURL).
        '&PAYMENTREQUEST_0_PAYMENTACTION='.urlencode("SALE").
        $paypal_data.
        '&NOSHIPPING=0'. //set 1 to hide buyer's shipping address, in-case products that does not require shipping
        '&PAYMENTREQUEST_0_ITEMAMT='.urlencode($ItemTotalPrice).
        '&PAYMENTREQUEST_0_SHIPPINGAMT='.urlencode($calculatedShippingCost).
        '&PAYMENTREQUEST_0_AMT='.urlencode($GrandTotal).
        '&PAYMENTREQUEST_0_CURRENCYCODE='.urlencode($PayPalCurrencyCode).
        '&LOCALECODE=EN'. //PayPal pages to match the language on your website.
        '&CARTBORDERCOLOR=FFFFFF'. //border color of cart
        '&ALLOWNOTE=1';

    //TODO: Debug Varaible. Please remove after
    //var_dump($_SESSION);

    //We need to execute the "SetExpressCheckOut" method to obtain paypal token
    $paypal= new MyPayPal();
    $httpParsedResponseAr = $paypal->PPHttpPost('SetExpressCheckout', $padata, $PayPalApiUsername, $PayPalApiPassword, $PayPalApiSignature, $PayPalMode);

    //Respond according to message we receive from Paypal
    if("SUCCESS" == strtoupper($httpParsedResponseAr["ACK"]) || "SUCCESSWITHWARNING" == strtoupper($httpParsedResponseAr["ACK"]))
    {
        //Redirect user to PayPal store with Token received.
        $_SESSION["payment"] = "PAYPAL";
        
        //if($_GET['process']=="Pickup"){
    	//    $_SESSION['shipping']['$httpParsedResponseAr["TOKEN"]'] = "PICKUP";
    	//}
        
        $paypalurl ='https://www'.$paypalmode.'.paypal.com/cgi-bin/webscr?cmd=_express-checkout&token='.$httpParsedResponseAr["TOKEN"].'';
        
        //TODO: Debug Varaible. Please remove after
     //var_dump($_SESSION);
     //var_dump($paypalurl);
     //die();
        header('Location: '.$paypalurl);
    }
    else
    {
        //Show error message
        echo '<div style="color:red"><b>Error : </b>'.urldecode($httpParsedResponseAr["L_LONGMESSAGE0"]).'</div>';
        echo '<pre>';
        print_r($httpParsedResponseAr);
        echo '</pre>';
    }

}

//Paypal redirects back to this page using ReturnURL, We should receive TOKEN and Payer ID
if(isset($_GET["token"]) && isset($_GET["PayerID"]) && isset($_SESSION["payment"]))
{
    //we will be using these two variables to execute the "DoExpressCheckoutPayment"
    //Note: we haven't received any payment yet.

    $token = $_GET["token"];
    $payer_id = $_GET["PayerID"];
    $userID = $_SESSION["customerid"];

    if(isset($_SESSION["payment_error"]))
        unset($_SESSION["payment_error"]);

    //get session variables
    $paypal_product = $_SESSION["paypal_products"];
    $paypal_data = '';
    $ItemTotalPrice = 0.00;
    $ItemTotalQty = 0;
    $ShippingFeePrice = 0.00;
    $GrandTotalPrice = 0.00;

    foreach($paypal_product['items'] as $key=>$p_item)
    {
        $paypal_data .= '&L_PAYMENTREQUEST_0_QTY'.$key.'='. urlencode($p_item['itm_qty']);
        $paypal_data .= '&L_PAYMENTREQUEST_0_AMT'.$key.'='.urlencode($p_item['itm_price']);
        $paypal_data .= '&L_PAYMENTREQUEST_0_NAME'.$key.'='.urlencode($p_item['itm_name']);
        $paypal_data .= '&L_PAYMENTREQUEST_0_NUMBER'.$key.'='.urlencode($p_item['itm_code']);

        // item price X quantity
        $subtotal = ($p_item['itm_price']*$p_item['itm_qty']);
        $ItemTotalQty += $p_item['itm_qty'];

        //total price
        $ItemTotalPrice = ($ItemTotalPrice + $subtotal);
    }

    // GrandTotal = Item Total Price + Shipping Cost
    //$ShippingFeePrice = $shippingCost["first3"];
    //if($_GET['process']=="Delivery"){
    //if($ItemTotalQty > 3) {
    //    $ShippingFeePrice += $shippingCost["next5"];
    //    if ($ItemTotalQty > 8) {
    //       $ShippingFeePrice += ceil(($ItemTotalQty - 8) / 3) * $shippingCost["additional"];
    //    }
    //}
    //}
    //if($_GET['process']=="Pickup"){
    // $ShippingFeePrice = 0;
    //}
    $ShippingFeePrice = $paypal_product['assets']['shippin_cost'];
    $GrandTotalPrice = $paypal_product['assets']['grand_total'];

    $padata = 	'&TOKEN='.urlencode($token).
        '&PAYERID='.urlencode($payer_id).
        '&PAYMENTREQUEST_0_PAYMENTACTION='.urlencode("SALE").
        $paypal_data.
        '&PAYMENTREQUEST_0_ITEMAMT='.urlencode($ItemTotalPrice).
        '&PAYMENTREQUEST_0_SHIPPINGAMT='.urlencode($paypal_product['assets']['shippin_cost']).
        '&PAYMENTREQUEST_0_AMT='.urlencode($paypal_product['assets']['grand_total']).
        '&PAYMENTREQUEST_0_CURRENCYCODE='.urlencode($PayPalCurrencyCode);

    //We need to execute the "DoExpressCheckoutPayment" at this point to Receive payment from user.
    $paypal= new MyPayPal();
    $httpParsedResponseAr = $paypal->PPHttpPost('DoExpressCheckoutPayment', $padata, $PayPalApiUsername, $PayPalApiPassword, $PayPalApiSignature, $PayPalMode);

    //Check if everything went ok..
    if("SUCCESS" == strtoupper($httpParsedResponseAr["ACK"]) || "SUCCESSWITHWARNING" == strtoupper($httpParsedResponseAr["ACK"]))
    {

        echo '<h2>Success</h2>';
        echo 'Your Transaction ID : '.urldecode($httpParsedResponseAr["PAYMENTINFO_0_TRANSACTIONID"]);
        $ptransactionID = urldecode($httpParsedResponseAr["PAYMENTINFO_0_TRANSACTIONID"]);
        $ppaymentStatus = $httpParsedResponseAr["PAYMENTINFO_0_PAYMENTSTATUS"];

        if('Completed' == $httpParsedResponseAr["PAYMENTINFO_0_PAYMENTSTATUS"])
        {
            echo '<div style="color:green">Payment Received! Your product will be sent to you very soon!</div>';
        }
        elseif('Pending' == $httpParsedResponseAr["PAYMENTINFO_0_PAYMENTSTATUS"])
        {
            echo '<div style="color:red">Transaction Complete, but payment is still pending! '.
                'You need to manually authorize this payment in your <a target="_new" href="http://www.paypal.com">Paypal Account</a></div>';
        }

        // we can retrive transection details using either GetTransactionDetails or GetExpressCheckoutDetails
        // GetTransactionDetails requires a Transaction ID, and GetExpressCheckoutDetails requires Token returned by SetExpressCheckOut
        $padata = 	'&TOKEN='.urlencode($token);
        $paypal= new MyPayPal();
        $httpParsedResponseAr = $paypal->PPHttpPost('GetExpressCheckoutDetails', $padata, $PayPalApiUsername, $PayPalApiPassword, $PayPalApiSignature, $PayPalMode);

        if("SUCCESS" == strtoupper($httpParsedResponseAr["ACK"]) || "SUCCESSWITHWARNING" == strtoupper($httpParsedResponseAr["ACK"]))
        {

            echo '<br /><b>Stuff to store in database :</b><br />';

            $buyerName = urldecode($httpParsedResponseAr["FIRSTNAME"]).' '.urldecode($httpParsedResponseAr["LASTNAME"]);
            $buyerEmail = urldecode($httpParsedResponseAr["EMAIL"]);
            $buyerShipToName = urldecode($httpParsedResponseAr["SHIPTONAME"]);
            $buyerAddress = urldecode($httpParsedResponseAr["SHIPTOSTREET"]).', '.urldecode($httpParsedResponseAr["SHIPTOCITY"])
                .', '.urldecode($httpParsedResponseAr["SHIPTOSTATE"]).', '.urldecode($httpParsedResponseAr["SHIPTOZIP"]).', '.urldecode($httpParsedResponseAr["SHIPTOCOUNTRYCODE"]);
            $payerStatus = urldecode($httpParsedResponseAr["PAYERSTATUS"]);
            $payerId = urldecode($httpParsedResponseAr["PAYERID"]);

            $ptransactionID = urldecode($httpParsedResponseAr["TRANSACTIONID"]);
            $transactionTime = urldecode($httpParsedResponseAr["TIMESTAMP"]);
            $transactionToken = urldecode($httpParsedResponseAr["TOKEN"]);
            $transactionAmount = urldecode($httpParsedResponseAr["CURRENCYCODE"]).' '.urldecode($httpParsedResponseAr["AMT"]);

            $insert_row = $mysqli->query("INSERT INTO PaypalPaymentTable
              (payerPaypalId,payerStatus,buyerName,buyerEmail,buyerShipToName,buyerAddress,paypalTransactionID,transactionStatus,transactionTime,transactionToken,transactionAmount)
            VALUES
              ('$payerId','$payerStatus','$buyerName','$buyerEmail','$buyerShipToName','$buyerAddress','$ptransactionID','$ppaymentStatus','$transactionTime','$transactionToken','$transactionAmount')
            ");

            if($insert_row){
                print 'Success! ID of last inserted record is : ' .$mysqli->insert_id .'<br />';
            }else{
                die('Error : ('. $mysqli->errno .') '. $mysqli->error);
            }
            $userId = $_SESSION['CustomerID'];
            $transactionAmount = urldecode($httpParsedResponseAr["AMT"] )* 1.00;
            $itemAmount = urldecode($httpParsedResponseAr["ITEMAMT"] )* 1.00;
            $shippingFeeAmount = urldecode($httpParsedResponseAr["SHIPPINGAMT"] )* 1.00;

            $paymentStatus = 'ERROR';
            if('Completed' == $ppaymentStatus)
                $paymentStatus = 'PAID';
            elseif('Pending' == $ppaymentStatus)
                $paymentStatus = 'PENDING';

            // Create New Transaction Record
            $procc = $_GET['process'];
            $insert_row = $mysqli->query("INSERT INTO TransactionTable
                (`userID`, `transactionStatus`, `paymentMethod`, `paypalTransactionID`, `totalAmount`, `itemAmount`, `shippingFeeAmount`, `note`)
              VALUES
                ('$userID','PAID','PAYPAL','$ptransactionID', $transactionAmount, $itemAmount, $shippingFeeAmount, '$procc')
              ");

            if($insert_row){
                $transactionID = $mysqli->insert_id;
                print 'Success! Transaction ID : ' .$transactionID .'<br />';
            }else{
                die('Error : ('. $mysqli->errno .') '. $mysqli->error);
            }

            // Add Product ordered
            $paypal_product = $_SESSION["paypal_products"];
            $cashPointTransaction = finalizeCashPointsPayment($mysqli, $userID, $paypal_product["cashpoint"],$transactionID);

            foreach($paypal_product['items'] as $key=>$p_item)
            {
                $orderedProductId = $p_item['itm_id'];
                $orderedProductQty = $p_item['itm_qty'];
                $orderedProductSize = $p_item['itm_size'];
                $orderedProductPrice = $p_item['itm_price'] * 1.00;
                $option1 = $p_item['option1'];
                $option2 = $p_item['option2'];
                $option3 = $p_item['option3'];
                $option4 = $p_item['option4'];
                $option5 = $p_item['option5'];
                $option6 = $p_item['option6'];
                $option7 = $p_item['option7'];
                $option8 = $p_item['option8'];
                $option9 = $p_item['option9'];
                $option10 = $p_item['option10'];
                $option11 = $p_item['option11'];

                $insert_row = $mysqli->query("INSERT INTO itemtransactiontable
                  (`transactionID`, `productID`, `qty`, `price`, `size`, `note`, `option1`, `option2`, `option3`, `option4`, `option5`, `option6`, `option7`, `option8`, `option9`, `option10`, `lastoption`)
                VALUES
                  ('$transactionID','$orderedProductId','$orderedProductQty','$orderedProductPrice','$orderedProductSize','','$option1','$option2','$option3','$option4','$option5','$option6','$option7','$option8','$option9','$option10','$option11')
              ");

                if(!$insert_row){
                    die('Error : ('. $mysqli->errno .') '. $mysqli->error);
                }
                $queryyy = $mysqli->query("SELECT * FROM producttable WHERE productID = '$orderedProductId'");
                $selrow = mysqli_fetch_assoc($queryyy);
                $oldqty = $selrow['productQuantity'];
                $newqty = $oldqty - $orderedProductQty;
                $updatequery = $mysqli->query("UPDATE producttable SET productQuantity = '$newqty' WHERE productID = '$orderedProductId'");
            }

            // Transaction Successfully recorded. Safe to delete
            if(isset($_SESSION["product"])) { // Paypal transaction, not cancelled
                unset($_SESSION["product"]); //session no longer needed
                unset($_SESSION["payment"]);
            }

            echo '<pre>';
            print_r($httpParsedResponseAr);
            echo '</pre>';
        } else  {
            echo '<div style="color:red"><b>GetTransactionDetails failed:</b>'.urldecode($httpParsedResponseAr["L_LONGMESSAGE0"]).'</div>';

            $errMessage = urldecode($httpParsedResponseAr["L_LONGMESSAGE0"]);
            $currentTimestamp = date('c', time());
            $errorArray = array(
                'errorMessage'=>$errMessage,
                'method'=>'PAYPAL',
                'token'=>$token,
                'payerID'=>$payer_id,
                'amount'=>$ItemTotalPrice,
                'timestamp'=>$currentTimestamp
            );
            $_SESSION["payment_error"] = $errorArray;

            // Create New Transaction Record
            $insert_row = $mysqli->query("INSERT INTO TransactionTable
                (`userID`, `transactionStatus`, `paymentMethod`, `paypalTransactionID`, `totalAmount`,`itemAmount`, `shippingFeeAmount`, `note`)
              VALUES
                ('$userID','ERROR','PAYPAL','$ptransactionID', $ItemTotalPrice, $ItemTotalPrice, $ShippingFeePrice, $errMessage)
              ");

            if($insert_row){
                $transactionID = $mysqli->insert_id;
                print 'Failed! Transaction ID : ' .$transactionID .'<br />';
            }else{
                die('Error : ('. $mysqli->errno .') '. $mysqli->error);
            }

            updateTransactionReferenceID($mysqli, $userID, $paypal_product["cashpoint"], $transactionID);
            $cashPointTransaction = cancelCashPointsPayment($mysqli, $userID, $paypal_product["cashpoint"]);

            echo '<pre>';
            print_r($httpParsedResponseAr);
            echo '</pre>';

            // Transaction Error recorded to $_SESSION["payment_error"]. Safe to delete
            if(isset($_SESSION["product"])) { // Paypal transaction, not cancelled
                unset($_SESSION["product"]); //session no longer needed
                unset($_SESSION["payment"]);
            }

            // TODO: Redirect to error page.
        }

    }else{
        echo '<div style="color:red"><b>Error : </b>'.urldecode($httpParsedResponseAr["L_LONGMESSAGE0"]).'</div>';
        echo '<pre>';
        print_r($httpParsedResponseAr);
        echo '</pre>';

        $currentTimestamp = date('c', time());
        $errorArray = array(
            'errorMessage'=>$httpParsedResponseAr["L_LONGMESSAGE0"],
            'method'=>'PAYPAL',
            'token'=>$token,
            'payerID'=>$payer_id,
            'amount'=>$ItemTotalPrice,
            'timestamp'=>$currentTimestamp
        );
        $_SESSION["payment_error"] = $errorArray;

        // Transaction Error recorded to $_SESSION["payment_error"]. Safe to delete
        if(isset($_SESSION["product"])) { // Paypal transaction, not cancelled
            unset($_SESSION["product"]); //session no longer needed
            unset($_SESSION["payment"]);
        }

        // TODO: Redirect to error page.
    }
}
?>
