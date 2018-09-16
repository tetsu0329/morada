<?php 
	include ('bypass.php');
	include ('navigation.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Customization</title>
</head>

<!-- <style type="text/css">
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

    .addcustom{
        float: left;
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
</style>  -->

<style type="text/css">
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

/*  tr:nth-child(odd){background-color: #f1f3f5;
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

    input[type=text], input[type=password], select, textarea {
    width: 100%;
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

.w3-modal-content{
  padding:3% !important;
}

/*MOBILE RESPONSIVE*/
    @media screen and (max-width: 600px) {
  .content_body{
    margin-left: 0px;
    margin-top: 30px;  }

        .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }       

    .modal-content{
        width: 90% !important;
    }

    .title{
        font-size: 16px;
        text-align: center;
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
      <?php
        if(isset($_GET['Classification'])){
            echo "<h2 class='title'>".$_GET['Classification']." Customization</h2>";
        }
        else{
            echo "<h2 class='title'>Choose Customization</h2>";
        }
        ?>
    
    <hr>
<br>


<center>
        
        <div class="w3-quarter"></div>
        <div class="w3-quarter"></div>
        <div class="w3-quarter">
            <select class="w3-select w3-border categoryselect" name="option2" onchange="myFunction()" type="text" id="dynamic_select">
            <option value="" disabled selected placeholder>Product Classification</option>
            <option value="?Classification=Chair">Chair</option>
            <option value="?Classification=Cabinet">Cabinet</option>
            <option value="?Classification=Table">Table</option>
            <option value="?Classification=Decoration">Decoration</option>
        </select>
        </div>
        <div class="w3-quarter">
             <?php
            if(isset($_GET['Classification'])){
        ?>
        <button onclick="document.getElementById('custom_modal').style.display='block'" class="btn_style addcustom"><img src="img/add.png" width="15px;"> Customization Selection</button>
        <?php
            }
        ?> 
        </div>

        
       
        <br><br>

        
        <br><br>
<div class="w3-responsive">
  <table>
   
            <tr>
              <th>Customization ID</th>
              <th class="name">Customization Name</th>
              <th class="name"><center>ACTIONS</center></th>

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
                        <td><center><a href="?Classification=<?php echo $rows['classification']; ?>&ID=<?php echo $rows['customizationid'] ?>"><button class="btn_style"><img src="img/view.png" width="15;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Selection & Option</button></a><br>
                        <br><a href="?Classification=<?php echo $rows['classification']; ?>&OptionNo=<?php echo $rows['customizationid'] ?>"><button onclick="document.getElementById('edit_modal').style.display='block'" class="btn_style"><img src="img/add.png" width="15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Option in Selection</button></a><br>
                        <br><a href="?Classification=<?php echo $rows['classification']; ?>&SelectionID=<?php echo $rows['customizationid'] ?>"><button onclick="document.getElementById('edit_modal').style.display='block'" class="btn_style"><img src="img/delete.png" width="15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Selection & Option</button></a><br></center></td>
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
   <div id="view_modal" class="w3-modal">
        <div class="w3-modal-content">
            <header class="w3-container"> 
                <span onclick="document.getElementById('view_modal').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            </header>
            <div class="w3-container">
            <?php
            $selectid = $_GET['ID'];
            $query =  mysqli_query($conn,"SELECT * FROM customizationtbl WHERE customizationid = '$selectid'");
            $res = mysqli_fetch_assoc($query);
            ?>
            <h4>View <?php echo $res['customizationname']; ?> Option for <?php echo $_GET['Classification'] ?></h4>
            <hr> 
            <form action="" METHOD="POST">
                <center>
            <table>
            <tr>
              <th>Option No.</th>
              <th class="name"><center>Option Name</center></th>
              <th><center>Action</center></th>
            </tr>

            <?php
                if(isset($_GET['ID'])){
                    $idd = $_GET['ID'];
                    $cnt = 1;
                    $sqlcustomizationcount = mysqli_query($conn,"SELECT * FROM customizationitemtbl WHERE customizationid = '$idd'");
                    while($rows=mysqli_fetch_assoc($sqlcustomizationcount))
	                {   
            ?>
                <tr>
                <td><?php echo $cnt; ?></td>
                <td><?php echo $rows['optionname']; ?></td>
                <td><button class="btn_style" onclick='updateURL(<?php echo $rows['optionid'] ?>)'><img src="img/delete.png" width="15px;"></button></td>
                
                </tr>
            <?php
                $cnt++;
                }
            }
            ?>
            </form>
            </table>
        </center>
            </div>
        </div>
    </div>
    <div id="add_modal" class="w3-modal">
        <div class="w3-modal-content">
            <header class="w3-container"> 
                <span onclick="document.getElementById('add_modal').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            </header>
            <div class="w3-container">
            <form action= "" method="POST">
                <?php
                $class = $_GET['Classification'];
                $option = $_GET['OptionNo'];
                ?>
                <input type="hidden" value='<?php echo $class; ?>' name='Classification'>
                <input type="hidden" value='<?php echo $option; ?>' name='Option'>
                <h4>Add Another Option</h4>
                <hr>  
                <div class="container">
                    <div class="row">
                        <div class="col-75">
                        <?php
                            $idd = $_GET['OptionNo'];
                            $sqlselectcustomization = mysqli_query($conn,"SELECT * FROM customizationtbl WHERE customizationid = '$idd'");
                            while($rows=mysqli_fetch_assoc($sqlselectcustomization))
                            {
                        ?>
                            <input type="text" id="optionname" name="optionname" placeholder="Add <?php echo $rows['customizationname']; ?> Option" >
                        <?php
                            }
                        ?>
                        </div>
                    </div>
                    <br>
                    <center>
                        <input type='submit' name='optionsave' value='SAVE' class="btn_style2">
                    </center>
                </div>
            </form>
            </div>
        </div>
    </div>

    <div id="custom_modal" class="w3-modal">
        <div class="w3-modal-content">
            <header class="w3-container"> 
                <span onclick="document.getElementById('custom_modal').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            </header>
            <div class="w3-container">
                <h4>Add Another Selection</h4>
                <hr>
                <form action="" METHOD="POST">
                    <input type="hidden" id="classiname" value='<?php echo $_GET['Classification']; ?>' name="classi">
                    <input type="text" id="selectionname" name="selectionname" placeholder="Selection Name" >
                    <br><br>
                    <center>
                        <input type='submit' name='selectionsave' value='SAVE' class="btn_style2">
                    </center>
                </form>
            </div>
        </div>
    </div>
  </div>
</body>
</html>
<?php
echo "<script> var view_modal = document.getElementById('view_modal'); </script>";
	if(isset($_GET['ID'])){
		$idd = $_GET['ID'];
		echo "<script> view_modal.style.display = 'block' </script>";
    }
    if(isset($_GET['OptionNo'])){
		$no = $_GET['OptionNo'];
		echo "<script> add_modal.style.display = 'block' </script>";
	}
	
?>
<script>
	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
			
			if (event.target == view_modal) {
			view_modal.style.display = "none";
			}
		}
    window.onclick = function(event) {
			
			if (event.target == add_modal) {
			add_modal.style.display = "none";
			}
		}
    window.onclick = function(event) {
			
			if (event.target == custom_modal) {
			custom_modal.style.display = "none";
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
<script type="text/javascript">
    function updateURL(optionID) {
      if (history.pushState) {
          var id = optionID;
          var newurl = window.location.href + '&Option='+id;
          window.history.pushState({path:newurl},'',newurl);
      }
    }
</script>
