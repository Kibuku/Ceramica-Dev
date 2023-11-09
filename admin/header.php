<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tridenn Ceramics</title>
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link href="css/loader.css?ver=<?php echo date('his'); ?>" rel="stylesheet">
    <link href="css/main.css?ver=<?php echo date('his'); ?>" rel="stylesheet">
</head>

<body class='overflow'>
    <!--<div class="page-loader">-->
    <!--    <div class="spinner"></div>-->
    <!--    <div class="txt">Tridenn Ceramics<br>Loading.....</div>-->
    <!--</div>-->
    <?php 
    require "../database/conn.php";
     require "../function.php";
   
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
        <li class="hoverable">
            <a href="packaging">
                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                <span>Packaging</span>
            </a>
        </li>
        <li class="has-sub hoverable" style="position: relative">
            <a href="#">
                <i class="fa fa-shopping-cart"></i>
                <span>Orders</span>
            </a>
            <ul>
                <li>
                    <a href="general_orders">
                        General Orders
                    </a>
                </li>
                <li >
                    <a href="custom_orders">
                        Custom Orders
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>
    
