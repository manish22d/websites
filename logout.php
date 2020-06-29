<?php
include("header.php");
if(isset($_SESSION["user_detail"])){
	session_destroy();
	echo "<script>

		Swal.fire(
			  'You have successfully logged out',
			  '',
			  'success'
		).then(function(){
				localStorage.removeItem('cartNumbers'); 
				localStorage.removeItem('cartCost'); 
				localStorage.removeItem('productInCart'); 
		  	 	window.location = 'index.php';
		})</script>";
	// header('location:index.php');	
}
include("footer.php");

?>