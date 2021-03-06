<?php
include ("../config/config.php");
include ("../includes/header.php");
$getid = base64_decode($_GET['token']);
$sql = "SELECT * FROM banner where id='$getid'";
$query = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($query)) {
    $banner_title = $row['title'];
    $banner_text = $row['heading'];
    $button_text = $row['button_text'];
    $page = $row['page'];
    $img = $row['img'];
}

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
					<li class="nav-item"><a class="nav-link" href="../size/size.php">Size</a></li>
					<li class="nav-item"><a class="nav-link" href="../color/color.php">Color</a></li>
					<li class="nav-item"><a class="nav-link active" href="banner.php">Banner</a></li>
					<li class="nav-item"><a class="nav-link" href="../feature/feature.php">Feature
							Image</a></li>
				</ul>
				<a href="logout.php" title="Logout"> <img
					src="../assets/images/logout.png" alt="" style="width: 40px"
					class="img-responsive">
				</a>
			</div>
		</nav>
	</div>
	<!---------// Nav Menu ----------------->

	<!---------Update Product Table ----------------->

	<header class="text-center mt-3">
		<h1>Update Banner</h1>
	</header>
	<div id="welcome_page">
		<div class="container">
			<div class="my-5 row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<form method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="banner_title" class="col-form-label">Banner Title</label>
							<input type="text" class="form-control" id="banner_title"
								name="banner_title" value="<?php echo $banner_title; ?>"
								required="">
						</div>
						<div class="form-group">
							<label for="banner_text" class="col-form-label">Banner Text</label>
							<input type="text" class="form-control" id="banner_text"
								name="banner_text" value="<?php echo $banner_text; ?>"
								required="">
						</div>
						<div class="form-group">
							<label for="button_text" class="col-form-label">Button Text</label>
							<input type="text" class="form-control" id="button_text"
								name="button_text" value="<?php echo $button_text; ?>"
								required="">
						</div>
						<div class="form-group">
							<label for="page" class="col-form-label">Page</label> <select
								id="page" class="form-control" name="page" required="">

								<option selected>Choose...</option>
								<option value="home"
									<?php if($page == "home") echo "selected"; ?>>Home</option>
								<option value="about"
									<?php if($page == "about") echo "selected"; ?>>About</option>
								<option value="shop"
									<?php if($page == "shop") echo "selected"; ?>>Shop</option>
								<option value="product" <?php if($page == "product") echo "selected"; ?>>Product</option>
							</select>
						</div>
						<div class="form-group">
							<label for="banner_image" class="col-form-label">Banner Image</label>
							<input type="file" class="form-control" id="banner_image"
								name="banner_image">
								<span id="error">Image size should be equal to 1000 x 1800 pixels.</span>
						</div>

						<button type="submit" class="btn btn-primary" name="submit">Update</button>
					</form>
				</div>
				<div class="col-md-2"></div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

	<!---------// Update Product Table ----------------->

<?php
include("../includes/footer.php");
if (isset($_POST['submit'])) {
    $banner_title = $_POST['banner_title'];
    $banner_text = $_POST['banner_text'];
    $button_text = $_POST['button_text'];
    $page = $_POST['page'];

    // Main Product Image
    $banner_image = $_FILES['banner_image'];
    $img_name = $banner_image['name'];
    $img_tempath = $banner_image['tmp_name'];

    if (! $con) {
        die('Could not connect: ' . mysqli_error());
    }
    if ($img_name != "") {
        $temp = explode(".", $banner_image['name']);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        $image_info = getimagesize("$img_tempath");
        if($image_info[0]!=1000 || $image_info[1]!=1800){
       		echo "<script>document.getElementById('banner_image').style.border='2px solid red';</script>";
        }else{
       		move_uploaded_file($img_tempath, '../../images/banner/' . $newfilename);
    

    $sql = "UPDATE banner 
      SET title = '$banner_title',
         heading= '$banner_text',
          button_text = '$button_text',
           page = '$page'";

    if ($img_name != "") {
        $temp = explode(".", $banner_image['name']);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        $sql = $sql . ",img = '$newfilename'";
    }
    $sql = $sql . " WHERE id = '$getid' ";

    echo $sql;

    $query = mysqli_query($con, $sql);

    if (! $query) {
        echo "Error : " . mysqli_error($con);
    } else {
        // echo "Success";
        echo '<script type="text/javascript">
              Swal.fire(
          "updated successully!",
          "",
          "success").then(function(){
             window.location = "banner.php";
            });
      </script>';
    	}
	}
	}else{
		$sql = "UPDATE banner 
      		SET title = '$banner_title',
         	heading= '$banner_text',
          	button_text = '$button_text',
           	page = '$page'";
        $sql = $sql . " WHERE id = '$getid' ";

         $query = mysqli_query($con, $sql);

	    if (! $query) {
	        echo "Error : " . mysqli_error($con);
	    } else {
        // echo "Success";
	        echo '<script type="text/javascript">
	              Swal.fire(
	          "updated successully!",
	          "",
	          "success").then(function(){
	             window.location = "banner.php";
	            });
	      	</script>';
    	}
	}
}
?>