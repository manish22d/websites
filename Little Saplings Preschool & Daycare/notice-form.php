<?php
include("connection.php");
include("header.php");
?>
    <!-- Content -->
    <div class="page-content">
		<!-- inner page banner -->
        <div class="dlab-bnr-inr" style="background-image:url(images/pattern/pattern.jpg); background-size:auto;">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Notice Form</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.php"><i class="fa fa-home"></i></a></li>
							<li><a href="index.php">Home</a></li>
							<li>Notice Form</li>
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
							<h2 class="text-secondry">Notice Form</h2>
				</div>				
					<form method="POST" enctype="multipart/form-data" class="col-md-12">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<input name="notice_date" type="date"  class="form-control" placeholder=" Notice Date">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<input name="notice_title" type="text" class="form-control"   placeholder="Notice Title" >
								</div>
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<textarea name="notice_description" rows="4" class="form-control"  placeholder="Notice Description"></textarea>
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
    	$notice_date = $_POST['notice_date'];
    	$notice_title = $_POST['notice_title'];
    	$notice_description = mysqli_real_escape_string($con,$_POST['notice_description']);
    	
    	$sql = "INSERT INTO notice (id,notice_date,notice_title,notice_description) 
    			VALUES 
    		(null,'$notice_date','$notice_title',$notice_description')";

    	$query = mysqli_query($con,$sql);
    	if(!$query){
		echo "fail".mysqli_error($con);
	}
    }
    ?>
