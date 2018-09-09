<?php
    session_start();
    ob_start();
    include_once("config.php");
    include_once("cashpoint.php");

    if(isset($_SESSION["product"]) && isset($_SESSION["payment"])){
        unset($_SESSION["payment"]);
    }

    if(isset($_SESSION["paypal_products"])){
        if(isset($_SESSION["paypal_products"]["cashpoint"]) && is_numeric($_SESSION["paypal_products"]["cashpoint"]) && isset($_SESSION["CustomerID"])){
            $customerID = $_SESSION["CustomerID"];
            $cashPointTransactionID = $_SESSION["paypal_products"]["cashpoint"];
            cancelCashPointsPayment($mysqli, $customerID, $cashPointTransactionID);
        }

        unset($_SESSION["paypal_products"]); //session no longer needed
    }

    if(isset($_SESSION["payment_error"])) {
        unset($_SESSION["payment_error"]);
    }

    echo '<br /><b>Transaction Cancelled</b><br />';
    echo '<br />Redirecting back... <br />';
    header('Refresh: 3;url=../securecheckout');
    exit;

?>