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
                <span>Orders / Custom Orders</span>
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
                Custom Orders
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
                                    <th scope='col' style='white-space: nowrap;'>Names</th>
                                    <th scope='col' style='white-space: nowrap;'>Phone</th>
                                    <th scope='col' style='white-space: nowrap;'>Email</th>
                                    <th scope='col' style='white-space: nowrap;'>Order Date</th>
                                    <th scope='col' style='white-space: nowrap; text-align: center;'>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style='white-space: nowrap;' class="p-0" scope='row'>
                                        <a href="custom_order_details" class="btn w-100 m-0 text-left">
                                            John Doe
                                        </a>
                                    </td>
                                    <td style='white-space: nowrap;' class="p-0" scope='row'>
                                        <a href="custom_order_details" class="btn w-100 m-0 text-left">
                                            0798787665
                                        </a>
                                    </td>
                                    <td style='white-space: nowrap;' class="p-0" scope='row'>
                                        <a href="custom_order_details" class="btn w-100 m-0 text-left">
                                            johndoe@gmail.com
                                        </a>
                                    </td>
                                    <td style='white-space: nowrap;' class="p-0" scope='row'>
                                        <a href="custom_order_details" class="btn w-100 m-0 text-left">
                                            14-09-2023
                                        </a>
                                    </td>
                                    <td style='white-space: nowrap;' class="p-0" scope='row'>
                                        <div class='row d-flex justify-content-center align-items-center w-100' style='width: max-content;'>
                                            <div class='col-sm-2 ml-2'>
                                                <a href='custom_order_details' class='btn ml-1 text-secondary' title='Click to view'>
                                                    <i class='fa fa-external-link' aria-hidden='true'></i>
                                                </a>
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