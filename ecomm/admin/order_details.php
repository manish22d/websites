<?php
session_start();
include ("config/config.php");
include ("includes/header.php");
if (isset($_SESSION["admin_detail"])) {
    $selectedOption = 'pending';
    if (isset($_POST['go'])) {
        $selectedOption = $_POST['orders'];
    }
    ?>
<body>
	<script src="js/saveAsExcel.js"></script>
	
	<div id="mynav">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse"
				data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation" onclick="myFunction()">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto nav-tabs ">
					<li class="nav-item "><a class="nav-link" href="main.php">Home <span
							class="sr-only">(current)</span>
					</a></li>
					<li class="nav-item"><a class="nav-link"
						href="product/total_products.php">Total Products</a></li>
					<li class="nav-item"><a class="nav-link" href="contact_details.php">Inquiries</a>
					</li>
					<li class="nav-item"><a class="nav-link" href="user_details.php">User
							Details</a></li>
					<li class="nav-item"><a class="nav-link active"
						href="order_details.php">Order Details</a></li>
					<li class="nav-item"><a class="nav-link" href="pending_user.php">Pending
							User</a></li>
					<li class="nav-item"><a class="nav-link" href="size/size.php">Size</a></li>
					<li class="nav-item"><a class="nav-link" href="color/color.php">Color</a></li>
					<li class="nav-item"><a class="nav-link" href="banner/banner.php">Banner</a></li>
					<li class="nav-item"><a class="nav-link" href="feature/feature.php">Feature
							Image</a></li>
				</ul>
				<a href="logout.php" title="Logout"> <img
					src="assets/images/logout.png" alt="" style="width: 40px"
					class="img-responsive">
				</a>
			</div>
		</nav>
	</div>
	<div id="welcome_page">
		<div class="container-fluid">
			<div class="row my-3">
				<div class="col-md-12">
					<div class="welcome_header text-center">
						<h1>Order Details</h1>
					</div>
				</div>
				<div>
					<form action="" method="POST">
						<label for="orders">Choose Order Details: </label> <select
							name="orders" id="orders">
							<option value="all"
							<?php if($selectedOption == "all") echo "selected"; ?>>All</option>
							<option value="pending"
							<?php if($selectedOption == "pending") echo "selected"; ?>>Pending</option>
							<option value="served"
							<?php if($selectedOption == "served") echo "selected"; ?>>Served</option>
						</select>
						<button name="go" type="submit" class="btn btn-primary btn-sm ml-2">Go</button>
						<button type="button" class="btn btn-primary btn-sm ml-2" onClick="exportData()">export to excel</button>
					</form>
				</div>
			</div>

			<div class="my-5">
				<form name="frmUser" method="post" action="">
					<table class="table table-hover" id="export">
						<thead>
							<tr>
								<th></th>
								<th scope="col">Sr No</th>
								<th scope="col">Order Status</th>
								<th scope="col">Full Name</th>
								<th scope="col">Email Id</th>
								<th scope="col">Mobile No.</th>
								<th scope="col">Company Name</th>
								<th scope="col">Order Date</th>
								<th scope="col">Remark</th>
								<th scope="col">Products Name</th>
								<th scope="col">Quantity</th>
								<th scope="col">Size</th>
								<th scope="col">Color</th>
								<th scope="col">Price Per Set</th>
								<th scope="col">Total Cost</th>
								<th></th>
								<th>
							
							</tr>
						</thead>
						<tbody>
    <?php
    $sql = "SELECT * FROM user_notloggedin ";

    if ($selectedOption != "" && $selectedOption != "all") {
        $sql = $sql . "WHERE status = '$selectedOption'";
    }

    $sql = $sql . " ORDER BY id DESC";


    $query = mysqli_query($con, $sql);
    if (! $query) {
        echo "fail" . mysqli_error($con);
    }
    $i = 1;
    $j = 0;
    while ($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        $name = $row['c_name'];
        $email = $row['c_email'];
        $phone = $row['c_phone'];
        $company = $row['c_company'];
        $order_date = $row['order_date'];
        $remark = $row['remark'];
        $status = $row['status'];
        $products = $row['products'];
        ?> 
        <tr>
			<td><input type="checkbox" name="orders[]" value="<?php echo $id; ?>"></td>
			<th scope="row"><?php echo $i; ?></th>
			<td><?php echo $status ?></td>
			<td width="10%"> <?php echo $name ; ?></td>
			<td width="10%"><?php echo $email; ?></td>
			<td><?php echo $phone ?></td>
			<td><?php echo $company;  ?></td>
			<td><?php echo $order_date; ?></td>
			<td><?php echo $remark ?></td>
			<?php

		$a = json_decode($products, TRUE);
		// echo $values[$arr[1]] . " x " . $valu/es[$arr[5]] . " ( " . $values[$arr[2]] . " , " . $values[$arr[3]] . " )</br>";
			//echo $values[$arr[10]];
		//Product Name
		echo "<td style='width:100%'>";
        foreach ($a as $key => $values) {
			$arr = array_keys($values);
			echo $values[$arr[1]]."</br>";
		}
		echo " </td>";
		//Quantity
		echo "<td>";
        foreach ($a as $key => $values) {
			$arr = array_keys($values);
			echo $values[$arr[4]]."</br>";
		}
		echo " </td>";
		//Size
		echo "<td>";
        foreach ($a as $key => $values) {
			$arr = array_keys($values);
			echo $values[$arr[2]]."</br>";
		}
		echo " </td>";
		//color
		echo "<td>";
        foreach ($a as $key => $values) {
			$arr = array_keys($values);
			echo $values[$arr[3]]."</br>";
		}
		echo " </td>";
		//Price Per Set
        echo "<td>";
        foreach ($a as $key => $values) {
			$arr = array_keys($values);
			echo intval($values[$arr[10]])."</br>";
		}
		echo " </td>";
        //Total Cost
        echo "<td>";
        foreach ($a as $key => $values) {
			$arr = array_keys($values);
			echo intval($values[$arr[10]])*intval($values[$arr[4]])."</br>";
		}
		echo " </td>";
        ?>
					</tr>
    <?php $i++; $j++; } ?>
    <tr>
								<!--<td colspan="4">-->
								<!--	<button class="btn btn-success" name="approve">Order Served</button>-->
								<!--</td>-->
							</tr>
						</tbody>
					</table>
					<button class="btn btn-success" name="approve">Order Served</button>
				</form>
			</div>
		</div>
	</div>

<?php
} else {
    include ("includes/footer.php");
    echo "<script>
    Swal.fire(
        'Please Login First!',
        '',
        'error'
    ).then(function(){ 
          window.location = 'index.php';
    })</script>";
}

if (isset($_POST['approve'])) {
    // echo gettype($_POST["users"]);
    if (isset($_POST["orders"])) {
        $rowCount = count($_POST["orders"]);

        for ($i = 0; $i < $rowCount; $i ++) {
            $result = mysqli_query($con, "UPDATE user_notloggedin 
          SET status = 'served' WHERE id='" . $_POST["orders"][$i] . "'");

            // $row= mysqli_fetch_array($result);
            if (! $result) {
                echo "fail: " . mysqli_error();
            } else {
                echo "<script>
    Swal.fire(
        'Updated Successfully!',
        '',
        'success'
    ).then(function(){ 
          window.location = 'order_details.php';
    })</script>";
            }
        }
    } else {
        echo "<script>alertify.error('Please select any row!', 50);</script>";
    }
}
?>
<?php 
    echo "<script>
        function exportData(){
                saveAsExcel('export', 'table.xls');
            }
		</script>";
?>