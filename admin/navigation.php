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
  background-color: #222222;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: #dee2e6;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #343a40;
  color: #dee2e6;
}

.sidebar a:hover:not(.active) {
  background-color: #343a40;
  color: #dee2e6;
}

.accordion {
    background-color: #222222;
    color: #dee2e6;
    cursor: pointer;
    padding: 18px;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

.active, .accordion:hover {
    background-color: #343a40;
    color: #dee2e6; 
}

.panel {
  /*  padding: 0 20px;*/
    margin-left: 20px;
    display: none;
    background-color: #222222;
}
a.panel:hover {
  /*  padding: 0 18px;*/
    display: none;
    background-color: #343a40;
}
.header {
  background-color: #e9ecef;
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
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
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
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
</head>
<body>

<!-- right content / sidebar -->
<div class="sidebar">
  <center><p style="font-size: 28px; color: #fff;">MORADA'S</p></center>
  <a class="active" href="index.php">Dashboard</a>
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
  <a href="archieve.php">Archieve</a>
</div>

<!-- left content / full content -->
<div class="content">

  <div class="header">
      <div class="header-right">
        <a href="#logout">Logout</a>
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

</html>
