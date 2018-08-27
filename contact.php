 	<?php 
	include ('navigation.php');
	include ('connection/frontconn.php');
	include ('connection/frontconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
</head>
<style type="text/css">
	.ourstory{
		line-height: 3 !important;
	}

	.mybtn{
		border-radius: 5px !important;
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
    background-color: #8C6A48;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background: transparent !important;
		border: 2px solid #8C6A48;
		color: #8C6A48 !important;
}

.container {

    padding: 10px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
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
.contact{
	padding: 78px !important;
}

.social {
	width: 33.3% !important;
}
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }

    .social p {
    	display: none !important;
    }
}
</style> 	
<body>

	<div class="w3-container w3-light-grey w3-row w3-center" style="padding: 100px 0px 0px 0px;">
    <span class="w3-xxlarge">Contact Us</p>
  	</div>

  <div class="w3-row w3-container" style="padding: 30px;">
			<?php
			while($rows=mysqli_fetch_assoc($sqlselectcontact))
			{
			?>
	    <div class="w3-center">
	      <span class="w3-xlarge w3-border-dark-grey w3-padding-16">Stay in touch with us!</span>
	      <br><br>
	    </div>

	    <div class="w3-col l3 m6 w3-light-grey w3-container w3-padding-64 w3-center contact">
	    	<i><img src="img/name.png" style="width: 50px;"></i><!-- <h3>Name</h3> -->
	      <p><?php echo $rows['name'] ?></p>
	    </div>

	    <div class="w3-col l3 m6 brown w3-container w3-padding-64 w3-center">
	      <i><img src="img/location.png" style="width: 50px;"></i><!-- <h3>Name</h3> -->
	      <p><?php echo $rows['address'] ?></p>
	    </div>

	    <div class="w3-col l3 m6  w3-light-grey w3-container w3-padding-64 w3-center contact">
	      <i><img src="img/email.png" style="width: 50px;"></i><!-- <h3>Name</h3> -->
	      <p><?php echo $rows['email'] ?></p>
	    </div>

	    <div class="w3-col l3 m6 brown w3-container w3-padding-64 w3-center contact">
	      <i><img src="img/phone.png" style="width: 50px;"></i><!-- <h3>Name</h3> -->
	      <p><?php echo $rows['contactnumber'] ?></p>
		</div>
  </div>

 <div class="w3-row w3-container" style="padding: 30px;">
		

	    <a href="#">		
	    <div class="w3-col l3 m6 w3-light-grey w3-container w3-padding-64 w3-center social">
	      <i><img src="img/facebook.png" style="width: 50px;"></i><!-- <h3>Name</h3> -->
	      <p><?php echo $rows['facebook'] ?></p>
	    </div>
		</a>

		<a href="#">
	    <div class="w3-col l3 m6  brown w3-container w3-padding-64 w3-center social">
	      <i><img src="img/twitter.png" style="width: 50px;"></i><!-- <h3>Name</h3> -->
	      <p><?php echo $rows['twitter'] ?></p>
	    </div>
		</a>

		<a href="#">
	    <div class="w3-col l3 m6 w3-light-grey w3-container w3-padding-64 w3-center social">
	      <i><img src="img/instagram.png" style="width: 50px;"></i><!-- <h3>Name</h3> -->
	      <p><?php echo $rows['instagram'] ?></p>
		</div>
		</a>
</div>

  	<div class="w3-container" style="padding: 30px 50px 50px 50px;">
	  <div class="w3-row-padding">

	  	<div class="w3-col m6">
	      <img class="w3-image" src="img/dummymap.jpg" width="700" height="394">
	    </div>
			<?php
			}
			?>
	    <div class="w3-col m6 our_story">
	      <h3>Leave us a message!</h3>
	      <hr>
	      <div class="container">
			  <form action="" method="POST">
			    <div class="row">
			      <div class="col-25">Name</label></div>

			      <div class="col-75">
			        <input type="text" id="name" name="name" placeholder="Fullname">
			      </div>
			    </div>

					<div class="row">
			      <div class="col-25">Email Address</label></div>

			      <div class="col-75">
			        <input type="text" id="emailadd" name="emailadd" placeholder="Email Address">
			      </div>
			    </div>

			    <div class="row">
			      <div class="col-25">Subject</label></div>

			      <div class="col-75">
			        <input type="text" id="subj" name="subj" placeholder="Subject">
			      </div>
			    </div>

			    <div class="row">
			      <div class="col-25">
			        <label for="subject">Message</label>
			      </div>

			      <div class="col-75">
			        <textarea id="msg" name="msg" placeholder="Message" style="height:100px"></textarea>
			      </div>
			    </div>

			    <div class="row">
			      <input type="submit" value="SUBMIT" class="mybtn" name='inquirybtn'>
			    </div>
			  </form>
			</div>
	    </div>
	  </div>
	</div>
</body>
</html>
<?php include ('footer.php');?>