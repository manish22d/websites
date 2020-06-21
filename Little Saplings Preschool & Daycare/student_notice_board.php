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
                    <h1 class="text-white">Notice</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.php"><i class="fa fa-home"></i></a></li>
							<li><a href="index.php">Home</a></li>
							<li>Notice</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
		<!-- inner page banner END -->
        <div class="content-block">
			<div class="section-full bg-white content-inner" style="background-image:url(images/line2.png); background-size:contain;background-repeat: no-repeat;background-position: center;">
                <div class="container">
                	<div class="table-responsive">
                		<table class="table table-hover table-bordered">
						  <thead>
						    <tr>
						      <th scope="col"></th>
						      <th scope="col"> Date</th>
						      <th scope="col"> Title</th>
						      <th scope="col"> Description</th>
						    </tr>
						  </thead>
						  <tbody>
<?php
	$sql = "SELECT * FROM notice ORDER BY notice_date DESC";
	$query = mysqli_query($con,$sql);
	$i=1;
	while($row = mysqli_fetch_array($query)){
    	$notice_title = $row['notice_title'];
    	$notice_date = $row['notice_date'];
    	$timestamp = strtotime($notice_date);
    	$new_date = date("d-m-Y" , $timestamp);
    	$notice_description = $row['notice_description'];

?> 
						    <tr>
						      <th scope="row"><?php echo $i; ?></th>
						      <td width="10%"> <?php echo $new_date; ?></td>
						      <td width="20%"><?php echo $notice_title; ?></td>
						      <td><?php echo $notice_description; ?></td>
						    </tr>
<?php $i++; } ?>
						  </tbody>
						</table>
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