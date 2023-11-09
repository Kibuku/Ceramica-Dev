<?php
include_once 'header.php';
?>

<div id="main-content">
    <div id="header">
        <div class="header-left float-left">
            <i id="toggle-left-menu" class="ion-android-menu"></i>
        </div>
        <div class="header-right float-right">
            <i class="fa fa-user-circle"></i>
        </div>
    </div>
<?php 
$product_id = $_GET['product_id'];
$img= check_image($conn,$product_id,100);
?>
    <div id="page-container">
        <div class="card">
            <div class="title text-uppercase" style='font-weight: 600 !important; position: sticky; top: 9vh; background: #fff; z-index: 100;'>
                Product Details ||    <div class='col-sm-2 mr-2'>
                                                <a href='#' class='btn mr-1 text-secondary' data-toggle='modal' data-target='#addMoreModal' title='Click to add more pictures'>
                                                    <i class='fa fa-plus' aria-hidden='true'></i>Add more pictures
                                                </a>

                                                <!-- Add More Modal -->
                                           
                                                <!-- Add More Modal -->
                                            </div>
                <a href="" class="btn text-secondary text-capitalize float-right text-decoration-none ml-2 pt-0 pb-0" title='Click to refresh'>
                    <i class="fa fa-refresh"> Reload</i>
                </a>
                <a href="products" class="btn text-secondary text-capitalize float-right text-decoration-none ml-2 pt-0 pb-0" title='Click to refresh'>
                    <i class="fa fa-chevron-circle-left"> Back</i>
                </a>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="overflow">
                        <div class="product-deatils-section float-left w-100">
                            <div class="container">
                                <div class="row">
                                    <div class="left-columm col-lg-7 col-md-7 p-0 mb-xs-30">
                                        <div class="small-image-list float-left w-100">
                                            <div class="nav-add-grid small-image-slider-single-product-tabstyle-3" role="tablist">
                                                <div class="single-small-image img-full col-sm-6 float-left mb-30 ">
                                                    <a data-toggle="tab" id="product-tab-01" href="#product-01" class="img active">
                                                        <img src="../img/products/<?php echo get_product_detail($conn,$product_id,"image_name"); ?>" class="img-fluid" alt="">
                                                    </a>
                                                </div>
                                                <?php
                                                       if($img){
                              
                                        foreach ($img as $row){
                                            
                              
                                    ?>
                                       <div class="single-small-image img-full col-sm-6 float-left mb-30 ">
                                                    <a data-toggle="tab" id="product-tab-01" href="#product-01" class="img active">
                                                        <img src="../img/products/<?php echo $row['image_name']; ?>" class="img-fluid" alt="">
                                                    </a>
                                                </div>
                 
                        <?php } } ?>
                                     
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-columm col-lg-5 col-md-5">
                                        <div class="product-information float-left w-100">
                                            <h4 class="product-title text-capitalize float-left w-100">
                                                <a href="#" class="float-left w-100"> <?php echo get_product_detail($conn,$product_id,"product_name"); ?></a>
                                            </h4>
                                            <div class="description text-justify">
                                                   <?php echo get_product_detail($conn,$product_id,"product_description"); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
     <div style='z-index: 100000;' class='modal fade' id='addMoreModal' tabindex='-1' role='dialog' aria-labelledby='updateModalTitle' aria-hidden='true'>
                                                    <div class='modal-dialog modal-dialog-centered' role='document'>
                                                        <div class='modal-content'>
                                                            <div class='modal-header'>
                                                                <h5 class='modal-title text-uppercase' style='font-weight: 600 !important;' id='updateModalTitle'>
                                                                    Add More Pictures
                                                                </h5>
                                                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                                    <span aria-hidden='true' style='color:black'>&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class='modal-body overflow pb-5' style='max-height: 80vh; overflow: auto;'>
                                                                <form action='#' method='POST' enctype='multipart/form-data'>
                                                                    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>" >
                                                                            <input type="hidden" name="add_image" value="add_image" >
                                                                    <div class='input-group mb-4 mt-2 pl-2 pr-2'>
                                                                        <div class='input-group-prepend'>
                                                                            <span class='input-group-text text-capitalize' style='background: #a39382; color:white; width: 9rem;'>Image<span class="text-danger">*</span></span>
                                                                        </div>
                                                                        <input type='file' class='form-control' name='image' accept='application/png, application/jpg,application/jpeg,application/webp' required>
                                                                    </div>

                                                                    <div class='row'>
                                                                        <div class='col-md'>
                                                                            <button type='button' class='btn btn-secondary form-control' data-dismiss='modal'>
                                                                                <i class="fa fa-times"> No</i>
                                                                            </button>
                                                                        </div>
                                                                        <div class='col-md'>
                                                                            <button type='submit' class='btn btn-success form-control'>
                                                                                <i class="fa fa-check"> Proceed</i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                     if (isset($_POST['add_image'])){
                                                         function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $randomString;
}

// Usage example to generate a random string of length 10
$randomString = generateRandomString(10);
                 
                       $temp = explode(".", $_FILES["image"]["name"]);
           $filename = $randomString.".".end($temp);


  if (move_uploaded_file($_FILES["image"]["tmp_name"], "../img/products/".$filename) ){
      $product_id = $_POST['product_id'];
      $insert = mysqli_query($conn,"INSERT INTO `product_image`( `image_name`, `product_id`) VALUES('$filename','$product_id') ") or die(mysqli_error($conn));
       ?>
      <script>
          window.alert("Added");
          window.location.href="product_details?product_id=<?php echo $product_id; ?>";
      </script>
      <?php
      
      
  }
                                                         
                                                     }
      ?>
<?php
include_once 'footer.php';
?>