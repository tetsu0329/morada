<?php 
	include ('bypass.php');
	include ('navigation.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Archive | Products</title>
</head>
<style type="text/css">
	body{
		 margin: 0;
	}

	.content_body{
  		margin: 50px 40px 0px 350px;
	}

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
	margin-left: 93%;
}

/*forms*/
	* {
    box-sizing: border-box;
}

	input[type=text], select, textarea {
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
}

textarea {
    box-sizing: border-box;
    border-radius: 4px;
    font-size: 16px;
    resize: none;
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

  <div class="content_body" >
  	<div style="padding-top: 5%;"></div>
    <h2 class="title">Archive | Products </h2>
    <hr>
    <div style="overflow-x:auto;">
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
				<button id="view_btn" class="btn_style">Delete</button>
				<button id="view_btn" class="btn_style">Restore</button>

	      	
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