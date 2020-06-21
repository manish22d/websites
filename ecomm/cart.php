<?php
require 'header.php';
?>
<script type="text/javascript">
	$(document).ready(function () {
		if (localStorage.getItem("productInCart") == null) {
			console.log("manish")
			document.getElementsByName("next")[0].style.display = "none";
			document.getElementById("cartProducts").style.display = "none";
			document.getElementsByClassName("btn btn-outline-primary btn-sm btn-block")[0].style.display = "none";
			document.getElementsByClassName("btn btn-primary btn-sm btn-block")[0].style.display = "none";
			document.getElementsByTagName("h4")[0].innerHTML = "Oops!! Your Shopping Cart is empty :(";
			document.getElementsByTagName("h4")[0].style.textAlign = "center";
			document.getElementById("showBtn").style.display = "block";
		} else {
			document.getElementById("showBtn").style.display = "none";
			displayCart();
		}


	});
</script>
<div class="bg-light py-3">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-0">
				<a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong>
			</div>
		</div>
	</div>
</div>

<div class="site-section">
	<div class="container">
		<div class="row mb-5">
			<form class="col-md-12" method="post">
				<div class="site-blocks-table">
					<div class="cartQuantity mb-5">
						<h4></h4>
					</div>
					<table class="table table-bordered products-container" id="cartProducts">
						<thead>
							<tr>
								<th class="product-thumbnail">Image</th>
								<th class="product-name">Product</th>
								<th class="product-price">Size</th>
								<th class="product-price">Color</th>
								<th class="product-quantity">Quantity</th>
								<th class="product-price">Price per Set</th>
								<th class="product_gst">GST</th>
								<th class="product-total">Total Cost(Rs.)</th>
								<th class="product-remove">Remove</th>
							</tr>
						</thead>
					</table>
				</div>
			</form>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="row mb-5">
					<div class="col-md-6 mb-3 mb-md-0">
						<a href="shop.php">
							<button class="btn btn-primary btn-sm btn-block">Add More
								Products</button>
						</a>
					</div>
					<div class="col-md-6">
						<a href="shop.php">
							<button class="btn btn-outline-primary btn-sm btn-block" onclick="clearCart()">Clear
								Cart</button>
						</a>
					</div>
				</div>
			</div>

			<div class="col-md-6 pl-5">
				<div class="row justify-content-end">
					<div class="col-md-7">
						<!-- <div class="row">
							<div class="col-md-12 text-right border-bottom mb-5">
								<h3 class="text-black h4 text-uppercase">Cart Totals</h3>
							</div>
						</div> -->
						<div class="displayCartPrice"></div>

						<div class="row">
							<div class="col-md-12">
								<button class="btn btn-primary btn-lg btn-block" name="next"
									onclick="window.location='place_order.php'">Proceed To Next</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4" id="showBtn" style="display: none">
				<a href="shop.php">
					<button class="btn btn-primary btn-sm btn-block">Continue shopping</button>
				</a>
			</div>
			<div class="col-md-4"></div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- footer -->
<!-- <script type="text/javascript">
	function saveInCookie() {
		console.log("cookie saved");
		console.log(JSON.stringify(localStorage.getItem('productInCart')));

		document.cookie = escape("OrderInCart") + "=" +
			escape(JSON.stringify(localStorage.getItem('productInCart'))) + " ; path=/";
	}
	// createCookie("OrderInCart", JSON.stringify(localStorage.getItem('productInCart')) , "10"); 
</script> -->
<?php
include ("footer.php");

?>