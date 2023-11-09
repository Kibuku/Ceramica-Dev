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

    <div id="page-container">
        <div class="card">
            <div class="title text-uppercase overflow" style='font-weight: 600 !important; position: relative; white-space: nowrap;'>
                Products
                <a href="" class="btn text-secondary text-capitalize float-right text-decoration-none ml-2 pt-0 pb-0" title='Click to refresh'>
                    <i class="fa fa-refresh"> Reload</i>
                </a>
                <a href="#" class="btn text-secondary text-capitalize float-right text-decoration-none pt-0 pb-0" title='Click to add product' data-toggle='modal' data-target='#createModal'>
                    <i class="fa fa-plus"> Add</i>
                </a>

                <!-- Create Modal -->
                <div style='z-index: 100000;' class='modal fade' id='createModal' tabindex='-1' role='dialog' aria-labelledby='createModalTitle' aria-hidden='true'>
                    <div class='modal-dialog modal-dialog-centered modal-xl' role='document'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title text-uppercase' style='font-weight: 600 !important;' id='createModalTitle'>
                                    Add Product
                                </h5>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true' style='color:black'>&times;</span>
                                </button>
                            </div>
                            <div class='modal-body overflow pb-5' style='max-height: 80vh; overflow: auto;'>
                                <form action='#' method='POST' enctype='multipart/form-data'>
                                    <input type="hidden" name="add_product" value="add_product">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class='input-group mb-4 mt-2 pl-2 pr-2'>
                                                <div class='input-group-prepend'>
                                                    <span class='input-group-text text-capitalize' style='background: #a39382; color:white; width: 9rem;'>Image<span class="text-danger">*</span></span>
                                                </div>
                                                <input type='file' class='form-control' name='image' accept='application/png, application/jpg,application/jpeg,application/webp' required>
                                            </div>

                                            <div class='input-group mb-4 mt-2 pl-2 pr-2'>
                                                <div class='input-group-prepend'>
                                                    <span class='input-group-text text-capitalize' style='background: #a39382; color:white; width: 9rem;'>Name<span class="text-danger">*</span></span>
                                                </div>
                                                <input type='text' class='form-control' name='product_name' placeholder='Name' required>
                                            </div>

                                            <div class='input-group mb-4 mt-2 pl-2 pr-2'>
                                                <div class='input-group-prepend'>
                                                    <span class='input-group-text text-capitalize' style='background: #a39382; color:white; width: 9rem;'>Category<span class="text-danger">*</span></span>
                                                </div>
                                                <select name="category" id='' class='form-control' required>
                                            <option value='' selected="true" disabled="disabled">--- Select Category ---</option>
                                            <?php 
                                            $check_category = mysqli_query($conn,"SELECT `id`, `category_id`, `description`, `date_created`, `status` FROM `product_category`");
                                            if(mysqli_num_rows($check_category) > 0){
                                                while($row_category= mysqli_fetch_array($check_category)){
                                                    ?>
                                             
                                            <option value="<?php echo $row_category['category_id']; ?>"><?php echo $row_category['description']; ?></option>
                                      <?php
                                                }
                                                
                                            }
                                            ?>
                                        </select>
                                            </div>
                                         

                                            <div class='input-group mb-4 mt-2 pl-2 pr-2'>
                                                <div class='input-group-prepend'>
                                                    <span class='input-group-text text-capitalize' style='background: #a39382; color:white; width: 9rem;'>Cost<span class="text-danger">*</span></span>
                                                </div>
                                                <input type='number' class='form-control' name='price' placeholder='Cost' required>
                                            </div>
                                               <div class='input-group mb-4 mt-2 pl-2 pr-2'>
                                                <div class='input-group-prepend'>
                                                    <span class='input-group-text text-capitalize' style='background: #a39382; color:white; width: 9rem;'>Length<span class="text-danger">*</span></span>
                                                </div>
                                                <input type='number' class='form-control' name='length' placeholder='Length' required>
                                            </div>
                                               <div class='input-group mb-4 mt-2 pl-2 pr-2'>
                                                <div class='input-group-prepend'>
                                                    <span class='input-group-text text-capitalize' style='background: #a39382; color:white; width: 9rem;'>Width<span class="text-danger">*</span></span>
                                                </div>
                                                <input type='number' class='form-control' name='width' placeholder='Width' >
                                            </div>
                                               <div class='input-group mb-4 mt-2 pl-2 pr-2'>
                                                <div class='input-group-prepend'>
                                                    <span class='input-group-text text-capitalize' style='background: #a39382; color:white; width: 9rem;'>Height<span class="text-danger">*</span></span>
                                                </div>
                                                <input type='number' class='form-control' name='height' placeholder='Height' >
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class='input-group mb-4 mt-2 pl-2 pr-2'>
                                                <div class='input-group-prepend'>
                                                    <span class='input-group-text text-capitalize' style='background: #a39382; color:white; width: 9rem;'>Description<span class="text-danger">*</span></span>
                                                </div>
                                                <textarea name="description" id="" class='form-control' placeholder='Description' rows="12" required></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class='row'>
                                        <div class='col-md'>
                                            <button type='button' class='btn btn-secondary form-control' data-dismiss='modal'>
                                                <i class="fa fa-times"> No</i>
                                            </button>
                                        </div>
                                        <div class="col-md-5"></div>
                                        <div class='col-md'>
                                            <button type='submit' class='btn btn-success form-control'>
                                                <i class="fa fa-check"> Submit</i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                if (isset($_POST['add_product'])){
                    $rand = rand(11111,99999);
                       $temp = explode(".", $_FILES["image"]["name"]);
           $filename = "image_".$rand.".".end($temp);


  if (move_uploaded_file($_FILES["image"]["tmp_name"], "../img/products/".$filename) ){
      $product_name = mysqli_real_escape_string($conn,$_POST['product_name']);
      $category = $_POST['category'];
      $description = mysqli_real_escape_string($conn,$_POST['description']);
      $price =$_POST['price'];
      $product_id = "C".rand(111111,999999);
   
      $last_updated = date("Y-m-d H:i:s");
      $length = $_POST['length'];
      $packaging_id=1;
        if($length >=0 && $length < 16 ){
              $packaging_id = 1;
         }
          if($length >15 && $length < 31 ){
              $packaging_id = 2;
         }
                       if($length >30 && $length < 45 ){
              $packaging_id = 3;
         }           
                   if($length > 45){
              $packaging_id = 4;
         }   
      if($_POST['width'] !=""){
          $width = $_POST['width'];
      }else{
          $width="";
      }
          if($_POST['height'] !=""){
          $height = $_POST['height'];
      }else{
          $height="";
      }
      
      $insert = mysqli_query($conn,"INSERT INTO `product`( `category_id`, `product_id`, `product_name`, `product_description`, `amount`,  `image_name`,  `packaging_id`,last_updated, `length`, `width`, `height`) VALUES('$category','$product_id','$product_name','$description','$price','$filename','$packaging_id','$last_updated','$length','$width','$height') ") or die(mysqli_error($conn));
      ?>
      <script>
          window.alert("Added");
          window.location.href="products";
      </script>
      <?php
      
  }else{
        ?>
      <script>
          window.alert("Failed");
          window.location.href="products";
      </script>
      <?php
  }
                }
                ?>
                <!-- Create Modal -->
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="overflow">
                        <table class="table table-bordered table-hover">
                            <thead class="text-white" style='background: #a39382;'>
                                <tr>
                                    <th scope='col' style='white-space: nowrap;'>Image</th>
                                    <th scope='col' style='white-space: nowrap;'>Name</th>
                                    <th scope='col' style='white-space: nowrap;'>Category</th>
                                    <th scope='col' style='white-space: nowrap;'>Last update</th>
                                    <th scope='col' style='white-space: nowrap; text-align: center;'>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $check_product = mysqli_query($conn,"SELECT `id`, `category_id`, `product_id`, `product_name`, `product_description`, `amount`, `last_updated`, `image_name`, `date_posted`, `status`, `packaging_id` FROM `product` ORDER BY id DESC") or die(mysqli_error($conn));
                                if(mysqli_num_rows($check_product) > 0){
                                    while($row_product = mysqli_fetch_array($check_product)){
                                        ?>
                              
                                <tr>
                                    <td style='white-space: nowrap;' class="p-0" scope='row'>
                                        <a href="product_details?product_id=<?php echo $row_product['product_id']; ?>" class="btn w-100 m-0">
                                            <span class='product_img' style='background: url(../img/products/<?php echo $row_product['image_name']; ?>);'>
                                            </span>
                                        </a>
                                    </td>
                                    <td style='white-space: nowrap;' class="p-0" scope='row'>
                                        <a href="product_details?product_id=<?php echo $row_product['product_id']; ?>" class="btn w-100 m-0"><?php echo $row_product['product_name']; ?></a>
                                    </td>
                                    <td style='white-space: nowrap;' class="p-0" scope='row'>
                                        <a href="product_details?product_id=<?php echo $row_product['product_id']; ?>" class="btn w-100 m-0"><?php echo check_category($conn,$row_product['category_id'],"description"); ?></a>
                                    </td>
                                    <td style='white-space: nowrap;' class="p-0" scope='row'>
                                        <a href="product_details?product_id=<?php echo $row_product['product_id']; ?>" class="btn w-100 m-0"><?php echo $row_product['last_updated']; ?></a>
                                    </td>
                                    <td style='white-space: nowrap;' class="p-0" scope='row'>
                                        <div class='row d-flex justify-content-center align-items-center w-100' style='width: max-content;'>
                                         
                                            <div class='col-sm-2 mr-2'>
                                                <a href='#' class='btn mr-1 ml-1 text-secondary' data-toggle='modal' data-target='#updateModal' title='Click to update'>
                                                    <i class='fa fa-pencil-square-o' aria-hidden='true'></i>
                                                </a>

                                                <!-- Update Modal -->
                                                <div style='z-index: 100000;' class='modal fade' id='updateModal' tabindex='-1' role='dialog' aria-labelledby='updateModalTitle' aria-hidden='true'>
                                                    <div class='modal-dialog modal-dialog-centered modal-xl' role='document'>
                                                        <div class='modal-content'>
                                                            <div class='modal-header'>
                                                                <h5 class='modal-title text-uppercase' style='font-weight: 600 !important;' id='updateModalTitle'>
                                                                    UPDATE RECORD
                                                                </h5>
                                                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                                    <span aria-hidden='true' style='color:black'>&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class='modal-body overflow pb-5' style='max-height: 80vh; overflow: auto;'>
                                                                <form action='' method='POST' enctype='multipart/form-data'>
                                                                    <div class="row">
                                                                        <div class="col-md-5">
                                                                            <div class='input-group mb-4 mt-2 pl-2 pr-2'>
                                                                                <div class='input-group-prepend'>
                                                                                    <span class='input-group-text text-capitalize' style='background: #a39382; color:white; width: 9rem;'>Image<span class="text-danger">*</span></span>
                                                                                </div>
                                                                                <input type='file' class='form-control' name='' accept='application/png, application/jpg,application/jpeg' required>
                                                                            </div>

                                                                            <div class='input-group mb-4 mt-2 pl-2 pr-2'>
                                                                                <div class='input-group-prepend'>
                                                                                    <span class='input-group-text text-capitalize' style='background: #a39382; color:white; width: 9rem;'>Name<span class="text-danger">*</span></span>
                                                                                </div>
                                                                                <input type='text' class='form-control' name='' placeholder='Name' required>
                                                                            </div>

                                                                            <div class='input-group mb-4 mt-2 pl-2 pr-2'>
                                                                                <div class='input-group-prepend'>
                                                                                    <span class='input-group-text text-capitalize' style='background: #a39382; color:white; width: 9rem;'>Category<span class="text-danger">*</span></span>
                                                                                </div>
                                                                                <select name="" id='' class='form-control' required>
                                                                                    <option value='' selected="true" disabled="disabled">--- Select Category ---</option>
                                                                                    <option value="">Option 1</option>
                                                                                    <option value="">Option 2</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class='input-group mb-4 mt-2 pl-2 pr-2'>
                                                                                <div class='input-group-prepend'>
                                                                                    <span class='input-group-text text-capitalize' style='background: #a39382; color:white; width: 9rem;'>Size<span class="text-danger">*</span></span>
                                                                                </div>
                                                                                <select name="" id='' class='form-control' required>
                                                                                    <option value='' selected="true" disabled="disabled">--- Select Size ---</option>
                                                                      
                                                                                </select>
                                                                            </div>

                                                                            <div class='input-group mb-4 mt-2 pl-2 pr-2'>
                                                                                <div class='input-group-prepend'>
                                                                                    <span class='input-group-text text-capitalize' style='background: #a39382; color:white; width: 9rem;'>Cost<span class="text-danger">*</span></span>
                                                                                </div>
                                                                                <input type='text' class='form-control' name='' placeholder='Cost' required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md">
                                                                            <div class='input-group mb-4 mt-2 pl-2 pr-2'>
                                                                                <div class='input-group-prepend'>
                                                                                    <span class='input-group-text text-capitalize' style='background: #a39382; color:white; width: 9rem;'>Description<span class="text-danger">*</span></span>
                                                                                </div>
                                                                                <textarea name="" id="" class='form-control' placeholder='Description' rows="12" required></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class='row'>
                                                                        <div class='col-md'>
                                                                            <button type='button' class='btn btn-secondary form-control' data-dismiss='modal'>
                                                                                <i class="fa fa-times"> No</i>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-5"></div>
                                                                        <div class='col-md'>
                                                                            <button type='submit' class='btn btn-success form-control'>
                                                                                <i class="fa fa-check"> Update</i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Update Modal -->
                                            </div>
                                            
                                            <div class='col-sm-2 ml-2'>
                                                <a href='delete.php?action=product&id=<?php echo $row_product['product_id']; ?>' class='btn ml-1 text-danger'  onclick="return confirm('Are you sure you want to delete this record?')"  title='Click to delete'>
                                                    <i class='fa fa-trash' aria-hidden='true'></i>
                                                </a>
             
                                             
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php 
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once 'footer.php';
?>