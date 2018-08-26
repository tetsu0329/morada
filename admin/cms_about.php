<?php
	include ('bypass.php');
	include ('navigation.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit About</title>
	<!-- Include external CSS. -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
 
    <!-- Include Editor style. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.1/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.1/css/froala_style.min.css" rel="stylesheet" type="text/css" />
</head>
<style type="text/css">

	body{
		 margin: 0;
	}

	.content_body{
  		margin: 50px 40px 0px 350px;
	}

	.about{
		margin: 30px 50px 0px 50px;
		width: 85%;
	}
	.about_body{
		border-radius: 10px;
		border: 1px solid black;
		background-color: white;
		padding:30px;
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
		    background-color: transparent;
    border: 1px solid #8C6A48;
    color: #8C6A48;

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
    <h2>About Us</h2>
    <hr>
    <center>
    	<div class="about">
			<div class="about_body">
				<div><b>Our Story</b></div>
				<hr>
				<br>
			<form action='' method='POST'>
				<textarea class="form-control p-input" id="exampleTextarea" rows="20" name="aboutcontent" ><?php echo $aboutrow['content'];?></textarea> 
                   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
                   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
                   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
 
				<!-- Include Editor JS files. -->
					<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.1/js/froala_editor.pkgd.min.js"></script>
			
				<!-- Initialize the editor. -->
					<script> $(function() { $('textarea').froalaEditor() }); </script>

					<br><br>
		<input type= 'submit' name='updtaboutbtn' value= 'UPDATE' class="btn_style">
			</div>
		</div>
		
		</form>

		 	<div class="about">
			<div class="about_body">
				<div><b>Mission</b></div>
				<hr>
				<br>
			<form action='' method='POST'>
				<textarea class="form-control p-input" id="exampleTextarea" rows="20" name="aboutcontent" ><?php echo $aboutrow['content'];?></textarea> 
                   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
                   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
                   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
 
				<!-- Include Editor JS files. -->
					<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.1/js/froala_editor.pkgd.min.js"></script>
			
				<!-- Initialize the editor. -->
					<script> $(function() { $('textarea').froalaEditor() }); </script>

					<br><br>
		<input type= 'submit' name='updtaboutbtn' value= 'UPDATE' class="btn_style">
			</div>
		</div>
		
		</form>

		 	<div class="about">
			<div class="about_body">
				<div><b>Vision</b></div>
				<hr>
				<br>
			<form action='' method='POST'>
				<textarea class="form-control p-input" id="exampleTextarea" rows="20" name="aboutcontent" ><?php echo $aboutrow['content'];?></textarea> 
                   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
                   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
                   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
 
				<!-- Include Editor JS files. -->
					<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.1/js/froala_editor.pkgd.min.js"></script>
			
				<!-- Initialize the editor. -->
					<script> $(function() { $('textarea').froalaEditor() }); </script>

					<br><br>
		<input type= 'submit' name='updtaboutbtn' value= 'UPDATE' class="btn_style">
			</div>
		</div>
		
		</form>
	</center>
</div>
<br>
<br>
</body>
</html>