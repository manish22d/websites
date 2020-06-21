<?php
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
				<h2>Register your Account</h2>
				<p>Enter your details to register.</p>
				<form  method="post"> 
					<label>Full Name</label>
					<div class="input-group">
						<span class="fa fa-envelope" aria-hidden="true"></span>
						<input type="text" class="form-control" style="border:none;" placeholder="Enter Full Name" name="name"> 
					</div>
					<label>Username</label>
					<div class="input-group">
						<span class="fa fa-envelope" aria-hidden="true"></span>
						<input type="text" class="form-control" style="border:none;" placeholder="Enter Username" name="username"> 
					</div>
					<label>Password</label>
					<div class="input-group">
						<span class="fa fa-lock" aria-hidden="true"></span>
						<input type="Password" class="form-control" style="border:none;" placeholder="Enter Password" name="password">
					</div>					
					<input class="btn btn-danger btn-block" type="submit" value="Register" name="register">
				</form>
				<!-- <p class="account">By clicking login, you agree to our <a href="#">Terms & Conditions!</a></p> -->
				<!-- <p class="account1">Dont have an account? <a href="#">Register here</a></p> -->
			</div>
		</div>
		<!-- //main content -->
	</div>
<?php
	include("includes/footer.php");
	if (isset($_POST['register'])){
		$name = $_POST['name'];
    	$username = $_POST['username'];
    	$password = $_POST['password'];
    	// echo $user; echo $pass;
		$sql = "INSERT INTO admin (id,name,username,password)
          VALUES
        (null,'$name','$username','$password')";
    
    	$query = mysqli_query($con, $sql);
    	if (! $query){
        echo "fail" . mysqli_error($con);
    	}else{
    		header('Location: login.php');
    	}
   		 	}
?>