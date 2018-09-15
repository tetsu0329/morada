<?php 
	include ('bypass.php');
	include ('navigation.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Customization</title>
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

.w3-modal-content{
  padding:3% !important;
}

.rightreport{
  padding: 1%;
}

.imgreport{
  padding: 5%;
  border: 1px solid black;
  max-width: 300px;
  max-height: 300px;
}

.rightreport{
  font-family: 'Century Gothic';
}
.w3-modal-content{
  height: auto;
}

.hr{
  height: 1px;
  background: black;
}

.categoryselect{
  width:40% !important;
  float: right;
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

  .categoryselect{
  width: 100% !important;
  float: right;
}
	}

  @media only screen and (max-width: 768px) {

  .categoryselect{
  width: 50% !important;
  float: right;
}


.content_body{
  margin: 50px;
  } 
}
</style>
<body>
<div class="content">

  <div class="content_body">
  	<div style="padding-top: 5%;"></div>
    <h2>Customization</h2>
    <hr>
<br>
<center>
<select class="w3-select w3-border categoryselect" name="option2" onchange="myFunction()" type="text" id="dynamic_select">
    <option value="" disabled selected placeholder>Product Classification</option>
    <option value="?Classification=Chair">Chair</option>
	<option value="?Classification=Cabinet">Cabinet</option>
	<option value="?Classification=Table">Table</option>
	<option value="?Classification=Decoration">Decoration</option>
</select>
<br><br>
<div class="w3-responsive">
  <table>
            <tr>
              <th>Customization ID</th>
              <th class="name">Customization Name</th>
              <th><center>ACTIONS</center></th>

            </tr>
                
            <?php
                if(isset($_GET['Classification'])){
                    $id = $_GET['Classification'];
                    $sqlcustomizationcount = mysqli_query($conn,"SELECT * FROM customizationtbl WHERE classification = '$id'");
                    while($rows=mysqli_fetch_assoc($sqlcustomizationcount))
	                {   
                    ?>
                    <tr>
                        <td><center><?php echo $rows['customizationid']; ?></center></td>
                        <td><?php echo $rows['customizationname']; ?></td>
                        <td><center><a href="?Classification=<?php echo $rows['classification']; ?>&ID=<?php echo $rows['customizationid'] ?>"><button class="btn_style"><img src="img/view.png" style="height: 15px; width: 15px;"></button></a></center></td>
                    </tr>
                    <?php
                }

            ?>

           <?php
                }
                else{
                    
                }
           ?>
          </table>
        </div>  
      </center>
   </div>
  </div>
</body>
</html>
<script>
	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
			
			if (event.target == view_modal) {
			view_modal.style.display = "none";
			}
		}
        $(function() {
  // bind change event to select
  $('#dynamic_select').on('change', function() {
    var url = $(this).val(); // get selected value
    if (url) { // require a URL
      window.location = url; // redirect
    }
    return false;
  });
});
</script>