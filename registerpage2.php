<?php 
	session_start();
	include ('navigation.php');
	include ('connection/frontconn.php');
	include ('connection/frontconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register | Billing</title>
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
   
    width: 25%;
    margin-top: 6px;
}

.col-75 {
   
    width: 100%;
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
	padding: 20%;
}

.nextbtn{
	background: transparent !important;
	text-decoration: none;
	font-size: 20px;
	padding: 0 !important;
	color: #8C6A48 !important;
}
.nextbtn{
	border: none !important;
}
  .isDisabled{
    pointer-events: none;
  }
</style> 	
<body>

<!-- 	<div class="w3-container w3-light-grey w3-row w3-center" style="padding: 100px 0px 0px 0px;">
    <span class="w3-xxlarge">L O G I N</p>
  	</div> -->

<div class="w3-container" style="padding: 170px 50px 83px 50px;">
	  <div class="w3-row-padding">

	  	<div class="w3-col m6">
	      <div class="rightpic"><img class="w3-image" src="img/logo.png" width="700" height="394"></div>
	    </div>

	    <div class="w3-col m6 our_story">
	      <h3>Register</h3>

	      <hr>
	      <center><h6>Billing Information</h6></center>
	      <div class="container">

			  <form action="" method="POST">
			  	

			    <div class="row">
			      <div class="col-75">
							<?php
							if(!empty($_SESSION['caddress'])){
								echo "<input type='text' id='address' name='address' placeholder='House number, building, street name, subdivision name' value='".$_SESSION['caddress']."'>";
							}
							else{
								echo "<input type='text' id='address' name='address' placeholder='House number, building, street name, subdivision name'>";
							}
							?>
			      </div>
			    </div>

			    <div class="row">
			      <div class="col-75">
							<?php
							if(!empty($_SESSION['ccity'])){
								echo "<input type='text' id='city' name='city' placeholder='City' value='".$_SESSION['ccity']."'>";
							}
							else{
								echo "<input type='text' id='city' name='city' placeholder='City'>";
							}
							?>
			      </div>
			    </div>

			    <div class="row">
			      <div class="col-75">
							<?php
							if(!empty($_SESSION['cbrgy'])){
								echo "<input type='text' id='brgy' name='brgy' placeholder='Barangay' value='".$_SESSION['cbrgy']."'>";
							}
							else{
								echo "<input type='text' id='brgy' name='brgy' placeholder='Barangay'>";
							}
							?>
			      </div>
			    </div>

			     <br>
			       <div class="row">
			    	<a href="register.php" class="nextbtn" style="float: left;">PREV</a>
						<input type="submit" class="nextbtn" style="float: right;" value="NEXT" name='nextbtn2'>
			    </div>
			    </div>
			 	
			   <center>

			   
			   
			    <!-- <p class="w3-opacity">Already have an account? <a href="login.php" style="color: #8C6A48; text-decoration: none; font-weight: 600;">Sign in here.</a> </p> -->
			</center>
			  </form>
			</div>
	    </div>
	  </div>
	</div>

  	<!-- <div class="container w3-center">
  		<img src="img/logo.png" style="width: 250px;">
  <form action="/action_page.php">
    <div class="row">
      <div class="col-75 w3-center">
        <input type="text" id="username" name="username" placeholder="Username">
      </div>
    </div>
    <div class="row">
      <div class="col-75 w3-center">
        <input type="text" id="password" name="password" placeholder="Password">
      </div>
    </div>
   	<br>
    <div class="row">	
      <input type="submit" value="LOGIN">
    </div>
    <br>
    <div class="row">	
      <p class="w3-opacity">Don't have an account? <a href="register.php" style="color: #8C6A48; text-decoration: none; font-weight: 600;">Register here.</a> </p>
    </div> -->
  </form>
</div>
</center>
</body>
</html>
<?php include ('footer.php');?>