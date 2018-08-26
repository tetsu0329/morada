<?php include ('navigation.php');?>
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
<tr>
  <td>001</td>
  <td>Lorem Ipsum Product Name</td>
  <td>1</td>
  <td>123.00</td>
  <td>123.00</td>
</tr>

<tr>
  <td>001</td>
  <td>Lorem Ipsum Product Name</td>
  <td>1</td>
  <td>123.00</td>
  <td>123.00</td>
</tr>

<tr>
  <td>001</td>
  <td>Lorem Ipsum Product Name</td>
  <td>1</td>
  <td>123.00</td>
  <td>123.00</td>
</tr>

<tr>
  <td>001</td>
  <td>Lorem Ipsum Product Name</td>
  <td>1</td>
  <td>123.00</td>
  <td>123.00</td>
</tr>

<tr>
  <td>001</td>
  <td>Lorem Ipsum Product Name</td>
  <td>1</td>
  <td>123.00</td>
  <td>123.00</td>
</tr>
<!-- total -->
<tr class="total">
  <td><b>TOTAL</b></td>
  <td></td>
  <td></td>
  <td></td>
  <td><b>123.00</b></td>
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

	  	<div class="w3-col m6 w3-center">
	  		<input id="male" class="w3-radio" type="radio" name="payment" value="paypal" checked>
    <label>Paypal</label>
    <br>
    <br>
	      <img class="w3-image" src="img/paypal.png" style="width: 300px; padding-top: 5%;">
	    </div>

	    <div class="w3-col m6 w3-center">
	  		<input id="male" class="w3-radio" type="radio" name="payment" value="cod" checked>
    <label>Cash on Delivery</label>
    <br>
    <br>
	      <img class="w3-image" src="img/cash.png" style="width: 300px; padding-top: 5%;">
	    </div>

	  </div>
	</div>
<br>
<center><p><a href="checkout.php" class="w3-button w3-brown mybtn">CONFIRM ORDER</a></p></center>
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
<?php include ('footer.php');?>