<?php
session_start();

include("includes/header.php");
include("includes/nav.php");
//echo "manish";
//echo session_name();
// if(isset($_SESSION["admin_detail"])){
	//echo "under if ";
	session_destroy();
	echo "<script>
		Swal.fire(
			  'You have successfully logged out',
			  '',
			  'success'
		).then(function(){ 
		  	 	window.location = 'index.php';
		})</script>";
	// header('location:index.php');	
// }
include("includes/footer.php");

?>