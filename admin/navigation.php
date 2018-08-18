<?php include ('include.php'); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

body {
  margin: 0;
  font-family: "Century Gothic", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 300px;
  background-color: #e7d5d0;
  position: fixed;
  height: 100%;
  overflow: hidden;
}

.sidebar a {
  display: block;
  color: #222222;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #ceaea5;
  color: #222222;
}

.sidebar a:hover:not(.active) {
  background-color: #ceaea5;
  color: #222222;
}

.mobilemenu{
  display: none;
}
.icon{
  display: none;
}

/*.sidenav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.sidenav a:hover {
  background-color: #ddd;
  color: black;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.sidenav .icon {
  display: none;
}*/

@media screen and (max-width: 700px) {
  .sidebar a:not(:first-child) {display: none;}
  .sidebar a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 700px) {
/*  .logo{
    float: left;
  }*/
  .sidebar.responsive {position: relative;}
  .sidebar.responsive .icon {
    position: absolute;
    right: 0;
    top:0%;
  }
  .sidebar.responsive a {
    float: none;
    display: block;
    text-align: left;
  }


  .mobilemenu{
  display: block !important;
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
    background-color: #ceaea5;
    color: #dee2e6; 
}

.panel {
  /*  padding: 0 20px;*/
    margin-left: 20px;
    display: none;
    background-color: #e7d5d0;
    
}
a.panel:hover {
  /*  padding: 0 18px;*/
    display: none;
    background-color: #343a40;
}
.header {
  background-color: #ceaea5;
  padding: 20px 20px 70px 20px;
}
.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 16px; 
  line-height: 25px;
  border-radius: 4px;
  background-color: #e7d5d0;
}


.header a:hover {
  border:   1px solid #8C6A48;
  color: black;
}

.header-right {
  float: right;
}
/*div.content {
  margin-left: 300px;
  height: 1000px;
}*/



/* MOBILE RESPONSIVE*/
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }

</style>
</head>
<body>

<!-- right content / sidebar -->
<div class="sidebar" id="mySidebar">
  <!-- <center><img src="img/logo.png" style="width: 250px; margin-bottom: 5%; padding: 5%;" class="logo"></center> -->
   <i><img src="img/logo.png" style="width: 250px; margin-bottom: 5%; padding: 5%;" class="logo"></i>
  <a href="index.php">Dashboard</a>
  <a href="useracc.php">User Accounts</a>
  <a href="orders.php">Orders</a>
  <a href="#cms" class="accordion">CMS</a>
    <div class="panel">
      <a href="cms_homepage.php">Homepage</a>
      <a href="cms_about.php">About Us</a>
      <a href="cms_contact.php">Contact Us</a>
      <a href="cms_gallery.php">Gallery</a>
      <a href="cms_products.php">Products</a>
   </div>
  <a href="inquiry.php">Inquiry</a>
  <a href="reports.php">Reports</a>
  <a href="archive.php">Archive</a>
 <a href="javascript:void(0);" class="icon" onclick="myFunction()"><br>
  <img src="img/menu.png" class="mobilemenu" style="width: 25px;">
</div>

<!-- left content / full content -->
<div class="content">

  <div class="header">
      <div class="header-right">
        <a href="logout.php">Logout</a>
      </div>
  </div>

  <div class="content_body">
<!--     <h2>Dashboard</h2>
    <hr> -->
  </div>

</div>

</body>

<!-- scripts -->
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

<script>
function myFunction() {
    var x = document.getElementById("mySidebar");
    if (x.className === "sidebar") {
        x.className += " responsive";
    } else {
        x.className = "sidebar";
    }
}
</script>
</html>
