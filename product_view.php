<?php include ('navigation.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<style type="text/css">
	.ourstory{
		line-height: 3 !important;

	}

	.mybtn{
		border-radius: 5px !important;
		border: none;
	}
	.mybtn:hover{
		background: transparent !important;
		border: 2px solid #8C6A48;
		color: #8C6A48 !important;
	}

* {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 20%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #8C6A48;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;

}

input[type=submit]:hover {
    background: transparent !important;
		border: 2px solid #8C6A48;
		color: #8C6A48 !important;
}
textarea {
    width: 100%;
    height: 100px;
    padding: 12px 20px;
    box-sizing: border-box;
    border-radius: 4px;
    resize: none;
}
.container {

    padding: 20px;
}

.col-25 {
   
    width: 25%;
    margin-top: 6px;
}

.col-75 {
   
    width: 50%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

.brown{
	background: #ceaea5 !important;
}

.rightpic{
	border: 2px solid #ceaea5;
	border-radius: 5px;
	padding: 0%;
}

.addminus{
	border: none;
	box-sizing: none;
	box-shadow: none;
	cursor: pointer;
	width: 5%;
}
.addminus:hover{
	background: #ceaea5;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

/*.row:after {
  content: "";
  display: table;
  clear: both;
}*/

/* Six columns side by side */
.column {
  float: left;
  width: 25%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style> 	
<body>

<!-- 	<div class="w3-container w3-light-grey w3-row w3-center" style="padding: 100px 0px 0px 0px;">
    <span class="w3-xxlarge">L O G I N</p>
  	</div> -->

<div class="w3-container" style="padding: 120px 50px 0px 50px;">
	  <div class="w3-row-padding">

	  	<div class="w3-col m6">
	      <div class="rightpic">
<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="img/slider1.jpeg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="img/slider1.jpeg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="img/slider1.jpeg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="img/slider1.jpeg" style="width:100%">
  </div>

</div>
	      </div>


	    </div>

	    <div class="w3-col m6 our_story">
	    	<div style="padding: 5%;">
	      <h3>Lorem Ipsum Product Name</h3>
	      <hr>
	      <p style="line-height: 1; font-size: 20px; color: gray;">Php 123.00</p>
        <h6>Product Code: <b>PRODUCT1</b></h6>
	      <h6>Description</h6>
	      <p style="line-height: 1;">
	      	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
	      </p>

        <h6>Type</h6>
        <select class="w3-select w3-border" name="option">
          <option value="" disabled selected>Choose type</option>
          <option value="1">Metal</option>
          <option value="2">Plastic</option>
          <option value="3">Wood</option>
        </select>

        <h6>Color</h6>
        <select class="w3-select w3-border" name="option">
          <option value="" disabled selected>Choose color</option>
          <option value="1">Black</option>
          <option value="2">Brown</option>
          <option value="3">Mahogany</option>
          <option value="3">White</option>
        </select>

        <h6>Edge</h6>
        <select class="w3-select w3-border" name="option">
          <option value="" disabled selected>Choose edge</option>
          <option value="1">Point</option>
          <option value="2">Round</option>
        </select>

        <h6>Add another customization request</h6>
        <textarea></textarea>

        <div id="input_div">
          	<h6>Quantity</h6>
		    <input type="button" value="-" id="moins" onclick="minus()" class="addminus">      	
		    <input type="text" size="25" value="0" id="count" class="quantity">
		    <input type="button" value="+" id="plus" onclick="plus()" class="addminus">
		    </div>
	     <hr>
        <center><p><a href="checkout.php" class="w3-button w3-brown mybtn">PROCEED TO CHECKOUT</a></p></center>
       </div>
		 
		</div>
    </div>
	    </div>
	  </div>
	</div>


  </form>
</div>
</center>


<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
<!-- scripts -->

<script type="text/javascript">
	
    var count = 0;
    var countEl = document.getElementById("count");
    function plus(){
        count++;
        countEl.value = count;
    }
    function minus(){
      if (count >0 ) {
        count--;
        countEl.value = count;
      }  
    }

</script>
</body>
</html>
<?php include ('footer.php');?>