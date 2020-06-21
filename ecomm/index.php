<?php
include ("header.php");
include ('functions.php');
include ('item.php');
$sql = "SELECT * FROM banner WHERE page = 'home' ORDER BY id DESC LIMIT 1";
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
							<button class="btn btn-black rounded-0"><?php echo $button_text?></button>
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
					<a href="men-collection.php" class="product-category">Men </a>
					<img src="images/feature/<?php echo $img;?>" alt="Image" class="img-fluid">
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
<div class="site-section">
	<div class="container">
		<div class="row">
			<div class="title-section mb-5 col-12">
				<h2 class="text-uppercase">Popular Products</h2>
			</div>
		</div>
		<div class="row">
			<?php
        $item_array = array();
        $data = popular("product", "popular");
        ?>
			<?php

        foreach ($data as $item) {
            $Popular_item = new item();
            $Popular_item->product_id = $item["product_id"];
            $Popular_item->name = $item['name'];
            $Popular_item->inCart = 0;
            $Popular_item->size = explode(",", $item['size'])[0];
            $Popular_item->color = explode(",", $item['color'])[0];
            // $Popular_item->tag = $item['product_id'];
            // $Popular_item->discounted_price = $item['discounted_price'];
            $Popular_item->imgName = $item['img'];
            $Popular_item->collection = $item['collection'];
            $Popular_item->category = $item['category'];
			$Popular_item->stock = $item['stock'];
			// $Popular_item->min_price = $item['min_price'];
			// $Popular_item->max_price = $item['max_price'];
			$Popular_item->gst = $item['gst'];
			$Popular_item->price_per_set = 0;
            array_push($item_array, $Popular_item);
            ?>
			<div class="col-lg-3 col-md-6 item-entry mb-4">
				<a href="product_detail.php?token=<?php echo $item['product_id'] ?>"
					class="product-item md-height d-block"> <img
						src="images/product/<?php echo $item['collection'];?>/<?php echo $item['category'];?>/<?php echo $item["img"];?>"
						alt="Image" class="img-fluid">
				</a>
				<h2 class="item-title">
					<a href="product_detail.php?token=<?php echo $item['product_id'] ?>"><?php echo $item["name"];?></a>
				</h2>
			
				<div class="text-center">
					<strong class="item-price">Rs.
						<?php echo $item['min_price'].".00 - Rs.".$item['max_price'].".00";?></strong>
					<!-- <p><span class="text-danger">10 pc. per set</span></p> -->
					<p><span><?php echo "( GST: ".$item['gst'].")" ?></span></p>
				</div>
				<div class="add-cart text-center my-2">
					<p>
						<button class="buy-now btn btn-sm height-auto px-3 py-2 btn-primary">Add
							To Cart</button>
					</p>
				</div>
			</div>
			<?php
        }

        ?>
		</div>
	</div>
</div>
<div class="site-section">
	<div class="container">
		<div class="row">
			<div class="title-section text-center mb-5 col-12">
				<h2 class="text-uppercase">Most Rated Products</h2>
			</div>
		</div>
		<div class="row">
			<?php $data = rating("product","5"); ?>
			<?php

        foreach ($data as $item) {
            $rating_item = new item();
            $rating_item->product_id = $item["product_id"];
            $rating_item->name = $item['name'];
            $rating_item->inCart = 0;
            // $rating_item->tag = $item['product_id'];
            $rating_item->size = explode(",", $item['size'])[0];
            $rating_item->color = explode(",", $item['color'])[0];
            // $rating_item->discounted_price = $item['discounted_price'];
            $rating_item->imgName = $item['img'];
            $rating_item->collection = $item['collection'];
            $rating_item->category = $item['category'];
			$rating_item->stock = $item['stock'];
			$rating_item->gst = $item['gst'];
			$rating_item->price_per_set=0;
            array_push($item_array, $rating_item);
            ?>
			<div class="col-lg-4 col-md-6 item-entry mb-4">
				<a href="product_detail.php?token=<?php echo $item['product_id'] ?>"
					class="product-item md-height d-block"> <img
						src="images/product/<?php echo $item['collection'];?>/<?php echo $item['category'];?>/<?php echo $item["img"];?>"
						alt="Image" class="img-fluid">
				</a>
				<h2 class="item-title">
					<a href="product_detail.php?token=<?php echo $item['product_id'] ?>"><?php echo $item["name"];?>
					</a>
				</h2>
				<div class="text-center">
					<strong class="item-price">Rs.
						<?php echo $item['min_price'].".00 - Rs.".$item['max_price'].".00";?></strong>
					<!-- <p><span class="text-danger">10 pc. per set</span></p> -->
					<p><span><?php echo "( GST: ".$item['gst'].")" ?></span></p>
				</div>
				<div class="add-cart text-center my-2">
					<p>
						<button class="buy-now btn btn-sm height-auto px-3 py-2 btn-primary">Add
							To Cart</button>
					</p>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>

<!-- footer -->
<?php
include ("footer.php");
// echo json_encode($item_array);
echo "<script>updateProduct(" . json_encode($item_array) . ");</script>";
?>