<?php
include ("connection.php");
include ("header.php");
?>

<!-- Content -->
<div class="page-content">
	<div class="dlab-bnr-inr" style="background-image:url(images/pattern/pattern.jpg); background-size:auto;">
		<div class="container">
			<div class="dlab-bnr-inr-entry">
				<h1 class="text-white">Event</h1>
				<!-- Breadcrumb row -->
				<div class="breadcrumb-row">
					<ul class="list-inline">
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>Event</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="content-block">
		<div class="section-full bg-white content-inner">
			<div class="container">
				<div class="row">
					
<?php
$sql = "SELECT * FROM event ORDER BY event_date DESC";
$query = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($query)){
	$event_date  = $row['event_date'];
    $event_title = $row['event_title'];
    $event_location = $row['event_location'];
    $event_description =  $row['event_description'];
    $event_image = $row['event_image']; 
   
    // echo  $event_date." MANISH ".$event_title;
?> 
		<div class="col-lg-4 col-md-4 col-sm-4">
			<div class="event-box" >
				<div class="event-media">
					<img src="images/event/<?php echo $event_image; ?>" alt="" class="img-responsive"/>
				</div>
				<div class="event-info">
						<div class="dlab-post-title">
				            <h3 class="post-title"><?php echo $event_title; ?></h3>
						</div>
						<div class="event-meta">
							<ul>
								<li class="post-date">
									<?php
									list($year, $month, $day) = explode('-', $event_date ); 
									$dateObj  = DateTime::createFromFormat('!m', $month);
									$monthName = $dateObj->format('F');
									?>
									
									<strong><?php echo $day; ?></strong>
									<span><?php echo $monthName; ?></span>
								</li>
								<li class="post-author">
									<!-- <i class="fa fa-map-marker"/> -->
									<?php echo $event_location; ?>
								</li>
							</ul>
						</div>
						<div class="dlab-post-text">
							<p>
								<?php echo $event_description; ?>
							</p>
						</div>
				</div>
			</div>
		</div>
  <?php } ?>  
					
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