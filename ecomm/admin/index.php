<?php
session_start();
include("config/config.php");
include("includes/header.php");
?>
<body>

<div class="signupform">
	<div class="container">
		<!-- main content -->
		<div class="agile_info">
			<div class="w3l_form">
				<div class="left_grid_info">
					<h1>Manage Your Business Account</h1>
					<!-- <p>Donec dictum nisl nec mi lacinia, sed maximus tellus eleifend. Proin molestie cursus sapien ac eleifend.</p> -->
					<img src="assets/images/image.jpg" alt="" />
				</div>
			</div>
			<div class="w3_info">
				<h2>Login to your Account</h2>
				<p>Enter your details to login.</p>
				<form  method="post"> 
					<label>Username</label>
					<div class="input-group">
						<span class="fa fa-envelope" aria-hidden="true"></span>
						<input type="text" class="form-control" placeholder="Enter Username" name="username" style="border:none;"> 
					</div>
					<label>Password</label>
					<div class="input-group">
						<span class="fa fa-lock" aria-hidden="true"></span>
						<input type="Password" class="form-control" placeholder="Enter Password" name="password" style="border:none;">
					</div>					
					<input class="btn btn-danger btn-block" type="submit" value="Login" name="submit">
				</form>
				<!-- <p class="account">By clicking login, you agree to our <a href="#">Terms & Conditions!</a></p> -->
				<p class="account1">Dont have an account? <a href="register.php">Register here</a></p>
			</div>
		</div>
		<!-- //main content -->
	</div>
<?php
	include("includes/footer.php");
	if (isset($_POST['submit'])){
    	$user = $_POST['username'];
    	$pass = $_POST['password'];
    	 //echo $user; echo $pass;
		$sql = "SELECT * FROM admin";
		$query = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($query)){
			$username  = $row['username'];
    		$password = $row['password'];
    		$name = $row['name'];
     		//echo  $username; echo $password;
    		if ($user ==  $username && $pass == $password) {
    			//echo "success";
    			echo '<script type="text/javascript">
      			Swal.fire(
			  "You are successully logged in!",
			  "",
			  "success").then(function(){
			  	 window.location = "main.php";
			  	});
      </script>';
    		$_SESSION["admin_detail"] = $name;

			 } //else{
   //  		echo '<script type="text/javascript">
   //    			Swal.fire(
			//   "Login failed , Please retry!!",
			//   "",
			//   "error");
   //    </script>';
   //  	}
 			}
   		 	}
?>