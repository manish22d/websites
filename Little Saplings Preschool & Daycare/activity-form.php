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
                    <h1 class="text-white">Gallery Video Form</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.php"><i class="fa fa-home"></i></a></li>
							<li><a href="index.php">Home</a></li>
							<li>Gallery Video Form</li>
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
							<h2 class="text-secondry">Gallery Video Form</h2>
				</div>				
					<form method="POST" enctype="multipart/form-data" class="col-md-12">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<input name="gallery_date" type="date"  class="form-control" placeholder=" Video Date">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<input name="gallery_video" type="file" class="form-control"   placeholder="Gallery Video" >
								</div>
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<textarea name="gallery_video_description" rows="4" class="form-control"  placeholder="Video Description"></textarea>
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
    	$gallery_date = $_POST['gallery_date'];
    	$gallery_video_description = mysqli_real_escape_string($con,$_POST['gallery_video_description']);
    	$images=$_FILES['gallery_video'] ;
		$name=$images['name'];
		$tempath=$images['tmp_name'];
    	
    	$sql = "INSERT INTO videos (gallery_id,gallery_date,gallery_video_description,gallery_video) 
    			VALUES 
    		(null,'$gallery_date','$gallery_video_description','$name')";

    	$query = mysqli_query($con,$sql);
    	if($name!="")
		{
		move_uploaded_file($tempath,'images/gallery/videos/'.$name);
		}
    	if(!$query){
		echo "fail".mysqli_error($con);
	}
    }
    ?>
