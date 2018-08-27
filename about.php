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

/*	.chooseus{
		background: #f1f1f1 !important;
	}*/
	.misvis p{
		padding: 5%;
		line-height: 2.5;
		text-align: justify;
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
<br>

<!-- mission vision -->
	<div class="w3-container w3-light-grey" style="padding: 50px 50px 50px 0px;">
	  <div class="w3-row-padding">

	  	<div class="w3-col m6 misvis">
	      <center><h3>Mission</h3></center>
	      <p>
				<?php
					while($rows2=mysqli_fetch_assoc($sqlselectmission))
					{
						echo $rows2["mission"];
					}
				?>
	      </p>
	    </div>

	    <div class="w3-col m6 misvis">
	      <center><h3>Vision</h3></center>
	      <p>
				<?php
					while($rows3=mysqli_fetch_assoc($sqlselectvision))
					{
						echo $rows3["vision"];
					}
				?>
	      </p>
	    </div>

	  </div>
	</div>
<!-- end * mission vision -->
			<!-- why choose us -->
	<div class="w3-container chooseus" style="padding:0px 50px 50px 50px; margin-top: 2%;">
	  <h3 class="w3-center">Why Choose Us?</h3>
	  <div class="w3-row-padding w3-center" style="margin-top:64px">
	    <div class="w3-quarter">
	      <i><img src="img/highquality.png" style="width: 60px;"></i>
	      <p class="w3-large">High Quality</p>
	      <p>"Quality is never an accident. The quality of a leader is reflected in the standards they set for." - Anonymous</p>
	    </div>
	    <div class="w3-quarter">
	      <i><img src="img/affordable.png" style="width: 60px;"></i>
	      <p class="w3-large">Affordable</p>
	      <p>“Price ain't merely about numbers. It's a satisfying sacrifice.”  - Toba Beta</p>
	    </div>
	    <div class="w3-quarter">
	      <i><img src="img/freedel.png" style="width: 60px;"></i>
	      <p class="w3-large">Free Delivery</p>
	      <p>Free Delivery Nationwide with a minimum purchase of 1,000 and it takes 5-7 days only</p>
	    </div>
		    <div class="w3-quarter">
		      <i><img src="img/accomodate.png" style="width: 60px;"></i>
		      <p class="w3-large">Accomodating</p>
		      <p>We have very accomondating personnel and staff so why don't you stop by our store or ask online</p>
		    </div>
	  </div>
	</div>
	<!-- end * why choose us -->
</body>
</html>
<?php include ('footer.php');?>