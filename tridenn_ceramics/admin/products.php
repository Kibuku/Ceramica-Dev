<?php
include_once 'header.php';
?>
<div id="logo">
    <span class="big-logo">
        <a href="index">
            <img src="../img/logos/logo.png" height='30' alt="">
            <span class="text-uppercase h3" style='font-size: 1.7vw; font-weight: 700 !important;'>
                Tridenn Ceramics
            </span>

        </a>
    </span>
    <span class="small-logo text-uppercase">
        <a href="index">
            <img src="../img/logos/logo.png" height='30' alt="">
        </a>
    </span>
</div>
<div id="left-menu" class='overflow pt-2'>
    <ul>
        <li class="hoverable">
            <a href="index">
                <i class="fa fa-tachometer"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- <li class="has-sub hoverable">
            <a href="#">
                <i class="fa fa-user-o"></i>
                <span>Products</span>
            </a>
            <ul>
                <li>
                    <a href="#">UI Elements Item 1</a>
                </li>
                <li>
                    <a href="#">UI Elements Item 2</a>
                </li>
                <li>
                    <a href="#">UI Elements Item 3</a>
                </li>
            </ul>
        </li> -->

        <li class="active hoverable">
            <a href="products">
                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                <span>Products</span>
            </a>
        </li>
        <li class="hoverable">
            <a href="category">
                <i class="fa fa-cubes" aria-hidden="true"></i>
                <span>Category</span>
            </a>
        </li>

    </ul>
</div>
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
                Products
                <a href="" class="btn text-secondary text-capitalize float-right text-decoration-none ml-2 pt-0" title='Click to refresh'>
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
                                    Add Product
                                </h5>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true' style='color:black'>&times;</span>
                                </button>
                            </div>
                            <div class='modal-body overflow pb-5' style='max-height: 80vh; overflow: auto;'>
                                <form action='' method='POST' enctype='multipart/form-data'>
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
                                            <span class='input-group-text text-capitalize' style='background: #a39382; color:white; width: 9rem;'>Description<span class="text-danger">*</span></span>
                                        </div>
                                        <textarea name="" id="" class='form-control' placeholder='Description' required></textarea>
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
                                    <th scope='col' style='white-space: nowrap;'>Create Date</th>
                                    <th scope='col' style='white-space: nowrap; text-align: center;'>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style='white-space: nowrap;' scope='row'>
                                        <span class='product_img' style='background: url(../img/products/01.jpg);'>
                                        </span>
                                    </td>
                                    <td style='white-space: nowrap;' scope='row'>Greek with Handles</td>
                                    <td style='white-space: nowrap;' scope='row'>Pots</td>
                                    <td style='white-space: nowrap;' scope='row'>14-09-2023</td>
                                    <td style='white-space: nowrap;' scope='row'>
                                        <div class='row d-flex justify-content-center align-items-center' style='width: max-content;'>
                                            <div class='col-sm-2 mr-2'>
                                                <a href='#' class='text-secondary' data-toggle='modal' data-target='#addMoreModal' title='Click to add more pictures'>
                                                    <i class='fa fa-plus' aria-hidden='true'></i>
                                                </a>

                                                <!-- Add More Modal -->
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
                                                                <form action='' method='POST' enctype='multipart/form-data'>
                                                                    <div class='input-group mb-4 mt-2 pl-2 pr-2'>
                                                                        <div class='input-group-prepend'>
                                                                            <span class='input-group-text text-capitalize' style='background: #a39382; color:white; width: 9rem;'>Image<span class="text-danger">*</span></span>
                                                                        </div>
                                                                        <input type='file' class='form-control' name='' accept='application/png, application/jpg,application/jpeg' required>
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
                                                <!-- Add More Modal -->
                                            </div>
                                            <div class='col-sm-2 mr-2'>
                                                <a href='#' class='text-secondary' data-toggle='modal' data-target='#updateModal' title='Click to update'>
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
                                                                            <option value='' selected="true" disabled="disabled">--- Select Category Level ---</option>
                                                                            <option value="">Option 1</option>
                                                                            <option value="">Option 2</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class='input-group mb-4 mt-2 pl-2 pr-2'>
                                                                        <div class='input-group-prepend'>
                                                                            <span class='input-group-text text-capitalize' style='background: #a39382; color:white; width: 9rem;'>Description<span class="text-danger">*</span></span>
                                                                        </div>
                                                                        <textarea name="" id="" class='form-control' placeholder='Description' required></textarea>
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
                                                <a href='#' class='text-danger' data-toggle='modal' data-target='#deleteModal' title='Click to delete'>
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
                                                                        <a href='' class='btn btn-danger form-control'>Proceed</a>
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