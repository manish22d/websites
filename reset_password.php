<?php
include("header.php");
include("functions.php");
?>
<div class="custom-border-bottom py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong
                    class="text-black">Reset Password</strong></div>
        </div>
    </div>
</div>
<!-- login -->
<div class="login">
    <div class="container">
        <h2>Reset Password</h2>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
                    <form method="POST">
                        <input type="email" placeholder="Email Id" required=" " name="email">
                        <input type="password" placeholder="Password" required=" " name="pass">
                        <input type="password" placeholder="Re-Password" required=" " name="repass">
                        <!-- <div class="forgot">
                        <a href="#">Forgot Password?</a>
                        </div> -->
                        <input type="submit" value="Submit" name="ok">
                    </form>
                </div>
                <h4>For New People</h4>
                <p><a href="registered.php">Register Here</a> (Or) go back to <a href="index.php">Home<span
                            class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
            </div>
            <div class="col-md-3"></div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //login -->
<?php
include("footer.php");
if (isset($_POST['ok'])) {
    $l_email = $_POST['email'];
    $l_pass = $_POST['pass'];
    $l_repass = $_POST['repass'];

    $sql = "SELECT * FROM user WHERE email= '$l_email'";
    $query = mysqli_query($con, $sql);
    if (! $query) {
        echo "fail" . mysqli_error($con);
    }
    if (mysqli_num_rows($query)>0){
        $r_status = $row['status'];

        if($l_pass == $l_repass && $r_status == "verified"){
        $sql2 = "UPDATE user 
                SET pass = '$l_pass',
                    repass = '$l_pass',
                    password_reset = 0
                    WHERE email = '$l_email'";
        $query2 = mysqli_query($con, $sql2);
        
        echo '<script type="text/javascript">
                Swal.fire(
            "You have successfully updated your password!",
            "",
            "success").then(function(){
               window.location = "login.php";
              });
          </script>';
        }else{
            echo '<script type="text/javascript">
            Swal.fire(
            "You email Id is not registered with Us , Please Register!!",
            "",
            "error");
            </script>';
        }
        }
        else{
            echo '<script type="text/javascript">
            Swal.fire(
            "You email Id is not registered with Us , Please Register!!",
            "",
            "error");
            </script>';
        }
}
?>