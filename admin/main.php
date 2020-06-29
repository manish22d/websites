<?php
session_start();
include ("config/config.php");
include ("includes/header.php");
if (isset($_SESSION["admin_detail"])) {
    ?>
<body>
	<!---------Nav Menu ----------------->
	<div id="mynav">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse"
				data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation" onclick="myFunction()">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto nav-tabs ">
					<li class="nav-item "><a class="nav-link active" href="main.php">Home
							<span class="sr-only">(current)</span>
					</a></li>
					<li class="nav-item"><a class="nav-link" href="product/total_products.php">Total
							Products</a></li>
					<li class="nav-item"><a class="nav-link" href="contact_details.php">Inquiries</a>
					</li>
					<li class="nav-item"><a class="nav-link" href="user_details.php">User
							Details</a></li>
					<li class="nav-item"><a class="nav-link" href="order_details.php">Order
							Details</a></li>
					<li class="nav-item"><a class="nav-link" href="pending_user.php">Pending
							User</a></li>
					<li class="nav-item"><a class="nav-link" href="size/size.php">Size</a></li>
					<li class="nav-item"><a class="nav-link" href="color/color.php">Color</a></li>
					<li class="nav-item"><a class="nav-link" href="banner/banner.php">Banner</a></li>
					<li class="nav-item"><a class="nav-link" href="feature/feature.php">Feature Image</a></li>
				</ul>
				<a href="logout.php" title="Logout"> <img
					src="assets/images/logout.png" alt="" style="width: 40px"
					class="img-responsive">
				</a>
			</div>
		</nav>
	</div>
	<!---------// Nav Menu ----------------->

	<!---------Database Count Details ----------------->
	<div id="welcome_page">
		<div class="container">
			<div class="welcome_header text-center my-5">
				<h1>Welcome <?php echo $_SESSION["admin_detail"]; ?></h1>
				<div class="row my-5">
					<div class="col-md-4">
						<div class="welcome_logo text-center">
							<img src="assets/images/logo/logo.jpg"
								class="img-responsive img-fluid" alt="Empire Apparels Pvt. Ltd"
								style="width: 50%;">
						</div>
					</div>
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 box">
								<h2>Total Products</h2>
								<p>
          <?php
    $sql = "SELECT * FROM product";
    $query = mysqli_query($con, $sql);
    $result = mysqli_num_rows($query);
    echo $result;
    ?>

         </p>
							</div>
							<div class="col-md-6 box">
								<h2>User Details</h2>
								<p>
          <?php
    $sql = "SELECT * FROM user";
    $query = mysqli_query($con, $sql);
    $result = mysqli_num_rows($query);
    echo $result;
    ?>
         </p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="row">
							<div class="col-md-6 box">
								<h2>Inquiries</h2>
								<p>
          <?php
    $sql = "SELECT * FROM contact_details ";
    $query = mysqli_query($con, $sql);
    $result = mysqli_num_rows($query);
    echo $result;
    ?>
         </p>
							</div>
							<div class="col-md-6 box">
								<h2>Order Details</h2>
								<p>
          <?php
    $sql = "SELECT * FROM  user_notloggedin";
    $query = mysqli_query($con, $sql);
    $result = mysqli_num_rows($query);
    echo $result;
    ?>
         </p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!---------// Database Count Details ----------------->
<?php
} else {
    echo "<script>
    Swal.fire(
        'Please Login First!',
        '',
        'error'
    ).then(function(){ 
          window.location = 'login.php';
    })</script>";
}
include ("includes/footer.php");
?>