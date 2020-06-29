<?php
include ("../config/config.php");
include ("../includes/header.php");
?>
<body>
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
					<li class="nav-item"><a class="nav-link" href="../main.php">Home <span
							class="sr-only">(current)</span></a></li>
					<li class="nav-item"><a class="nav-link"
						href="../product/total_products.php">Total Products</a></li>
					<li class="nav-item"><a class="nav-link"
						href="../contact_details.php">Inquiries</a></li>
					<li class="nav-item"><a class="nav-link" href="../user_details.php">User
							Details</a></li>
					<li class="nav-item"><a class="nav-link"
						href="../order_details.php">Order Details</a></li>
					<li class="nav-item"><a class="nav-link" href="../pending_user.php">Pending
							User</a></li>
							<li class="nav-item"><a class="nav-link active" href="../color/color.php">Color</a></li>
							<li class="nav-item"><a class="nav-link" href="../size/size.php">Size</a></li>
					<li class="nav-item"><a class="nav-link" href="../banner/banner.php">Banner</a></li>
					<li class="nav-item"><a class="nav-link" href="../feature/feature.php">Feature Image</a></li>
				</ul>
				<a href="logout.php" title="Logout"> <img
					src="../assets/images/logout.png" alt="" style="width: 40px"
					class="img-responsive">
				</a>
			</div>
		</nav>
	</div>
	<header class="text-center mt-5">
		<h1>Add Color</h1>
	</header>
	<div id="welcome_page">
		<div class="container">
			<div class="my-3 row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<form method="post">
						<div class="form-group">
							<label for="color" class="col-form-label">Color</label>
							<input type="text" class="form-control" id="color"
								name="color" required="">
						</div>
						<button type="submit" class="btn btn-primary" name="submit">Add</button>
					</form>
				</div>
				<div class="col-md-2"></div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

<?php
include ("../includes/footer.php");
// $test = '/images/product';
// echo $test;
if (isset($_POST['submit'])) {
    $color = $_POST['color'];
    if (! $con) {
        die('Could not connect: ' . mysqli_error());
    }
    $sql = "INSERT INTO color 
   (id, color)
    VALUES (null,'$color')";

    //echo $sql;

    $query = mysqli_query($con, $sql);
    // Check Query
    if (! $query) {
        echo "Error: " . mysqli_error($con);
    } else {
        // echo "Success";
        echo '<script type="text/javascript">
               Swal.fire(
           "Color added successully!",
           "",
           "success").then(function(){
             window.location = "color.php";
            });
      </script>';
    }
}
?>