<?php 
	include ('bypass.php');
	include ('navigation.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Contact</title>
</head>
<style type="text/css">
	body{
		 margin: 0;
	}

	.content_body{
  		margin: 50px 40px 0px 350px;
	}

	.contact{
		margin: 30px 50px 0px 50px;
		width: 85%;
	}
	.contact_body{
		border-radius: 10px;
		border: 1px solid black;
		background-color: white;
		padding: 100px;
	}
	.img-thumbnail{
		margin: 1%;
		width: 40%;
		padding: 4%;
	}

	.map .img-thumbnail{
		width: 85% !important;
	}
		.btn_style{
	background-color: #8C6A48 !important;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 40%;

	}

	.btn_style:hover{
		    background-color: transparent !important;
    border: 2px solid #8C6A48;
    color: #8C6A48;

	}

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

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
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
    background-color: #f2f2f2;
    padding: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 100%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

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
    <h2>Homepage</h2>
    <hr>
     <center>  
     <h4>Logo</h4> 
			<div class="map">
			<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp"  name="logo" value="Choose Photo" accept="image/*" onchange="loadlogo(event)">
			
				<div class="img-thumbnail">
					<img src="img/dummymap.jpg" width="50%;" id='logo'>
					<input type='submit' name='logo' value='Save' class="btn_style">
				</div>
				
			</div>
			<script>
			var loadlogo = function(event) {
				var output = document.getElementById('logo');
				output.src = URL.createObjectURL(event.target.files[0]);
				};
			</script>
			
			<br>
	<h4>Slider</h4> 		
			<?php
				while($rows=mysqli_fetch_assoc($sqlselectslider))
				{
			?>
			<div class="map">
				<form action="" method="POST" enctype="multipart/form-data">
				<div class="img-thumbnail"><b>Slider 1</b><hr>
				<input type="file" class="form-control-file" name='slider1'id="exampleInputFile" aria-describedby="fileHelp" value="Choose Photo" accept="image/*" onchange="loadslider1(event)" style="float: left;"><br><br>
				<input type='submit' name='sliderbtn1' value='Save' class="btn_style">
					<img src="<?php echo $rows['sliderpicture'] ?>" width="50%;" id='slider1'>
				</form>
				</div>
				
				<script>
				var loadslider1 = function(event) {
					var output = document.getElementById('slider1');
					output.src = URL.createObjectURL(event.target.files[0]);
					};
				</script>
			</div>
			<br>
			<?php
				}
			?>
			<?php
				while($rows2=mysqli_fetch_assoc($sqlselectslider2))
				{
			?>
			<div class="map">
				<div class="img-thumbnail"><b>Slider 2</b><hr>
				<form action="" method="POST" enctype="multipart/form-data">
				<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp"  name="slider2" value="Choose Photo" accept="image/*" onchange="loadslider2(event)" style="float: left;"><br><br>
				<input type='submit' name='sliderbtn2' value='Save'  class="btn_style">
				<img src="<?php echo $rows2['sliderpicture'] ?>" width="50%;" id='slider2'>
				</form>
				</div>
				<script>
				var loadslider2 = function(event) {
					var output = document.getElementById('slider2');
					output.src = URL.createObjectURL(event.target.files[0]);
					};
				</script>
			</div>
			<?php
				}
			?>
			<?php
				while($rows3=mysqli_fetch_assoc($sqlselectslider3))
				{
			?>
			<div class="map">
				<div class="img-thumbnail"><b>Slider 3</b><hr>
				<form action="" method="POST" enctype="multipart/form-data">
				<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp"  name="slider3" value="Choose Photo" accept="image/*" onchange="loadslider3(event)" style="float: left;"><br><br>
				<input type='submit' name='sliderbtn3' value='Save'  class="btn_style">
				<img src="<?php echo $rows3['sliderpicture'] ?>" width="50%;" id='slider3'>
				</form>
				</div>
				<script>
				var loadslider3 = function(event) {
					var output = document.getElementById('slider3');
					output.src = URL.createObjectURL(event.target.files[0]);
					};
				</script>
			</div>
			<?php
				}
			?>
			<br>
  		</center>


 </div>
    
</div>
</body>
</html>