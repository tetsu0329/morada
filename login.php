<?php
	session_start();
	include ('navigation.php');
	include ('connection/frontconn.php');
	include ('connection/frontconnection.php');
?>
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
	}
	.mybtn:hover{
		background: transparent !important;
		border: 2px solid #8C6A48;
		color: #8C6A48 !important;
	}

* {
    box-sizing: border-box;
}

input[type=text], input[type=password], select, textarea {
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

    padding: 20px;
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

</style> 	
<body>

<!-- 	<div class="w3-container w3-light-grey w3-row w3-center" style="padding: 100px 0px 0px 0px;">
    <span class="w3-xxlarge">L O G I N</p>
  	</div> -->

<div class="w3-container" style="padding: 177px 50px 70px 50px;">
	  <div class="w3-row-padding">

	  	<div class="w3-col m6">
	      <div class="rightpic"><img class="w3-image" src="img/logo.png" width="700" height="394"></div>
	    </div>

	    <div class="w3-col m6 our_story">
	      <h3>Sign in with your account.</h3>
	      <hr>
	      <div class="container">
			  <form action="" method="POST">
			    <div class="row">
			      <div class="col-75">
			        <input type="text" id="username" name="username" placeholder="Email">
			      </div>
			    </div>

			    <div class="row">

			      <div class="col-75">
			        <input type="password" id="password" name="password" placeholder="Password">
			      </div>
			    </div>

			   <br>
			   <center>
			    <div class="row">
			      <input type="submit" value="LOGIN" class="mybtn" name="loginbtn">
			    </div>
			    <br>
			    <p class="w3-opacity">Don't have an account? <a href="register.php" style="color: #8C6A48; text-decoration: none; font-weight: 600;">Register here.</a> </p></center>
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