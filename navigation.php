<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	body, html {
	    height: 100%;
	    line-height: 1.8;
	    font-family: 'Century Gothic';
	}
	/* Full height image header */
	.bgimg-1 {
	    background-position: center;
	    background-size: cover;
	    background-image: url("/w3images/mac.jpg");
	    min-height: 100%;
	}
	.w3-bar .w3-button {
	    padding: 16px;
	}
	
	.nav a{
		text-decoration: none;
		margin-top: 10px;
	}	

  .nav a:hover{
    background: #ceaea5 !important;
  }

  .mobilemenu{
    background: #8C6A48!important;
    color: #fff;
  }
  .mobilemenu a:hover{
    background: #ceaea5 !important;
  }

  .isDisabled{
    pointer-events: none;
  }

  .dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
<body>
	<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#index.php" class="w3-bar-item w3-button w3-wide"><i><img src="img/logo.png" style="width: 150px;" class="logo"></i></a>
    <!-- Right-sided navbar links -->
    <div class="nav w3-right w3-hide-small">
      <a href="index.php" class="w3-bar-item w3-button">HOME</a>
      <a href="about.php" class="w3-bar-item w3-button">ABOUT</a>
      <a href="products.php" class="w3-bar-item w3-button">PRODUCTS</a>
        <div class="dropdown">
    <button class="dropbtn">Products 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>>
      <a href="gallery.php" class="w3-bar-item w3-button">GALLERY</a>
      <a href="contact.php" class="w3-bar-item w3-button">CONTACT US</a>
       <a href="#" class="w3-bar-item w3-button isDisabled">|</a>
      <a href="login.php" class="w3-bar-item w3-button">Login</a>
      <a href="register.php" class="w3-bar-item w3-button">Register Here</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large mobilemenu" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close Menu ×</a>
      <a href="index.php" class="w3-bar-item w3-button">HOME</a>
      <a href="about.php" class="w3-bar-item w3-button">ABOUT</a>
      <a href="products.php" class="w3-bar-item w3-button">PRODUCTS</a>
      <a href="gallery.php" class="w3-bar-item w3-button">GALLERY</a>
      <a href="contact.php" class="w3-bar-item w3-button">CONTACT US</a>
      <hr>
      <a href="login.php" class="w3-bar-item w3-button">Login</a>
      <a href="reg.php" class="w3-bar-item w3-button">Register Here</a>
</nav>

<script>
// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>
</body>
</html>