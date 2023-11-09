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

        <li class="hoverable">
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
        <li class="hoverable">
            <a href="packaging">
                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                <span>Packaging</span>
            </a>
        </li>
        <li class="active_ has-sub hoverable" style="position: relative; font-size: 1vw !important;">
            <a href="#">
                <i class="fa fa-shopping-cart"></i>
                <span stye=''>Orders / Custom Orders</span>
            </a>
            <ul>
                <li>
                    <a href="general_orders">
                        General Orders
                    </a>
                </li>
                <li class="active_">
                    <a href="custom_orders">
                        <span>Custom Orders</span>
                    </a>
                </li>
            </ul>
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
            <div class="title text-uppercase overflow" style='font-weight: 600 !important; position: relative; white-space: nowrap;'>
                Doe Joe Custom Orders
                <a href="" class="btn text-secondary text-capitalize float-right text-decoration-none ml-2 pt-0 pb-0" title='Click to refresh'>
                    <i class="fa fa-refresh"> Reload</i>
                </a>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="overflow">
                        <table class="table table-striped table-hover">
                            <thead class="text-white" style='background: #a39382;'>
                                <tr>
                                    <th scope='col' style='white-space: nowrap;'>Image</th>
                                    <th scope='col' style='white-space: nowrap;'>Description</th>
                                    <th scope='col' style='white-space: nowrap;'>Order Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style='white-space: nowrap;' class="p-0 pt-1 pl-3 table-image" scope='row'>
                                        <a href="#" class="btn w-100 m-0" data-toggle='modal' data-target='#previewModal'>
                                            <img src="../img/products/02.jpg" alt="">
                                        </a>
                                    </td>
                                    <td style='white-space: nowrap;' class="p-0" scope='row'>
                                        <a href="#" class="btn w-100 m-0 text-left" data-toggle='modal' data-target='#previewModal' style='max-width: 100vh !important; text-overflow: ellipsis; overflow: hidden;'>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        </a>
                                    </td>

                                    <td style='white-space: nowrap;' class="p-0" scope='row'>
                                        <a href="#" class="btn w-100 m-0 text-left" data-toggle='modal' data-target='#previewModal'>
                                            14-09-2023
                                        </a>
                                    </td>
                                </tr>
                                <!-- Preview Modal -->
                                <div style='z-index: 100000;' class='modal fade' id='previewModal' tabindex='-1' role='dialog' aria-labelledby='previewModalTitle' aria-hidden='true'>
                                    <div class='modal-dialog modal-dialog-centered modal-lg' role='document'>
                                        <div class='modal-content'>
                                            <div class='modal-header'>
                                                <h5 class='modal-title text-uppercase' style='font-weight: 600 !important;' id='previewModalTitle'>
                                                    Preview
                                                </h5>
                                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                    <span aria-hidden='true' style='color:black'>&times;</span>
                                                </button>
                                            </div>
                                            <div class='modal-body pb-5'>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                            <ol class="carousel-indicators">
                                                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                            </ol>
                                                            <div class="carousel-inner">
                                                                <div class="carousel-item active">
                                                                    <img src="../img/products/02.jpg" style="width: 300px; height: 300px; object-fit: cover;" alt="">
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img src="../img/products/03.jpg" style="width: 300px; height: 300px; object-fit: cover;" alt="">
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img src="../img/products/04.jpg" style="width: 300px; height: 300px; object-fit: cover;" alt="">
                                                                </div>
                                                            </div>
                                                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <p>
                                                            <span class="text-uppercase" style="font-weight: 800 !important;">Order Description</span>
                                                            <hr>
                                                            <span class="text-justify overflow" style="display: block; max-height: 35vh;">
                                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Preview Modal -->
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