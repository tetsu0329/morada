<?php 
	include ('navigation.php');
	include ('bypass.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Products</title>
</head>
<style type="text/css">
	body{
		 margin: 0;
	}

	.content_body{
  		margin: 50px 40px 0px 350px;
	}

	}
	table {
	    border-collapse: collapse;
	    border-spacing: 0;
	    width: 100%;

	    
	}
	.name{
		width: 80%;
	}
	th {
	    text-align: left;
	    padding: 20px;
	    width: 200px;
	    background-color: #8C6A48;
	    color: #f1f3f5;
	    border-bottom: 1px solid #dee2e6;
	}
	td {
	    text-align: left;
	    padding: 20px;
	    width: 200px;
	    border-bottom: 1px solid #dee2e6;
	}

	tr{
		border-bottom: 1px solid #dee2e6;
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

/*	tr:nth-child(odd){background-color: #f1f3f5;
	}*/
	tr:hover {background-color: #f5f5f5;}
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

.top_btns{
	margin-left: 92%;
}

/*forms*/
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
    padding: 0px 30px 0px 30px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width:100%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
.prod_img{
	max-width: 100px;
}

/*MOBILE RESPONSIVE*/
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
    <h2>Products</h2>
    <hr>
    <br>
    <div style="overflow-x:auto;">
    <div class="top_btns">
	    <button id="add_btn" class="btn_style"><img src="img/add.png" style="height: 15px; width: 15px;"></button>
						<div id="add_modal" class="modal">
						  <div class="modal-content">
						    <span class="close">&times;</span>
						    <h4>Add Product</h4>
						    <hr>
						    
							</div>
						  </div>
	    <button class="btn_style"><img src="img/delete.png" style="height: 15px; width: 15px;"></button>
    </div>
    <br>
    <center>
	  <table>
	    <tr>
	      <th>Product Code</th>
	      <th>Product Name</th>
	      <th><center>Quantity</center></th>
	      <th><center>ACTIONS</center></th>

	    </tr>


	    <tr>
	      <td>Product01</td>
	      <td class="name">Lorem Ipsum Product Name</td>
	      <td><center>4</center></td>
	      <td style="float: left;" class="action">
				<button id="view_btn" class="btn_style"><img src="img/view.png" style="height: 15px; width: 15px;"></button>
					<div id="view_modal" class="modal">
					  <div class="modal-content">
					    <span class="close">&times;</span>
					    <h4>View Product Name</h4>
					    <hr>
						<center>
						<img src="img/logo.png" width="300px;" class="prod_img"><br>
							<br>
						</center>		
						<h5 style="font-weight: 600;">Description</h5>
						<h6 style="line-height: 2;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.

						Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</h6> 
						<h5 style="font-weight: 600;">Type</h5><h6 style="line-height: 2;">Lorem ipsum</h6>
						<h5 style="font-weight: 600;">Code</h5><h6 style="line-height: 2;">LOREM123</h6>
						<h5 style="font-weight: 600;">Price</h5><h6 style="line-height: 2;">123.00</h6> 	 
					  </div>
					</div>

					<button id="edit_btn" class="btn_style"><img src="img/edit.png" style="height: 15px; width: 15px;"></button>
					<div id="edit_modal" class="modal">
					  <div class="modal-content">
					    <span class="close">&times;</span>
					    <h4>Edit Product Name</h4>
					    <hr>
										   
					  </div>
					</div>

	      	
	      </td>
	    </tr>
	  </table>
	</center>
	</div>
	</div>

</body>

<!-- scripts -->

<script>
// <!--  VIEW modal -->
	// Get the modal view
	var view_modal = document.getElementById('view_modal');

	// Get the button view that opens the modal
	var view_btn = document.getElementById("view_btn");

	// When the user clicks the button, open the modal 
	view_btn.onclick = function() {
		view_modal.style.display = "block";
	}
// <!-- end of VIEW modal -->
</script> 

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


<script>
// <!--  EDIT modal -->
	// Get the modal view
	var edit_modal = document.getElementById('edit_modal');

	// Get the button view that opens the modal
	var edit_btn = document.getElementById("edit_btn");

	// When the user clicks the button, open the modal 
	edit_btn.onclick = function() {
		edit_modal.style.display = "block";
	}
// <!-- end of EDIT modal -->
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
</html>