<?php
include ("../config/config.php");
include ("../includes/header.php");
$getid=base64_decode($_GET['token']);

if(! $con ) {
      die('Could not connect: ' . mysqli_error());
   }  
   $sql = "DELETE FROM product WHERE product_id = '$getid'";
   $query = mysqli_query($con,$sql);

   if (! mysqli_query($con, $sql)) {
      echo "Error deleting record: " . mysqli_error($con);
   }else{
   	//echo "Success";
   	echo '<script type="text/javascript">
               Swal.fire(
           "Deleted successully!",
           "",
           "success").then(function(){
             window.location = "total_products.php";
            });
      </script>';
   }

?>