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

if(!isset($_SESSION["product"]) || isset($_SESSION["payment"]) || !isset($_SESSION["paymentAck"]) || !isset($_SESSION["CustomerID"]) )
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

    $userId = $_SESSION["CustomerID"];
    $GrandTotal = 0.00;
    $ItemTotalPrice = 0.00;
    $ShippingFeeAmount = 0.00;
    $procc = $_GET['process'];
    // Create New Transaction Record
    $insert_row = $mysqli->query("INSERT INTO transactiontable
                (`userID`, `transactionStatus`, `paymentMethod`, `paypalTransactionID`, `totalAmount`, `itemAmount`, `shippingFeeAmount`, `note`)
                VALUES
                ('$userId','_INIT','BANK_DEPOSIT','', $GrandTotal, $ItemTotalPrice, $ShippingFeeAmount, '$procc')
              ");

    if($insert_row){
        $transactionID = $mysqli->insert_id;
        $getuseremail = $mysqli->query("SELECT * FROM usertable WHERE userID = $userId");
        $getuser = mysqli_fetch_assoc($getuseremail);
        $emailll = $getuser['userEmail'];
        $userrr = $getuser['userFname'];
        $userrr2 = $getuser['userFname']." ".$getuser['userLname'];
        $userAdd = $getuser['userAddress'];
        
        
        

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
        $getuseremail2 = $mysqli->query("SELECT * FROM producttable WHERE productID= $orderedProductId");
        $getuser2 = mysqli_fetch_assoc($getuseremail2);
        $proddd = $getuser2['productName'];
        $piccc =  $getuser2['overall_thumb'];
        $orderedProductPrice = $cart_item[3] * 1.00;    //$cart_item[3] = price
        $orderedProductQty = $cart_item[4];             //$cart_item[4] = qty
        $orderedProductSize = $cart_item[5];            //$cart_item[5] = size (string)
         if($orderedProductSize  == "Small"){
	$sizeee = "34";
	}
	if($orderedProductSize  == "Medium"){
	$sizeee = "36";
	}
	if($orderedProductSize  == "Large"){
	$sizeee = "38";
	}
	if($orderedProductSize  == "XL"){
	$sizeee = "40";
	}
        if($orderedProductSize  == "XXL"){
	$sizeee = "42";
	}
          
        $insert_row = $mysqli->query("INSERT INTO itemtransactiontable
                  (`transactionID`, `productID`, `qty`, `price`, `size`, `note`) VALUES
                  ('$transactionID','$orderedProductId','$orderedProductQty','$orderedProductPrice','$orderedProductSize','')
              ");

        if(!$insert_row){
            die('Error : ('. $mysqli->errno .') '. $mysqli->error);
        }
        $sample++; 
        $maill = "<li style='border-bottom:1px solid black;list-style: none;width:80%;float: left;margin-left: 5%;margin-right:-40px;'>
				<div style='float: left;padding: 5px;text-align: center;width:30%;display: inline-block;'>
					<h3 style='font-family:century gothic;text-align:center;font-weight: normal;'>$proddd</h3>
					<img src='http://themeconcept.net/admin/$piccc' width='100' height='120'>
				</div>
				<div style='float: left;padding: 5px;text-align: center;width:30%;display: inline-block;'>
					<h3 style='font-family:century gothic;text-align:center;font-weight: normal;margin-top: 70%;'>QUANTITY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$orderedProductQty</h3>
					<h3 style='font-family:century gothic;text-align:center;font-weight: normal;'>SIZE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$sizeee</h3>
				</div>
				<br>
				<div style='float: left;padding: 5px;text-align: center;width:20%;display: inline-block;'>
				<br>
					<h3 style='font-family:century gothic;text-align:center;font-weight: normal;margin-top: 100%;'>PHP&nbsp;$orderedProductPrice .00</h3>
				</div>
			</li>";
        $maills = $maills." ".$maill;
        $samples = $samples." ".$sample;

        // item price X quantity
        $subtotal = $orderedProductPrice*$orderedProductQty;
        $ItemTotalQty = $ItemTotalQty + $orderedProductQty;

        //total price
        $ItemTotalPrice = $ItemTotalPrice + $subtotal;
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
            
            //$finalizecashpoint = finalizeCashPointsPayment($mysqli, $userID, $cashPointTransactionId, $transactionID);

            if($cashPointTransactionId >= 0){
                $ItemTotalPrice = $ItemTotalPrice + $cashPointsAmount;
                $noteCashPoint = 'CP-'.$cashPointTransactionId;

                //TODO: Add HTML portion for Points Discount. Including for Mail.

            }else{
                $cashPointsAmount = 0.00;
            }
            unset($_SESSION["points"]);
        }else{
            $cashPointsAmount = 0.00;
        }
    }

   if($_GET['process']=="Delivery"){
    // GrandTotal = Item Total Price + Shipping Cost
    $ShippingFeeAmount = $shippingCost["first3"];
    if($ItemTotalQty > 3) {
        $ShippingFeeAmount += $shippingCost["next5"];
        if ($ItemTotalQty > 8) {
            $ShippingFeeAmount += ceil(($ItemTotalQty - 8) / 3) * $shippingCost["additional"];
        }
    }
    }
    if($_GET['process']=="Pickup"){
    $ShippingFeeAmount = 0;
    }

    $GrandTotal = ($ItemTotalPrice + $ShippingFeeAmount);
    $to = $emailll;
			$subject = "Stock Confirmation";
			$Message = "
<center>
<div style='width: 700px;padding:0;margin:0;'>
	<img src='http://themeconcept.net/admin/img/head/tc.png' width='100%' style='margin-right:-40px; margin-left:50px;'>
	<h1 style='font-family:century gothic;text-align:center;font-weight: normal;'>Thank you for shopping with us!</h1>
	<div style='height:100%;padding-bottom: 10%;position: relative;'>
		<p style='font-family:century gothic;text-align:center;font-weight: normal;margin-right:-40px;'>
		Due to our limited number of stocks , We would like you to verify first the availability of the items you have ordered before proceeding with your Bank Deposit Payment so as to avoid any erroneous Transactions. <br><br> Please wait for our Order Confirmation Email before proceeding with your payment.
		</p>
		<br>
		<p style='font-family:century gothic;text-align:center;font-weight:bold;font-size:15px;'>Order Number:	$transactionID</p>
		<hr width='80%' style='background: black;'>
		
		<ul>
		<center>
			$maills
			</center>
			<li  style='border-bottom:1px solid black;list-style: none;width:104%;float: left;background: #313232;margin-left:-60px;margin-top:10px;text-align: center;color: white;padding:5px 10px 5px 10px;'>
				 	<h4 style='font-family:century gothic;text-align:center;font-weight:normal;color: white;'>SUBTOTAL: PHP $ItemTotalPrice .00</h4>
				 	<h4 style='font-family:century gothic;text-align:center;font-weight:normal;color: white;'>SHIPPING: PHP $ShippingFeeAmount .00</h4>
			</li>
		        <br><br>
		<li  style='font-family:century gothic;border-bottom:1px solid black;list-style: none;background: #313232;width:104%;float: left;margin-left: -60px;text-align: center;color: white;padding:5px 10px 5px 10px;font-weight: normal;font-size: 12px;'>
			<p>GET THE LATEST UPDATES ON SOCIAL MEDIA!</p>

			<a href='https://www.facebook.com' ><img border='0' src='http://themeconcept.net/admin/img/socialmedia/facebooklogo.png' width='30' height='30'></a>

			<a href='https://www.instagram.com'><img border='0' src='http://themeconcept.net/admin/img/socialmedia/instagramlogo.png' width='30' height='30'></a>


		
			<br>
			<br>

			<a href='/tc/privacy.php' style='font-size:12px;text-decoration:none; color:white; cursor:pointer;' >PRIVACY</a> | <a href='/tc/tnc.php' style='text-decoration:none; color:white; cursor:pointer;'>TERMS AND CONDITION</a>
	<br><br>
			<p>&copy; THEMECONCEPTS- 2017 ALL RIGHTS RESERVED.</p>
	</li>
		</ul>
	</div>	
</div>
</center>
			";
			
		$headers  = 'MIME-Version: 1.0' . "\r\n";
        	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        	$headers .= 'From: themeconcept.net';
		
		mail($to, $subject, $Message, $headers);

    // Update total price
    if($mysqli->query("UPDATE transactiontable SET `transactionStatus`='HOLD', `totalAmount` = '$GrandTotal', 
                `itemAmount` = '$ItemTotalPrice', `shippingFeeAmount` = '$ShippingFeeAmount'
                WHERE `userID` = '$userId' AND `transactionID` = '$transactionID'")) {
    } else {
        die('Error : ('. $mysqli->errno .') '. $mysqli->error);
    }

    // Acknowledge Transaction Compelete
    unset($_SESSION["paymentAck"]);
    unset($_SESSION["product"]);
    
    echo "<script>alert('Transaction Succesful Check your Email'); window.location ='../thankyou.php?OrderID=$transactionID';</script>";

    echo '<h2>Transaction Successful. </h2>';
    echo '<br/> Transaction: Bank Deposit <br/>';
    echo 'Please deposit the amount within 48 hours. Afterwards, please send a copy of the validated bank deposit slip. Thank you. <br/><br/>';
    echo 'Transaction Id: '.$transactionID.'<br/>';
    echo 'Total Transaction Amount: PHP '.$GrandTotal.'<br/>';
    echo '========================= <br/>';
    if($cashPointsAmount > 0) {
        echo 'Total Amount: PHP '.$ItemTotalPrice+abs($cashPointsAmount).'<br/>';
        echo 'LESS: (Points): PHP ' . $cashPointsAmount . '<br/>';
    }else{
        echo 'Total Amount: PHP '.$ItemTotalPrice.'<br/>';
    }
    echo 'Shipping Fee: PHP '.$ShippingFeeAmount.'<br/>';
    echo '<br/>';

    //TODO: DEBUG
    //var_dump($_SESSION);

} else {
    header('Location:../securecheckout');
    exit;
}

?>