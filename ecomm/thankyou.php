<?php
include("header.php");
include("functions.php");
?>

  <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Thank You</strong></div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <span class="icon-check_circle display-3 text-success"></span>
            <h2 class="display-3 text-black">Thank you!</h2>
            <p class="lead mb-2">You order was successfuly completed.</p>
            <p>Our team members will connect to you shortly.</p>            
            <p><a href="shop.php" class="btn btn-sm height-auto px-4 py-3 btn-primary">Back to shop</a></p>
          </div>
        </div>
      </div>
    </div>
<!--  Footer --->
<?php
include("footer.php");
if (isset($_POST['submit'])) {
    $demo = $_COOKIE["OrderInCart"];
    $demo = stripslashes($demo);
    $demo = substr($demo, 1,-1);
    $c_name = $_POST['c_name'];
    $c_email = $_POST['c_email'];
    $c_phone = $_POST['c_phone'];
    $c_company = $_POST['c_company'];
    date_default_timezone_set("Asia/Kolkata");
    $date = date('d-m-Y H:i:s');
    $c_message = $_POST['c_message'];
    
$to = 'contact@ankitamahaseth.com';
$body = 'Hi Admin, A visitor sent you an enquiry,
Please find below details:'
."\r\n\n".'Name: '.$c_name
."\r\n".'Mobile: '.$c_phone
."\r\n".'Email ID: '.$c_email
."\r\n".'Company Name: '.$c_company
."\r\n".'Date: '.$date
."\r\n".'Order: '.$demo
."\r\n".'Message: '.$c_message
."\r\n\n".'Thanks!!';

// echo $body;
$header = 'From: '.$c_email. "\r\n";
//  echo $header;
mail($to,'REQUEST FOR ENQUIRY',$body,$header);
// echo "<script>alert('Your message has been submitted, We will get back to you. Thanks!!')</script>";
      
    $sql = "INSERT INTO user_notloggedin (id,c_name,c_email,c_phone,c_company,order_date,remark,products)
          VALUES
        (null,'$c_name','$c_email','$c_phone','$c_company','$date','$c_message','$demo')";
    
        $query = mysqli_query($con, $sql);
    if (! $query) {
        echo "fail" . mysqli_error($con);
    }else{
      echo "<script>
      localStorage.removeItem('cartNumbers'); 
        localStorage.removeItem('cartCost'); 
        localStorage.removeItem('productInCart'); 
        </script>";
    }

}
?>