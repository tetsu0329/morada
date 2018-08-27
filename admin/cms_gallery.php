<?php 
	include ('bypass.php');
	include ('navigation.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Gallery</title>
</head>
<style type="text/css">
	body{
		 margin: 0;
	}

	.content_body{
  		margin: 50px 40px 0px 350px;
	}
	.img-thumbnail{
		margin: 1%;
	}

  .top_btns{
  margin-left: 92%;
}

  .btn_style{
    background-color: #d9b6ac;
    border: none;
    box-shadow: none;
    padding: 10px;
    font-size: 12px;
    border-radius: 10px;
    font-weight: 600;
  }

  .btn_style:hover{
    border: 1px solid #e7d5d0;
    color: #313232;
  }
  
      .btn_style2{
  background-color: #8C6A48 !important;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 40%;

  }

  .btn_style2:hover{
        background-color: transparent !important;
    border: 2px solid #8C6A48;
    color: #8C6A48;

  }

  /* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 40%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
	@media screen and (max-width: 600px) {
  .content_body{
    margin-left: 50px;
    margin-top: 30px;  }
	}
</style>
<body>
<div class="content">

  <div class="content_body">
    <div style="padding-top: 5%;"></div>
    <h2>Gallery</h2>
    <hr>
        <div class="top_btns">
      <button id="add_btn" class="btn_style"><img src="img/add.png" style="height: 15px; width: 15px;"></button>
            <div id="add_modal" class="modal">
              <div class="modal-content">
                <span class="close">&times;</span>
                <h4>Add Image</h4>
                <hr>
                <form action="" method="POST" enctype="multipart/form-data">
                <center><img src="img/view.png" id='galleryimg' style='width:300px;height:300px;'></center>
                <center><input type="file" class="form-control-file" name='gallery'id="exampleInputFile" aria-describedby="fileHelp" value="Choose Photo" accept="image/*" onchange="loadslider1(event)"></center>
                <br>
                <br>
                <center>
                <input type='submit' name='gallerybtn' value='SAVE' class="btn_style2">
                </center>
                </form>
              </div>
              <script>
              var loadslider1 = function(event) {
                var output = document.getElementById('galleryimg');
                output.src = URL.createObjectURL(event.target.files[0]);
                };
              </script>
            </div>

      <button class="btn_style"><img src="img/delete.png" style="height: 15px; width: 15px;"></button>
    </div>
    <br>
    <center>
    	<div class="container">      
  		<img src="img/view.png" class="img-thumbnail" alt="Cinque Terre" width="250" height="250">
  		<img src="img/view.png" class="img-thumbnail" alt="Cinque Terre" width="250" height="250"> 
  		<img src="img/view.png" class="img-thumbnail" alt="Cinque Terre" width="250" height="250"> 
  		<img src="img/view.png" class="img-thumbnail" alt="Cinque Terre" width="250" height="250">
  		<img src="img/view.png" class="img-thumbnail" alt="Cinque Terre" width="250" height="250">
  		<img src="img/view.png" class="img-thumbnail" alt="Cinque Terre" width="250" height="250"> 
  		<img src="img/view.png" class="img-thumbnail" alt="Cinque Terre" width="250" height="250"> 
  		<img src="img/view.png" class="img-thumbnail" alt="Cinque Terre" width="250" height="250">

  
	     </div>
    </center>
    		
</div>

<!-- scripts -->
<script>
// <!--  ADD modal -->
  // Get the modal view
  var add_modal = document.getElementById('add_modal');

  // Get the button view that opens the modal
  var add_btn = document.getElementById("add_btn");

  // When the user clicks the button, open the modal 
  add_btn.onclick = function() {
    add_modal.style.display = "block";
  }
// <!-- end of ADD modal -->
</script>

<!-- Script for closing the modal -->
<script>
  // Get the <span> element that closes the modal
  var add_span = document.getElementsByClassName("close")[0];
  var view_span = document.getElementsByClassName("close")[1];
  var edit_span = document.getElementsByClassName("close")[2];

  // When the user clicks on <span> (x), close the modal
  add_span.onclick = function() {
    add_modal.style.display = "none";

  }
  view_span.onclick = function() {
    view_modal.style.display = "none";

  }
  edit_span.onclick = function() {
    edit_modal.style.display = "none";

  }
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == add_modal) {
    add_modal.style.display = "none";
    }
    if (event.target == view_modal) {
    view_modal.style.display = "none";
    }
    if (event.target == edit_modal) {
    edit_modal.style.display = "none";
    }
  }
</script>
</body>
</html>