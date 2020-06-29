<?php
include("header.php");
include("functions.php");
?>
    <div class="custom-border-bottom py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Register Page</strong></div>
        </div>
      </div>
    </div>
<!-- register -->
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
	<div class="register">
		<div class="container">
			<h2>Register Here</h2>
			<div class="login-form-grids">
				<h5>profile information</h5>
				<form method="post">
					<input type="text" placeholder="First Name..."  name="fname" required>
					<input type="text" placeholder="Last Name..."  name="lname" required>
					<input type="text" placeholder="Mobile Number..." id="phone" name="phone" required>
				<!-- <div class="register-check-box">
					<div class="check">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>Subscribe to Newsletter</label>
					</div>
				</div> -->
				<h6>Login information</h6>
					
					<input type="email" placeholder="Email Address"  name="email" required>
					<input type="password" placeholder="Password" required=" " name="pass" id="pass">
					<input type="password" placeholder="Password Confirmation" required=" " name="repass" id="repass" onchange="myFunction()"><span id="error"></span>
					<input type="submit" value="Register" name="register" id="reg">
					<script>
					    function myFunction() {
					        var x = document.getElementById("pass");
					        var y = document.getElementById("repass");
					        //console.log(x);
					        //console.log(y);
					        if(x.value != y.value){
					           // alert("no");
					          y.style.border = "2px solid red";
					          document.getElementById("reg").disabled =true;
					          document.getElementById("error").innerHTML = "password is not matching";
					          document.getElementById("error").style.color="red";
					        }else{
					            y.style.border = "2px solid green";
					            document.getElementById("reg").disabled =false;
					            document.getElementById("error").innerHTML = "";
					        }
					    }
					</script>
				</form>
			</div>
			<div class="register-home">
				<a href="index.php">Home</a>
			</div>
		</div>
	</div>	
	</div>
	<div class="col-md-3"></div>
	<div class="clearfix"></div>
</div>
<!-- //register -->
<!-- //footer -->
<?php
include("footer.php");
if (isset($_POST['register'])) {
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $pass = $_POST['pass'];
      $repass = $_POST['repass'];
      
      $query2 = mysqli_query($con, "SELECT * FROM user");
      $emailArray = array();
      $numberArray = array();
      while($row = mysqli_fetch_array($query2)){
                array_push($numberArray, $row['phone']);
                array_push($emailArray, $row['email']);
                } 
      if(in_array("$phone" , $numberArray) || in_array("$email" , $emailArray)){
         //echo '<script>alertify.error("Your mobile number is already registered with us", 50);</script>';
         echo '<script type="text/javascript">
          			Swal.fire(
    			  "Your email or mobile number is already registered with us!",
    			  "",
    			  "error").then(function(){
    			  	 window.location = "registered.php";
    			  	});
          </script>';
    }else{
     $sql = "INSERT INTO user (id,fname,lname,phone,email,pass,repass)
              VALUES
            (null,'$fname','$lname','$phone','$email','$pass','$repass')";
        
         $query = mysqli_query($con, $sql);
        if (! $query) {
            echo "fail" . mysqli_error($con);
        }else{
          echo '<script type="text/javascript">
          			Swal.fire(
    			  "You are successully registered!",
    			  "",
    			  "success").then(function(){
    			  	 window.location = "index.php";
    			  	});
          </script>';
        }	   
    }
}
?>