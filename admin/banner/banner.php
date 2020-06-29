<?php
session_start();
include ("../config/config.php");
include ("../includes/header.php");
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
					<li class="nav-item "><a class="nav-link" href="../main.php">Home <span
							class="sr-only">(current)</span></a></li>
					<li class="nav-item"><a class="nav-link" href="../product/total_products.php">Total
							Products</a></li>
					<li class="nav-item"><a class="nav-link" href="../contact_details.php">Inquiries</a>
					</li>
					<li class="nav-item"><a class="nav-link" href="../user_details.php">User
							Details</a></li>
					<li class="nav-item"><a class="nav-link" href="../order_details.php">Order
							Details</a></li>
					<li class="nav-item"><a class="nav-link" href="../pending_user.php">Pending
							User</a></li>
							<li class="nav-item"><a class="nav-link" href="../size/size.php">Size</a></li>
					<li class="nav-item"><a class="nav-link" href="../color/color.php">Color</a></li>
					<li class="nav-item"><a class="nav-link active" href="banner.php">Banner</a></li>
					<li class="nav-item"><a class="nav-link" href="../feature/feature.php">Feature Image</a></li>
				</ul>
				<a href="logout.php" title="Logout"> <img
					src="../assets/images/logout.png" alt="" style="width: 40px"
					class="img-responsive">
				</a>
			</div>
		</nav>
	</div>
	<!---------// Nav Menu ----------------->

	<!---------Total Product Table ----------------->

	<div id="welcome_page">
		<div class="container-fluid">
			<div class="row my-3">
				<div class="col-md-12">
					<div class="welcome_header text-center">
						<h1>Banner</h1>
					</div>
				</div>
				<div class="col-md-6 text-left">
					<a href="add_banner.php">
						<button type="button" class="btn btn-primary mt-2">
							<i class="fa fa-plus"></i> Add Banner
						</button>
					</a>
				</div>
			</div>
			<div class="my-5">
			<span class="text-danger">Image size should be equal to 1000 x 1800 pixels.</span>
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Image</th>
							<th scope="col">Image Name</th>
							<th scope="col">Title</th>
							<th scope="col">Heading</th>
							<th scope="col">Button_text</th>
							<th scope="col">Page</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
    <?php
    $sql = "SELECT * FROM banner ORDER BY id DESC";
    $query = mysqli_query($con, $sql);
    if (! $query) {
        echo "fail" . mysqli_error($con);
    }
    $i = 1;
    while ($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        $img = $row['img'];
        $title = $row['title'];
        $heading = $row['heading'];
        $button_text = $row['button_text'];
        $page = $row['page'];
        ?> 
    				<tr>
							<th scope="row"><?php echo $i; ?></th>
							<td><img alt="" src="../../images/banner/<?php echo $img;?>" width="15%"></td>
							<td><?php echo $img ; ?></td>
							<td><?php echo $title; ?></td>
							<td><?php echo $heading; ?></td>
							<td><?php echo $button_text; ?></td>
							<td><?php echo $page; ?></td>
							<td><a
								href="delete_Banner.php?token=<?php echo base64_encode($id); ?>">
									<button class="btn btn-danger"
										onclick="return confirm('Are you sure want to delete this row ?')">Delete</button>
							</a></td>
							<td><a
								href="update_Banner.php?token=<?php echo base64_encode($id); ?>"><button
										type="button" class="btn btn-info">Update</button></a></td>
						</tr>
    <?php $i++; } ?>
  </tbody>
				</table>
			</div>
		</div>
	</div>

	<!---------//Total Product Table ----------------->
<?php
} else {
    echo "<script>
    Swal.fire(
        'Please Login First!',
        '',
        'error'
    ).then(function(){ 
          window.location = '../login.php';
    })</script>";
}
include ("../includes/footer.php");
?>