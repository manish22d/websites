<?php
  include ("../config/config.php");
  include("../includes/header.php");
?>
<body>
<div id="mynav">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" onclick="myFunction()">
      <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto nav-tabs ">
					<li class="nav-item "><a class="nav-link" href="../main.php">Home <span
							class="sr-only">(current)</span></a></li>
					<li class="nav-item"><a class="nav-link"
						href="total_products.php">Total Products</a></li>
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
					<li class="nav-item"><a class="nav-link" href="../banner/banner.php">Banner</a></li>
					<li class="nav-item"><a class="nav-link active" href="../feature/feature.php">Feature Image</a></li>
				</ul>

    <a href="logout.php" title="Logout">
        <img src="../assets/images/logout.png" alt="" style="width: 40px" class="img-responsive">
    </a>
  </div>
</nav>
</div>
<header class="text-center mt-2">
  <h1>Add Feature Image</h1>
</header>
  <div id="welcome_page">
    <div class="container">
      <div class="my-3 row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="product_image" class="col-form-label">Feature Image</label>
              <input type="file" class="form-control" id="feature_image" name="feature_image" required="">
              <span id="error">Image size should be equal to 1000 x 1800 pixels.</span>
            </div>
            <div class="form-group">
              <label for="type" class="col-form-label">Type</label>
              <select id="type" class="form-control" name="type" required="">
                  <option selected>Choose...</option>
                  <option value="men">Men</option>
                  <option value="women">Women</option>
                  <option value="children">Children</option>
                </select>
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
include("../includes/footer.php");
if(isset($_POST['submit']))
{
  $feature_image = $_FILES['feature_image'];
  $img_name = $feature_image['name'];
  $img_tempath = $feature_image['tmp_name'];
  $type = $_POST['type'];
  
  if($img_name!="")  {
      $temp = explode(".", $feature_image['name']);
    $newfilename = round(microtime(true)) .'.'.end($temp);
    $image_info = getimagesize("$img_tempath");
    if($image_info[0]!=1000 || $image_info[1]!=1800){
        echo "<script>document.getElementById('feature_image').style.border='2px solid red';
        </script>";
    }else{
    move_uploaded_file($img_tempath,'../../images/feature/'.$newfilename);
  
        if(!$con )
        {
      die('Could not connect: ' . mysqli_error());
        }
           date_default_timezone_set("Asia/Kolkata");
           $date = date('d-m-Y H:i:s');
           $sql = "INSERT INTO feature 
           (id, img,type, upload_date)
            VALUES (null,'$newfilename','$type','$date')";

            //echo $sql;
        $query = mysqli_query($con,$sql);
        // Check Query
        if (!$query) {
              echo "Error: " . mysqli_error($con);
        }
        else
        {
            //echo "Success";
            echo '<script type="text/javascript">
                       Swal.fire(
                   "Feature image added successully!",
                   "",
                   "success").then(function(){
                     window.location = "feature.php";
                    });
              </script>';
        }

    }
}
}
?>