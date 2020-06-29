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
    $OrderDetails = $_COOKIE["OrderInCart"];
    $OrderDetails = stripslashes($OrderDetails);
    $OrderDetails = substr($OrderDetails, 1,-1);
    $order = json_decode($OrderDetails, TRUE);
    $c_name = $_POST['c_name'];
    $c_email = $_POST['c_email'];
    $c_phone = $_POST['c_phone'];
    $c_company = $_POST['c_company'];
    date_default_timezone_set("Asia/Kolkata");
    $date = date('d-m-Y H:i:s');
    $c_message = $_POST['c_message'];
         
$to = 'contact@ankitamahaseth.com';

$message = "
<html>
<body>
<p>Hi Admin, A user have placed below enquiry, Please find below details:</p>
<p>Below is user Details: </p>\r\n
    <p>Full Name : $c_name\r\n</p>
    <p>Mobile Number : $c_phone<\r\n</p>
    <p>Email Id : $c_email\r\n</p>
    <p>Company Name : $c_company\r\n</p>
    <p>Remark : $c_message\r\n\r\n</p>
    <p></p>
<table style='border: 1px solid black'>
<tr>
<th style='border: 1px solid black'>Product Name</th>
<th style='border: 1px solid black'>Size</th>
<th style='border: 1px solid black'>Color</th>
<th style='border: 1px solid black'>Quantity</th>
<th style='border: 1px solid black'>GST</th>
<th style='border: 1px solid black'>Price</th>
</tr>";
foreach ($order as $key => $values) {
  $arr = array_keys($values);
  $Name = "<td style='border: 1px solid black'>".$values[$arr[1]]."</td>";
  $Size = "<td style='border: 1px solid black'>".$values[$arr[2]]."</td>";
  $Color = "<td style='border: 1px solid black'>".$values[$arr[3]]."</td>";
  $Quantity = "<td style='border: 1px solid black'>".$values[$arr[4]]."</td>";
  $GST = "<td style='border: 1px solid black'>".$values[$arr[9]]."</td>";
  $Price = "<td style='border: 1px solid black'>".intval($values[$arr[4]])*intval($values[$arr[10]])."</td>";
  
  $message.="<tr>".$Name.$Size.$Color.$Quantity.$GST.$Price."</tr>";

}
$message .="</table><p></p>

Thanks & Regards,\r\n
Online Ordering System</body></html>";

// Always set content-type when sending HTML email
$header = "MIME-Version: 1.0" . "\r\n";
$header .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";

// More headers
$header .= "From: ".$c_email . "\r\n";


// echo "Hello";
mail($to,'REQUEST FOR ENQUIRY',$message,$header);
// echo "<script>alert('Your message has been submitted, We will get back to you. Thanks!!')</script>";
      
    $sql = "INSERT INTO user_notloggedin (id,c_name,c_email,c_phone,c_company,order_date,remark,products)
          VALUES
        (null,'$c_name','$c_email','$c_phone','$c_company','$date','$c_message','$OrderDetails')";
    
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