<!DOCTYPE html>
<html>
<head>
	<title>Thank you!</title>
</head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	.w3-container{
		background: #e7d5d0 !important;
		margin-top: 1%;
		padding: 3%;
	}
	.thanks{
		background: #8C6A48 !important;
		padding: 5%;
		color: #fff;
	}
	.note{
		color: #515151 !important;
		font-size: 14px;
		padding: 2%;
		text-align: center;
		margin: 4%;
	}
	.details{
		font-size: 12px;
		color: #323232;
	}
</style>
<body>
	<div class="w3-container w3-content" style="max-width:800px">
	<div class="thanks"><h2 class="w3-wide w3-center">THANK YOU FOR CHOOSING US!</h2><p class="w3-opacity w3-center"><i>We are glad you trusted us!</i></p></div>
	<br><br>
	<center>TRANSACTION CODE: <?php echo $_GET['TransactionCode']; ?></center>	
    <p class="note">Payment needs to be settled before delivery. Please refer to the payment details below:</p>
    <center>
    <div class="w3-quarter">
    	<center><img src="img/cash.png" style="width: 40px;"><p class="details">50% downpayment</p></center>
    </div>

    <div class="w3-quarter">
    	<center><img src="img/name.png" style="width: 40px;"><p class="details">Evelyn Morada</p></center>
	</div>
	
	<div class="w3-quarter">
    	<center><img src="img/phone.png" style="width: 40px;"><p class="details">09294888273</p></center>
    </div>

    <div class="w3-quarter">
    	<center><img src="img/email.png" style="width: 40px;"><p class="details">evelynmorada@gmail.com</p></center>
    </div>
    </center>
    
	<br><br><br><br><p class="note">Proof of payment must be sent to our email together with the transaction code stated above for us to process an deliver your order.</p>
	<p class="note">Note: you may printscreen this invoice and send it to our email together with your proof of payment</p>
</body>
</html>