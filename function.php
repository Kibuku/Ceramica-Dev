<?php
function all_category($conn){
    $query = mysqli_query($conn,"SELECT * FROM `product_category` WHERE status=1") or die(mysqli_error($conn));
      if ($row = mysqli_num_rows($query) > 0){

        while($row = mysqli_fetch_assoc($query)) { 
            $resArr[] = $row; 
        }


        $results = $resArr;

        return $results;

    }
    else{
        $results = null;
        return $results;
    }
}
function check_image($conn,$product_id,$limit){
    if($limit ==1){
        $check = mysqli_query($conn,"SELECT * FROM `product` WHERE `product_id`='$product_id'") or die(mysqli_error($conn));
        if(mysqli_num_rows($check) > 0){
        $row = mysqli_fetch_array($check);
        return $row["image_name"];
    }else{
        return "";
    }
    }else{
    $query = mysqli_query($conn,"SELECT * FROM `product_image` WHERE `product_id`='$product_id' AND status=1 ORDER BY id ASC") or die(mysqli_error($conn));
    if(mysqli_num_rows($query) >0 ){
        if($limit==1){
            $row = mysqli_fetch_array($query);
            return $row['image_name'];
        }else{
             while($row = mysqli_fetch_assoc($query)) { 
            $resArr[] = $row; 
        }


        $results = $resArr;

        return $results;
        }
    }else{
        return "";
    }
    }
}
function get_product_detail($conn,$product_id,$variable){
    $check = mysqli_query($conn,"SELECT * FROM `product` WHERE `product_id`='$product_id'") or die(mysqli_error($conn));
        if(mysqli_num_rows($check) > 0){
        $row = mysqli_fetch_array($check);
        return $row[$variable];
    }else{
        return "";
    }
    
}
function get_check_package($conn,$package_id,$variable){
    $check = mysqli_query($conn,"SELECT * FROM `packaging` WHERE id=$package_id") or die(mysqli_error($conn));
        if(mysqli_num_rows($check) > 0){
        $row = mysqli_fetch_array($check);
        return $row[$variable];
    }else{
        return "";
    }
    
}

function check_category($conn,$category_id,$variable){
    $check = mysqli_query($conn,"SELECT * FROM `product_category` WHERE category_id='$category_id'") or die(mysqli_error($conn));
        if(mysqli_num_rows($check) > 0){
        $row = mysqli_fetch_array($check);
        return $row[$variable];
    }else{
        return "";
    }
    
}
function check_cart($conn,$session_id,$variable){
    $check = mysqli_query($conn,"SELECT `id`, `product_id`, `quantity`, `session_id`, `total` FROM `cart` WHERE `session_id`='$session_id' LIMIT 1") or die(mysqli_error($conn));
        if(mysqli_num_rows($check) > 0){
        $row = mysqli_fetch_array($check);
        return $row[$variable];
    }else{
        return "";
    }
    
}