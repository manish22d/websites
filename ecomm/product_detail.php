<?php
include("header.php");
include("functions.php");
include ('item.php');
$getid = $_GET['token'];
//echo $getid;
?>
<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a
          href="shop.php">Shop</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Product Details</strong>
      </div>
    </div>
  </div>
</div>
<?php
            $arr = array();
            $sql = "SELECT * from product WHERE product_id = '$getid'";
            $query = mysqli_query($con, $sql);
            if (! $query){
                echo "error: " . $sql . "<br/>" . mysqli_error($con);
            }
            $result = mysqli_fetch_array($query);
            $size = explode(",",$result["size"]);
            $color = explode(",",$result["color"]);
            $img = $result['img'];
            $other_img = explode(",",$result['other_img']);
            $size_of_all_img = sizeof($other_img)+1;
            $collection = $result['collection'];
            $category = $result['category'];
            
            $item = new item();
                
            $item->product_id = $result["product_id"];
            $item->name = $result['name'];
            $item->inCart = 0;
            $item->size = explode(",", $result['size'])[0];
            $item->color = explode(",", $result['color'])[0];
            $item->imgName = $result['img'];
            $item->collection = $result['collection'];
            $item->category = $result['category'];
            $item->stock = $result['stock'];
            $item->gst = $result['gst'];
			      $item->price_per_set = 0;
            array_push($arr, $item);
          ?>
<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">

        <!-- Full-width images with number text -->
        <div class="mySlides">
          <div class="numbertext">1/ <?php echo $size_of_all_img ?></div>
          <div class="product-item md-height d-block">
            <img src="images/product/<?php echo $collection.'/'.$category.'/'.$img?>" class="img-fluid img-responsive">
          </div>
        </div>

        <?php 
          for($i = 1; $i < sizeof($other_img); $i++){
        ?>
        <div class="mySlides">
          <div class="numbertext"><?php echo $i+1; ?> / <?php echo $size_of_all_img-1 ?></div>
          <div class="product-item md-height d-block">
            <img src="images/product/<?php echo $collection.'/'.$category.'/'.$other_img[$i]?>"
              class="img-fluid img-responsive">
          </div>
        </div>
        <?php } ?>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <!-- Image text -->
        <div class="caption-container">
          <p id="caption"></p>
        </div>

        <!-- Thumbnail images -->
        <div class="row">
          <div class="column">
            <img src="images/product/<?php echo $collection.'/'.$category.'/'.$img?>" style="width:100%"
              onclick="currentSlide(1)" class="demo cursor" alt="<?php echo $result['name']; ?>">
          </div>

          <?php 
          for($i = 1; $i < sizeof($other_img); $i++){
          ?>
          <div class="column">
            <img src="images/product/<?php echo $collection.'/'.$category.'/'.$other_img[$i]?>" style="width:100%"
              onclick="currentSlide(<?php echo $i+1; ?>)" class="demo cursor" alt="<?php echo $result['name']; ?>">
          </div>
          <?php } ?>
        </div>
      </div>
      <div class="col-md-6">
        <h2 class="text-black"><?php echo ucwords(strtolower($result['name'])); ?></h2>
        <p><?php echo $result["description"];?></p>
        <div class="product_details">
        <form method="post">
          <h6 class="text-black">Available Size</h6>
          <div class="mb-1 d-flex">
            <label for="option-sm" class="d-flex mr-3 mb-3">
              <span class="d-inline-block mr-2" style="top:-2px; position: relative;">
                <div class="row">
                  <?php 
                    for($i=0;$i<count($size);$i++){
                    ?>
                  <div class="col-md-12">
                    <input type="radio" id="option-sm" name="shop-sizes[]" value="<?php echo $size["$i"];?>">
                    <span class="d-inline-block text-black"> <?php echo $size["$i"];?> </span>
                  </div>
                  <?php } ?>

                </div>
            </label>
          </div>

          <script>
            $(document).ready(function () {
              document.getElementsByTagName("h6")[1].innerHTML="Select size to get available colors and Prices";
              $(document).on('click', '#option-sm', function () {
                document.getElementById("avialable_colors").innerHTML='';
                document.getElementsByTagName("h6")[1].innerHTML='Available Colors'
                var radioValue = $("input[name='shop-sizes[]']:checked").val();
                $.ajax({
                  data: {
                    "size": "<?php echo $getid?>-" + radioValue
                  },
                  url: "ajax.php",
                  type: 'POST',
                  success: function (data) {
                    data=  JSON.parse(data);
                    var avialable_colors = document.getElementById("avialable_colors");
                    Object.values(data.product_color).map(color=>{
                      var radioButton = '<input type="checkbox" id="option-color" name="shop-colors[]" value="'+color+'">';
                      var label = '<span class="d-inline-block text-black">'+ color.charAt(0).toUpperCase() + color.slice(1) +'</span>';
                      avialable_colors.innerHTML+='<div class="col-md-12">'+radioButton+' '+label+'</div>';
                    });
                    document.getElementsByName("price")[0].innerHTML = "Rs. " + data.price_per_item +
                      " per pc / Rs. " + data.price_per_item * data.items_per_set + " per set";
                    document.getElementsByName("set")[0].innerHTML = "(" + data.items_per_set + " pc per set)";
                  }
                }); //end of ajax call
              });
            });
          </script>

          <h6 class="text-black">Available Color</h6>
          <div class="mb-1 d-flex">
            <label for="option-sm" class="d-flex mr-3 mb-3">
              <span class="d-inline-block mr-2" style="top:-2px; position: relative;">

                <div id = "avialable_colors" class="row">
                  <!-- Place Holder for colors -->
                </div>
            </label>
          </div>
          <div class="mb-3 h4" name="price" style="font-weight:bolder;color:green"></div>
          <div class="mb-3 h6" name="set" style="font-weight:bolder;color:blue"></div>
        </form>
        <div class="add-cart">
          <p>
            <button class="buy-now btn btn-sm height-auto px-3 py-2 btn-primary">Add
              To Cart
            </button>
          </p>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
<!-- footer -->

<script>
  var cartItems = localStorage.getItem('productInCart');
  cartItems = JSON.parse(cartItems);
  Object.values(cartItems).map(item => {
    if (item.product_id == < ? php echo $getid; ? > ) {
      var colors = document.getElementsByName('shop-colors[]');
      for (var i = 0; i < colors.length; i++) {
        if (colors[i].value == item.color)
          colors[i].checked = true;
      }
      var sizes = document.getElementsByName('shop-sizes[]');
      for (var i = 0; i < sizes.length; i++) {
        if (sizes[i].value == item.size)
          sizes[i].checked = true;
      }
    }
  });
</script>;
<?php
include("footer.php");
echo "<script>updateProduct(" . json_encode($arr) . ");</script>";
?>