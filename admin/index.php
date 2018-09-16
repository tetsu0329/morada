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

	.msg1{
		margin: 1%;
		width: 23%;
		padding: 4%;
		float: left;
	}
	
	.msg{
		margin: 1%;
		width: 31.3%;
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

	.title{
		letter-spacing: 15px;
		color: #8C6A48;
		text-align: center;
	}

	hr{
		background-color: #8C6A48;
		height: 1px;
	}

	@media screen and (max-width: 600px) {
  .content_body{
    margin-left: 50px;
    margin-top: 30px;  }

    .msg1{
		margin: 1%;
		width: 100%;
		padding: 4%;
		float: left;
	}
	.msg{
		margin: 1%;
		width: 100%;
		padding: 4%;
		float: left;
	}
	}

	  @media only screen and (max-width: 768px) {

.content_body{
  margin: 50px;
  } 
}

</style>
<body>
<div class="content">
  <div class="content_body">
  	<div style="padding-top: 5%;"></div>
    <h2 class="title">DASHBOARD</h2>
    <hr>
    <center>
    	<div class="container">      
  			<div class="inquiry_body msg1"><p style="font-size: 50px"><?php echo $inquirycount ?></p><hr><img src="img/inquiry.png" width="20px;"><p style="font-size: 20px">INQUIRY</p></div>
  			<div class="inquiry_body msg1"><p style="font-size: 50px"><?php echo $ordercount ?></p><hr><img src="img/orders.png" width="20px;"><p style="font-size: 20px">ORDER</p></div>
  			<div class="inquiry_body msg1"><p style="font-size: 50px"><?php echo $usercount ?></p><hr><img src="img/users.png" width="20px;"><p style="font-size: 20px">USERS</p></div>
  			<div class="inquiry_body msg1"><p style="font-size: 50px"><?php echo $productcount ?></p><hr><img src="img/products.png" width="20px;"><p style="font-size: 20px">PRODUCTS</p></div>
  			<br>
  			<br>
  			<br>
  			<div style="margin-top: 35%;">
  			<p style="font-size: 20px" class="title">MESSAGES</p>
  			<hr>

  			<div class="inquiry_body msg">
  			<p style="font-size: 30px"><?php echo $inqread ?></p>
  			<img src="img/read.png" width="20px;">
  			<p style="font-size: 20px">READ</p>
  			</div>

  			<div class="inquiry_body msg">
  			<p style="font-size: 30px"><?php echo $inqunread ?></p>
  			<img src="img/unread.png" width="20px;">
  			<p style="font-size: 20px">UNREAD</p>
  			</div>

  			<div class="inquiry_body msg">
  			<p style="font-size: 30px"><?php echo $inquirycount ?></p>
  			<img src="img/allmail.png" width="20px;">
  			<p style="font-size: 20px">TOTAL</p>
  			</div>
  		</div>
	     </div>
    </center>
    		
</div>
<br><br>


</body>
</html>