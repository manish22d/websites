<?php
session_start();
include ("../config/config.php");
include ("../includes/header.php");
if (isset($_SESSION["admin_detail"])) {
    ?>

<body>
	<script src="../js/footable.js"></script>
	<script src="../js/footable.min.js"></script>
	<script src="../js/tablefilter/tablefilter.js"></script>
	<!---------Nav Menu ----------------->
	<div id="mynav">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
				onclick="myFunction()">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto nav-tabs ">
					<li class="nav-item "><a class="nav-link" href="../main.php">Home <span
								class="sr-only">(current)</span></a></li>
					<li class="nav-item"><a class="nav-link active" href="total_products.php">Total Products</a></li>
					<li class="nav-item"><a class="nav-link" href="../contact_details.php">Inquiries</a>
					</li>
					<li class="nav-item"><a class="nav-link" href="../user_details.php">User
							Details</a></li>
					<li class="nav-item"><a class="nav-link" href="../order_details.php">Order
							Details</a></li>
					<li class="nav-item"><a class="nav-link" href="../pending_user.php">Pending
							User</a></li>
					<li class="nav-item"><a class="nav-link" href="../size/size.php">Size</a></li>
					<li class="nav-item"><a class="nav-link" href="../color/color.php">Color</a></li>
					<li class="nav-item"><a class="nav-link" href="../banner/banner.php">Banner</a></li>
					<li class="nav-item"><a class="nav-link" href="../feature/feature.php">Feature Image</a></li>
				</ul>
				<a href="logout.php" title="Logout"> <img src="../assets/images/logout.png" alt="" style="width: 40px"
						class="img-responsive">
				</a>
			</div>
		</nav>
	</div>
	<!---------// Nav Menu ----------------->

	<!---------Total Product Table ----------------->

	<div id="welcome_page">
		<div class="container-fluid">
			<div class="row my-3">
				<div class="col-md-12">
					<div class="welcome_header text-center">
						<h1>Total Products</h1>
					</div>
				</div>
				<div class="col-md-6 text-left">
					<a href="add_product.php">
						<button type="button" class="btn btn-primary mt-2">
							<i class="fa fa-plus"></i> Add Product
						</button>
					</a>
				</div>
			</div>
			<div class="my-5">
				<table id="productTable" class="table table-hover table-responsive table-bordered" data-toggle="table"
					data-filtering="true">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Date</th>
							<th scope="col">Image</th>
							<th scope="col">Image Name</th>
							<th scope="col">Other Image</th>
							<th scope="col">Name</th>
							<th scope="col">Size</th>
							<th scope="col">Price</th>
							<th scope="col">Items in set</th>
							<th scope="col">Color</th>
							<th scope="col">Brand</th>
							<th scope="col">Sku Id</th>
							<th scope="col">GST</th>
							<!-- <th scope="col">Discounted Price</th> -->
							<th scope="col">Description</th>
							<th scope="col">Collection</th>
							<th scope="col">Category</th>
							<th scope="col">Tags</th>
							<th scope="col">Stock</th>
							<th scope="col">Rating</th>
							<th scope="col">Price Range (Rs.)</th>
							<th></th>
							<th></th>

						</tr>
					</thead>
					<tbody>
						<?php
    $sql = "SELECT * FROM product ORDER BY product_id DESC";
    $query = mysqli_query($con, $sql);
    if (! $query) {
        echo "fail" . mysqli_error($con);
    }
    $i = 1;
    while ($row = mysqli_fetch_array($query)) {
        $id = $row['product_id'];
        $upload_date = $row['upload_date'];
        $img = $row['img'];
        $other_img = $row['other_img'];
        $name = $row['name'];
        // $size = $row['size'];
        $color = $row['color'];
        $brand = $row['brand'];
        $sku_id = $row['sku_id'];
        $gst = $row['gst'];
        // $discounted_price = $row['discounted_price'];
        $description = $row['description'];
        $collection = $row['collection'];
        $category = $row['category'];
        $tags = $row['tags'];
        $stock = $row['stock'];
		$rating = $row['rating'];
		$min_price = $row['min_price'];
		$max_price = $row['max_price'];
		// echo $name;
		

        ?>
						<tr>
							<th scope="row"><?php echo $i; ?></th>
							<td><?php echo $upload_date; ?></td>
							<td><img alt="" class="img-fluid"
									src="../../images/product/<?php echo $collection;?>/<?php echo $category;?>/<?php echo $img ?>">
							</td>
							<td><?php echo $img ; ?></td>
							<td><?php echo wordwrap($other_img,16,"<br>\n",true); ?></td>
							<td><?php echo $name; ?></td>
							<?php 
							$sql2 = "SELECT * FROM product_size WHERE product_id = $id";
							$query2 = mysqli_query($con, $sql2);
							if (! $query2) {
									echo "fail" . mysqli_error($con);
								}
							$size = array();
							$price_per_item = array();
							$items_per_set = array();
							while ($row2 = mysqli_fetch_array($query2)) {
								array_push($size, $row2['size']);
								array_push($price_per_item, $row2['price_per_item']);
								array_push($items_per_set, $row2['items_per_set']);
								
							}
							echo "<td>";
							foreach($size as $value){
								echo $value."<br>";
							}
							echo "</td>";
							echo "<td>";
							foreach($price_per_item as $value){
								echo $value."<br>";
							}
							
							echo "</td>";
							echo "<td>";
							foreach($items_per_set as $value){
								echo $value."<br>";
							}
							echo "</td>";
							echo "<td>";
							foreach($size as $value){
								$getColorSQL = "SELECT `color` FROM `product_size` where `product_id`=$id AND `size`='$value'";
								$getColorQuery = mysqli_query($con, $getColorSQL);
								$row = mysqli_fetch_array($getColorQuery);
								echo $row['color']."<br>";
							}
							echo "</td>";
							?>


							<!-- <td><?php echo $color; ?></td> -->
							<td><?php echo $brand; ?></td>
							<td><?php echo $sku_id; ?></td>
							<td><?php echo $gst; ?></td>
							<!-- <td><?php echo $discounted_price; ?></td> -->
							<td><?php echo substr($description,0,40); ?></td>
							<td><?php echo $collection; ?></td>
							<td><?php echo $category; ?></td>
							<td><?php echo $tags; ?></td>
							<td><?php echo $stock; ?></td>
							<td><?php echo $rating; ?></td>
							<td><?php echo $min_price.".00 - ".$max_price.".00" ?></td>
							<td><a href="deleteProduct.php?token=<?php echo base64_encode($id); ?>"><button
										class="btn btn-danger"
										onclick="return confirm('Are you sure want to delete this row ?')">Delete</button></a>
							</td>
							<!-- <td><form><input type="submit" name="del" value="delete"></form></td> -->
							<td><a href="update_product.php?token=<?php echo base64_encode($id); ?>"><button
										type="button" class="btn btn-info">Update</button></a></td>
						</tr>
						<?php  $i++; } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<script>

		var table3Filters = {
			base_path: '../js/tablefilter/',
			// grid_layout: true,
			alternate_rows: true,
			btn_reset: true,
			rows_counter: {
				text: 'Total Products: '
			},
			loader: {
				html: '<div id="lblMsg"></div>',
				css_class: 'myLoader'
        	},
			status_bar: true,
			highlight_keywords: true,
			no_results_message: false,
			col_10: "select",
			col_11: "select",
			col_types: ['number'],
			paging: {
          		results_per_page: ['Records: ', [10, 25, 50, 100]]
        	},
			extensions: [{
				name: 'sort'
			}]
		}

		var tf = new TableFilter('productTable', table3Filters);
		tf.init();
	</script>

	<!---------//Total Product Table ----------------->
	<?php
include ("../includes/footer.php");
} else {
    echo "<script>
    Swal.fire(
        'Please Login First!',
        '',
        'error'
    ).then(function(){ 
          window.location = 'login.php';
    })</script>";
}
?>