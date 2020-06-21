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
                    <h1 class="text-white">Event Form</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.php"><i class="fa fa-home"></i></a></li>
							<li><a href="index.php">Home</a></li>
							<li>Event Form</li>
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
							<h2 class="text-secondry">Event Form</h2>
				</div>				
					<form method="POST" enctype="multipart/form-data" class="col-md-12">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<input name="eventdate" type="date"  class="form-control" placeholder=" Event Date">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<input name="eventimage" type="file" class="form-control"   placeholder="Event Image" >
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<input name="eventtitle" type="text" class="form-control"   placeholder="Event Title" >
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<input name="eventlocation" type="text" class="form-control"   placeholder="Event Location" >
								</div>
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<textarea name="eventdescription" rows="4" class="form-control"  placeholder="Event Description"></textarea>
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
    	$eventdate = $_POST['eventdate'];
    	$eventtitle = mysqli_real_escape_string($con,$_POST['eventtitle']);
    	$eventlocation = mysqli_real_escape_string($con,$_POST['eventlocation']);
    	$eventdescription = mysqli_real_escape_string($con,$_POST['eventdescription']);
    	$images=$_FILES['eventimage'] ;
		$name=$images['name'];
		$tempath=$images['tmp_name'];
    	
    	$sql = "INSERT INTO event (id,event_date,event_title,event_location,event_description,event_image) 
    			VALUES 
    		(null,'$eventdate','$eventtitle','$eventlocation','$eventdescription','$name')";

    	$query = mysqli_query($con,$sql);
    	if($name!="")
		{
		move_uploaded_file($tempath,'images/event/'.$name);
		}
    	if(!$query){
		echo "fail".mysqli_error($con);
	}
    }
    ?>
