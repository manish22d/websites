<?php
include ("header.php");
include ('functions.php');
include ('item.php');
$sql = "SELECT * FROM banner WHERE page = 'women' ORDER BY id DESC LIMIT 1";
$query = mysqli_query($con, $sql);
if (! $query) {
    echo "fail" . mysqli_error($con);
}
$row = mysqli_fetch_array($query);
$img = $row['img'];
$title = $row['title'];
$heading = $row['heading'];
$button_text = $row['button_text'];
$page = $row['page'];

?>
<a href="shop.php">
	<div class="site-blocks-cover" data-aos="fade">
		<div class="container">
			<div class="row">
				<div class="col-md-6 ml-auto order-md-2 align-self-start">
					<div class="site-block-cover-content">
						<h2 class="sub-title"><?php echo $title;?></h2>
						<h1><?php echo $heading;?></h1>
						<p>
							<button class="btn btn-black rounded-0"><?php echo $button_text;?></button>
						</p>
					</div>
				</div>
				<div class="col-md-6 order-1 align-self-end">
					<img src="images/banner/<?php echo $img;?>" alt="Image" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</a>

<div class="bg-light py-3">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-0">
				<a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a href="shop.php">Shop</a> <span
					class="mx-2 mb-0">/</span> <strong class="text-black">Women</strong>
			</div>
		</div>
	</div>
</div>


<div class="site-section">
	<div class="container">

		<div class="row mb-5">
			<div class="col-md-12 order-1">

				<div class="row align">
					<div class="col-md-12 mb-5">
						<div class="float-md-left">
							<h2 class="text-black h5">Shop All</h2>
						</div>
						<div class="d-flex">
							<div class="dropdown mr-1 ml-md-auto">
								<button type="button" class="btn btn-white btn-sm dropdown-toggle px-4"
									id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">Latest</button>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
									<a class="dropdown-item" href="men-collection.php">Men</a> <a class="dropdown-item"
										href="women-collection.php">Women</a> <a class="dropdown-item"
										href="children-collection.php">Children</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row mb-5">
					<?php
            $item_array = array();

            $sql = "SELECT * from product WHERE collection = 'women' and stock>0";
            if (isset($_GET['type'])){
				$get_id=$_GET['type'];
				$sql .= " and category = '$get_id'";
			}
            $query = mysqli_query($con, $sql);
            if (! $query) {
                echo "error: " . $sql . "<br/>" . mysqli_error($con);
            }
            while ($abc = mysqli_fetch_array($query)) {
                $item = new item();

                $item->product_id = $abc["product_id"];
                $item->name = $abc['name'];
                $item->inCart = 0;
                $item->size = explode(",", $abc['size'])[0];
                $item->color = explode(",", $abc['color'])[0];
                // $item->tag = $abc['product_id'];
                // $item->discounted_price = $abc['discounted_price'];
                $item->imgName = $abc['img'];
                $item->collection = $abc['collection'];
                $item->category = $abc['category'];
				$item->stock = $abc['stock'];
				$item->gst = $abc['gst'];
				$item->price_per_set=0;

                array_push($item_array, $item);
                ?>
					<div class="col-lg-4 col-md-6 item-entry mb-4">
						<a href="product_detail.php?token=<?php echo $abc['product_id'] ?>" class="product-item md-height d-block"> <img
								src="images/product/<?php echo $abc['collection'];?>/<?php echo $abc['category'];?>/<?php echo $abc["img"];?>"
								alt="Image" class="img-fluid">
						</a>
						<h2 class="item-title">
							<a
								href="product_detail.php?token=<?php echo $abc['product_id'] ?>"><?php echo ucwords(strtolower($abc["name"]));?></a>
						</h2>
						<div class="product_details text-center">
							<strong class="item-price">Rs.
								<?php echo $abc['min_price'].".00 - Rs. ".$abc['max_price'].".00";?></strong>
							<p><span><?php echo "(GST: ".$abc['gst'].")" ?></span></p>
						<div class="add-cart text-center my-2">
							<p><a href="product_detail.php?token=<?php echo $abc['product_id'] ?>">
								<button class="buy-now btn btn-sm height-auto px-3 py-2 btn-primary">View Details</button>
							</p>
							</a>
						</div>
					</div>
					</div>
					<?php } ?>
				</div>
				<!-- <div class="row">
					<div class="col-md-12 text-center">
						<div class="site-block-27">
							<ul>
								<li><a href="#">&lt;</a></li>
								<li class="active"><span>1</span></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">&gt;</a></li>
							</ul>
						</div>
					</div>
				</div> -->
			</div>
		</div>

	</div>
</div>

<div class="site-section">
	<div class="container">
		<div class="title-section mb-5">
			<h2 class="text-uppercase">
				<span class="d-block">Discover The Collections

			</h2>
		</div>
		<div class="row align-items-stretch">
			<div class="col-lg-6">
				<?php
$query = mysqli_query($con, "SELECT * FROM feature WHERE type='women' ORDER BY id DESC LIMIT 1");
$img = mysqli_fetch_array($query)['img'];
?>
				<div class="product-item sm-height full-height bg-gray">
					<a href="women-collection.php" class="product-category">Women</a> <img
						src="images/feature/<?php echo $img;?>" alt="Image" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-6">
				<?php
$query = mysqli_query($con, "SELECT * FROM feature WHERE type='men' ORDER BY id DESC LIMIT 1");
$img = mysqli_fetch_array($query)['img'];
?>
				<div class="product-item sm-height bg-gray mb-4">
					<a href="men-collection.php" class="product-category">Men </a> <img
						src="images/feature/<?php echo $img;?>" alt="Image" class="img-fluid">
				</div>
				<div class="product-item sm-height bg-gray">
					<?php
    $query = mysqli_query($con, "SELECT * FROM feature WHERE type='children' ORDER BY id DESC LIMIT 1");
    $img = mysqli_fetch_array($query)['img'];
    ?>
					<a href="children-collection.php" class="product-category">Children
					</a> <img src="images/feature/<?php echo $img;?>" alt="Image" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- footer -->
<?php
include ("footer.php");
echo "<script>updateProduct(" . json_encode($item_array) . ");</script>";
?>