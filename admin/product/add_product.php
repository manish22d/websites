<?php
  include ("../config/config.php");
  include("../includes/header.php");

  $sizeArray = array();
  $sql = "SELECT * FROM size";
  $query = mysqli_query($con,$sql);
  while($row = mysqli_fetch_array($query))
  {
    $size = $row['size'];
    array_push($sizeArray,$size);
  }

  $colorArray = array();
  $sql = "SELECT * FROM color";
  $query = mysqli_query($con,$sql);
  while($row = mysqli_fetch_array($query))
  {
    $color = $row['color'];
    array_push($colorArray,$color);
  }
?>

<body>
  <div id="mynav">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
        onclick="myFunction()">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto nav-tabs ">
          <li class="nav-item "><a class="nav-link" href="../main.php">Home <span class="sr-only">(current)</span></a>
          </li>
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

        <a href="logout.php" title="Logout">
          <img src="assets/images/logout.png" alt="" style="width: 40px" class="img-responsive">
        </a>
      </div>
    </nav>
  </div>
  <header class="text-center mt-2s">
    <h1>Add Product</h1>
  </header>
  <div id="welcome_page">
    <div class="container">
      <div class="my-3 row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <form method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="product_name" class="col-form-label">Product Name</label>
              <input type="text" class="form-control" id="product_name" name="product_name" required>
            </div>
            <div class="form-group">
              <label for="collection" class="col-form-label">Collection</label>
              <select id="collection" class="form-control" name="collection" required>
                <option>Choose...</option>
                <option value="babasuit">babasuit</option>
                <option value="shirt">shirt</option>
                <option value="ethnic wear">ethnic wear</option>
                <option value="tshirt">tshirt</option>
                <option value="pant">pant</option>
                <option value="track pant">track pant</option>
                <option value="capri">capri</option>
                <option value="infant">infant</option>
              </select>
            </div>
            <div class="form-group table-responsive">
              <label for="product_size" class="col-form-label">Size</label>
              <table class="table table-bordered" id="item_table">
                <tr>
                  <th>Product Size</th>
                  <th>Price per Item</th>
                  <th>No. of items per Set</th>
                  <th>Color</th>
                  <th>
                    <button type="button" class="btn btn-success btn-sm add">
                      <span class="glyphicon glyphicon-plus">+ Add</span>
                    </button>
                  </th>
                </tr>
              </table>

              <script>
                $(document).ready(function () {
                  $(document).on('change', '#test', function () {
                    var itemValues = [];
                    document.getElementsByName('productSize[]').forEach(item => itemValues.push(item.value));
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
                  var i = 0;
                  $(document).on('click', '.add', function () {
                    var html = '';
                    html += '<tr>';
                    html +=
                      '<td><select id="test" style="width: 100%;padding:3%" name="productSize[]" required>'
                    html += '<?php echo updateSizeOptions($sizeArray);?>';
                    html += '</select></td>';
                    html += '<td><input type="text" name="PricePerItem[]" class="form-control" /></td>';
                    html += '<td><input type="text" name="ItemPerSet[]" class="form-control" /></td>';
                    html +=
                      '<td><select size="5" multiple style="width: 100%;margin-left: 2%;margin-right: 2%;" name="product_color[' +
                      i + '][]" required>'
                    html += '<?php echo updateColorOptions($colorArray);?>';
                    html += '</select></td>';
                    html +=
                      '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus">X</span></button></td></tr>';
                    $('#item_table').append(html);
                    i = i + 1;
                  });
                  $(document).on('click', '.remove', function () {
                    $(this).closest('tr').remove();
                  });

                });
              </script>
            </div>
            <div class="form-group">
              <label for="gst" class="col-form-label">GST</label>
              <select id="gst" class="form-control" name="gst">
                <option>Choose...</option>
                <option value="5%">5%</option>
                <option value="12%">12%</option>
              </select>
            </div>
            <div class="form-group">
              <label for="brand" class="col-form-label">Brand</label>
              <input type="text" class="form-control" id="brand" name="brand">
            </div>
            <div class="form-group">
              <label for="sku_id" class="col-form-label">Sku Id</label>
              <input type="text" class="form-control" id="sku_id" name="sku_id">
            </div>
            <div class="form-group">
              <label for="stock" class="col-form-label">Stock</label>
              <input type="text" class="form-control" id="stock" name="stock" required>
            </div>
            <div class="form-group">
              <label for="category" class="col-form-label">Category</label>
              <input type="text" class="form-control" id="category" name="category" required>
            </div>
            <div class="form-group">
              <label for="rating" class="col-form-label">Rating</label>
              <select id="rating" class="form-control" name="rating" required>
                <option selected>Choose...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
            <div class="form-group">
              <label for="Tags" class="col-form-label">Product Tags</label>
              <select id="tags" class="form-control" name="tags" required>
                <option selected>Choose...</option>
                <option value="popular">Popular</option>
                <option value="sale">Sale</option>
                <option value="offer">Offer</option>
              </select>
            </div>
            <div class="form-group">
              <label for="description" class="col-form-label">Product Description</label>
              <textarea name="description" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label for="product_image" class="col-form-label">Product Image</label>
              <input type="file" class="form-control" id="product_image" name="product_image" required>
            </div>
            <div class="form-group">
              <label for="other_product_image" class="col-form-label">Other Product Image (Multiple)</label>
              <input type="file" class="form-control" id="other_product_image" name="other_product_image[]" multiple=""
                required>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">submit</button>
          </form>
        </div>
        <div class="col-md-2"></div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <!-- <script>
    $("#test").multiselect({
      enableFiltering: true,
      maxHeight: 450
    });
  </script> -->
  <?php 
include("../includes/footer.php");

function updateSizeOptions($sizeArray){
  $options='';
  foreach($sizeArray as $itemSize){
    $options.='<option style="padding-left: 10%;padding-top:5%;" value="'.$itemSize.'" >'.$itemSize.'</option>';
  }
  return $options;
}

function updateColorOptions($colorArray){
  $options='';
  foreach($colorArray as $itemColor){
    $options.='<option style="padding-left: 10%;padding-top:5%;" value="'.$itemColor.'" >'.$itemColor.'</option>';
  }
  return $options;
}

if(isset($_POST['submit']))
{
  $productSize = $_POST['productSize'];
  $PricePerItem = $_POST['PricePerItem'];
  $min_price = min($PricePerItem);
  $max_price = max($PricePerItem);
  $ItemPerSet = $_POST['ItemPerSet'];

  $product_name = $_POST['product_name'];
  $collection = $_POST['collection'];
  
  $product_size = implode(',',$_POST['productSize']);
  $product_color = $_POST['product_color'];
  

  $gst = $_POST['gst'];
  $brand = $_POST['brand'];
  $sku_id = $_POST['sku_id'];
  $stock = $_POST['stock'];
  $category = $_POST['category'];
  $rating = $_POST['rating'];
  $tags = $_POST['tags'];
  $description = $_POST['description'];

  // Main Product Image
  $product_image = $_FILES['product_image'];
  $img_name=$product_image['name'];
  $img_tempath=$product_image['tmp_name'];

  $file = "../../images/product/children/$collection/$category";

  if(is_dir($file)) {
  echo ("$file is a directory");
  } else {
   mkdir($file, 0777, true);
  }

  if($img_name!="")  {
    $temp = explode(".", $product_image['name']);
    $newfilename = round(microtime(true)) .'.'.end($temp);
    move_uploaded_file($img_tempath,'../../images/product/children/'.$collection.'/'.$category.'/'.$newfilename);
  }

  $NameOfFiles = "";
  foreach ($_FILES['other_product_image']['name'] as $key => $value){
    $NameOfFiles = $NameOfFiles.",".$value;
  }

  $time = microtime(true)+10;
  $otherImageFiles= array();
  for($i = 0; $i < sizeof($_FILES['other_product_image']['name']); $i++){
    $temp = explode(".", $_FILES['other_product_image']['name'][$i]);
    $newotherfilename = round($time) .'.'.end($temp);
    array_push($otherImageFiles, $newotherfilename);
    move_uploaded_file($_FILES['other_product_image']['tmp_name'][$i],'../../images/product/children/'.$collection.'/'.$category.'/'.$newotherfilename);

    $time = $time+10;
  }

  if(!$con )
   {
      die('Could not connect: ' . mysqli_error());
   }
   date_default_timezone_set("Asia/Calcutta"); 
   $date = date('d-m-Y H:i:s');
   $sql = "INSERT INTO product 
   (product_id,upload_date,img, other_img, name, size,gst, brand, sku_id,  description, collection, category, tags, stock, rating,min_price,max_price)
    VALUES (null,'$date','$newfilename','".implode(",", $otherImageFiles)."', '$product_name','$product_size','$gst','$brand','$sku_id','$description','$collection','$category','$tags','$stock','$rating','$min_price','$max_price')";

  $query = mysqli_query($con,$sql);
  // Check Query
  if (!$query) {
      echo "Error: " . mysqli_error($con);
  }else{
    $productID = mysqli_insert_id($con);
    for ($i=0; $i < sizeof($productSize) ; $i++) { 
      echo gettype($product_color[$i]);
      $selectedColor = implode(',',$product_color[$i]);
      $sql = "INSERT into product_size (id, product_id, size,color, price_per_item, items_per_set)
      values(null, '$productID','$productSize[$i]','$selectedColor' ,'$PricePerItem[$i]', '$ItemPerSet[$i]' )";
      $query = mysqli_query($con,$sql);
    }
      // echo "Success";
    echo '<script type="text/javascript">
              Swal.fire(
          "Product added successully!",
          "",
          "success").then(function(){
            window.location = "total_products.php";
            });
      </script>';
   }

}
?>