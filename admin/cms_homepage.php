<?php 
	include ('bypass.php');
	include ('navigation.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Homepage</title>
</head>
<style type="text/css">
	body{
		 margin: 0;
	}

	.content_body{
  		margin: 50px 40px 0px 350px;
	}

	.img_view{
		margin: 30px 0px 0px 0px;
		width: 45%;
	}
	.img_view_body{
		border: 1px solid black;
		background-color: white;
		
		padding: 150px;
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
    <h2>Homepage</h2>
    <hr>
    <center>
    	<div class="img_view">
			<div class="img_view_body">
				<center><p style="font-size: 25px;">img here</p></center>
			</div>
		</div>
		<br><br>
		<button>Upload image</button>
	</center>
</div>
</body>
</html>