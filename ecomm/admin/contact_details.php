<?php
session_start();
include ("config/config.php");
include("includes/header.php");
if(isset($_SESSION["admin_detail"]))
{
?>
<body>
<div id="mynav">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" onclick="myFunction()">
      <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto nav-tabs ">
					<li class="nav-item "><a class="nav-link" href="main.php">Home
							<span class="sr-only">(current)</span>
					</a></li>
					<li class="nav-item"><a class="nav-link" href="product/total_products.php">Total
							Products</a></li>
					<li class="nav-item"><a class="nav-link active" href="contact_details.php">Inquiries</a>
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
    <a href="logout.php" title="Logout">
        <img src="assets/images/logout.png" alt="" style="width: 40px" class="img-responsive">
    </a>
  </div>
</nav>
</div>
<div id="welcome_page">
<div class="container-fluid">
    <div class="row my-3">
    <div class="col-md-12">
      <div class="welcome_header text-center">
        <h1>Inquiries</h1>
      </div>
    </div>
    </div>
  <div class="my-5">
      <form name="frmUser" method="post" action="">
    <table class="table table-hover">
  <thead>
    <tr>
        <th></th>
      <th scope="col">No</th>
      <th scope="col">Submit Date</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email Id</th>
      <th scope="col">Mobile No.</th>
      <th scope="col">Company Name</th>
      <th scope="col">Message</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php
  $sql = "SELECT * FROM contact_details ORDER BY id DESC";
  $query = mysqli_query($con,$sql);
  if (! $query) {
        echo "fail" . mysqli_error($con);
    }
  $i=1;
  $j = 0;
  while($row = mysqli_fetch_array($query)){
      $id=$row['id'];
      $name = $row['name'];
      $email = $row['email'];
      $phone = $row['phone'];
      $company = $row['company'];
      $message = $row['message'];
      $date = $row['submit_date'];
      if($j%2==0){
      $classname="evenRow";
      }else{
      $classname="oddRow";
    }
?> 
    <tr class="<?php if(isset($classname)) echo $classname;?>">
                   <td><input type="checkbox" name="enquiry[]" value="<?php echo $id; ?>" ></td>
                  <th scope="row"><?php echo $i; ?></th>
                  <td><?php echo $date;?></td>
                  <td width="10%"> <?php echo $name ; ?></td>
                  <td width="10%"><?php echo $email; ?></td>
                  <td><?php echo $phone ?></td>
                  <td><?php echo $company ?></td>
                  <td><?php echo $message ?></td>
                </tr>
    <?php $i++;$j++; } ?>
    <tr>
    <td colspan="4">
      <button class="btn btn-danger" name="delete" >Delete</button>
    </td>
    </tr>
  </tbody>
</table>
</form>
  </div>
</div>
</div>

<?php 
}else{
  echo "<script>
    Swal.fire(
        'Please Login First!',
        '',
        'error'
    ).then(function(){ 
          window.location = 'login.php';
    })</script>";
}
include("includes/footer.php");
if(isset($_POST['delete']))
{
  if(isset($_POST["enquiry"])){
    $rowCount = count($_POST["enquiry"]);

    for($i=0;$i<$rowCount;$i++) {
    $result = mysqli_query($con, 
      "DELETE FROM contact_details WHERE id='" . $_POST["enquiry"][$i] . "'");
//echo "DELETE FROM contact_details WHERE id='" . $_POST["enquiry"][$i] . "'";
//echo  $_POST["enquiry"][$i];
      // $row= mysqli_fetch_array($result);
    if (!$result) {
      echo "fails: ".mysqli_error();
    }else{
        echo "<script>
    Swal.fire(
        'Deleted Successfully!',
        '',
        'success'
    ).then(function(){ 
          window.location = 'contact_details.php';
    })</script>";

    }
  }  
}else{
  echo "<script>alertify.error('Please select any row!', 50);</script>";    
}
}
?>