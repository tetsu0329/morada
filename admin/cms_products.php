<?php 
	include ('bypass.php');
	include ('navigation.php');
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
	textarea {
    padding: 12px 20px;
    box-sizing: border-box;
    border-radius: 4px;
    font-size: 16px;
    resize: none;
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
    z-index: 5 !important;
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
	margin-left: 96%;
}

/*forms*/
	* {
    box-sizing: border-box;
}

	input[type=text], input[type=number], select, textarea {
    width: 100% !important;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
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
    background-color: transparent;
    border: 1px solid #8C6A48;
    color: #8C6A48;
}

.container {
    border-radius: 5px;
    padding: 0px 30px 0px 30px;
}

.col-25 {
    float: left;
    width: 100%;
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
.prodcode{
	width: 30% !important;
}
.prodimg{
	border: 1px solid #8C6A48;
	margin: 5px;
	padding: 15px;
	max-height: 300px !important;
	max-width: 300px !important;
}

textarea {
    box-sizing: border-box;
    border-radius: 4px;
    font-size: 16px;
    resize: none;
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
	}</style>
<body>
<div class="content">
  <div class="content_body">
  	<div style="padding-top: 5%;"></div>
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
                <form action="" method="POST" enctype="multipart/form-data">

                <div class="container">
                	<div class="row">
						      <div class="col-75 prodcode">
						        <input type="text" id="prodcode" name="prodcode" placeholder="Product Code">
						      </div>
					</div>

					<div class="row">
						<div class="col-75">
						    <input type="text" id="prodname" name="prodname" placeholder="Product Name">
						</div>
					</div>

					<div class="row">
						      <div class="col-75">
						          <select class="w3-select w3-border" name="option">
								    <option value="" disabled selected placeholder>Product Category</option>
								    <option value="Bedroom">Bedroom</option>
								    <option value="Cabinets">Cabinets</option>
								    <option value="Dining Room">Dining Room</option>
								    <option value="Kitchen">Kitchen</option>
								    <option value="Living Room">Living Room</option>
								  </select>
						      </div>
						    </div>

							<div class="row">
						      <div class="col-75">
						          <select class="w3-select w3-border" name="option2">
								    <option value="" disabled selected placeholder>Product Classification</option>
								    <option value="Chair">Chair</option>
								    <option value="Cabinet">Cabinet</option>
								    <option value="Table">Table</option>
								    <option value="Decoration">Decoration</option>
								  </select>
						      </div>
						    </div>

					<div class="row">
						      <div class="col-75">
						        <textarea placeholder="Product Description" name='description'></textarea>
						      </div>
						    </div>

					<!--  <div class="row">
						      <div class="col-75 prodcode">
						        <input type="text" id="width" name="width" placeholder="WIDTH">x<input type="text" id="height" name="height" placeholder="HEIGHT">
						      </div>
						    </div> -->
						       <div class="">
								  <div class="w3-half">
								    <input class="w3-input w3-border" type="text" placeholder="WIDTH" name="wid">
								  </div>

								  <div class="w3-half">
								    <input class="w3-input w3-border" type="text" placeholder="HEIGHT" name="hei">
								  </div>
								</div>
						     
					
							<div class="row">
						      <div class="col-75">
						        <input type="text" id="price" name="price" placeholder="Price">
						      </div>
						    </div>

							<div class="row">
						      <div class="col-75">
						        <input type="number" id="quantity" name="quantity" placeholder="Quantity" value="1">
						      </div>
						    </div>

                </div>

                <center>
                <p><b>Product Image</b></p>
                <img src="img/view.png" class="prodimg" id="productimg"><br>
				<center><input type="file" class="form-control-file" name='product'id="exampleInputFile" aria-describedby="fileHelp" value="Choose Photo" accept="image/*" onchange="loadslider1(event)" class="upload"></center>
                <br>
                <br>
				<script>
				var loadslider1 = function(event) {
					var output = document.getElementById('productimg');
					output.src = URL.createObjectURL(event.target.files[0]);
					};
				</script>
                <input type='submit' name='productbtn' value='SAVE' class="btn_style2">
				
                </center>
              </div>
          </form>
      </div>
	    
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

			<?php
	            while($rows=mysqli_fetch_assoc($sqlproductcount))
	            {
			?>
		    <tr>
		      <td>Product<?php echo $rows['id'] ?></td>
		      <td class="name"><?php echo $rows['productname'] ?></td>
		      <td><center><?php echo $rows['quantity'] ?></center></td>
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
							<h6 style="line-height: 2;"><?php echo $rows['productdesc'] ?>x</h6> 
							<h5 style="font-weight: 600;">Type</h5><h6 style="line-height: 2;">Lorem ipsum</h6>
							<h5 style="font-weight: 600;">Code</h5><h6 style="line-height: 2;">LOREM123</h6>
							<h5 style="font-weight: 600;">Price</h5><h6 style="line-height: 2;">123.00</h6> 	 
						  </div>

						  <br>
						  <br>
						</div>

						<button id="edit_btn" class="btn_style"><img src="img/edit.png" style="height: 15px; width: 15px;"></button>
						<div id="edit_modal" class="modal">
						  <div class="modal-content">
						    <span class="close">&times;</span>
						    <h4>Edit Product</h4>
                <hr>
                <form action="" method="POST" enctype="multipart/form-data">

                <div class="container">
                	<div class="row">
						      <div class="col-75 prodcode">
						        <input type="text" id="prodcode" name="prodcode" placeholder="Product Code">
						      </div>
					</div>

					 <div class="row">
						      <div class="col-75">
						        <input type="text" id="prodname" name="prodname" placeholder="Product Name">
						      </div>
						    </div>

					<div class="row">
						      <div class="col-75">
						          <select class="w3-select w3-border" name="option">
								    <option value="" disabled selected placeholder>Product Category</option>
								    <option value="Bedroom">Bedroom</option>
								    <option value="Cabinets">Cabinets</option>
								    <option value="Dining Room">Dining Room</option>
								    <option value="Kitchen">Kitchen</option>
								    <option value="Living Room">Living Room</option>
								  </select>
						      </div>
						    </div>

							<div class="row">
						      <div class="col-75">
						          <select class="w3-select w3-border" name="option2">
								    <option value="" disabled selected placeholder>Product Classification</option>
								    <option value="Chair">Chair</option>
								    <option value="Cabinet">Cabinet</option>
								    <option value="Table">Table</option>
								    <option value="Decoration">Decoration</option>
								  </select>
						      </div>
						    </div>

					<div class="row">
						      <div class="col-75">
						        <textarea placeholder="Product Description" name='description'></textarea>
						      </div>
						    </div>

					<!--  <div class="row">
						      <div class="col-75 prodcode">
						        <input type="text" id="width" name="width" placeholder="WIDTH">x<input type="text" id="height" name="height" placeholder="HEIGHT">
						      </div>
						    </div> -->
						       <div class="">
								  <div class="w3-half">
								    <input class="w3-input w3-border" type="text" placeholder="WIDTH" name="wid">
								  </div>

								  <div class="w3-half">
								    <input class="w3-input w3-border" type="text" placeholder="HEIGHT" name="hei">
								  </div>
								</div>
						     
					
							<div class="row">
						      <div class="col-75">
						        <input type="text" id="price" name="price" placeholder="Price">
						      </div>
						    </div>

							<div class="row">
						      <div class="col-75">
						        <input type="number" id="quantity" name="quantity" placeholder="Quantity" value="1">
						      </div>
						    </div>

                </div>

                <center>
                <p><b>Product Image</b></p>
                <img src="img/view.png" class="prodimg" id="productimg"><br><br>
				<center><input type="file" class="form-control-file" name='product'id="exampleInputFile" aria-describedby="fileHelp" value="Choose Photo" accept="image/*" onchange="loadslider1(event)"></center>
                <br>
                <br>
				<script>
				var loadslider1 = function(event) {
					var output = document.getElementById('productimg');
					output.src = URL.createObjectURL(event.target.files[0]);
					};
				</script>
                <input type='submit' name='productbtn' value='SAVE' class="btn_style2">
				
                </center>
              </div>
         </div>
     </form>
											   
						  </div>
						</div>

						<button class="btn_style"><img src="img/delete.png" style="height: 15px; width: 15px;"></button>
		      	
		      </td>
		    </tr>
			<?php
				}
			?>
		  </table>
		</center>
	</div>
	</div>
<br>
<br>
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