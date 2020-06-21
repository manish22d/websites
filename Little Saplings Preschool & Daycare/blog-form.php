<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="Little Saplings - Best Preschool and Daycare in Ravet" />
	<meta property="og:title" content="Little Saplings - Best Preschool and Daycare in Ravet" />
	<meta property="og:description" content="Little Saplings - Best Preschool and Daycare in Ravet" />
	<meta property="og:image" content="01_Preview.png" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<!-- <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" /> -->
	
	<!-- PAGE TITLE HERE -->
	<title>Admin | Little Saplings</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="css/plugins.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/templete.css">
	<link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
</head>
<body id="bg">
<div class="page-wraper">
<div id="loading-area" class="loading-1"><h1 class="loader1">Loading</h1></div>
	<!-- header -->
    <header class="site-header header mo-left">
		<div class="top-bar">
			<div class="container">
				<div class="row d-flex justify-content-between">
					<div class="dlab-topbar-left">
						<ul>
							<li><a href="tel:+917875525074" style="color: white;"><i class="fa fa-phone m-r5"></i> +91 7875525074</a></li>
						</ul>
					</div>
					<div class="dlab-topbar-right">
						<ul>
							<li><i class="fa fa-clock-o m-r5"></i> Opening Time : 9 am-6:30pm</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- main header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion">
						<a href="index.php" class="dez-page"><img src="images/logo.png" alt=""></a>
					</div>
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
						<div class="logo-header mostion">
							<a href="index.php" class="dez-page"><img src="images/logo.png" alt=""></a>
						</div>
                        <ul class="nav navbar-nav">	
							<li><a href="index.php">Home</a>	
							</li>
							<li><a href="about.php">About </a>
							</li>
							<li><a href="javascript:void(0)">Classes <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="classes.php">Classes</a></li>
									<li><a href="other-activities.php">Other Activities</a></li>
								</ul>
							</li>
							<li><a href="javascript:void(0)">Services <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="preschool.php">Preschool</a></li>
									<li><a href="daycare.php">Daycare</a></li>
									<li><a href="ttc.php">TTC</a></li>
								</ul>
							</li>
							<li><a href="gallery.php">Gallery</i></a>
							</li>
							<li><a href="event.php">Event</a></li>
							<li><a href="blog.php">Blog </a>
							</li>
							<li><a href="contact-us.php">Contact</a></li>
						</ul>		
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content">
		<!-- inner page banner -->
        <div class="dlab-bnr-inr" style="background-image:url(images/pattern/pattern.jpg); background-size:auto;">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Blog Form</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.php"><i class="fa fa-home"></i></a></li>
							<li><a href="index.php">Home</a></li>
							<li>Blog Form</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <div class="container">
        	<div class="row contact-box content-inner-5">
        	<div class="section-head text-center col-md-12">
							<h2 class="text-secondry">Blog Form</h2>
				</div>
				<div class="dzFormMsg"></div>				
					<form method="POST" enctype="multipart/form-data" class="col-md-12">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<input name="blogdate" type="text"  class="form-control" placeholder=" Blog Date">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<input name="blogimage" type="file" class="form-control"   placeholder="Blog Image" >
								</div>
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<input name="blogtitle" type="text" class="form-control"   placeholder="Blog Title" >
								</div>
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<input name="blogsmall" type="text" class="form-control"   placeholder="Blog Small Content" >
								</div>
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<textarea name="blogdescription" rows="4" class="form-control"  placeholder="Blog Description"></textarea>
								</div>
							</div>
							
							<div class="col-md-12 col-sm-12 text-center">
								<input name="submit" type="submit" value="Submit" class="btn radius-xl btn-lg" name="okay">	
							</div>
						</div>

					</form>
			</div>
        </div>
    </div>
 </div>
    <!-- Content END-->
	<!-- Footer -->
<?php
    include("footer.php");
    if (isset($_POST['submit'])){
    	$blogdate = $_POST['blogdate'];
    	$blogtitle = mysqli_real_escape_string($con,$_POST['blogtitle']);
    	$blogsmall = mysqli_real_escape_string($con,$_POST['blogsmall']);
    	$blogdescription = mysqli_real_escape_string($con,$_POST['blogdescription']);
    	$images=$_FILES['blogimage'] ;
		$name=$images['name'];
		$tempath=$images['tmp_name'];
    	
    	echo $blogdate;  echo$blogdescription; echo $blogtitle; echo $blogsmall; echo $name;

    	$sql = "INSERT INTO blog (id,blog_date,blog_title,blog_small,blog_description,blog_image) 
    			VALUES 
    		(null,'$blogdate','$blogtitle','$blogsmall','$blogdescription','$name')";

    	$query = mysqli_query($con,$sql);
    	if($name!="")
		{
		move_uploaded_file($tempath,'images/blog/'.$name);
		}
    	if(!$query){
		echo "fail".mysqli_error($con);
	}
    }
    ?>
