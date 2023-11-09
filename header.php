<!DOCTYPE html>
<html lang="en">
<?php
require "database/conn.php";
require "function.php";
$currency="KES";
$convert=148.25;
?>

<head>
    <title>Ceramics Africa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Ceramica Africa">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,900" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css?ver=<?php echo date('his'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

    <!-- Bootstrap core CSS -->
    <link href="css/styles.css?ver=<?php echo date('his'); ?>" rel="stylesheet">
    <link href="css/animate.css?ver=<?php echo date('his'); ?>" rel="stylesheet">
    <link href="css/owl-carousel.css?ver=<?php echo date('his'); ?>" rel="stylesheet">
    <link href="css/lightbox.css?ver=<?php echo date('his'); ?>" rel="stylesheet">
    <link href="css/products.css?ver=<?php echo date('his'); ?>" rel="stylesheet">
    <link href="css/slick-slider.css?ver=<?php echo date('his'); ?>" rel="stylesheet">
    <link href="css/loader.css?ver=<?php echo date('his'); ?>" rel="stylesheet">
    <link href="css/date.css?ver=<?php echo date('his'); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style id="theia-sticky-sidebar-stylesheet-TSS">
        .theiaStickySidebar:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
</head>

<body class="index layout1 overflow" id="product-compact">

    <!-- <div class="page-loader">
        <div class="spinner"></div>
        <div class="txt">Ceramics Africa;<br>Loading.....</div>
    </div> -->

    <header class="header-area header-sticky text-center header-default" style='z-index: 1000; position: relative;'>
        <div class="header-main-sticky">
            <div class="header-main-head">
                <!--<div class="header-main">-->
                          <div class="header-main" style='position: relative;'>
				<!--<div style='height: 100%; width: 100%; z-index: 2; background-color: #fff; position: absolute;'></div>-->
                    
                    <div class="container">
                         <div class="header-left float-left d-flex d-lg-flex d-md-block d-xs-block" style="z-index: 5; position: relative !important;">
                            <div class="contact" style='white-space: nowrap; font-size: smaller;'>
                                <a href="index" class='logo_mobile'>
                                    <img src="img/logos/ceramica_logo.svg" alt="logo" style="height: 90px; position: absolute; top: -20px; left: -70px">
                                </a>
                                <a href="https://www.facebook.com/Tridenn-Ceramics-348297749845250/" class='fb'>
                                    <i class='fa fa-facebook'></i>
                                </a>
                                <a href="https://instagram.com/ceramica.africa?igshid=YTQwZjQ0NmI0OA==" class='ig'>
                                    <i class='fa fa-instagram'></i>
                                </a>
                                <a href="https://www.twitter.com/tridenn_ceramics/" class='twitter'>
                                    <i class='fa fa-twitter'></i>
                                </a>
                                <a href="#" class='phone'>
                                    <i class='fa fa-phone hides'></i>
                                    <a class='hides' href="tel:+254 100 220 088">+254 100 220 088 |</a>
                                    <a class='hides' href="tel:+254 111 220 088">+254 111 220 088</a>
                                </a>
                            </div>
                        </div>
                        <div class="header-middle float-lg-left float-md-left float-sm-left float-xs-none" style="z-index: 5; position: relative !important;">
                            <div class="logo">
                                <a href="index">
                                    <img src="img/logos/ceramica_logo.svg" class="logo1" alt="logo" style="height: 90px; position: absolute; top: -20px; left: 0px; display: none;">
                                    <img src="img/logos/ceramica_logo_1.svg" class="logo2" alt="logo" style="height: 190px; position: absolute; top: -72px; left: 45px;">
                                </a>
                            </div>
                        </div>
                        <div class="header-right d-flex d-xs-flex d-sm-flex justify-content-end float-right">
                            <div class="search-wrapper">
                                <a>
                                    <i class="material-icons search">search</i>
                                    <i class="material-icons close">close</i>
                                </a>
                                <form autocomplete="off" action="/action_page.php" class="search-form">
                                    <div class="autocomplete">
                                        <input id="myInput" type="text" name="myCountry" placeholder="Search here">
                                        <button type="button">
                                            <i class="material-icons">search</i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="user-info">
                                <button type="button" class="btn">
                                    <i class="material-icons">perm_identity</i>
                                </button>
                                <div id="user-dropdown" class="user-menu">
                                    <ul>
                                        <li>
                                            <a href="" class="text-capitalize">my account</a>
                                        </li>
                                        <li>
                                            <a href="#" class="modal-view button" data-toggle="modal" data-target="#modalRegisterForm">Register</a>
                                        </li>
                                        <li>
                                            <a href="#" class="modal-view button" data-toggle="modal" data-target="#modalLoginForm">login</a>
                                            
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="cart-wrapper">
                                <button type="button" class="btn">
                                    <i class="material-icons">shopping_cart</i>
                                    <span class="ttcount">
                                        <?php
session_start();
if (isset($_SESSION["cart"]) && !empty($_SESSION["cart"])) {
    echo count($_SESSION["cart"]);
}else{
    echo 0;
}
?>
                                    </span>
                                </button>
                                <?php
                                if (isset($_SESSION["cart"]) && !empty($_SESSION["cart"])) {
                                    $sum=0;
?>
                                <div id="cart-dropdown" class="cart-menu">
                                    <ul class="w-100 float-left">
                                        <li>
                                            <table class="table table-striped">
                                                <tbody>
                                                    <?php
                                                    foreach ($_SESSION["cart"] as $productId => $quantity) {
                                            $sum = $sum +( $quantity *get_product_detail($conn,$productId,"amount"));
    ?>
                                                    <tr>
                                                        <td class="text-center">
                                                            <a href="product_details">
                                                                <img src="img/products/<?php echo get_product_detail($conn,$productId,"image_name"); ?>" alt="01" title="01" height="104" width="80">
                                                            </a>
                                                        </td>
                                                        <td class="text-left product-name">
                                                            <a href="product_details">      <?php echo get_product_detail($conn,$productId,"product_name"); ?></a>
                                                            <div class="quantity float-left w-100">
                                                                <span class="cart-qty"><?php echo $quantity; ?> × </span>
                                                                <span class="text-left price">
                                                                <?php echo $currency; ?> <?php echo number_format(get_product_detail($conn,$productId,"amount") * $convert, 2, '.', ','); ?></span>
                                                            </div>
                                                        </td>
                                                        <td class="text-center close">
                                                            <a class="close-cart">
                                                                <i class="material-icons">close</i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php  } ?>
                                                </tbody>
                                            </table>
                                        </li>
                                        <li>
                                            <table class="table price mb-30">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-left"><strong>Total</strong></td>
                                                        <td class="text-right"><strong>  <?php echo $currency; ?> <?php echo number_format($sum * $convert, 2, '.', ','); ?></strong></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </li>
                                        <li class="buttons w-100 float-left">
                                            <form action="cart_page">
                                                <input class="btn pull-left mt_10 btn-primary btn-rounded w-100" value="View cart" type="submit">
                                            </form>
                                            <form action="checkout_page">
                                                <!--<input class="btn pull-right mt_10 btn-primary btn-rounded w-100" value="Checkout" type="submit">-->
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="menu">
                    <div class="container">
                        <!-- Navbar -->
                        <nav class="navbar navbar-expand-lg navbar-light d-sm-none d-xs-none d-lg-block navbar-full">

                            <!-- Navbar brand -->
                            <a class="navbar-brand text-uppercase d-none" href="#">Navbar</a>

                            <!-- Collapse button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <!-- Collapsible content -->
                            <div class="collapse navbar-collapse">

                                <!-- Links -->
                                <ul class="navbar-nav m-auto justify-content-center">
                                    <li class="nav-item active">
                                        <a class="nav-link text-uppercase" href="index">
                                            Home
                                            <span class="sr-only">(current)</span>
                                        </a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-uppercase" href="products">
                                            Shop
                                            <span class="sr-only">(current)</span>
                                        </a>
                                        <div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3">
                                            <div class="sub-menu mb-xl-0 mb-4">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <a class="menu-item pl-0" href="products">
                                                            products
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="menu-item pl-0" href="#">
                                                            Tools
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="menu-item pl-0" href="#">
                                                            Glazes
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="menu-item pl-0" href="#">
                                                            Clay
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="menu-item pl-0" href="#">
                                                            Equipments
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="menu-item pl-0" href="#">
                                                            Stains
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="menu-item pl-0" href="#">
                                                            Others
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-uppercase" href="classes">
                                            Classes
                                        </a>
                                        <div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3">
                                            <div class="sub-menu mb-xl-0 mb-4">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <a class="menu-item pl-0" style='white-space: nowrap;' href="ongoing_classes">
                                                            Ongoing pottery classes
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="menu-item pl-0" href="book_class">
                                                            Book a lession
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link text-uppercase" href="contact_us">
                                            Contact Us
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link text-uppercase" href="custom_made">
                                            Custom Made
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link text-uppercase" href="artists">
                                            Artists
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link text-uppercase" href="ngo">
                                            NGO
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link text-uppercase" href="visit_us">
                                            Visit Us
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link text-uppercase" href="about_us">
                                            About Us
                                        </a>
                                    </li>
                                </ul>
                                <!-- Links -->
                            </div>
                            <!-- Collapsible content -->
                        </nav>
                        <!-- Navbar -->

                        <nav class="navbar navbar-expand-lg navbar-light d-lg-none navbar-responsive">

                            <!-- Navbar brand -->
                            <a class="navbar-brand text-uppercase d-none" href="#">Navbar</a>

                            <!-- Collapse button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon">
                                    <i class="material-icons">sort</i>
                                </span>
                            </button>

                            <!-- Collapsible content -->
                            <div class="collapse navbar-collapse" id="navbarSupportedContent2">

                                <!-- Links -->
                                <ul class="navbar-nav m-auto justify-content-center">

                                    <!-- Features -->
                                    <li class="nav-item dropdown active">
                                        <a class="nav-link text-uppercase" href="index">
                                            Home
                                            <span class="sr-only">(current)</span>
                                        </a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-uppercase" data-toggle="collapse" data-target="#menu2" aria-controls="menu2" aria-expanded="false" aria-label="Toggle navigation" href="products">
                                            Shop
                                            <span class="sr-only">(current)</span>
                                        </a>
                                        <div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3" id="menu2">
                                            <div class="sub-menu mb-xl-0 mb-4">
                                                <h6 class="sub-title text-uppercase font-weight-bold white-text">Featured</h6>
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <a class="menu-item pl-0" href="products">
                                                            products
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="menu-item pl-0" href="">
                                                            Tools
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="menu-item pl-0" href="">
                                                            Glazes
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="menu-item pl-0" href="">
                                                            Clay
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="menu-item pl-0" href="">
                                                            Equipments
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="menu-item pl-0" href="">
                                                            Stains
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="menu-item pl-0" href="">
                                                            Others
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-uppercase" data-toggle="collapse" data-target="#menu3" aria-controls="menu2" aria-expanded="false" aria-label="Toggle navigation" href="#">
                                            Classes
                                        </a>
                                        <div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3" id="menu3">
                                            <div class="sub-menu mb-xl-0 mb-4">
                                                <h6 class="sub-title text-uppercase font-weight-bold white-text">Featured</h6>
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <a class="menu-item pl-0" style='white-space: nowrap;' href="">
                                                            Ongoing pottery classes
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="menu-item pl-0" href="">
                                                            Book a lession
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link text-uppercase" href="contact_us">
                                            Contact Us
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link text-uppercase" href="custom_made">
                                            Custom Made
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link text-uppercase" href="artists">
                                            Artists
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link text-uppercase" href="ngo">
                                            NGO
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link text-uppercase" href="visit_us">
                                            Visit Us
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link text-uppercase" href="about_us">
                                            About Us
                                        </a>
                                    </li>

                                </ul>
                                <!-- Links -->
                            </div>
                            <!-- Collapsible content -->

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>