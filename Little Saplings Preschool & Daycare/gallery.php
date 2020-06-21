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
                    <h1 class="text-white">Gallery</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.php"><i class="fa fa-home"></i></a></li>
							<li><a href="index.php">Home</a></li>
							<li>Gallery</li>
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
						<h2 class="head-title text-secondry">Gallery of our classes</h2>
						<!-- <p>We provide three classes with nine to twenty children each aged twelve months to six years of age.</p> -->
					</div>
					<div class="clearfix" id="lightgallery">
						<ul id="masonry" class="dlab-gallery-listing gallery-grid-4 gallery mfp-gallery masonry-gallery">
<?php
$sql = "SELECT * FROM gallery";
$query = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($query)){
    $gallery_image = $row['gallery_image']; 
    echo $gallery_image;
?> 
							<li class="web design card-container col-lg-4 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.2s">
								<div class="dlab-box frame-box m-b30">
									<div class="dlab-thum dlab-img-overlay1 "> 
										<a href="javascript:void(0);">
											<img src="images/gallery/<?php echo $gallery_image; ?>" alt="">
										</a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<span data-exthumbimage="images/gallery/<?php echo $gallery_image; ?>" data-src=images/gallery/<?php echo $gallery_image; ?>" class="check-km" title="">
													<i class="fa fa-search icon-bx-xs"></i>
												</span>
											</div>
										</div>
									</div>
								</div>
							</li>
						<?php } ?>
						</ul>
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
