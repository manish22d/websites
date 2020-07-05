<?php
include("header.php");
include("functions.php");
?>
<div class="custom-border-bottom py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong
                    class="text-black">Forget Password</strong></div>
        </div>
    </div>
</div>
<!-- login -->
<div class="login">
    <div class="container">
        <h2>Forget Password</h2>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
                    <form method="POST">
                        <input type="email" placeholder="Email Address" required=" " name="email">
                        <!-- <input type="password" placeholder="Password" required=" " name="pass"> -->
                        <!-- <input type="password" placeholder="Re-Password" required=" " name="repass"> -->
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
    //   $l_pass = $_POST['pass'];
      //echo $l_email."<br/>".$l_pass;
    $sql = "SELECT * FROM user WHERE email= '$l_email'";
    //echo $sql;
    $query = mysqli_query($con, $sql);
    if (! $query) {
        echo "fail" . mysqli_error($con);
    }
    if (mysqli_num_rows($query)>0){
    while($row = mysqli_fetch_array($query)){
        $temp_pass = uniqid();
         //echo $tem_pass;

        $sql2 = "UPDATE user 
                SET pass = '$temp_pass',
                    password_reset = 1
                    WHERE email = '$l_email'";
        // echo $sql2;
        $query2 = mysqli_query($con, $sql2);

        //send email to user
        $to = $l_email ;
        // echo $to;
        $message = "
        <html>
        <body>
        <p>Hi User, Please note your below temporary password:</p>
        <p>Temporary Password:<b> $temp_pass</b></p>

        <p>Please reset your passwrod as soon as you login.</p>
        
        <p>Thanks & Regards,</p>
        <p>Online Ordering System</p></body></html>";
        
        // echo $message;
        // Always set content-type when sending HTML email
        $header = "MIME-Version: 1.0" . "\r\n";
        $header .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";

        // More headers
        $header .= "From: empirekids1991@gmail.com";


        // echo "Hello";
        mail($to,'REQUEST FOR ENQUIRY',$message,$header);

        // echo "if";
        echo '<script type="text/javascript">
                Swal.fire(
            "Please Check Your Email for Temporary Password!",
            "",
            "success").then(function(){
              window.location = "login.php";
              });
          </script>';
            }
    	
        }else{
            // echo "else";
            echo '<script type="text/javascript">
            Swal.fire(
            "You email Id is not registered with Us , Please Register!!",
            "",
            "error");
            </script>';
        }

}
?>