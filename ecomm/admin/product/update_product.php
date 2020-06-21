<?php
include ("../config/config.php");
include ("../includes/header.php");
$getid = base64_decode($_GET['token']);
$sql = "SELECT * FROM product where product_id='$getid'";
$query = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($query)) {
	$id = $row['product_id'];
    $name = $row['name'];
    $collection = $row['collection'];
    $selectedSize = explode(",", $row['size']);
	$selectedColor = explode(",", $row['color']);
	$gst = $row['gst'];
    $brand = $row['brand'];
    $sku_id = $row['sku_id'];
    $stock = $row['stock'];
    $category = $row['category'];
    $rating = $row['rating'];
    $tags = $row['tags'];
    $description = $row['description'];
    $img = $row['img'];
    $other_img = $row['other_img'];
}

?>

<body>
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
					<li class="nav-item"><a class="nav-link" href="../contact_details.php">Inquiries</a></li>
					<li class="nav-item"><a class="nav-link" href="../user_details.php">User
							Details</a></li>
					<li class="nav-item"><a class="nav-link" href="../order_details.php">Order Details</a></li>
					<li class="nav-item"><a class="nav-link" href="../pending_user.php">Pending
							User</a></li>
					<li class="nav-item"><a class="nav-link" href="../size/size.php">Size</a></li>
					<li class="nav-item"><a class="nav-link" href="../color/color.php">Color</a></li>
					<li class="nav-item"><a class="nav-link" href="../banner/banner.php">Banner</a></li>
					<li class="nav-item"><a class="nav-link" href="../feature/feature.php">Feature Image</a></li>
				</ul>

				<a href="logout.php" title="Logout"> <img src="assets/images/logout.png" alt="" style="width: 40px"
						class="img-responsive">
				</a>
			</div>
		</nav>
	</div>
	<!---------// Nav Menu ----------------->

	<!---------Update Product Table ----------------->

	<header class="text-center mt-2">
		<h1>Update Product</h1>
	</header>
	<div id="welcome_page">
		<div class="container">
			<div class="my-5 row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<form method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="product_name" class="col-form-label">Product Name</label>
							<input type="text" class="form-control" id="product_name" name="product_name"
								value="<?php echo $name ?>">
						</div>
						<div class="form-group">
							<label for="collection" class="col-form-label">Collection</label>
							<select id="collection" class="form-control" name="collection"
								value="<?php echo $collection; ?>">
								<option selected>Choose...</option>
								<option value="men" <?php if($collection == "men") echo "selected"; ?>>Men</option>
								<option value="women" <?php if($collection == "women") echo "selected"; ?>>Women
								</option>
								<option value="children" <?php if($collection == "children") echo "selected"; ?>>
									Children</option>
							</select>
						</div>
						<div class="form-group table-responsive">
							<label for="product_size" class="col-form-label">Size</label>
							<?php 
                    $sizeArray = array();
                    $sql = "SELECT * FROM size";
                    $query = mysqli_query($con,$sql);
                    while($row = mysqli_fetch_array($query))
                    {
                      $size = $row['size'];
                      array_push($sizeArray,$size);
                    }
              ?>
							<table class="table table-bordered table-responsive" id="item_table">
								<tr>
									<th>Product Size</th>
									<th>Price per Item</th>
									<th>No. of items per Set</th>
									<th>
										<button type="button" class="btn btn-success btn-sm add">
											<span class="glyphicon glyphicon-plus">+ Add</span>
										</button>
									</th>
								</tr>

								<?php
					$sql2 = "SELECT * FROM product_size WHERE product_id = $id";
					$query2 = mysqli_query($con, $sql2);
					while ($row2 = mysqli_fetch_array($query2)) {
						$size = $row2['size'];
						$price_per_item = $row2['price_per_item'];
						$items_per_set = $row2['items_per_set'];
				?>
								<tr>
									<td>
										<select id="test" style="width: 100%;padding:3%" name="productSize[]" required>
											<?php echo updateSelectedOptions($sizeArray, $size );?>
										</select>
									</td>


									<td><input type="text" name="PricePerItem[]" class="form-control"
											value="<?php echo $price_per_item; ?>" /></td>
									<td><input type="text" name="ItemPerSet[]" class="form-control"
											value="<?php echo $items_per_set; ?>" /></td>
									<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span
												class="glyphicon glyphicon-minus">X</span></button></td>
								</tr>
								<?php  } ?>
							</table>

							<script>
								$(document).ready(function () {
									$(document).on('change', '#test', function () {
										var itemValues = [];
										document.getElementsByName('productSize[]').forEach(item => itemValues.push(item
										.value));
										if (new Set(itemValues).size != itemValues.length) {
											alert("Please select different sizes in dropdown");
											$(this).closest('tr').css({
												'border': '2px solid red'
											});
										} else {
											document.getElementsByName('productSize[]').forEach(item => item.parentElement
												.parentElement.style.border = '');
										}
									})
									$(document).on('click', '.add', function () {
										var html = '';
										html += '<tr>';
										html +=
											'<td><select id="test" style="width: 100%;padding:3%" name="productSize[]" required>'
										html += '<?php echo updateOptions($sizeArray);?>';
										html += '</select></td>';
										html += '<td><input type="text" name="PricePerItem[]" class="form-control" /></td>';
										html += '<td><input type="text" name="ItemPerSet[]" class="form-control" /></td>';
										html +=
											'<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus">X</span></button></td></tr>';
										$('#item_table').append(html);
									});
									$(document).on('click', '.remove', function () {
										$(this).closest('tr').remove();
									});
								});
							</script>
						</div>
						<div class="form-group">
							<label for="product_color" class="col-form-label">Color</label>
							<div class="row">
								<select size="5" multiple style="width: 100%;margin-left: 2%;margin-right: 2%;"
									name="product_color[]" required>
									<?php
												$sql = "SELECT * FROM color";
												$query = mysqli_query($con, $sql);
												while ($row = mysqli_fetch_array($query)) {
													$color = $row['color'];
													?>
									<option value="<?php echo $color; ?>" style="padding-left:2%; padding-top: 2%;"
										<?php if(in_array($color, $selectedColor) !="") echo "selected"; ?>>
										<?php echo $color; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label for="gst" class="col-form-label">GST</label>
							<select id="gst" class="form-control" name="gst" value="<?php echo $gst; ?>">
								<option>Choose...</option>
								<!-- <option value="men" <?php if($collection == "men") echo "selected"; ?>>Men</option> -->
								<option value="5%" <?php if($gst == "5%") echo "selected";?>>5%</option>
								<option value="12%" <?php if($gst == "12%") echo "selected";?>>12%</option>
							</select>
						</div>
						<div class="form-group">
							<label for="brand" class="col-form-label">Brand</label> <input type="text"
								class="form-control" id="brand" name="brand" value="<?php echo $brand ?>">
						</div>
						<div class="form-group">
							<label for="Sku Id" class="col-form-label">Sku Id</label> <input type="text"
								class="form-control" id="sku_id" name="sku_id" value="<?php echo $sku_id ?>">
						</div>

						<div class="form-group">
							<label for="stock" class="col-form-label">Stock</label> <input type="text"
								class="form-control" id="stock" name="stock" value="<?php echo $stock ?>">
						</div>
						<div class="form-group">
							<label for="category" class="col-form-label">Category</label> <input type="text"
								class="form-control" id="category" name="category" value="<?php echo $category ?>">
						</div>
						<div class="form-group">
							<label for="rating" class="col-form-label">Rating</label> <select id="rating"
								class="form-control" name="rating">
								<option selected>Choose...</option>
								<option value="1" <?php if($rating == "1") echo "selected"; ?>>1</option>
								<option value="2" <?php if($rating == "2") echo "selected"; ?>>2</option>
								<option value="3" <?php if($rating == "3") echo "selected"; ?>>3</option>
								<option value="4" <?php if($rating == "4") echo "selected"; ?>>4</option>
								<option value="5" <?php if($rating == "5") echo "selected"; ?>>5</option>
							</select>
						</div>
						<div class="form-group">
							<label for="Tags" class="col-form-label">Product Tags</label> <select id="tags"
								class="form-control" name="tags">
								<option selected>Choose...</option>
								<option value="popular" <?php if($tags == "popular") echo "selected"; ?>>Popular
								</option>
								<option value="sale" <?php if($tags == "sale") echo "selected"; ?>>Sale</option>
								<option value="offer" <?php if($tags == "offer") echo "selected"; ?>>Offer</option>
							</select>
						</div>
						<div class="form-group">
							<label for="description" class="col-form-label">Product
								Description</label>
							<textarea name="description" cols="30" rows="5"
								class="form-control"><?php echo $description ?></textarea>
						</div>
						<div class="form-group">
							<label for="product_image" class="col-form-label">Product Image</label>
							<input type="file" class="form-control" id="product_image" name="product_image">
						</div>
						<div class="form-group">
							<label for="other_product_image" class="col-form-label">Other
								Product Image (Multiple)</label> <input type="file" class="form-control"
								id="other_product_image" name="other_product_image[]" multiple="">
						</div>
						<button type="submit" class="btn btn-primary" name="submit">Update</button>
					</form>
				</div>
				<div class="col-md-2"></div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

	<!---------// Update Product Table ----------------->

	<?php
include ("../includes/footer.php");
function updateOptions($sizeArray){
	$options='';
	foreach($sizeArray as $itemSize){
	  $options.='<option style="padding-left: 10%;padding-top:5%;" value="'.$itemSize.'" >'.$itemSize.'</option>';
	}
	return $options;
  }
function updateSelectedOptions($sizeArray, $selectedSize){
	$options='';
	foreach($sizeArray as $itemSize){
	  $options.='<option style="padding-left: 10%;padding-top:5%;" value="'.$itemSize.'" ';
	  if($itemSize==$selectedSize) 
	    $options.= " selected";
	  $options.= '>'.$itemSize.'</option>';
	}
	return $options;
  }
if (isset($_POST['submit'])) {
	$productSize = $_POST['productSize'];
	//echo $productSize;
	  $PricePerItem = $_POST['PricePerItem'];
	  $min_price = min($PricePerItem);
  $max_price = max($PricePerItem);
  	$ItemPerSet = $_POST['ItemPerSet'];

    $product_name = $_POST['product_name'];
    $collection = $_POST['collection'];

	$product_size = implode(',',$_POST['productSize']);
	$product_color = implode(',', $_POST['product_color']);
	$gst = $_POST['gst'];
	$brand = $_POST['brand'];
    $sku_id = $_POST['sku_id'];
    $stock = $_POST['stock'];
    $category = $_POST['category'];
    $rating = $_POST['rating'];
    $tags = $_POST['tags'];
    $description = $_POST['description'];

    $product_image = $_FILES['product_image'];
    $img_name = $product_image['name'];
    $img_tempath = $product_image['tmp_name'];

    $other_product_image = $_FILES['other_product_image'];
    $other_product_image_fileNames = array_filter($_FILES['other_product_image']['name']);
    $other_product_image_temp_path = array_filter($_FILES["other_product_image"]["tmp_name"]);

    $uploadedImage = implode(",", $_FILES['other_product_image']['name']);

    if (! $con) {
        die('Could not connect: ' . mysqli_error());
    }

    if ($img_name != "") {
        $temp = explode(".", $product_image['name']);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        move_uploaded_file($img_tempath, '../../images/product/' . $collection . '/' . $category . '/' . $newfilename);
    }

    $sql = "UPDATE product 
      SET name = '$product_name',
	  size = '$product_size',
          color = '$product_color',
             description = '$description',
              collection = '$collection',
               category = '$category',
                tags = '$tags',
				gst = '$gst',
                 brand = '$brand',
                 sku_id = '$sku_id',
                 stock = '$stock',
				  rating = '$rating',
				  min_price = '$min_price',
				  max_price = '$max_price'";

    // if ($img_name!="") {
    // $sql= $sql.",img = '$img_name'";
    // }

    if ($img_name != "") {
        $temp = explode(".", $product_image['name']);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        $sql = $sql . ",img = '$newfilename'";
    }

    $time = microtime(true) + 10;
    $otherImageFiles = array();
    for ($i = 0; $i < sizeof($_FILES['other_product_image']['name']); $i ++) {

        $temp = explode(".", $_FILES['other_product_image']['name'][$i]);
        $newotherfilename = round($time) . '.' . end($temp);
        move_uploaded_file($_FILES['other_product_image']['tmp_name'][$i], '../../images/product/' . $collection . '/' . $category . '/' . $newotherfilename);
        array_push($otherImageFiles, $newotherfilename);
        $time = $time + 10;
    }

    if ($uploadedImage != "") {
        $sql = $sql . ",other_img = '". implode(',', $otherImageFiles)."'";
    }

    $sql = $sql . " WHERE product_id = '$getid' ";

    //echo $sql;

    $query = mysqli_query($con, $sql);

    if (! $query) {
        echo "Error : " . mysqli_error($con);
    } else {
		// $productID = mysqli_insert_id($con);
		$delSQL = "DELETE FROM `product_size` WHERE product_id = $id";
		$query = mysqli_query($con,$delSQL);

     	for ($i=0; $i < sizeof($productSize) ; $i++) { 
			$sql = "INSERT into product_size (id, product_id, size, price_per_item, items_per_set)
			values(null, '$id','$productSize[$i]', '$PricePerItem[$i]', '$ItemPerSet[$i]' )";
			echo $sql;
			$query = mysqli_query($con,$sql);
    	}
        echo '<script type="text/javascript">
            Swal.fire(
            "updated successully!",
            "",
            "success").then(function(){
            window.location = "total_products.php";
            });
            </script>';
    }
}
?>