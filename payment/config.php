<?php
$currency = 'PHP';

//MySql
$db_username 	= 'root';
$db_password 	= '';
$db_name 		= 'moradadb';
$db_host 		= 'localhost';

//paypal settings
$PayPalMode 			= 'live'; // sandbox or live
$PayPalApiUsername 		= 'reylumagui009_api1.yahoo.com'; //PayPal API Username
$PayPalApiPassword 		= 'PJUVVAZYTN744B3E'; //Paypal API password
$PayPalApiSignature 	= 'A3T0E7PO-rlDj6TulswgMI9u-YjMAmdvxUzTs986xXxGDJH-blEjPWwS'; //Paypal API Signature
$PayPalCurrencyCode 	= 'PHP'; //Paypal Currency Code
$PayPalReturnURL 		= 'http://morada/checkout.php'; //Point to paypal-express-checkout page
$PayPalCancelURL 		= 'http://morada/payment/cancel'; //Cancel URL if user clicks cancel

//Additional taxes and fees
$HandalingCost 		= 0.00;  //Handling cost for the order.
$InsuranceCost 		= 0.00;  //shipping insurance cost for the order.
$shippingCost       = array( //shipping cost
    'first3' => 0,
    'next5' => 0, // 285 - 180 = 105
    'additional' => 0
);

$taxes              = array( //List your Taxes percent here.
    'VAT' => 12,
);

//connection to MySql
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
?>
