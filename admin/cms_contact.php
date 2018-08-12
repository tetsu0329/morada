<?php 
	include ('navigation.php');
	include ('bypass.php');
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
	.img-thumbnail{
		margin: 1%;
		width: 40%;
		padding: 4%;
	}

	.map .img-thumbnail{
		width: 85% !important;
	}
	.btn_style{
	background-color: #8C6A48;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 40%;

	}

	.btn_style:hover{
		    background-color: transparent;
    border: 1px solid #8C6A48;
    color: #8C6A48;

	}

	* {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 100%;
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
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 100%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

	@media screen and (max-width: 600px) {
  .content_body{
    margin-left: 50px;
    margin-top: 30px;  }

    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
	}
</style>
<body>
<div class="content">

  <div class="content_body">
    <h2>Contact Us</h2>
    <hr>
     <center>    
  			<div class="social img-thumbnail"><img src="img/facebook.png" style="width: 50px;"><hr>
				<div class="row">
			      <div class="col-75">
			        <input type="text" id="facebook" name="facebook" placeholder="www.facebook.com/morada">
			      </div>
  				</div>		    	
			</div>

			<div class="social img-thumbnail"><img src="img/instagram.png" style="width: 50px;"><hr>
				<div class="row">
			      <div class="col-75">
			        <input type="text" id="instagram" name="instagram" placeholder="www.instagram.com/morada">
			      </div>
  				</div>		    	
			</div>

			<div class="social img-thumbnail"><img src="img/twitter.png" style="width: 50px;"><hr>
				<div class="row">
			      <div class="col-75">
			        <input type="text" id="twitter" name="twitter" placeholder="www.twitter.com/morada">
			      </div>
  				</div>		    	
			</div>

			<div class="social img-thumbnail"><img src="img/phone.png" style="width: 50px;"><hr>
				<div class="row">
			      <div class="col-75">
			        <input type="text" id="phone" name="phone" placeholder="0915-123-4567">
			      </div>
  				</div>		    	
			</div>

			<br>
			<br><button class="btn_style">SAVE</button><br>
			<br>

			<div class="map">
				<div class="img-thumbnail"><img src="img/map.png" style="width: 50px;"><hr>
					<img src="img/dummymap.jpg" width="95%;">
				</div>
			</div>
			

  		</center>			
 </div>
    
</div>
</body>
</html>