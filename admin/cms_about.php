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
		    background-color: transparent !important;
    border: 2px solid #8C6A48;
    color: #8C6A48;

	}
	.fr-toolbar, .fr-desktop, .fr-top, .fr-basic, .fr-sticky-off{
		z-index: 0;
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

	@media screen and (max-width: 600px) {
  .content_body{
    margin-left: 50px;
    margin-top: 30px;  }

        .btn_style {
    	margin-top: 2% !important;
    	margin-bottom: 2% !important;
    	width: 100%;
    }

    .headtitle{
		width: 100%;
		margin-top: 10% !important;
		background:  #e7d5d0;
		padding: 2%;
		border: 2px solid #8C6A48;
	}

	.about{
		width: 100%;
		margin: 0;
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
    <h2 class="title">About Us</h2>
    <hr>
    <br>
    <center>
    	<div><b class="title headtitle">Our Story</b></div>
    	<br>
    	<div class="about">
			<div class="about_body">
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
		<br>
		 	<div class="about">
		 		<div><b class="title headtitle">Mission</b></div>
				<br><br>
			<div class="about_body">
				

			<form action='' method='POST'>
				<textarea class="form-control p-input" id="exampleTextarea" rows="20" name="aboutmission" ><?php echo $aboutrow['mission'];?></textarea> 
                   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
                   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
                   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
 
				<!-- Include Editor JS files. -->
					<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.1/js/froala_editor.pkgd.min.js"></script>
			
				<!-- Initialize the editor. -->
					<script> $(function() { $('textarea').froalaEditor() }); </script>

					<br><br>
		<input type= 'submit' name='updtmissionbtn' value= 'UPDATE' class="btn_style">
			</div>
		</div>
		
		</form>
			<br>
		 	<div class="about">
				<div><b class="title headtitle">Vision</b></div>
				<br><br>
			<div class="about_body">
			<form action='' method='POST'>
				<textarea class="form-control p-input" id="exampleTextarea" rows="20" name="aboutvision" ><?php echo $aboutrow['vision'];?></textarea> 
                   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
                   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
                   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
 
				<!-- Include Editor JS files. -->
					<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.1/js/froala_editor.pkgd.min.js"></script>
			
				<!-- Initialize the editor. -->
					<script> $(function() { $('textarea').froalaEditor() }); </script>

					<br><br>
		<input type= 'submit' name='updtvisionbtn' value= 'UPDATE' class="btn_style">
			</div>
		</div>
		
		</form>
	</center>
</div>
<br>
<br>
</body>
</html>