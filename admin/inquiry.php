<?php 
	include ('bypass.php');
	include ('navigation.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inquiry</title>
</head>
<style type="text/css">
	html,body{
		font-family: 'Century Gothic' !important;
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
    padding: 3% !important;
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
	margin-left: 90%;
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

		.title{
		letter-spacing: 15px;
		color: #8C6A48;
		text-align: center;
		text-transform: uppercase;
	}

	.headtitle{
		background:  #e7d5d0;
		width: 50%;
		padding: 2%;
		border: 2px solid #8C6A48;
	}
	hr{
		background-color: #8C6A48;
		height: 1px;
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

		  @media only screen and (max-width: 768px) {
.content_body{
  margin: 50px;
  } 
}

</style>
<body>
<div class="content">

  <div class="content_body">
  	<div style="padding-top: 5%;"></div>
    <h2 class="title">Inquiry</h2>
    <hr>
    <br>
    <div style="overflow-x:auto;">
  <!--   <div class="top_btns">
	    <button id="add_btn" class="btn_style">Add</button>
						<div id="add_modal" class="modal">
						  <div class="modal-content">
						    <span class="close">&times;</span>
						    <h4>Add Product</h4>
						    <hr>
						    
							</div>
						  </div>
	    <button class="btn_style">Delete</button>
    </div> -->
    <br>
    <center>
	  <table>
	    <tr>
	      <th>Inquiry ID</th>
	      <th>Sender</th>
	      <th><center>Message Status</center></th>
	      <th><center>ACTIONS</center></th>

	    </tr>

		<?php
            while($rows=mysqli_fetch_assoc($sqlinquiry))
            {
		?>
	    <tr>
	      <td>INQ-<?php echo $rows['id']?></td>
	      <td class="name"><?php echo $rows['customername']?></td>
	      <td><center><?php echo $rows['messagestatus']?></center></td>
	      <td style="float: left;" class="action">
		  			<a href="?ID=<?php echo $rows['id']?>"><button id="view_btn" class="btn_style"><img src="img/view.png" style="height: 15px; width: 15px;"></button></a>

					<div id="view_modal" class="modal">
					<div class="modal-content">
						<span class="close"></span>
						<?php
						if(isset($_GET['ID'])){
							$inquiryid = $_GET['ID'];
							$sqlinqview = mysqli_query($conn,"SELECT * FROM inquirytable WHERE id = $inquiryid");
								while($rows=mysqli_fetch_assoc($sqlinqview)){
						?>
							<h4>View Inquiry</h4>
							<hr>
							<label>Sender Name:</label><h5><?php echo $rows['customername'] ?></h5>
							<label>Sender Email:</label><h5><?php echo $rows['customeremail'] ?></h5>
							<label>Subject:</label><h5><?php echo $rows['customersubject'] ?></h5>
							<label>Date:</label><h5><?php echo $rows['messagedate'] ?></h5>
							<label>Message:</label><h5 style="line-height: 2;"><?php echo $rows['customermessage'] ?></h5>
							<hr>
							<!-- <span><center><button class="btn_style2">CLOSE</button></center></span>	 -->
						<?php
							}
						}
						?>
					</div>
					</div>

					<a href="?Reply=<?php echo $rows['id']?>"><button id="reply_btn" class="btn_style"><img src="img/reply.png" style="height: 15px; width: 15px;"></button></a>
			<div id="reply_modal" class="modal">
				<div class="modal-content">
					<span class="close">&times;</span>
					    <h4>Reply</h4>
					    <hr>
						<?php
						if(isset($_GET['Reply'])){
							$inquiryid = $_GET['Reply'];
							$sqlinqview = mysqli_query($conn,"SELECT * FROM inquirytable WHERE id = $inquiryid");
								while($rows=mysqli_fetch_assoc($sqlinqview)){
						?>
						    <form class="w3-container">
						      <p><label><b>To:</b></label>&nbsp;<?php echo $rows['customeremail'] ?></p>
						      
						      <p>     
						      <label><b>Message:</b></label></p>
						      <textarea style="height: 200px; resize: none;"></textarea>


						      	<br>
						      	<br>
						    
						      	<center>
						      	<input type='submit' name='logo' value='Cancel' class="btn_style2">
						        <input type='submit' name='logo' value='Reply' class="btn_style2">

						   		 </center>	
						    </form>
					<?php
							}
						}
					?>
				</div>
			</div>


					<button id="edit_btn" class="btn_style"><img src="img/delete.png" style="height: 15px; width: 15px;"></button>
					
					</div>

	      </td>
	    </tr>
		<?php
			}
		?>
	  </table>
	</center>
	</div>
	</div>

</body>

<!-- scripts -->
<?php
echo "<script> var view_modal = document.getElementById('view_modal'); </script>";
echo "<script> var reply_modal = document.getElementById('reply_modal'); </script>";
	if(isset($_GET['ID'])){
		$idd = $_GET['ID'];
		echo "<script> view_modal.style.display = 'block' </script>";
		$result = mysqli_query($conn,"UPDATE inquirytable SET messagestatus = 'Read' WHERE id = $idd")
            or die ("failed to query database". mysqli_error());
	}
	if(isset($_GET['Reply'])){
		echo "<script> reply_modal.style.display = 'block' </script>";
	}
?>

<!-- Script for closing the modal -->
<script>
	// Get the <span> element that closes the modal
	var view_span = document.getElementsByClassName("close")[0];
	var reply_span = document.getElementsByClassName("close")[1];

	// When the user clicks on <span> (x), close the modal

	view_span.onclick = function() {
		view_modal.style.display = "none";

	}
	reply_span.onclick = function() {
		reply_modal.style.display = "none";

	}
	
	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
			
		if (event.target == view_modal) {
		view_modal.style.display = "none";
		}

		if (event.target == reply_modal) {
		reply_modal.style.display = "none";
		}
	}
</script>
</html>
