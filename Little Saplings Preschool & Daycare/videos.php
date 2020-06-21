<?php
include ("connection.php");
include ("header.php");
?>
    <!-- Content -->
    <div class="page-content">

		<!-- inner page banner -->
        <div class="dlab-bnr-inr" style="background-image:url(images/pattern/pattern.jpg); background-size:auto;">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Videos</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.php"><i class="fa fa-home"></i></a></li>
							<li><a href="index.php">Home</a></li>
							<li>Videos</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
		<!-- inner page banner END -->
        <div class="content-block">
			<div class="section-full content-inner">
				<div class="container">
					<div class="section-head text-center">
						<h2 class="head-title text-secondry">Videos of Activity</h2>
						<!-- <p>We provide three classes with nine to twenty children each aged twelve months to six years of age.</p> -->
					</div>
					<div class="row">
<?php
$sql = "SELECT * FROM videos ORDER BY gallery_date DESC";
$query = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($query)){
    $gallery_date = $row['gallery_date'];
    $timestamp = strtotime($gallery_date);
    $new_date = date("d-m-Y" , $timestamp);
    $gallery_video = $row['gallery_video'];
    $gallery_video_description = $row['gallery_video_description'];
    $media = explode(".", $gallery_video);
    //echo count($a);
//     echo array_count_values($a);
    //echo $a[count($a)-1];
//     echo mime_content_type("filename.mp4");
    // echo $gallery_video;
?> 
						<div class="col-md-4">
							<video width="100%" height="200" controls autoplay>
								<source src="images/gallery/videos/<?php echo $gallery_video; ?>" type="video/mp4">
         							Your browser does not support the video tag.
							</video>
							<div class="text-center">
								<p><?php echo $new_date; ?></p>
								<p><?php echo $gallery_video_description; ?></p>
							</div>
						</div>
<?php } ?>
					</div>
					</div>
				</div>
			</div>
		</div>
    </div>
    <!-- Content END-->
	<!-- Footer -->
    <?php
    include("footer.php");
    ?>
