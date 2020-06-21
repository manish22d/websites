<?php 
include("connection.php");
include ("header.php");
?>

    <!-- Content -->
    <div class="page-content bg-white">
        <!-- Slider Banner -->
        <!-- Main Slider -->
        <div class="owl-slider owl-carousel owl-theme owl-btn-center-lr dots-none">
			<div class="item slide-item">
				<div class="slide-item-img"><img src="images/main-slider/slider1.jpg" class="" alt=""/></div>
				<div class="slide-content">
					<div class="slide-content-box container">
						<div class="slide-content-area">
							<h2 class="slider-title" style="background-color: rgb(255,255,255,0.8); padding: 8px;">Best Preschool in Ravet with </span> <span>Inspiration of Montessori</span> <span> way of Teaching</span></h2>
							<p style="background-color: rgb(255,255,255,0.8); padding: 8px;">Preschool in Ravet with the aim to contribute to society</p>
							<a href="contact-us.php" class="btn btn-md kids-btn radius-xl">Join us</a>
						</div>
					</div>
				</div>
			</div>
			<div class="item slide-item">
				<div class="slide-item-img"><img src="images/main-slider/slider2.jpg" class="" alt=""/></div>
				<div class="slide-content">
					<div class="slide-content-box container">
						<div class="slide-content-box container">
							<div class="slide-content-area">
								<h2 class="slider-title" style="background-color: rgb(255,255,255,0.8); padding: 8px;">Education is… doing anything <span> that changes you.</span></h2>
								<p style="background-color: rgb(255,255,255,0.8); padding: 8px;">Preschool in Ravet with the aim to contribute to society</p>
								<a href="contact-us.php" class="btn btn-md kids-btn radius-xl">Join us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item slide-item">
				<div class="slide-item-img"><img src="images/main-slider/slider3.jpg" class="" alt=""/></div>
				<div class="slide-content">
					<div class="slide-content-box container">
						<div class="slide-content-box container">
							<div class="slide-content-area">
								<h2 class="slider-title" style="background-color: rgb(255,255,255,0.8); padding: 8px;">Education is not preparation <span> for life; education is life itself.</span></h2>
								<p style="background-color: rgb(255,255,255,0.8); padding: 8px;">Preschool in Ravet with the aim to contribute to society</p>
								<a href="contact-us.php" class="btn btn-md kids-btn radius-xl">Join us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> 
		<!-- Slider Banner -->
		<div class="content-block">
            <!-- About Us -->
            <div class="section-full bg-white content-inner-1 text-center">
                <div class="container">
					<div class="section-head">
						<h2 class="head-title text-secondry">Welcome to Little Saplings Preschool and Daycare</h2>
						<p>Education is… doing anything that changes you.</p>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeIn" data-wow-delay="0.2s"  data-wow-duration="2s">
							<div class="icon-bx-wraper sr-iconbox m-b20">
								<div class="icon-lg m-b20">
									<a href="javascript:void(0);" class="icon-cell"><img src="images/icon/icon1.jpg" alt=""/></a>
								</div>
								<div class="icon-content">
									<h6 class="dlab-tilte">To Think Creatively<br/>and Create</h6>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeIn" data-wow-delay="0.4s"  data-wow-duration="2s">
							<div class="icon-bx-wraper sr-iconbox m-b20">
								<div class="icon-lg m-b20">
									<a href="javascript:void(0);" class="icon-cell"><img src="images/icon/icon2.jpg" alt=""/></a>
								</div>
								<div class="icon-content">
									<h6 class="dlab-tilte">To Feel Fine and to<br/>Understand Emotions</h6>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeIn" data-wow-delay="0.6s"  data-wow-duration="2s">
							<div class="icon-bx-wraper sr-iconbox m-b20">
								<div class="icon-lg m-b20">
									<a href="javascript:void(0);" class="icon-cell"><img src="images/icon/icon3.jpg" alt=""/></a>
								</div>
								<div class="icon-content">
									<h6 class="dlab-tilte">To be Independent<br/>and Active</h6>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeIn" data-wow-delay="0.8s"  data-wow-duration="2s">
							<div class="icon-bx-wraper sr-iconbox">
								<div class="icon-lg m-b20">
									<a href="javascript:void(0);" class="icon-cell"><img src="images/icon/icon4.jpg" alt=""/></a>
								</div>
								<div class="icon-content">
									<h6 class="dlab-tilte">To Apply<br/>Knowledge in Life</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
			<div class="section-full bg-white content-inner-2 about-box" style="background-image:url(images/line.png); background-size:contain;background-repeat: no-repeat;background-position: center;">
                <div class="container">
					<div class="row">
						<div class="col-lg-7 col-md-12 col-sm-12 col-12 wow fadeIn" data-wow-delay="0.2s"  data-wow-duration="2s">
							<div class="section-head">
								<h2 class="head-title text-secondry text-center">Student Notice Board</h2>
								<div class=" text-white m-3" style="background-image: url(images/notice_board.jpg);background-size:cover;background-repeat: no-repeat;background-position: center;padding: 4rem;">
<?php
	$sql = "SELECT * FROM notice ORDER BY notice_date DESC LIMIT 1";
	$query = mysqli_query($con,$sql);

	while($row = mysqli_fetch_array($query)){
    	$notice_title = $row['notice_title'];
    	$notice_date = $row['notice_date'];
    	$timestamp = strtotime($notice_date);
    	$new_date = date("d-m-Y" , $timestamp);
    	$notice_description = $row['notice_description'];
  ?> 
									<div class="notice_content">
										<div class="notice_heading">
											<h2><?php echo $notice_title; ?></h2>
										</div>
										<div class="notice_date">
											<p><?php echo $new_date; ?></p>
										</div>
										<div class="notice_description">
											<p><?php echo substr($notice_description, 0,250); ?> ..... <a href="student_notice_board.php" style="color: red">Read More</a></p>
										</div>
									</div>
								<?php } ?>
								</div>
								<div class="text-center">
								<a href="student_notice_board.php" class="btn btn-md kids-btn radius-xl">Know more</a>
							</div>
							</div>
						</div>
						<div class="col-lg-5 col-md-12 col-sm-12 col-12">
							<div class="icon-bx-wraper left" >
								<div class="icon-lg m-b20"> <span class="icon-cell text-blue"><i class="flaticon-bricks"></i></span> </div>
								<div class="icon-content" style="background-color: #ff9800;padding: 10px;border-radius: 5%">
									<h2 class="dlab-tilte">Preschool</h2>
									<p>Preschool is an early childhood program conducted in an environment, with lots of play, age appropriate material to enable children learn while playing. It is not formal way of schooling.</p>
								</div>
							</div>
							<div class="icon-bx-wraper left">
								<div class="icon-lg m-b20"> <span class="icon-cell text-green"><i class="flaticon-rattle"></i></span> </div>
								<div class="icon-content" style="background-color: rgb(154, 208, 0);padding: 10px;border-radius: 5%">
									<h2 class="dlab-tilte">Daycare</h2>
									<p>Day care is a second home for child after its school hours. The spacious environment welcomes the students for day activities.</p>
								</div>
							</div>
							<div class="icon-bx-wraper left">
								<div class="icon-lg m-b20"> <span class="icon-cell text-orange"><i class="flaticon-puzzle"></i></span> </div>
								<div class="icon-content" style="background-color: #fff000;padding: 10px; border-radius: 5%">
									<h2 class="dlab-tilte">TTC</h2>
									<p>TTC program is for  preschool teachers conducted by experience and passionate experts. The training is based on Dr Maria Montessori way of schooling. Practical demonstration with toys is conducted. Please visit the school for first hand experience and grow your career to new heights.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
			<div class="section-full bg-white content-inner-2 about-content bg-img-fix" style="background-image:url(images/dark_bg.jpeg);">
				<div class="about-overlay-box"></div>
                <div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-12 col-sm-12 col-12 wow fadeIn" data-wow-delay="0.2s"  data-wow-duration="2s">
							<div class="section-head">
								<h2 class="head-title text-yellow">Let The Learning Begin With Us</h2>
								<p class="text-white">The child learns at very fast pace during his growth year of 2 to 6. The child needs complete care, love and guidance during this time. They learn through self-experiment. Necessary environment needs to be given to the child for their own learning.</p>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-12"></div>
					</div>
				</div>
            </div>
			
			<div class="section-full bg-white content-inner-1" style="background-image: url(images/testimonial_bg.jpg);background-size: cover">
                <div class="container">
					<div class="section-head text-center" style="background-color: rgb(255,255,255,0.6)">
						<h2 class="head-title">What Our Parents Say</h2>
						<p>We have an excellent teacher to child ratio at our school to ensure that each child receives the attention he or she needs</p>
					</div>
					<div class="client-carousel owl-carousel owl-theme sprite-nav ">
						<div class="item">
							<div class="client-box">
								<div class="testimonial-detail clearfix">
									<div class="testimonial-pic radius">
										<img src="images/parent_icon.png" width="100" height="100" alt="">
									</div>
									<h5 class="testimonial-name m-t0 m-b5">Guardian</h5> 
									<span>Father of student Riyansh Malli</span> 
								</div>
								<div class="testimonial-text">
									<p>Best Preschool is Ravet. We are amazed with the activity conducted by the school for the whole year.Thank you!</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="client-box">
								<div class="testimonial-detail clearfix">
									<div class="testimonial-pic radius">
										<img src="images/parent_icon.png" width="100" height="100" alt="">
									</div>
									<h5 class="testimonial-name m-t0 m-b5">Mr.Babasaheb Awhale</h5> 
									<span>Father of Student Utkarsh</span> 
								</div>
								<div class="testimonial-text">
									<p>Nice Pre - School in Ravet Pune. My son started speaking and in very conversant with shapes, he just 3.5 years.Thank you!</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="client-box">
								<div class="testimonial-detail clearfix">
									<div class="testimonial-pic radius">
										<img src="images/parent_icon.png" width="100" height="100" alt="">
									</div>
									<h5 class="testimonial-name m-t0 m-b5">Dr. Mrunal Khorate</h5> 
									<span>Mother of student Omansh Khorate</span> 
								</div>
								<div class="testimonial-text">
									<p>Best Preschool near me. My son who has come from USA settled well in the school. Teachers and care givers are very committed. Thank you!</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="client-box">
								<div class="testimonial-detail clearfix">
									<div class="testimonial-pic radius">
										<img src="images/parent_icon.png" width="100" height="100" alt="">
									</div>
									<h5 class="testimonial-name m-t0 m-b5">Guardian</h5> 
									<span>Mother of student Kabir</span> 
								</div>
								<div class="testimonial-text">
									<p>Best Preschool in Ravet Pune. My son Kabir loves the school so much that even on holiday he wants to go to school. Thank you!</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="client-box">
								<div class="testimonial-detail clearfix">
									<div class="testimonial-pic radius">
										<img src="images/parent_icon.png" width="100" height="100" alt="">
									</div>
									<h5 class="testimonial-name m-t0 m-b5">Guardian</h5> 
									<span>Father of Student Rishi Tiwari</span> 
								</div>
								<div class="testimonial-text">
									<p>Preschool is Ravet Little Saplings is the best one my son Rishi adjusted well and I want the school mangement to start and run all classes. Thank you!</p>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
			<div class="section-full bg-white content-inner">
				<div class="container">
					<div class="section-head text-center">
						<h2 class="head-title text-secondry">From the Blog</h2>
						<p>Director's View Point</p>
					</div>
					<div class="blog-carousel owl-carousel owl-theme dots-none sprite-nav owl-btn-center-lr">
						<div class="item">
							<div class="blog-post blog-grid ">
                                <div class="dlab-post-media frame-box">
									<a href="blog.php"><img src="images/blog_icon.jpg" alt=""></a>
								</div>
                                <div class="dlab-info">
                                    <div class="dlab-post-title">
                                        <h4 class="post-title"><a href="blog.php">Little Saplings Preschool and Day Care</a></h4>
                                    </div>
                                    <div class="dlab-post-text">
                                       <p>Little Saplings Preschool and Day Care has been started as New Venture from 18th February 2019. It is the initiative of Shri Santosh N Patil and Mrs. Manisha S Patil, with a sole purpose to give children a valuable gift of preschool years....</p>
                                    </div>
									<div class="dlab-post-readmore"> 
										<a href="blog.php" title="READ MORE" rel="bookmark" class="btn-link">Read More</a>
									</div>
                                </div>
                            </div>
						</div>
						<div class="item">
							<div class="blog-post blog-grid ">
                                <div class="dlab-post-media frame-box">
									<a href="blog.php"><img src="images/blog_icon.jpg" alt=""></a>
								</div>
                                <div class="dlab-info">
                                    <div class="dlab-post-title">
                                        <h4 class="post-title"><a href="blog.php">Preschool Yrs - Precious gift by parents to their child</a></h4>
                                    </div>
                                    <div class="dlab-post-text">
                                       <p>It is a proud and great moment in one's life to become parent.  Proper upbringing of child is a prime responsibility. It is a pleasure to see and witness the growth of child from very nascent age to a grown up person....</p>
                                    </div>
									<div class="dlab-post-readmore"> 
										<a href="blog.php" title="READ MORE" rel="bookmark" class="btn-link">Read More</a>
									</div>
                                </div>
                            </div>
						</div>
						<div class="item">
							<div class="blog-post blog-grid ">
                                <div class="dlab-post-media frame-box">
									<a href="blog.php"><img src="images/blog_icon.jpg" alt=""></a>
								</div>
                                <div class="dlab-info">
                                    <div class="dlab-post-title">
                                        <h4 class="post-title"><a href="blog.php">Little Saplings Preschool and Day Care</a></h4>
                                    </div>
                                    <div class="dlab-post-text">
                                       <p>Little Saplings Preschool and Day Care has been started as New Venture from 18th February 2019. It is the initiative of Shri Santosh N Patil and Mrs. Manisha S Patil, with a sole purpose to give children a valuable gift of preschool years....</p>
                                    </div>
									<div class="dlab-post-readmore"> 
										<a href="blog.php" title="READ MORE" rel="bookmark" class="btn-link">Read More</a>
									</div>
                                </div>
                            </div>
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
