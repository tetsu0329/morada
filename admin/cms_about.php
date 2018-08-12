<?php 
	include ('navigation.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit About</title>
</head>
<style type="text/css">
	body{
		 margin: 0;
	}

	.content_body{
  		margin: 50px 40px 0px 350px;
	}

	.about{
		margin: 30px 50px 0px 50px;
		width: 85%;
	}
	.about_body{
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
    <h2>About Us</h2>
    <hr>
    <center>
    	<div class="about">
			<div class="about_body">
				<center><p style="font-size: 16px; line-height: 1.5;">Lorem ipsum dolor sit emet. Lorem ipsum dolor sit emet. Lorem ipsum dolor sit emet. Lorem ipsum dolor sit emet. Lorem ipsum dolor sit emet. Lorem ipsum dolor sit emet. Lorem ipsum dolor sit emet. Lorem ipsum dolor sit emet. Lorem ipsum dolor sit emet. Lorem ipsum dolor sit emet. Lorem ipsum dolor sit emet. Lorem ipsum dolor sit emet.</p></center>
			</div>
		</div>
		<br><br>
		<button>UPDATE</button>
	</center>
</div>
</body>
</html>