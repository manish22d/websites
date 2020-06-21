<?php
require 'header.php';
require 'functions.php';
//session_start();

// echo $get_id;
if (isset($_SESSION["user_detail"])){
	$name= explode("-", $_SESSION["user_detail"])[0];
	$email =  explode("-", $_SESSION["user_detail"])[1];
	$phone =  explode("-", $_SESSION["user_detail"])[2];
	}else{
		$name="";
		$email="";
		$phone="";
	}
?>
<div class="bg-light py-3">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-0">
				<a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a href="cart.php">Cart</a> <span
					class="mx-2 mb-0">/</span> <strong class="text-black">Place Inquire</strong>
			</div>
		</div>
	</div>
</div>

<div id="confirm"></div>

<div class="site-section">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-6">
				<div class="text-center">
					<h4>
						Order Information</a>
					</h4>
				</div>
				<div class="p-3 p-lg-5">
					<table class="table site-block-order-table mb-5">
						<thead>
							<th>Product</th>
							<th>Quantity</th>
							<th>Size</th>
							<th>Color</th>
							<th>GST</th>
							<th>Price</th>
						</thead>
						<tbody class="place">

							<?php 

		echo '<script type="text/javascript">getProductsInCart();</script>';
   ?>

						</tbody>
					</table>
				</div>
			</div>
			<div class="col-md-6">
				<div class="text-center">
					<h4>
						Add Customer Details</a>
					</h4>
				</div>
				<form action="thankyou.php" method="post">
					<div class="p-3 p-lg-5">
						<div class="form-group row">
							<div class="col-md-12">
								<label for="c_name" class="text-black">Full Name <span
										class="text-danger">*</span></label> <input type="text" class="form-control"
									id="c_name" name="c_name" value="<?php echo $name ?>" required
									style="text-transform: capitalize;">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-12">
								<label for="c_email" class="text-black">Email Id</label> <input type="text"
									class="form-control" id="c_email" name="c_email" placeholder=""
									value="<?php echo $email ?>">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-12">
								<label for="c_phone" class="text-black">Mobile No<span
										class="text-danger">*</span></label> <input type="text" class="form-control"
									id="c_phone" name="c_phone" value="<?php echo $phone ?>" required>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-12">
								<label for="c_company" class="text-black">Company Name<span
										class="text-danger">*</span></label> <input type="text" class="form-control"
									id="c_company" name="c_company" value="" required>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-12">
								<label for="c_message" class="text-black">Remark </label>
								<textarea name="c_message" id="c_message" cols="30" rows="1"
									class="form-control"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8"></div>
							<div class="col-md-4">
								<div class="form-group">
									<button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Place
										Order</button>
								</div>
							</div>
						</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	console.log("cookie saved");
	console.log(JSON.stringify(localStorage.getItem('productInCart')));

	document.cookie = escape("OrderInCart") + "=" +
		escape(JSON.stringify(localStorage.getItem('productInCart'))) + " ; path=/";
</script>
<?php
require 'footer.php';
?>
