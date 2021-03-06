<?php
$host = "localhost";
$user = "root";
$password = "";
// $user = "ecomm";
// $password = "ecomm@2020";

// Create connection
$con = new mysqli($host, $user, $password, "ecomm");

// Check connection
if (! $con) {
    die("Connection failed: " . mysqli_connect_error());
	}
if (!isset($_SESSION)) {
    session_start();
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Empire Apparels Pvt. Ltd</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="js/placeOrder.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
	<link rel="shortcut icon" href="images/logo/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/logo/favicon.ico" type="image/x-icon">
</head>

<body>

<script src="js/jquery-3.3.1.min.js"></script>
<div class="site-wrap">
	<div class="site-navbar bg-white py-2">
		<div class="search-wrap">
			<div class="container"></div>
		</div>
		<div class="container">
			<div class="d-flex align-items-center justify-content-between">
				<div class="logo">
					<div class="site-logo">
						<a href="index.php" class="js-logo-clone">
							<img src="images/logo/logo.png" alt="Company Logo" class="img-fluid img-responsive">
						</a>
					</div>
				</div>
				<div class="main-nav d-none d-lg-block">
					<nav class="site-navigation text-right text-md-center" role="navigation">
						<ul class="site-menu js-clone-nav d-none d-lg-block">
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About</a></li>
					   <!-- <li><a href="shop.php">Shop</a></li> -->
							<li class="has-children"><a href="javascript:void(0)">Product</a>
							<ul class="dropdown">
								<li class="has-children"><a href="product.php?type=babasuit">BABASUIT</a>
									<ul class="dropdown">
										<?php
											$sql = "SELECT  distinct category  FROM product where collection = 'babasuit'";
											$query = mysqli_query($con, $sql);
											if (mysqli_num_rows($query) == 0)
												echo "<li>No Products Found</li>";
												while ($row = mysqli_fetch_array($query))
												{
													$category = $row['category'];
													$collection = 'babasuit';
										?>
											<li><a href="product.php?type=<?php echo $collection.'-'.$category; ?>"><?php echo $category; ?></a></li>
										<?php } ?>

									</ul>
								</li>
								<li class="has-children"><a href="product.php?type=shirt">SHIRT</a>
									<ul class="dropdown">
										<?php
											$sql = "SELECT distinct category FROM product where collection = 'shirt'";
											$query = mysqli_query($con, $sql);
											if (mysqli_num_rows($query) == 0)
												echo "<li>No Products Found</li>";
											while ($row = mysqli_fetch_array($query))
											{
											$category = $row['category'];
											$collection = 'shirt';
										?>
										<li><a href="product.php?type=<?php echo $collection.'-'.$category; ?>"><?php echo $category; ?></a>
										</li>
										<?php  }?>
									</ul>
								</li>
								<li class="has-children"><a href="product.php?type=ethnic wear">ETHNIC WEAR</a>
									<ul class="dropdown">
										<?php
											$sql = "SELECT distinct category  FROM product where collection = 'ethnic wear'";
											$query = mysqli_query($con, $sql);
											if (mysqli_num_rows($query) == 0)
												echo "<li>No Products Found</li>";
											while ($row = mysqli_fetch_array($query)) {
											$category = $row['category'];
											$collection = 'ethnic wear';
											?>
											<li><a href="product.php?type=<?php echo $collection.'-'.$category; ?>"><?php echo $category; ?></a>
											</li>
											<?php } ?>
											</ul>
										</li>
										<li class="has-children"><a href="product.php?type=tshirt">T-SHIRT</a>
									<ul class="dropdown">
										<?php
											$sql = "SELECT distinct category  FROM product where collection = 'tshirt'";
											$query = mysqli_query($con, $sql);
											if (mysqli_num_rows($query) == 0)
												echo "<li>No Products Found</li>";
											while ($row = mysqli_fetch_array($query)) {
											$category = $row['category'];
											$collection = 'tshirt';
											?>
											<li><a href="product.php?type=<?php echo $collection.'-'.$category; ?>"><?php echo $category; ?></a>
											</li>
											<?php } ?>
											</ul>
										</li>
										<li class="has-children"><a href="product.php?type=pant">PANT</a>
									<ul class="dropdown">
										<?php
											$sql = "SELECT distinct category FROM product where collection = 'pant'";
											$query = mysqli_query($con, $sql);
											if (mysqli_num_rows($query) == 0)
												echo "<li>No Products Found</li>";
											while ($row = mysqli_fetch_array($query)) {
											$category = $row['category'];
											$collection = 'pant';
											?>
											<li><a href="product.php?type=<?php echo $collection.'-'.$category; ?>"><?php echo $category; ?></a>
											</li>
											<?php } ?>
											</ul>
										</li>
										<li class="has-children"><a href="product.php?type=track pant">TRACK PANT</a>
									<ul class="dropdown">
										<?php
											$sql = "SELECT distinct category FROM product where collection = 'track pant'";
											$query = mysqli_query($con, $sql);
											if (mysqli_num_rows($query) == 0)
												echo "<li>No Products Found</li>";
											while ($row = mysqli_fetch_array($query)) {
											$category = $row['category'];
											$collection =  'track pant';
											?>
											<li><a href="product.php?type=<?php echo $collection.'-'.$category; ?>"><?php echo $category; ?></a>
											</li>
											<?php } ?>
											</ul>
										</li>
										<li class="has-children"><a href="product.php?type=capri">CAPRI</a>
									<ul class="dropdown">
										<?php
											$sql = "SELECT  distinct category FROM product where collection = 'capri'";
											$query = mysqli_query($con, $sql);
											if (mysqli_num_rows($query) == 0)
												echo "<li>No Products Found</li>";
											while ($row = mysqli_fetch_array($query)) {
											$category = $row['category'];
											$collection = 'capri';
											?>
											<li><a href="product.php?type=<?php echo $collection.'-'.$category; ?>"><?php echo $category; ?></a>
											</li>
											<?php } ?>
											</ul>
										</li>
										<li class="has-children"><a href="product.php?type=infant">INFANT</a>
									<ul class="dropdown">
										<?php
											$sql = "SELECT distinct category FROM product where collection = 'infant'";
											$query = mysqli_query($con, $sql);
											if (mysqli_num_rows($query) == 0)
												echo "<li>No Products Found</li>";
											while ($row = mysqli_fetch_array($query)) {
											$category = $row['category'];
											$collection = 'infant';
											?>
											<li><a href="product.php?type=<?php echo $collection.'-'.$category; ?>"><?php echo $category; ?></a>
											</li>
											<?php } ?>
											</ul>
										</li>
									</ul>
								</li>
								<!-- <li><a href="new_arrivals.php">New Arrivals</a></li> -->
								<li><a href="contact.php">Contact</a></li>
							</ul>
					</nav>
				</div>
				<div class="icons">
				<!-- <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a> -->
						<!-- <a href="#" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a> -->
						<?php
							if (isset($_SESSION["user_detail"])) {
								echo '<a href="user_details.php" class="icons-btn d-inline-block"> Hi ' . explode("-", $_SESSION["user_detail"])[0] . '! &nbsp;&nbsp; </a>';

								echo '<a href="logout.php" class="icons-btn d-inline-block">&nbsp;&nbsp; Logout &nbsp; </a>';
							} else {
								// echo '<a href="registered.php" class="icons-btn d-inline-block"> Create Account &nbsp;&nbsp; </a>';

								echo '<a href="login.php" class="icons-btn d-inline-block">&nbsp;&nbsp; Login &nbsp; </a>';
								echo '<script>
									$(document).ready(function () {
										console.log("executing else part");
										var item = document.querySelectorAll(".product_details");
										console.log(item.length);
										document.querySelectorAll(".product_details").forEach(function(item){
												console.log("manish");
												item.style.display="none";
											});
									});
									</script>';
							}
							?>

						<a href="cart.php" class="icons-btn d-inline-block bag">
							<span class="icon-shopping-cart text-muted">
							</span>
							<span class="number">0</span>
						</a> <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none">
							<span class="icon-menu"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			$(document).ready(function () {
				if (localStorage.getItem("cartNumbers") == null) {
					document.querySelector('.number').textContent = 0;
					document.querySelector(".number").style.color = "white";

				}
			});
		</script>