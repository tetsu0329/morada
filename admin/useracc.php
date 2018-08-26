<?php 
	include ('bypass.php');
	include ('navigation.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Accounts</title>
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
	margin-left: 93%;
}

/*forms*/
	* {
    box-sizing: border-box;
}

	input[type=text], select, textarea {
    width: 45%;
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
  	<div style="padding-top: 5%;"></div>
    <h2>User Accounts</h2>
    <hr>
    <br>
    <div style="overflow-x:auto;">
    <div class="top_btns">
    	<button id="add_btn" class="btn_style"><img src="img/add.png" style="height: 15px; width: 15px;"></button>
			<div id="add_modal" class="modal">
				<div class="modal-content">
					<span class="close">&times;</span>
					    <h4>Add User</h4>
					    <hr>
						<form action='' method='POST'>
					    <center><h5 style="margin: 20px;">Personal Information</h5></center>
					    <div class="container">
						    <div class="row">
						      <div class="col-75">
						        <input type="text" id="lname" name="lastname" placeholder="Last Name">
						      </div>
						    </div>

						    <div class="row">
						      <div class="col-75">
						        <input type="text" id="fname" name="firstname" placeholder="First Name">
						      </div>
						    </div>

						    <div class="row">
						      <div class="col-75">
						        <input type="text" id="mobienum" name="mobilenum" placeholder="Mobile Number">
						      </div>
						    </div>

						    <div class="row">
						      <div class="col-75">
						        <input type="text" id="emailadd" name="emailadd" placeholder="Email Address">
						      </div>
						    </div>
						</div>
						
					  	<center><h5 style="margin: 20px;">Billing Information</h5></center>
					    <div class="container">

						    <div class="row">
						      <div class="col-75">
						        <input type="text" id="address" name="address" placeholder="house number, building, street name, subdivision name">
						      </div>
						    </div>

						    <div class="row">
						      <div class="col-75">
						        <input type="text" id="city" name="city" placeholder="City">
						      </div>
						    </div>

						    <div class="row">
						      <div class="col-75">
						        <input type="text" id="brgy" name="brgy" placeholder="Barangay">
						      </div>
						    </div>
						</div>

					  	<center><h5>Login Information</h5></center>
					    <div class="container">
						    <div class="row">
						      <div class="col-75">
						        <input type="text" id="pw" name="pw" placeholder="Password">
						      </div>
						    </div>

						    <div class="row">
						      <div class="col-75">
						        <input type="text" id="confirmpw" name="confirmpw" placeholder="Confirm Password">
						      </div>
						    </div>
						</div>

						 	<br>
						    	
						    <div class="row">
						      <center><input type="submit" value="Add" name='adduser'></center>
						    </div>
					</form>
				</div>
			</div>
    

    	<!-- <button id="edit_btn" class="btn_style"><img src="img/edit.png" style="height: 15px; width: 15px;"></button> -->
			<div id="edit_modal" class="modal">
				<div class="modal-content">
					<span class="close"></span>
					    <h4>Edit User</h4>
					    <hr>
						<?php
						if(isset($_GET['ID'])){
							$userid = $_GET['ID'];
							$sqluserview = mysqli_query($conn,"SELECT * FROM usertable WHERE id = $userid");
								while($rows=mysqli_fetch_assoc($sqluserview)){
						?>
						<form action="" method="POST">
					    <h5 style="margin: 20px;">Personal Information</h5>
					    <div class="container">
						    <div class="row">
						      <div class="col-75">
						        <input type="text" id="lname" name="lastname" value="<?php echo $rows['lname']?>">
						      </div>
						    </div>

						    <div class="row">
						      <div class="col-75">
						        <input type="text" id="fname" name="firstname" value="<?php echo $rows['fname']?>">
						      </div>
						    </div>

						    <div class="row">
						      <div class="col-75">
						        <input type="text" id="mobienum" name="mobilenum" value="<?php echo $rows['mobilenum']?>">
						      </div>
						    </div>

						    <div class="row">
						      <div class="col-75">
						        <input type="text" id="emailadd" name="emailadd" value="<?php echo $rows['emailadd']?>">
						      </div>
						    </div>
						</div>
						
					  	<h5 style="margin: 20px;">Billing Information</h5>
					    <div class="container">

						    <div class="row">
						      <div class="col-75">
						        <input type="text" id="address" name="address" value="<?php echo $rows['street']?>">
						      </div>
						    </div>

						    <div class="row">
						      <div class="col-75">
						        <input type="text" id="city" name="city" value="<?php echo $rows['city']?>">
						      </div>
						    </div>

						    <div class="row">
						      <div class="col-75">
						        <input type="text" id="brgy" name="brgy" value="<?php echo $rows['barangay']?>">
						      </div>
						    </div>
						</div>

					  	<h5>Login Information</h5>

					    <div class="container">
						    <div class="row">
						      <div class="col-75">
						        <input type="password" id="pw" name="pw" value="<?php echo $rows['password']?>">
						      </div>
						    </div>

						    <div class="row">
						      <div class="col-75">
						        <input type="password" id="confirmpw" name="confirmpw" value="<?php echo $rows['password']?>">
						      </div>
						    </div>
						</div>
						<?php
							}
						}
						?>
						 	<br>
						    
						    <div class="row">
						      <center><input type="submit" value="Submit" name='edituser'></center>
						    </div>
					</form>
				</div>
			</div>

    <button class="btn_style"><img src="img/delete.png" style="height: 15px; width: 15px;"></button>
    </div>
    <br>
    <center>
	  <table>
	    <tr>
	      <th class="name">Name</th>
	      <th><center>Status</center></th>
	      <th><center>Total Purchase</center></th>
	      <th><center>ACTIONS</center></th>

	    </tr>
		<?php
            while($rows=mysqli_fetch_assoc($sqladmins))
            {
		?>
	    	<tr>
	      		<td><?php echo $rows['fname'].' '.$rows['lname']?></td>
				<td><center><?php echo $rows['status'] ?></center></td>
				<td><center>No purchase</center></td>
				<td style="float: left;">
				<center>  
					<a href="?UserID=<?php echo $rows['id']?>"><button id="view_btn" class="btn_style"><img src="img/view.png" style="height: 15px; width: 15px;"></button></a>
					<a href="?ID=<?php echo $rows['id']?>"><button class="btn_style"><img src="img/edit.png" style="height: 15px; width: 15px;"></button></a>
				</center>
				</td>
			</tr>
		<?php
			}
		?>
		</table>
		</center>
		<div id="view_modal" class="modal">
		<div class="modal-content">
			<span class="close"></span>
			<?php
			if(isset($_GET['UserID'])){
				$userid = $_GET['UserID'];
				$sqluserview = mysqli_query($conn,"SELECT * FROM usertable WHERE id = $userid");
					while($rows=mysqli_fetch_assoc($sqluserview)){
			?>
				<h4><?php echo $rows['fname'].' '.$rows['lname']?></h4>
				<hr>
				<h5>Mobile Number</h5>
				<p><?php echo $rows['mobilenum']?></p>
				<h5>Email Address</h5>
				<p><?php echo $rows['emailadd']?></p>
				<h5>Address</h5>
				<p><?php echo $rows['street']." ".$rows['barangay']." ".$rows['city']?></p>
			<?php
				}
			}
			?>							   
		</div>
		</div>

	</div>
	</div>

</body>
<?php
	echo "<script> var view_modal = document.getElementById('view_modal'); </script>";
	if(isset($_GET['UserID'])){
		echo "<script> view_modal.style.display = 'block' </script>";
	}
	echo "<script> var edit_modal = document.getElementById('edit_modal'); </script>";
	if(isset($_GET['ID'])){
		echo "<script> edit_modal.style.display = 'block' </script>";
	}
?>
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