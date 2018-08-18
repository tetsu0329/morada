	<?php 
	include ('navigation.php');
	include ('bypass.php');

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
    <h2>Dashboard</h2>
    <hr>
    <center>
    	<div class="container">      
  			<div class="inquiry_body img-thumbnail"><p style="font-size: 50px">8745</p><hr><p style="font-size: 20px">INQUIRY</p></div>
  			<div class="inquiry_body img-thumbnail"><p style="font-size: 50px">45</p><hr><p style="font-size: 20px">ORDER</p></div>
  			<div class="inquiry_body img-thumbnail"><p style="font-size: 50px">3536</p><hr><p style="font-size: 20px">USERS</p></div>
  			<div class="inquiry_body img-thumbnail"><p style="font-size: 50px">67654</p><hr><p style="font-size: 20px">PRODUCTS</p></div>
	     </div>
    </center>
    		
</div>
</body>
</html>