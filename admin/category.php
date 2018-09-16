<?php 
	include ('bypass.php');
	include ('navigation.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>CMS Category</title>
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
    <h2 class="title">Category</h2>
    <hr>
<br>
<div class="top_btns">
<button onclick="document.getElementById('edit_modal').style.display='block'" class="btn_style"><img src="img/add.png" style="height: 15px; width: 15px;"></button>
                      <div id="edit_modal" class="w3-modal">
                        <div class="w3-modal-content">
                          <header class="w3-container"> 
                            <span onclick="document.getElementById('edit_modal').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                          </header>
                          
                          <div class="w3-container">
                          <form action= "" method="POST">
                         <h4>Add Category</h4>
                          <hr>  
                          <div class="container">
                          <div class="row">
                          <div class="col-75">
                            <input type="text" id="prodname" name="catname" placeholder="Category Name">
                          </div>
                           </div>
                           <br>
                           <center>
                             <input type='submit' name='categsave' value='SAVE' class="btn_style2">&nbsp;<input type='submit' name='categancel' value='CANCEL' class="btn_style2" onclick="document.getElementById('edit_modal').style.display='none'">
                           </center>
                            </form>
                          </div>
                      
              

</div>
                      </div>
                  </div>
    </div> <!-- topbtn -->
    <br>
<center>
  <table>
            <tr>
              <th>Category ID</th>
              <th>Category Name</th>
              <th><center>Added By</center></th>
              <th><center>Timestamp</center></th>
              <th><center>ACTIONS</center></th>

            </tr>
                
            <?php
                while($rows=mysqli_fetch_assoc($sqlcategorycount))
	            {
            ?>
            <tr>
                <td><center><?php echo $rows['categoryid']; ?></center></td>
                <td><center><?php echo $rows['categoryname']; ?></center></td>
                <td><center><?php echo $rows['addedby']; ?></center></td>
                
                <td><center><?php echo $rows['timestamp']; ?></center></td>
                 <td style="float: left;">
                    <a href="?CategoryID=<?php echo $rows['categoryid'] ?>"><button class="btn_style"><img src="img/delete.png" style="height: 15px; width: 15px;"></button></a>
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
</html>