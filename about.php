<?php 
	include ('navigation.php');
	include ('connection/frontconn.php');
	include ('connection/frontconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
</head>
<style type="text/css">
	.ourstory{
		line-height: 2 !important;
	}
		/*why choose us*/

	.chooseus{
		background: #f1f1f1 !important;
	}
</style> 	
<body>

	<div class="w3-container w3-light-grey w3-row w3-center" style="padding: 100px 0px 0px 0px;">
    <span class="w3-xxlarge">About Us</p>
  	</div>
	<!-- our story -->
	<div class="w3-container" style="padding: 10px 50px 0px 50px;">
	  <div class="w3-row-padding">

	  	<div class="w3-container w3-center">
	      <img class="w3-image" src="img/logo.png" width="700" height="394">
	    </div>

	    <div class="w3-container w3-center ourstory">
	      <h3>Our Story</h3>
	      <hr>
	      <p>
	      <?php
					while($rows=mysqli_fetch_assoc($sqlselectabout))
					{
						echo $rows["content"];
					}
				?>
	      </p>
	    </div>
	  </div>
	</div>
	<!-- end * our story -->

			<!-- why choose us -->
	<div class="w3-container chooseus" style="padding:50px 50px 50px 50px; margin-top: 5%;">
	  <h3 class="w3-center">Why Choose Us?</h3>
	  <div class="w3-row-padding w3-center" style="margin-top:64px">
	    <div class="w3-quarter">
	      <i><img src="img/highquality.png" style="width: 60px;"></i>
	      <p class="w3-large">High Quality</p>
	      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
	    </div>
	    <div class="w3-quarter">
	      <i><img src="img/affordable.png" style="width: 60px;"></i>
	      <p class="w3-large">Affordable</p>
	      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
	    </div>
	    <div class="w3-quarter">
	      <i><img src="img/freedel.png" style="width: 60px;"></i>
	      <p class="w3-large">Free Delivery</p>
	      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
	    </div>
		    <div class="w3-quarter">
		      <i><img src="img/accomodate.png" style="width: 60px;"></i>
		      <p class="w3-large">Accomodating</p>
		      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
		    </div>
	  </div>
	</div>
	<!-- end * why choose us -->
</body>
</html>
<?php include ('footer.php');?>