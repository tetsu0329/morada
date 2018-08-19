<?php 
	include ('navigation.php');
	include ('connection/frontconn.php');
	include ('connection/frontconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<style type="text/css">
	body{
		font-family: 'Century Gothic';
	}
	/*slider*/
	* {box-sizing: border-box;}
	img {vertical-align: middle;}

	/* Slideshow container */
	.slideshow-container {
	  max-width: 100%;
	  position: relative;
	  margin: auto;
	}

	/* Caption text */
	.text {
	  color: #f2f2f2;
	  font-size: 15px;
	  padding: 8px 12px;
	  position: absolute;
	  bottom: 8px;
	  width: 100%;
	  text-align: center;
	}

	/* Number text (1/3 etc) */
	.numbertext {
	  color: #f2f2f2;
	  font-size: 12px;
	  padding: 8px 12px;
	  position: absolute;
	  top: 0;
	}

	/* The dots/bullets/indicators */
	.dot {
	  height: 15px;
	  width: 15px;
	  margin: 0 2px;
	  background-color: #bbb;
	  border-radius: 50%;
	  display: inline-block;
	  transition: background-color 1s ease;
	  position: absolute;
	  top: 0;
	  left: 0;
	}

	.active {
	  background-color: #717171;
	}

	/* Fading animation */
	.fade {
	  -webkit-animation-name: fade;
	  -webkit-animation-duration: 1.5s;
	  animation-name: fade;
	  animation-duration: 1.5s;
	}

	@-webkit-keyframes fade {
	  from {opacity: .4} 
	  to {opacity: 1}
	}

	@keyframes fade {
	  from {opacity: .4} 
	  to {opacity: 1}
	}

	/* On smaller screens, decrease text size */
	@media only screen and (max-width: 300px) {
	  .text {font-size: 11px}
	}
	/*our story*/
	.our_story{
		line-height: 2.5;
	}
	.mybtn{
		border-radius: 5px !important;
	}
	.mybtn:hover{
		background: transparent !important;
		border: 2px solid #8C6A48;
		color: #8C6A48 !important;
	}

	/*products*/
	.boxprod{
		padding: 10%;
	}
	.boxprod:hover{
		/*border: 2px solid #8C6A48;*/
		background: #f8f9fa;

	}

	.boxlink a{
		text-decoration: none;
	}

	/*why choose us*/

	.chooseus{
		background: #f1f1f1 !important;
	}
</style>
<body>
	<!-- slider -->
	<div class="slideshow-container">

	<?php
		while($rows=mysqli_fetch_assoc($sqlselectslider))
		{
	?>
		<div class="mySlides fade">
			<img src="<?php 
			echo substr($rows['sliderpicture'],3)
			?>" style="width:100%">
		</div>
	<?php
		}
	?>
	</div>

	<div style="text-align:center">
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span>
	</div>
	<!-- end * slider -->
	<!-- our story -->
	<div class="w3-container w3-light-grey" style="padding: 50px 50px 50px 50px;">
	  <div class="w3-row-padding">

	  	<div class="w3-col m6">
	      <img class="w3-image" src="img/logo.png" width="700" height="394">
	    </div>

	    <div class="w3-col m6 our_story">
	      <h3>Our Story</h3>
	      <p>
	      	<?php
					while($rows=mysqli_fetch_assoc($sqlselectabout))
					{
						echo substr($rows["content"], 0, 550);
						echo " .....";
					}
					?>
	      </p>
	      <p><a href="about.php" class="w3-button w3-brown mybtn">READ MORE</a></p>
	    </div>

	  </div>
	</div>
	<!-- end * our story -->

	<!-- our products -->

	<div class="w3-container" style="padding:50px 50px 50px 50px;">
	  <h3 class="w3-center">Featured Products</h3>
	  <p class="w3-center w3-large">Newly Added Products in our store go check 'ehm out</p>
	  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
		<?php 
				while($rows=mysqli_fetch_assoc($sqlproduct))
				{
		?>
	    <div class="w3-col l3 m6 w3-margin-bottom boxlink">
		    <a href="product_view.php"><div class="w3-card boxprod">
		      <img src="<?php echo $rows['productimage'] ?>" alt="John" style="width:100%; height:250px">
		        <div class="w3-container">
		          <h3><?php echo $rows['productname'] ?></h3>
		          <h6>P <?php echo $rows['itemprice'] ?></h6>
		          <p class="w3-opacity" style="text-align: justify;"><?php echo $rows['productdesc'] ?></p>
		        </div>
		      </div>
		  	</a>
	    </div>
			<?php
			}
		?>
	  </div>
	</div>


	<center><p><a href="products.php" class="w3-center w3-button w3-brown mybtn">SEE ALL</a></p></center>
	<!-- end * our products -->

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

	<!-- contact us -->
	<div class="w3-container w3-row w3-center" style="padding: 40px 20px 20px 20px;">
    <span class="w3-xxlarge">Liked Our Products?</span><p><a href="contact.php" class="w3-button w3-brown mybtn">CONTACT US NOW</a></p>
    <br>
  	</div>

	<!-- end * contact us -->
	<!-- scripts -->
		<!-- SLIDER -->
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>
		<!-- end * SLIDER -->
	<!-- end * scripts -->
	<?php include ('footer.php');?>
</body>
</html>