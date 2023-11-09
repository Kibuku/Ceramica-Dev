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

        <li class="hoverable">
            <a href="products">
                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                <span>Products</span>
            </a>
        </li>
        <li class="active hoverable">
            <a href="category">
                <i class="fa fa-cubes" aria-hidden="true"></i>
                <span>Category</span>
            </a>
        </li>
        <li class="hoverable">
            <a href="packaging">
                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                <span>Packaging</span>
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
                Pots Sub Category
                <a href="" class="btn text-secondary text-capitalize float-right text-decoration-none ml-2 pt-0 pb-0" title='Click to refresh'>
                    <i class="fa fa-refresh"> Reload</i>
                </a>
                <a href="#" class="btn text-secondary text-capitalize float-right text-decoration-none pt-0 pb-0" title='Click to add product' data-toggle='modal' data-target='#createModal'>
                    <i class="fa fa-plus"> Add</i>
                </a>

                <!-- Create Modal -->
                <div style='z-index: 100000;' class='modal fade' id='createModal' tabindex='-1' role='dialog' aria-labelledby='createModalTitle' aria-hidden='true'>
                    <div class='modal-dialog modal-dialog-centered' role='document'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title text-uppercase' style='font-weight: 600 !important;' id='createModalTitle'>
                                    Add Sub Category
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

                                    <div class='input-group mb-4 mt-2 pl-2 pr-2 text-capitalize'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text' style='background: #a39382; color:white; width: 9rem;'>Dimensions<span class="text-danger">*</span></span>
                                        </div>
                                        <div class="form-control" style='height: fit-content'>
                                            <div class="form-group m-0">
                                                <input type="checkbox" id="length" name="" value="Length">
                                                <label for="length">Length</label>
                                            </div>
                                            <div class="form-group m-0">
                                                <input type="checkbox" id="width" name="" value="Width">
                                                <label for="width">Width</label>
                                            </div>
                                            <div class="form-group m-0">
                                                <input type="checkbox" id="height" name="" value="Height">
                                                <label for="height">Height</label>
                                            </div>
                                            <div class="form-group m-0">
                                                <input type="checkbox" id="other" name="" value="Other">
                                                <label for="other">Other</label>
                                            </div>
                                        </div>
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
                                    <th scope='col' style='white-space: nowrap;'>Name</th>
                                    <th scope='col' style='white-space: nowrap;'>Dimensions</th>
                                    <th scope='col' style='white-space: nowrap;'>Create Date</th>
                                    <th scope='col' style='white-space: nowrap; text-align: center;'>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style='white-space: nowrap;' class='p-2' scope='row'>Pots Sub Category</td>
                                    <td style='white-space: nowrap;' class='p-2' scope='row'>
                                    L x W x H
                                    </td>
                                    <td style='white-space: nowrap;' class='p-2' scope='row'>14-09-2023</td>
                                    <td style='white-space: nowrap;' class='p-2' scope='row'>
                                        <div class='row d-flex justify-content-center align-items-center w-100' style='width: max-content;'>
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
                                                                    Update Sub Category
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

                                                                    <div class='input-group mb-4 mt-2 pl-2 pr-2 text-capitalize'>
                                                                        <div class='input-group-prepend'>
                                                                            <span class='input-group-text' style='background: #a39382; color:white; width: 9rem;'>Dimensions<span class="text-danger">*</span></span>
                                                                        </div>
                                                                        <div class="form-control" style='height: fit-content'>
                                                                            <div class="form-group m-0">
                                                                                <input type="checkbox" id="length" name="" value="Length">
                                                                                <label for="length">Length</label>
                                                                            </div>
                                                                            <div class="form-group m-0">
                                                                                <input type="checkbox" id="width" name="" value="Width">
                                                                                <label for="width">Width</label>
                                                                            </div>
                                                                            <div class="form-group m-0">
                                                                                <input type="checkbox" id="height" name="" value="Height">
                                                                                <label for="height">Height</label>
                                                                            </div>
                                                                            <div class="form-group m-0">
                                                                                <input type="checkbox" id="other" name="" value="Other">
                                                                                <label for="other">Other</label>
                                                                            </div>
                                                                        </div>
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
                                                                    Delete Sub Category
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
<?php
include_once 'footer.php';
?>