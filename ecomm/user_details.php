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
				<form method="post">
					<div class="row">
					<div class="col-md-6">
					<label>Full Name</label>
					<input type="text" value="<?php echo $full_name;?>"  readonly="" >
					<label>Email Id</label>
					<input type="text" value="<?php echo $email;?>"  readonly="">
					<label>Mobile No.</label>
					<input type="text" value="<?php echo $phone;?>"  readonly="">
					<label>Firm Name</label>
					<input type="text" name="firm_name">
					<label>GST Number</label>
					<input type="text" name="gst_number">
					<label>PAN Number</label>
					<input type="text" name="pan_number">
					<label>Full Address</label>
					<input type="text" name="full_address" >
					<label>Pin code,City,State,Country</label>
					<input type="text" name="full_address2">
					<label>Yearly Trunover</label>
					<input type="text" name="yearly_turnover">
						</div>
						<div class="col-md-6">

					<label>Type Of Dealer</label>
					<input type="text" name="type_of_dealer">
					<label>Contact Person</label>
					<input type="text" name="contact_person">
					<label>Intrested In Eg Mens Wear,Women Wear Etc</label>
					<input type="text" name="interested_in">
					<label>Whatsapp Number</label>
					<input type="text" name="whatsapp_number">
<!-- 					<label>Visiting Card Image</label> -->
<!-- 					<input type="text"   name="visiting_card"> -->
					<label>Booking Station</label>
					<input type="text" name="booking_station">
					<label>Private Marka </label>
					<input type="text" name="private_marka">
					<label>Transport Detail</label>
					<input type="text" name="transport_details">
					<!-- <div class="register-check-box">
						<div class="check">
							<label class="checkbox"><input type="checkbox" name="checkbox" required=""><i> </i>I accept the terms and conditions</label>
						</div>
					</div> -->
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
//       $visiting_card = $_POST['visiting_card'];
      $booking_station = $_POST['booking_station'];
      $private_marka = $_POST['private_marka'];
      $transport_details = $_POST['transport_details'];
      
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
     transport_details = '$transport_details'
     WHERE email = '$email'";
       
    $query = mysqli_query($con, $sql);
    if (! $query) {
        echo "fail" . mysqli_error($con);
    }else{
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