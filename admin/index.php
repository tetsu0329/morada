<?php 
	include ('bypass.php');
	include ('navigation.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<style type="text/css">
	body{
		 margin: 0;
		 font-family: 'Century Gothic';
	}

	.content_body{
  		margin: 50px 40px 0px 350px;
	}

	.img-thumbnail{
		margin: 1%;
		width: 40%;
		padding: 4%;
	}
	
	.msg{
		margin: 1%;
		width: 30%;
		padding: 4%;
		float: left;
	}
	.inquiry_body{
		border: 2px solid #8C6A48;
		border-radius: 10px;
		background-color: white;
		
	}
	.inquiry_body:hover{
		background-color: #e7d5d0;
	}
	
	.order_body{
		border: 2px solid #8C6A48;
		border-radius: 10px;
		background-color: white;
		
	}
	.order_body:hover{
		background-color: #e7d5d0;
	}
	@media screen and (max-width: 600px) {
  .content_body{
    margin-left: 50px;
    margin-top: 30px;  }
	}
</style>
<body>
<div class="content">
  <div class="content_body">
  	<div style="padding-top: 5%;"></div>
    <h2>Dashboard</h2>
    <hr>
    <center>
    	<div class="container">      
  			<div class="inquiry_body img-thumbnail"><p style="font-size: 50px"><?php echo $inquirycount ?></p><hr><p style="font-size: 20px">INQUIRY</p></div>
  			<div class="inquiry_body img-thumbnail"><p style="font-size: 50px"><?php echo $ordercount ?></p><hr><p style="font-size: 20px">ORDER</p></div>
  			<div class="inquiry_body img-thumbnail"><p style="font-size: 50px"><?php echo $usercount ?></p><hr><p style="font-size: 20px">USERS</p></div>
  			<div class="inquiry_body img-thumbnail"><p style="font-size: 50px"><?php echo $productcount ?></p><hr><p style="font-size: 20px">PRODUCTS</p></div>
  			<br>
  			<br>
  			<br>
  			<p style="font-size: 20px">MESSAGES</p>
  			<hr>

  			<div class="inquiry_body msg">
  			<p style="font-size: 30px">3</p>
  			<p style="font-size: 20px">READ</p>
  			</div>

  			<div class="inquiry_body msg">
  			<p style="font-size: 30px">5</p>
  			<p style="font-size: 20px">UNREAD</p>
  			</div>

  			<div class="inquiry_body msg">
  			<p style="font-size: 30px">8</p>
  			<p style="font-size: 20px">TOTAL</p>
  			</div>

	     </div>
    </center>
    		
</div>
<br><br>


</body>
</html>