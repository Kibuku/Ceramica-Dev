<?php
require "../database/conn.php";
if(isset($_GET['action'])){
    $action = $_GET['action'];
    if($action== "product"){
        $product_id = $_GET['id'];
        $del = mysqli_query($conn,"DELETE FROM `product` WHERE `product_id`='$product_id'") or die(mysqli_error($conn));
        $url = "products";
    }
        if($action== "category"){
        $category_id = $_GET['id'];
        $del = mysqli_query($conn,"DELETE FROM `product_category` WHERE `category_id`='$category_id'") or die(mysqli_error($conn));
        $url = "category";
    }
    ?>
    <script>
        window.alert("Done");
        window.location.href="<?php echo $url; ?>";
    </script>
    <?php
}