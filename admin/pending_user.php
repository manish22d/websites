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
					<li class="nav-item"><a class="nav-link" href="contact_details.php">Inquiries</a>
					</li>
					<li class="nav-item"><a class="nav-link" href="user_details.php">User
							Details</a></li>
					<li class="nav-item"><a class="nav-link" href="order_details.php">Order
							Details</a></li>
					<li class="nav-item"><a class="nav-link active" href="pending_user.php">Pending
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
        <h1>Pending User</h1>
      </div>
    </div>
    <!-- <div class="col-md-6 text-right">
      <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Add Product</button>
    </div> -->
  </div>
  <div class="my-5">
    <form name="frmUser" method="post" action="">
    <table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th></th>
      <th scope="col">No</th>
      <th scope="col">Full Name</th>
      <th scope="col">Mobile No</th>
      <th scope="col">Email Id</th>
      <th scope="col">Status</th>
      <th scope="col">Firm Name</th>
      <th scope="col">GST Number</th>
      <th scope="col">Pan Number</th>
      <th scope="col">Full Address</th>
      <th scope="col">Type Of Dealer</th>
      <th scope="col">Contact Person</th>
      <th scope="col">Yearly Trunover</th>
      <th scope="col">Intrested In</th>
      <th scope="col">Whatsapp Number</th>
      <th scope="col">Visiting Card Image</th>
      <th scope="col">Booking Station</th>
      <th scope="col">Private Marka</th>
      <th scope="col">Transport Detail</th>
    </tr>
  </thead>
  <tbody>
    <?php
  $sql = "SELECT * FROM user WHERE status ='pending' ORDER BY id DESC ";
  $query = mysqli_query($con,$sql);
  if (! $query) {
        echo "fail" . mysqli_error($con);
    }
  $i=1;
  $j = 0;
  while($row = mysqli_fetch_array($query)){
      $id=$row['id'];
      $fname = $row['fname'];
      $lname = $row['lname'];
      $phone = $row['phone'];
      $email = $row['email'];
      $status = $row['status'];
      $firm_name = $row['firm_name'];
      $gst_number = $row['gst_number'];
      $pan_number = $row['pan_number'];
      $full_address = $row['full_address'];
      $full_address2 = $row['full_address2'];
      $yearly_turnover = $row['yearly_turnover'];
      $type_of_dealer = $row['type_of_dealer'];
      $contact_person = $row['contact_person'];
      $interested_in = $row['interested_in'];
      $whatsapp_number = $row['whatsapp_number'];
      $visiting_card = $row['visiting_card'];
      $booking_station = $row['booking_station'];
      $private_marka = $row['private_marka'];
      $transport_details = $row['transport_details'];
      if($j%2==0){
      $classname="evenRow";
      }else{
      $classname="oddRow";
    }
?> 
    <tr class="<?php if(isset($classname)) echo $classname;?>">
      <td><input type="checkbox" name="users[]" value="<?php echo $id; ?>" ></td>
                  <td><?php echo $i; ?></td>
                  <td width="10%"> <?php echo $fname." ".$lname ; ?></td>
                  <td width="10%"><?php echo $phone; ?></td>
                  <td><?php echo $email ?></td>
                  <td><?php echo $status ?></td>
                  <td><?php echo $firm_name ?></td>
                  <td><?php echo $gst_number ?></td>
                  <td><?php echo $pan_number ?></td>
                  <td><?php echo $full_address." ".$full_address2 ?></td>
                  <td><?php echo $yearly_turnover ?></td>
                  <td><?php echo $type_of_dealer ?></td>
                  <td><?php echo $contact_person ?></td>
                  <td><?php echo $interested_in ?></td>
                  <td><?php echo $whatsapp_number ?></td>
                  <td><?php echo $visiting_card ?></td>
                  <td><?php echo $booking_station ?></td>
                  <td><?php echo $private_marka ?></td>
                  <td><?php echo $transport_details ?></td>
                </tr>
    <?php $i++; $j++; } ?>
    <tr>
    <td colspan="2">
      <button class="btn btn-success" name="approve" >Approve</button>
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
if(isset($_POST['approve']))
{
  // echo gettype($_POST["users"]);
  if(isset($_POST["users"])){


    $rowCount = count($_POST["users"]);

    for($i=0;$i<$rowCount;$i++) {
    $result = mysqli_query($con, 
      "UPDATE user 
          SET status = 'verified' WHERE id='" . $_POST["users"][$i] . "'");

      // $row= mysqli_fetch_array($result);
    if (!$result) {
      echo "fail: ".mysqli_error();
    }else{
        echo "<script>
    Swal.fire(
        'Approved Successfully!',
        '',
        'success'
    ).then(function(){ 
          window.location = 'user_details.php';
    })</script>";

    }
  }  
}else{
  echo "<script>alertify.error('Please select any user!', 50);</script>";    
}
}
?>