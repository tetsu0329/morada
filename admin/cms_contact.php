<?php 
	include ('navigation.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Contact</title>
</head>
<style type="text/css">
	body{
		 margin: 0;
	}

	.content_body{
  		margin: 50px 40px 0px 350px;
	}

	.contact{
		margin: 30px 50px 0px 50px;
		width: 85%;
	}
	.contact_body{
		border-radius: 10px;
		border: 1px solid black;
		background-color: white;
		padding: 100px;
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
    <h2>Contact Us</h2>
    <hr>
    <center>
    	<div class="contact">
			<div class="contact_body">
				<center><p style="font-size: 16px; line-height: 1.5;">123 Abc Street, Def Subd., Ghij City.</p></center>
			</div>
		</div>
		<br><br>
		<button>UPDATE</button>
	</center>
</div>
</body>
</html>