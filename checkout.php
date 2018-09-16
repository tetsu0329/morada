<?php
include ('navigation.php');
include ('connection/frontconn.php');
include ('connection/frontconnection.php');
if(isset($_GET['ProductID']))
  {
		echo "<script>alert('Product Added to Cart')</script>";
    $prodID= $_GET['ProductID'];
    if(!empty($_SESSION['product']))
    {
      $rowcounttt = count($_SESSION['product']);
      $query = mysqli_query($conn,"SELECT * FROM producttbl where id='$prodID'");
      while ($queryhold= mysqli_fetch_array($query)){
					$product[1] = $queryhold['id'];
          $product[2] = $queryhold['productcode'];
          $product[3] = $queryhold['productname'];
          $product[4] = $_POST['quantity'];
					$product[5] = $queryhold['itemprice'];
					$product[6] = $_POST['option1'];
					$product[7] = $_POST['option2'];
					$product[8] = $_POST['option3'];
					$product[9] = $_POST['option4'];
					$product[10] = $_POST['option5'];
					$product[11] = $_POST['option6'];
					$product[12] = $_POST['option7'];
					$product[13] = $_POST['option8'];
					$product[14] = $_POST['option9'];
					$product[15] = $_POST['option10'];
					$product[16] = $_POST['option11'];
      }
      array_push($_SESSION['product'], $product);
      echo "<script>window.location = 'checkout.php'</script>";
    }
    if(empty($_SESSION['product']))
    {
      $query = mysqli_query($conn,"SELECT * FROM producttbl where id='$prodID'");
      while ($queryhold= mysqli_fetch_array($query)){
					$product[1] = $queryhold['id'];
          $product[2] = $queryhold['productcode'];
          $product[3] = $queryhold['productname'];
					$product[4] = $_POST['quantity'];
					$product[5] = $queryhold['itemprice'];
					$product[6] = $_POST['option1'];
					$product[7] = $_POST['option2'];
					$product[8] = $_POST['option3'];
					$product[9] = $_POST['option4'];
					$product[10] = $_POST['option5'];
					$product[11] = $_POST['option6'];
					$product[12] = $_POST['option7'];
					$product[13] = $_POST['option8'];
					$product[14] = $_POST['option9'];
					$product[15] = $_POST['option10'];
					$product[16] = $_POST['option11'];
      }
      $_SESSION['product']=array($product);
      echo "<script>window.location = 'checkout.php'</script>";
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Checkout</title>
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

		.mybtn{
		border-radius: 5px !important;
		border: none;
	}
	.mybtn:hover{
		background: transparent !important;
		border: 2px solid #8C6A48;
		color: #8C6A48 !important;
	}

	th{
		background: #8C6A48 !important;
		color: #fff !important;
	}
	.total{
		background: #8C6A48 !important;
		color: #fff !important;
	}
</style> 	
<body>
	<div class="w3-container w3-light-grey w3-row w3-center" style="padding: 100px 0px 0px 0px;">
    <span class="w3-xxlarge">Checkout</p>
  	</div>
  	<br>
  	 <div class="w3-center">
    	<h6><b>Please check your orders below.</b></h6>
  </div>
  
  	<div class="w3-container">
<div class="w3-responsive w3-card-4">
<table class="w3-table w3-striped w3-bordered w3-hoverable">
<thead>
<tr class="w3-theme">
  <th>Product Code</th>
  <th>Product Name</th>
  <th>Quantity</th>
  <th>Price</th>
  <th>Subtotal</th>
</tr>
</thead>
<tbody>
<?php
  if(!empty($_SESSION['product'])){
		$total = 0;
  $rowcount= count($_SESSION['product']);
  for($row=0; $row<$rowcount; $row++)
    {
?>
<tr>
  <td><?php echo($_SESSION['product'][$row][2]) ?></td>
  <td><?php echo($_SESSION['product'][$row][3]) ?></td>
  <td><?php echo($_SESSION['product'][$row][4]) ?></td>
  <td>PHP <?php echo($_SESSION['product'][$row][5]) ?></td>
	<?php
	$subtot = $_SESSION['product'][$row][4] * $_SESSION['product'][$row][5];

	$total += $subtot;
	?>
  <td>PHP <?php echo $subtot; ?></td>
</tr>

<?php
	}
}
else{
	//no items in cart
}
?>
<!-- total -->
<tr class="total">
  <td><b>TOTAL</b></td>
  <td></td>
  <td></td>
  <td></td>
	<td><b><?php if(!empty($_SESSION['product'])){ echo "PHP ". $total; }
	else{
		echo "No items in the cart";
	}?></b></td>
</tr>
<!-- total -->


</tbody>
</table>
</div>
<br>
<br>
</div>

	<div class="w3-container w3-light-grey" style="padding: 50px 50px 50px 50px;">

 <div class="w3-center">
      <h6><b>Please choose your payment option.</b></h6>
  </div>
<br>
	  <div class="w3-row-padding">
			<form method="POST" action="">
	  	<div class="w3-col m6 w3-center">
	  		<input id="male" class="w3-radio" type="radio" name="payment" value="paypal">
    <label>Paypal</label>
    <br>
    <br>
	      <img class="w3-image" src="img/paypal.png" style="width: 300px; padding-top: 5%;">
	    </div>

	    <div class="w3-col m6 w3-center">
	  		<input id="male" class="w3-radio" type="radio" name="payment" value="cod">
    <label>Cash on Delivery</label>
    <br>
    <br>
	      <img class="w3-image" src="img/cash.png" style="width: 300px; padding-top: 5%;">
	    </div>

	  </div>

	</div>
<br>
<center><p><input type="submit" value="CONFIRM ORDER" name="submitorder"></p></center>
</form>
<br>
<!-- <div style="margin-bottom: 5.5%;"></div> -->
<!-- scripts -->
	<script type="text/javascript">
	
    var count = 0;
    var countEl = document.getElementById("count");
    function plus(){
        count++;
        countEl.value = count;
    }
    function minus(){
      if (count >0 ) {
        count--;
        countEl.value = count;
      }  
    }

</script>
<!-- scripts -->
</body>
</html>
<?php
if(isset($_POST['submitorder'])){
	if($_POST['payment'] == "paypal"){
		echo "<script>window.location.replace('payment/index.php?process=1')</script>";
	}
	if($_POST['payment'] == "cod"){
		$_SESSION['paymentAck'] = 'BANK_DEPOSIT';
		echo "<script>window.location.replace('payment/bank.php')</script>";
	}
}
?>
<?php include ('footer.php');?>