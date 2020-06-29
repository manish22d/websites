<?php
include("functions.php");
if(isset($_POST['size'])){
    $token = $_POST['size'];
    $size = explode("-", $token);
    $sql = "SELECT * from product_size WHERE product_id = '$size[0]' and size = '$size[1]'";
    $query = mysqli_query($con, $sql);
    $result = mysqli_fetch_array($query);

    // echo json_encode($result, true);

    $ps = new productSize();
    $ps->price_per_item = $result['price_per_item'];
    $ps->items_per_set = $result['items_per_set'];
    $ps->product_color = explode(",",$result['color']);

    echo json_encode($ps, true);
    // echo $result['price_per_item']."_".$result['items_per_set'];
    // echo $result['items_per_set'];
}

class productSize{
    public $price_per_item;
    public $items_per_set;
    public $product_color = array();

}


?>