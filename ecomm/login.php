<?php
include("header.php");
include("functions.php");
?>
    <div class="custom-border-bottom py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Login</strong></div>
        </div>
      </div>
    </div>
<!-- login -->
	<div class="login">
		<div class="container">
			<h2>Login Form</h2>
<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
        <form method="POST">
          <input type="email" placeholder="Email Address" required=" " name="email">
          <input type="password" placeholder="Password" required=" " name="pass">
          <!-- <input type="password" placeholder="Re-Password" required=" " name="repass"> -->
          <!-- <div class="forgot">
            <a href="#">Forgot Password?</a>
          </div> -->
          <input type="submit" value="Login" name="login">
        </form>
      </div>
      <h4>For New People</h4>
      <p><a href="registered.php">Register Here</a> (Or) go back to <a href="index.php">Home<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
  </div>
  <div class="col-md-3"></div>
  <div class="clearfix"></div>
</div>	
		</div>
	</div>
<!-- //login -->
<?php
include("footer.php");
if (isset($_POST['login'])) {
      $l_email = $_POST['email'];
      $l_pass = $_POST['pass'];
      // $l_repass = $_POST['repass'];
      //echo $l_email."<br/>".$l_pass."<br/>".$l_repass;
    $sql = "SELECT * FROM user";
    
    $query = mysqli_query($con, $sql);
    if (! $query) {
        echo "fail" . mysqli_error($con);
    }
    while($row = mysqli_fetch_array($query)){
    	$r_fname = $row['fname'];
    	$r_l_name = $row['lname'];
    	$r_email = $row['email'];
    	$r_pass = $row['pass'];
    	$r_phone = $row['phone'];
      $r_status = $row['status'];

    	//echo $r_email."<br/>".$r_pass."<br/>".$r_repass;
    	if($l_email == $r_email && $l_pass == $r_pass && $r_status == "verified"){
    		echo '<script type="text/javascript">
      			Swal.fire(
			  "You are successully logged in!",
			  "",
			  "success").then(function(){
			  	 window.location = "index.php";
			  	});
      </script>';

      // Set session variables
		$_SESSION["user_detail"] = $r_fname." ".$r_l_name."-".$r_email."-".$r_phone;
		// echo $_SESSION["user_detail"];
		// $abc = $_SESSION["user_detail"];
		// echo explode("-", $_SESSION["user_detail"])[0];
    	}else{
    		echo '<script type="text/javascript">
      			Swal.fire(
			  "Login failed or Yet not verified, Please retry!!",
			  "",
			  "error");
      </script>';
    	}
    }	

}
?>