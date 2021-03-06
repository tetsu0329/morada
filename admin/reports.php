<?php 
	include ('bypass.php');
	include ('navigation.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Reports</title>
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
  border: 1px solid #8C6A48;
  max-width: 300px;
  max-height: 300px;
  border-radius: 10px !important;
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
</style>
<body>
<div class="content">

  <div class="content_body">
  	<div style="padding-top: 5%;"></div>
    <h2 class="title">Reports</h2>
    <hr>
<br>
<center>
  <table>
            <tr>
              <th>Transaction Number</th>
              <th>Date of Transaction</th>
              <th><center>Payment Method</center></th>
              <th><center>Order Amount</center></th>
              <th><center>Order By</center></th>
              <th><center>Order Status</center></th>
              <th><center>ACTIONS</center></th>

            </tr>
                
            <?php
                while($rows=mysqli_fetch_assoc($sqlordercount))
	            {
            ?>
            <tr>
                <td><center><?php echo $rows['transactionID']; ?></center></td>
                <td><center><?php echo $rows['timestamp']; ?></center></td>
                <td><center><?php echo $rows['paymentMethod']; ?></center></td>
                <td><center><?php echo "PHP ".$rows['totalAmount']; ?></center></td>
                <td><center>
                    <?php 
                        $id = $rows['userID'];
                        $sqlusercount = mysqli_query($conn,"SELECT * FROM usertable WHERE id = $id");
                        $sqluser = mysqli_fetch_assoc($sqlusercount);
                        echo $sqluser['fname']." ".$sqluser['lname']; 
                    ?>
                </center></td>
                <td><center><?php echo $rows['transactionStatus']; ?></center></td>
                 <td style="float: left;">
                    <a href="?TransactionCode=<?php echo $rows['transactionID'] ?>"><button class="btn_style"><img src="img/view.png" style="height: 15px; width: 15px;"></button></a>
                      
                    <div id="id01" class="w3-modal">
                        <div class="w3-modal-content">
                          <header class="w3-container"> 
                            <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                          </header>
                          
                          <div class="w3-container">
                            <h4>View Reports</h4>
                            <hr>
                            <?php
                                $id = $_GET['TransactionCode'];
                                $sqlselectitem = mysqli_query($conn,"SELECT * FROM itemtransactiontable WHERE transactionID = $id");
                                while($rows=mysqli_fetch_assoc($sqlselectitem))
                                {
                            ?>
                            <div class="w3-half">
                                <?php
                                $prodid = $rows['productID'];
                                $sqlselectprod = mysqli_query($conn,"SELECT * FROM producttbl WHERE id = $prodid");
                                $rows2=mysqli_fetch_assoc($sqlselectprod);
                                ?>
                                <center><h3><?php echo $rows2['productname'] ?></h3></center>
                                <br>
                              <center><img src="<?php echo $rows2['productimage'] ?>" class="imgreport"></center>
                            </div>

                            <div class="w3-half rightreport">
                              <h5 style="font-weight: 600;">Price</h5>
                              <h6 style="line-height: 2;">PHP <?php echo $rows['price'] ?></h6> 
                              <h5 style="font-weight: 600;">No. Items</h5>
                              <h6 style="line-height: 2;"><?php echo $rows['qty'] ?></h6>
                              <h5 style="font-weight: 600;">Customization</h5> 
                              <?php
                                if(!empty($rows['option1'])){
                                    echo $rows['option1'];
                                    echo "<br>";
                                }
                                if(!empty($rows['option2'])){
                                    echo $rows['option2'];
                                    echo "<br>";
                                }
                                if(!empty($rows['option3'])){
                                    echo $rows['option3'];
                                    echo "<br>";
                                }
                                if(!empty($rows['option4'])){
                                    echo $rows['option4'];
                                    echo "<br>";
                                }
                                if(!empty($rows['option5'])){
                                    echo $rows['option5'];
                                    echo "<br>";
                                }
                                if(!empty($rows['option6'])){
                                    echo $rows['option6'];
                                    echo "<br>";
                                }
                                if(!empty($rows['option7'])){
                                    echo $rows['option7'];
                                    echo "<br>";
                                }
                                if(!empty($rows['option8'])){
                                    echo $rows['option8'];
                                    echo "<br>";
                                }
                                if(!empty($rows['option9'])){
                                    echo $rows['option9'];
                                    echo "<br>";
                                }
                                if(!empty($rows['option10'])){
                                    echo $rows['option10'];
                                    echo "<br>";
                                }
                                if(empty($rows['option1']) && empty($rows['option2']) && empty($rows['option3']) && empty($rows['option4']) &&
                                empty($rows['option5']) && empty($rows['option6']) && empty($rows['option7']) && empty($rows['option8']) &&
                                empty($rows['option9']) && empty($rows['option10'])){
                                    echo "No Customization Request";
                                }
                              ?>
                              <h5 style="font-weight: 600;">Additional Customization</h5>
                              <h6 style="line-height: 2;">
                              <?php 
                                if(!empty($rows['lastoption'])){
                                    echo $rows['lastoption'];
                                }
                                else{
                                    echo 'No Additional Customization Request';
                                }
                                ?>
                              </h6>
                              <h5 style="font-weight: 600;">Subtotal</h5>
                              <h6 style="line-height: 2;">PHP <?php echo $subtot = $rows['qty'] * $rows['price']; ?></h6> 
                            </div>
                          
                            <div class="w3-container"><hr></div>
                            <?php
                                }
                            ?>
                            <!-- <div class="w3-half">
                              <center><img src="../img/freedel.png " class="imgreport"></center>
                            </div>

                            <div class="w3-half rightreport">
                                <h5 style="font-weight: 600;">Price</h5>
                                <h6 style="line-height: 2;">Php 123.00</h6> 

                                <h5 style="font-weight: 600;">Size</h5>
                                <h6 style="line-height: 2;">Lorem Size</h6>

                                <h5 style="font-weight: 600;">Wood Type</h5>
                                <h6 style="line-height: 2;">Lorem wood</h6>
                        
                                <h5 style="font-weight: 600;">Color</h5>
                                <h6 style="line-height: 2;">Lorem Color</h6>

                                <h5 style="font-weight: 600;">Edge</h5>
                                <h6 style="line-height: 2;">Lorem Edge</h6>

                                <h5 style="font-weight: 600;">Additional Customization</h5>
                                <h6 style="line-height: 2;">Lorem ipsum dolor sit emet.</h6>
                            </div> -->
                          <!--   <div class="w3-container"><hr></div> -->
                          </div>
                        </div>
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
</html>
<?php
echo "<script> var view_modal = document.getElementById('id01'); </script>";
	if(isset($_GET['TransactionCode'])){
		$idd = $_GET['TransactionCode'];
		echo "<script> view_modal.style.display = 'block' </script>";
	}
	
?>
<script>
	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
			
			if (event.target == view_modal) {
			view_modal.style.display = "none";
			}
		}
</script>