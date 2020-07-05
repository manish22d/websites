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
                        <input type="password" placeholder="Old Password" required=" " name="pass">
                        <input type="password" placeholder="New Password" required=" " name="newpass">
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
    $l_oldpass = $_POST['pass'];
    $l_newpass = $_POST['newpass'];
    //echo $l_pass."".$l_newpass;
    
    $sql = "SELECT * FROM user WHERE email= '$l_email'";
    echo $sql;
    $query = mysqli_query($con, $sql);
    if (! $query) {
        echo "fail" . mysqli_error($con);
    }
    if (mysqli_num_rows($query)>0){
        while($row = mysqli_fetch_array($query)){
        $r_pass = $row['pass'];
            echo $r_pass;
        if($l_oldpass == $r_pass){
            $sql2 = "UPDATE user 
                    SET pass = '$l_newpass',
                        repass = '$l_newpass',
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
        }
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