<?php 
  include ('navigation.php');
  include ('connection/frontconn.php');
	include ('connection/frontconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Gallery</title>
</head>
<style type="text/css">
	/*products*/
	.boxprod{
		padding: 10%;
	}
	.boxprod:hover{
		background: #f1f1f1;

	}

	.boxlink a{
		text-decoration: none;
	}

	.galleryimg{
		margin: 10px;
	}
	.galleryview{
		background: rgba(0,0,0,0.5); !important;
	}
	.viewclose{
		background: #ceaea5 !important;
	}
	.viewclose:hover{
		background: #ceaea5 !important;
	}
</style> 	
<body>

	<!-- our products -->
	<div class="w3-container w3-light-grey w3-row w3-center" style="padding: 100px 0px 0px 0px;">
    <span class="w3-xxlarge">Gallery</p>
  	</div>

  	<div class="w3-container" style="padding:20px 16px">


  <div class="w3-row-padding" style="margin-top:64px">
  <?php
		while($rows=mysqli_fetch_assoc($sqlselectgallery))
		{
	?>
    <div class="w3-col l3 m6">
      <img src="<?php echo substr($rows['photopath'],3) ?>" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity galleryimg" alt="">
    </div>
  <?php
    }
  ?>
  </div>
</div>
	<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal galleryview" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-padding-large w3-display-topright viewclose" title="Close Modal Image">×<h6>CLOSE</h6></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>
</body>
</html>
<?php include ('footer.php');?>