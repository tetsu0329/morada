<?php 
	include ('bypass.php');
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
		width: 100%;
	}
	.contact_body{
		border-radius: 10px;
		border: 1px solid black;
		background-color: white;
		padding: 100px;
	}


	.msg1{
		margin: 1%;
		width: 45%;
		padding: 4%;
		float: left;
	}
	
	.msg{
		margin: 1%;
		width: 31.3%;
		padding: 4%;
		float: left;
	}
	.inquiry_body{
		border: 2px solid #8C6A48;
		border-radius: 10px;
		background-color: white;
		
	}

	.map .img-thumbnail{
		width: 85% !important;
	}
		.btn_style{
	background-color: #8C6A48 !important;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 40%;

	}

	.btn_style:hover{
		    background-color: transparent !important;
    border: 2px solid #8C6A48;
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

/*input[type=submit] {
    background-color: #4CAF50 !important;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;

}

input[type=submit]:hover {
    background-color: #45a049 !important;
}
*/
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
		  @media only screen and (max-width: 768px) {
.content_body{
  margin: 50px;
  } 
}

</style>
<body>
<div class="content">

  <div class="content_body">
  	<div style="padding-top: 5%;"></div>
    <h2>Contact Us</h2>
    <hr>
     <center>  
     <h4>Contact Details</h4>

	 <?php
		while($rows=mysqli_fetch_assoc($sqlcontact))
		{
	 ?>  	<form action="" method="POST">
  			<div class="social inquiry_body msg1"><img src="../img/name.png" style="width: 50px;"><hr>
				<div class="row">
			      <div class="col-75">
			        <input type="text" id="facebook" name="name" placeholder="Lorem Ipsum Name" value='<?php echo $rows['name']?>'>
			      </div>
  				</div>		    	
			</div>

			<div class="social inquiry_body msg1"><img src="img/location.png" style="width: 50px;"><hr>
				<div class="row">
			      <div class="col-75">
			        <input type="text" id="instagram" name="address" placeholder="123 ABC City" value='<?php echo $rows['address']?>'>
			      </div>
  				</div>		    	
			</div>

			<div class="social inquiry_body msg1"><img src="img/email.png" style="width: 50px;"><hr>
				<div class="row">
			      <div class="col-75">
			        <input type="text" id="twitter" name="email" placeholder="loremipsum@gmail.com" value='<?php echo $rows['email']?>'>
			      </div>
  				</div>		    	
			</div>

			<div class="social inquiry_body msg1"><img src="img/phone.png" style="width: 50px;"><hr>
				<div class="row">
			      <div class="col-75">
			        <input type="text" id="phone" name="phone" placeholder="0915-123-4567" value='<?php echo $rows['contactnumber']?>'>
			      </div>
  				</div>		    	
			</div>
			<br>
  			<br>
  			<br>
  			<div style="margin-top: 45%;">

			<h4>Social Media</h4>  
  			<div class="social inquiry_body msg"><img src="img/facebook.png" style="width: 50px;"><hr>
				<div class="row">
			      <div class="col-75">
			        <input type="text" id="facebook" name="facebook" placeholder="www.facebook.com/morada" value='<?php echo $rows['facebook']?>'>
			      </div>
  				</div>		    	
			</div>

			<div class="social inquiry_body msg"><img src="img/instagram.png" style="width: 50px;"><hr>
				<div class="row">
			      <div class="col-75">
			        <input type="text" id="instagram" name="instagram" placeholder="www.instagram.com/morada" value='<?php echo $rows['instagram']?>'>
			      </div>
  				</div>		    	
			</div>

			<div class="social inquiry_body msg"><img src="img/twitter.png" style="width: 50px;"><hr>
				<div class="row">
			      <div class="col-75">
			        <input type="text" id="twitter" name="twitter" placeholder="www.twitter.com/morada" value='<?php echo $rows['twitter']?>'>
			      </div>
  				</div>		    	
			</div>

			<br>
			<br><input type='submit' value="SAVE" name="contactbtn" class="btn_style"><br>
			<br>
			<div class="map">
				<div class="inquiry_body" style="padding: 5%;"><img src="img/map.png" style="width: 50px;"><hr>
					<img src="img/dummymap.jpg" width="95%;">
				</div>
				<br>
				<br><input type='submit' value="SAVE" name="contactbtn" class="btn_style"><br>
				<br>
			</div>
			</form>
		<?php
		}
		?>
  		</center>

 </div>
    
</div>
</body>
</html>