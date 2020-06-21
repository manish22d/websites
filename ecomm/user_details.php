<?php
session_start();
include("header.php");
include("functions.php");
?>
    <div class="custom-border-bottom py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">User Details Page</strong></div>
        </div>
      </div>
    </div>
<!-- register -->
<?php 
if (isset($_SESSION["user_detail"])){
	$name= explode("-", $_SESSION["user_detail"])[0];
	$email =  explode("-", $_SESSION["user_detail"])[1];
	$phone =  explode("-", $_SESSION["user_detail"])[2];
	//echo $email;
	$sql = "SELECT * FROM user WHERE email = '$email'";
	//echo $sql; 
    $query = mysqli_query($con, $sql);
    if (! $query) {
        echo "fail" . mysqli_error($con);
    }
    while ($row = mysqli_fetch_array($query)) {
		$full_name= $row['fname']." ".$row['lname'];
		$email= $row['email'];
		$phone= $row['phone'];
		//echo $full_name;
	 }
    
	}else{
		$name="";
		$email="";
		$phone="";
	}
 ?>
<div class="row">
	<div class="col-md-12">
	<div class="register">
		<div class="container">
			<h2>User Details</h2>
			<div class="login-form-grids">
				<form method="post" enctype="multipart/form-data">
					<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Full Name</label>
							<input type="text" value="<?php echo $full_name;?>"  readonly="" class="form-control" >
						</div>
						<div class="form-group">
							<label>Email Id</label>
							<input type="text" value="<?php echo $email;?>"  readonly="" class="form-control" >
						</div>
						<div class="form-group">
							<label>Mobile No.</label>
							<input type="text" value="<?php echo $phone;?>"  readonly="" class="form-control" >
						</div>
						<div class="form-group">
							<label>Firm Name</label>
							<input type="text" name="firm_name" class="form-control" >
						</div>
						<div class="form-group">
							<label>GST Number</label>
							<input type="text" name="gst_number" class="form-control" >
						</div>
						<div class="form-group">
							<label>PAN Number</label>
							<input type="text" name="pan_number" class="form-control" >
						</div>
						<div class="form-group">
							<label>Full Address</label>
							<textarea name="full_address" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label>Pin code,City,State,Country</label>
							<input type="text" name="full_address2" class="form-control" >
						</div>
						<div class="form-group">
							<label>Yearly Trunover</label>
							<input type="text" name="yearly_turnover" class="form-control" >
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Type Of Dealer</label>
							<input type="text" name="type_of_dealer" class="form-control" >
						</div>
						<div class="form-group">
							<label>Contact Person</label>
							<input type="text" name="contact_person" class="form-control" >
						</div>
						<div class="form-group">
							<label>Intrested In Eg Mens Wear,Women Wear Etc</label>
							<input type="text" name="interested_in" class="form-control" >
						</div>
						<div class="form-group">
							<label>Whatsapp Number</label>
							<input type="text" name="whatsapp_number" class="form-control" >
						</div>
						<div class="form-group">
							<label>Booking Station</label>
							<input type="text" name="booking_station" class="form-control" >
						</div>
						<div class="form-group">
							<label>Private Marka </label>
							<input type="text" name="private_marka" class="form-control" >
						</div>
						<div class="form-group">
							<label>Transport Detail</label>
							<input type="text" name="transport_details" class="form-control" >
						</div>
						<div class="form-group">
							<label>Visiting Card Image</label>
							<input type="file" name="visiting_card_img" class="form-control-file">
							</div> 
					<input type="submit" value="Submit" name="submit">
						</div>
					</div>
				</form>
			</div>
			<div class="register-home">
				<a href="index.php">Home</a>
			</div>
		</div>
	</div>	
	</div>
	<div class="clearfix"></div>
</div>
<!-- //register -->
<!-- //footer -->
<?php
include("footer.php");
if (isset($_POST['submit'])) {
      $firm_name = $_POST['firm_name'];
      $gst_number = $_POST['gst_number'];
      $pan_number = $_POST['pan_number'];
      $full_address = $_POST['full_address'];
      $full_address2 = $_POST['full_address2'];
      $yearly_turnover = $_POST['yearly_turnover'];

      $type_of_dealer = $_POST['type_of_dealer'];
      $contact_person = $_POST['contact_person'];
      $interested_in = $_POST['interested_in'];
      $whatsapp_number = $_POST['whatsapp_number'];

      // Visiting Card Image
      $visiting_card = $_FILES['visiting_card_img'];
      $img_name=$visiting_card['name'];
  	  $img_tempath=$visiting_card['tmp_name'];

      $booking_station = $_POST['booking_station'];
      $private_marka = $_POST['private_marka'];
      $transport_details = $_POST['transport_details'];

    if($img_name!="")  {
    $temp = explode(".", $visiting_card['name']);
    $newfilename = round(microtime(true)) .'.'.end($temp);
    move_uploaded_file($img_tempath,'images/visiting_card/'.$newfilename);
  }
      
    $sql = "UPDATE user SET
     firm_name = '$firm_name',
     gst_number = '$gst_number',
     pan_number = '$pan_number',
     full_address = '$full_address',
     full_address2 = '$full_address2',
     yearly_turnover = '$yearly_turnover',
     type_of_dealer = '$type_of_dealer',
     contact_person = '$contact_person',
     interested_in = '$interested_in',
     whatsapp_number = '$whatsapp_number',
     booking_station = '$booking_station',
     private_marka = '$private_marka',
     transport_details = '$transport_details'";

     if ($img_name != "") {
        $temp = explode(".", $visiting_card['name']);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        $sql = $sql . ",visiting_card = '$newfilename'";
    }
    $sql.="WHERE email = '$email'";
       
    $query = mysqli_query($con, $sql);
    if (! $query) {
        echo "fail" . mysqli_error($con);
    }else{
    	// echo "yes";
      echo '<script type="text/javascript">
      			Swal.fire(
			  "You have successully updated your details!",
			  "",
			  "success").then(function(){
			  	 window.location = "index.php";
			  	});
      </script>';
    }	

}
?>