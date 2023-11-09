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
                Packaging Costs
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
                                    Add Packaging Cost
                                </h5>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true' style='color:black'>&times;</span>
                                </button>
                            </div>
                            <div class='modal-body overflow pb-5' style='max-height: 80vh; overflow: auto;'>
                                <form action='' method='POST' enctype='multipart/form-data'>
                                    <div class='input-group mb-4 mt-2 pl-2 pr-2'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text text-capitalize' style='background: #a39382; color:white; width: 9rem;'>Size<span class="text-danger">*</span></span>
                                        </div>
                                        <select name="" id='' class='form-control' required>
                                            <option value='' selected="true" disabled="disabled">Select Size ---</option>
                                            <option value="">Medium</option>
                                            <option value="">Large</option>
                                            <option value="">Small</option>
                                            <option value="">Extra Large</option>
                                        </select>
                                    </div>

                                    <div class='input-group mb-4 mt-2 pl-2 pr-2'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text text-capitalize' style='background: #a39382; color:white; width: 9rem;'>Cost<span class="text-danger">*</span></span>
                                        </div>
                                        <input type='text' class='form-control' name='' placeholder='Cost' required>
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
                                    <th scope='col' style='white-space: nowrap;'>Size</th>
                                    <th scope='col' style='white-space: nowrap;'>Cost</th>
                                    <th scope='col' style='white-space: nowrap;'>Create Date</th>
                                    <th scope='col' style='white-space: nowrap; text-align: center;'>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style='white-space: nowrap;' class='p-2' scope='row'>
                                        Medium
                                    </td>
                                    <td style='white-space: nowrap;' class='p-2' scope='row'>
                                        KES 500.00
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
                                                                    Update Packaging Cost
                                                                </h5>
                                                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                                    <span aria-hidden='true' style='color:black'>&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class='modal-body overflow pb-5' style='max-height: 80vh; overflow: auto;'>
                                                                <form action='' method='POST' enctype='multipart/form-data'>
                                                                    <div class='input-group mb-4 mt-2 pl-2 pr-2'>
                                                                        <div class='input-group-prepend'>
                                                                            <span class='input-group-text text-capitalize' style='background: #a39382; color:white; width: 9rem;'>Size<span class="text-danger">*</span></span>
                                                                        </div>
                                                                        <select name="" id='' class='form-control' required>
                                                                            <option value='' selected="true" disabled="disabled">Select Size ---</option>
                                                                            <option value="">Medium</option>
                                                                            <option value="">Large</option>
                                                                            <option value="">Small</option>
                                                                            <option value="">Extra Large</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class='input-group mb-4 mt-2 pl-2 pr-2'>
                                                                        <div class='input-group-prepend'>
                                                                            <span class='input-group-text text-capitalize' style='background: #a39382; color:white; width: 9rem;'>Cost<span class="text-danger">*</span></span>
                                                                        </div>
                                                                        <input type='text' class='form-control' name='' placeholder='Cost' required>
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
                                                                    Delete Packaging Cost
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