<!-- <?php include ('include.php'); ?> -->
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body {
  margin: 0;
  font-family: "Century Gothic", sans-serif;
}
a .icon{
  display: none;
}

}
.accordion {
    color: #222222;
    cursor: pointer;
    padding: 18px;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;

}

.active, .accordion:hover {
  
}

.panel {
  /*  padding: 0 20px;*/
    margin-left: 20px;
    display: none;
    background: transparent !important;
    
}
a.panel:hover {
  /*  padding: 0 18px;*/
    display: none;
    background-color: #343a40;
    text-decoration: none !important;
}

.links{
  padding:5% !important;
  text-decoration: none !important;
}
.sidebarmenu{
  background: #e7d5d0 !important;
}

.sidebarmenu a:hover{
  background: #ceaea5 !important;
}

* button{
  border-radius: 5px;
}
.topbar{
  background: #ceaea5 !important;
  color: #222;
}
.topbar a:hover{
  background: #e7d5d0 !important;
  color: #222;
  border-radius: 5px;
  text-decoration: none !important;
}
/**/
</style>
</head>
<body>

<!-- Top container -->
<div class="w3-bar w3-top w3-large topbar">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  </button>
  <span class="w3-bar-item w3-right"><a href="#" class="w3-bar-item w3-button">LOGOUT</a></span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left sidebarmenu" style="z-index:0;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="img/logo.png" style="max-width: 250px;"><br>
    </div>
    <div class="w3-col s8 w3-bar">
      
  
    </div>
  </div>
  <hr>
 
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding links">Dashboard</a>
    <a href="useracc.php" class="w3-bar-item w3-button w3-padding links">User Accounts</a>
    <a href="#cms" class="w3-bar-item w3-button w3-padding accordion links">CMS</a>
    <div class="panel">
       <a href="cms_homepage.php" class="w3-bar-item w3-button w3-padding links">Homepage</a>
      <a href="cms_about.php" class="w3-bar-item w3-button w3-padding links">About Us</a>
      <a href="cms_contact.php" class="w3-bar-item w3-button w3-padding links">Contact Us</a>
      <a href="cms_gallery.php" class="w3-bar-item w3-button w3-padding links">Gallery</a>
      <a href="cms_products.php" class="w3-bar-item w3-button w3-padding links">Products</a>
    </div>
  <a href="inquiry.php" class="w3-bar-item w3-button w3-padding links">Inquiry</a>
   <a href="reports.php" class="w3-bar-item w3-button w3-padding links">Reports</a>
    <a href="archive.php" class="w3-bar-item w3-button w3-padding links">Archive</a><br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- end of sidebar -->

<!-- SCRIPTS  -->

<!-- sidebar -->
<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>
<!-- end sidebar -->

<!-- menu accordion / dropdown cms -->
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
</script> <!-- end of menu accordion / dropdown cms -->
</html>
