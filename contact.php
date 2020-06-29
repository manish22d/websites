<?php
include("header.php");
include("functions.php");
?>
    <div class="custom-border-bottom py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Contact</strong></div>
        </div>
      </div>
    </div>
	
	<section class="map">
	<div class="container">
	<h2 class="text-center my-5">We are wating to assist you..</h2>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.916074540569!2d77.26297391508331!3d28.662231482406074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfc929e47fdbd%3A0x10d2c351ecc29835!2sEmpire%20Apparels%20Pvt%20Ltd.!5e0!3m2!1sen!2sin!4v1592203799464!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>
	</section>
	
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Get In Touch</h2>
          </div>
          <div class="col-md-7">
            <form action="#" method="post">
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_name" class="text-black">Full Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_name" name="c_name" required="">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_email" class="text-black">Email Id </label>
                    <input type="text" class="form-control" id="c_email" name="c_email" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_phone" class="text-black">Phone No <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="c_phone" name="c_phone" required="">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_phone" class="text-black">Company Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_company" name="c_company" required="">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_message" class="text-black">Message </label>
                    <textarea name="c_message" id="c_message" cols="30" rows="7" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send Message" name="submit">
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-5 ml-auto">
            <div class="p-4 border mb-3 block-5">
            <h2 class="h3 mb-3 text-black">Empire Apparels Pvt. Ltd</h2>
            <ul class="list-unstyled">
                <li class="address">IX/6342, Netaji Gali, Gandhi Nagar, Delhi 110031, India</li>
                <li class="phone"><a href="tel:+917042425007" style="color: #000;">+91 7042425007</a></li>
                <li class="mail"><a href="mailto:empirekids1991@gmail.com" style="color: #000;">empirekids1991@gmail.com</a></li>
                <li style="padding-left: 0px;"><a href="https://www.facebook.com/empirekids1991/"><i class="fa fa-facebook"></i></a> &nbsp;&nbsp;<a href="https://instagram.com/empireapparelss?igshid=1p2zvucs1mpjx"><i class="fa fa-instagram"></i></a></li>
                <!-- <li class="email"><a href="mailto:ankitbansal2002@gmail.com">ankitbansal2002@gmail.com</a></li> -->
              </ul>
<!--               <span class="d-block text-primary h6 text-uppercase">Address</span> -->
<!--               <p class="mb-0 address">IX/6342, Netaji Gali, Gandhi Nagar, Delhi 110031</p> -->
            </div>
            
            <!-- <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">Email Id</span>
              <p class="mb-0"><a href="mailto:ankitbansal2002@gmail.com" style="color: #8c92a0">ankitbansal2002@gmail.com</a></p>
            </div> -->
          </div>
        </div>
      </div>
    </div>
<!-- footer -->
<?php
    include("footer.php");
    if (isset($_POST['submit'])){
      $name = $_POST['c_name'];
      $email = $_POST['c_email'];
      $phone = $_POST['c_phone'];
      $company = $_POST['c_company'];
      $message = $_POST['c_message'];
      $date = date('d-m-Y H:i:s');
      $sql = "INSERT INTO contact_details (id,submit_date,name,email,phone,company,message) VALUES (null,'$date','$name','$email','$phone','$company','$message')";
//echo $sql;
       $query = mysqli_query($con,$sql);
      if(!$query){
  echo "fail".mysqli_error($con);
}else{
    //echo "Success";
    echo '<script type="text/javascript">
              Swal.fire(
          "Your message has been successfully submitted!",
          "",
          "success").then(function(){
             window.location = "index.php";
            });
      </script>';
  }
    }
    ?>