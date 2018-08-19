<?php include ('navigation.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
</head>
<style type="text/css">
	/*products*/
	.boxprod{
		padding: 10%;
	}
	.boxprod:hover{
		background: #f8f9fa;

	}

	.boxlink a{
		text-decoration: none;
	}

	.pager {
  margin-bottom: 10px;
  margin-top: 10px;
}
.page-numbers {
  border: 1px solid #CCCCCC;
  color: #808185;
  display: block;
  float: left;
  font-family: Trebuchet MS, Helvetica, sans-serif;
  font-size: 130%;
  margin-right: 3px;
  padding: 4px 4px 3px;
  text-decoration: none;
}
.page-numbers.desc {
  border: medium none;
}
.page-numbers:hover {
  text-decoration: none;
}
.pager a {
  color: #808185;
  cursor: pointer;
  text-decoration: none;
  outline: none;
}
.pager a:hover {
  text-decoration: underline;
}
.pager a:visited {
  color: #808185;
  outline: none;
}
.page-numbers.next,
.page-numbers.prev {
  border: 1px solid #CCCCCC;
}
.page-numbers.current {
  background-color: #808185;
  border: 1px solid #808185;
  color: #FFFFFF;
  font-weight: bold;
}
.page-numbers.dots {
  border: 1px solid #FFFFFF;
}
</style> 	
<body>

	<!-- our products -->
	  	<div class="w3-container w3-light-grey w3-row w3-center" style="padding: 100px 0px 0px 0px;">
    <span class="w3-xxlarge">Our Products</p>
  	</div>
	<div class="w3-container" style="padding:10px 50px 50px 50px;">


	  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
	    <div class="w3-col l3 m6 w3-margin-bottom boxlink">
		    <a href="product_view.php"><div class="w3-card boxprod">
		      <img src="img/logo.png" alt="John" style="width:100%">
		        <div class="w3-container">
		          <h3>Lorem Product 1</h3>
		          <h6>123.00</h6>
		          <p class="w3-opacity" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
		        </div>
		      </div>
		  	</a>
	    </div>
	   
	    <div class="w3-col l3 m6 w3-margin-bottom boxlink">
		    <a href="#"><div class="w3-card boxprod">
		      <img src="img/logo.png" alt="John" style="width:100%">
		        <div class="w3-container">
		          <h3>Lorem Product 2</h3>
		          <h6>123.00</h6>
		          <p class="w3-opacity" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
		        </div>
		      </div>
		  	</a>
	    </div>

	    <div class="w3-col l3 m6 w3-margin-bottom boxlink">
		    <a href="#"><div class="w3-card boxprod">
		      <img src="img/logo.png" alt="John" style="width:100%">
		        <div class="w3-container">
		          <h3>Lorem Product 3</h3>
		          <h6>123.00</h6>
		          <p class="w3-opacity" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
		        </div>
		      </div>
		  	</a>
	    </div>

	    <div class="w3-col l3 m6 w3-margin-bottom boxlink">
		    <a href="#"><div class="w3-card boxprod">
		      <img src="img/logo.png" alt="John" style="width:100%">
		        <div class="w3-container">
		          <h3>Lorem Product 4</h3>
		          <h6>123.00</h6>
		          <p class="w3-opacity" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
		        </div>
		      </div>
		  	</a>
	    </div>

	    <div class="w3-col l3 m6 w3-margin-bottom boxlink">
		    <a href="#"><div class="w3-card boxprod">
		      <img src="img/logo.png" alt="John" style="width:100%">
		        <div class="w3-container">
		          <h3>Lorem Product 5</h3>
		          <h6>123.00</h6>
		          <p class="w3-opacity" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
		        </div>
		      </div>
		  	</a>
	    </div>

	    <div class="w3-col l3 m6 w3-margin-bottom boxlink">
		    <a href="#"><div class="w3-card boxprod">
		      <img src="img/logo.png" alt="John" style="width:100%">
		        <div class="w3-container">
		          <h3>Lorem Product 6</h3>
		          <h6>123.00</h6>
		          <p class="w3-opacity" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
		        </div>
		      </div>
		  	</a>
	    </div>

	    <div class="w3-col l3 m6 w3-margin-bottom boxlink">
		    <a href="#"><div class="w3-card boxprod">
		      <img src="img/logo.png" alt="John" style="width:100%">
		        <div class="w3-container">
		          <h3>Lorem Product 7</h3>
		          <h6>123.00</h6>
		          <p class="w3-opacity" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
		        </div>
		      </div>
		  	</a>
	    </div>

	    
	</div>
</div>
	<!-- end * our products -->


<div class="pager" id="Pagination">
  <!-- the container for your first pagination area -->
</div>
<script>
$(document).ready(function() {
  $(".pager").pagination(300, {
    callback: pagecallback,
    current_page: 0,
    items_per_page: 5,
    num_display_entries: 5,
    next_text: 'Next',
    prev_text: 'Prev',
    num_edge_entries: 1
  });
});
	</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>
<?php include ('footer.php');?>