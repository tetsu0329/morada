<?php 
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

	.inquiry{
		margin: 5% 0px 0px 2%;
		width: 45%;
	}
	.inquiry_body{
		border: 2px solid #8C6A48;
		border-radius: 10px;
		background-color: white;
		
	}
	.inquiry_body:hover{
		background-color: #e7d5d0;
	}
	
	.order{
		margin: -105px 0% 0% 50%;
		width: 45%;
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

    .inquiry{
		margin: 5% 0px 0px 0%;
		width: 45%;
	}
	.inquiry_body{
		border: 1px solid black;
		border-radius: 10px;
		background-color: white;
		
	}
    .inquiry_body:hover{
		background-color: #dee2e6;
	}
	
	.order{
		margin: 15% 0% 0% 0%;
		width: 45%;
	}
	.order_body{
		border: 1px solid black;
		border-radius: 10px;
		background-color: white;
		
	}
	.order_body:hover{
		background-color: #dee2e6;
	}
	}
</style>
<body>
	<div class="content">

	  <div class="content_body">
	    <h2>Dashboard</h2>
	    <hr>
	   
		<div class="inquiry">
			<div class="inquiry_body">
				<center><p style="font-size: 40px;">33</p><p style="font-size: 18px;">INQUIRY</p></center>
			</div>
		</div>

		<div class="order">
			<div class="order_body">
				<center><p style="font-size: 40px;">373</p><p style="font-size: 18px;">ORDER</p></center>
			</div>
		</div>
	</div>
</body>
</html>