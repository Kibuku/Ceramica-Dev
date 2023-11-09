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
            <div class="title text-uppercase" style='font-weight: 600 !important; position: relative;'>
                Category<a href="" class="btn text-secondary text-capitalize float-right text-decoration-none ml-2 pt-0" title='Click to refresh'>
                    <i class="fa fa-refresh"> Reload</i>
                </a>
                <a href="#" class="btn text-secondary text-capitalize float-right text-decoration-none pt-0" title='Click to add product' data-toggle='modal' data-target='#createModal'>
                    <i class="fa fa-plus"> Add</i>
                </a>

                <!-- Create Modal -->
                <div style='z-index: 100000;' class='modal fade' id='createModal' tabindex='-1' role='dialog' aria-labelledby='createModalTitle' aria-hidden='true'>
                    <div class='modal-dialog modal-dialog-centered' role='document'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title text-uppercase' style='font-weight: 600 !important;' id='createModalTitle'>
                                    Add Category
                                </h5>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true' style='color:black'>&times;</span>
                                </button>
                            </div>
                            <div class='modal-body overflow pb-5' style='max-height: 80vh; overflow: auto;'>
                                <form action='#' method='POST' enctype='multipart/form-data'>
                                    <input type="hidden" name="add_category" vakue="add_category">
                                    <div class='input-group mb-4 mt-2 pl-2 pr-2'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text text-capitalize' style='background: #a39382; color:white; width: 9rem;'>Name<span class="text-danger">*</span></span>
                                        </div>
                                        <input type='text' class='form-control' name='category' placeholder='Category title' required>
                                    </div>

                                    
                                    <div class='row'>
                                        <div class='col-md'>
                                            <button type='button' class='btn btn-secondary form-control' data-dismiss='modal'>No</button>
                                        </div>
                                        <div class='col-md'>
                                            <button type='submit' class='btn btn-success form-control'>Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                if(isset($_POST['add_category'])){
                    $category = mysqli_real_escape_string($conn,$_POST['category']);
                    $category_id = "C".rand(1111,9999);
                    $insert = mysqli_query($conn,"INSERT INTO product_category(category_id,description) VALUES('$category_id','$category') ") or die(mysqli_error($conn));
                    ?>
                    <script>
                        window.alert("Added succesfully");
                        window.location.href="category";
                    </script>
                    <?php
                    
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
                                    <th scope='col' style='white-space: nowrap;'>Name</th>
                                    <th scope='col' style='white-space: nowrap;'>Create Date</th>
                                    <th scope='col' style='white-space: nowrap;'>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                  <?php 
                 $res_category = all_category($conn);
  if($res_category){    
      foreach ($res_category as $row){
                                    ?>
                                
                                <tr>
                                    <td style='white-space: nowrap;' scope='row'><?php echo $row['description']; ?> </td>
                                    <td style='white-space: nowrap;' scope='row'><?php echo $row['date_created']; ?></td>
                                    <td style='white-space: nowrap;' class='p-0' scope='row'>
                                        <div class='row d-flex justify-content-center align-items-center w-100' style='width: max-content;'>
                                            <div class='col-sm-2 mr-2'>
                                                <a href='sub_categories' class='btn m-0 text-secondary' title='Click to update'>
                                                    <i class='fa fa-external-link' aria-hidden='true'></i>
                                                </a>
                                            </div>
                                            <div class='col-sm-2 mr-2'>
                                                <a href='#' class='btn m-0 text-secondary' data-toggle='modal' data-target='#updateModal' title='Click to update'>
                                                    <i class='fa fa-pencil-square-o' aria-hidden='true'></i>
                                                </a>

                                                <!-- Update Modal -->
                                                <div style='z-index: 100000;' class='modal fade' id='updateModal' tabindex='-1' role='dialog' aria-labelledby='updateModalTitle' aria-hidden='true'>
                                                    <div class='modal-dialog modal-dialog-centered' role='document'>
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
                                                                    <div class='input-group mb-4 mt-2 pl-2 pr-2'>
                                                                        <div class='input-group-prepend'>
                                                                            <span class='input-group-text text-capitalize' style='background: #a39382; color:white; width: 9rem;'>Name<span class="text-danger">*</span></span>
                                                                        </div>
                                                                        <input type='text' class='form-control' name='' placeholder='Name' required>
                                                                    </div>

                                                                    <div class='input-group mb-4 mt-2 pl-2 pr-2'>
                                                                        <div class='input-group-prepend'>
                                                                            <span class='input-group-text text-capitalize' style='background: #a39382; color:white; width: 9rem;'>Dropdown<span class="text-danger">*</span></span>
                                                                        </div>
                                                                        <select name="" id='' class='form-control' required>
                                                                            <option value='' selected="true" disabled="disabled">--- Select Category Dropdown ---</option>
                                                                            <option value="">Option 1</option>
                                                                            <option value="">Option 2</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class='row'>
                                                                        <div class='col-md'>
                                                                            <button type='button' class='btn btn-secondary form-control' data-dismiss='modal'>No</button>
                                                                        </div>
                                                                        <div class='col-md'>
                                                                            <button type='submit' class='btn btn-success form-control'>Proceed</button>
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
                                                                                                <a href='delete.php?action=category&id=<?php echo $row['category_id']; ?>' class='btn ml-1 text-danger'  onclick="return confirm('Are you sure you want to delete this record?')"  title='Click to delete'>
                                                    <i class='fa fa-trash' aria-hidden='true'></i>
                                                </a>
                                                <!-- Delete Modal -->
                                                <div style='z-index: 100000;' class='modal fade' id='deleteModal' tabindex='-1' role='dialog' aria-labelledby='deleteModalTitle' aria-hidden='true'>
                                                    <div class='modal-dialog modal-dialog-centered' role='document'>
                                                        <div class='modal-content'>
                                                            <div class='modal-header'>
                                                                <h5 class='modal-title text-uppercase' style='font-weight: 600 !important;' id='deleteModalTitle'>
                                                                    DELETE RECORD
                                                                </h5>
                                                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                                    <span aria-hidden='true' style='color:black'>&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class='modal-body overflow pb-5' style='max-height: 80vh; overflow: auto;'>
                                                                Are you sure you want to delete this record?
                                                                <hr>
                                                                <div class='row'>
                                                                    <div class='col-md'>
                                                                        <button type='button' class='btn btn-secondary form-control' data-dismiss='modal'>No</button>
                                                                    </div>
                                                                    <div class='col-md'>
                                                                    <a href='delete.php?action=category&id=<?php echo $row['category_id']; ?>' class='btn btn-danger form-control'>Proceed</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Delete Modal -->
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php 
  } }  ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<span id="show-lable">Hello</span>
<?php
include_once 'footer.php';
?>