<?php
include ("header.php");
include ('functions.php');
include ('item.php');

$sql = "SELECT * FROM banner WHERE page = 'shop' ORDER BY id DESC LIMIT 1";
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

$item_array = array();

$sql = "SELECT * from product where stock>0";
$query = mysqli_query($con, $sql);
if (! $query) {
    echo "error: " . $sql . "<br/>" . mysqli_error($con);
}
while ($abc = mysqli_fetch_array($query)) {
    $item = new item();

    $item->product_id = $abc["product_id"];
    $item->name = $abc['name'];
    $item->inCart = 0;
    $item->size = explode(",", $abc['size']);
    $item->color = explode(",", $abc['color']);
    $item->discounted_price = $abc['discounted_price'];
    $item->imgName = $abc['img'];
    $item->collection = $abc['collection'];
    $item->category = $abc['category'];
    $item->stock = $abc['stock'];

    array_push($item_array, $item);
}
echo "<script>var productList = " . json_encode($item_array) . ";</script>";
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
					<img src="images/banner/<?php echo $img;?>" alt="Image"
						class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</a>

<div class="custom-border-bottom py-3">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-0">
				<a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong
					class="text-black">Shop</strong>
			</div>
		</div>
	</div>
</div>



<div class="container">
	<div id="row" class="row">
	</div>
</div>


<script type="text/javascript">
var productContainer = document.getElementById("row");

var filteredItem = productList.filter(value => value.color.includes("green"));

Object.values(filteredItem).map(productItem => {
	var image = '<a href="product_detail.php?token='+productItem.product_id+'" class="product-item md-height d-block"> <img	src="images/product/'+productItem.collection+'/'+productItem.category+'/'+productItem.imgName+'" alt="Image" class="img-fluid"></a>';
	var productName = '<h2 class="item-title"><a href="product_detail.php?token='+productItem.product_id+'">'+productItem.name+'</a></h2>';
	var cartButton = '<div class="add-cart text-center my-3"><p><button class="buy-now btn btn-sm height-auto px-3 py-2 btn-primary">Add To Cart</button></p></div>';

	productContainer.innerHTML +=  "<div class = 'col-md-4 item-entry'>"+image+productName+cartButton+"</div>";
});
</script>

<?php
include ("footer.php");
echo "<script>updateProduct(" . json_encode($item_array) . ");</script>";
?>