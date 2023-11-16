<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceramica</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceramica</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,900" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Bootstrap core CSS -->
   <link href="vendor/bootstrap/css/bootstrap.css?ver=<?php //echo date('his'); ?><!--" rel="stylesheet">-->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

    <!-- Bootstrap core CSS -->
   <link href="css/styles.css?ver=--><?php //echo date('his'); ?><!--" rel="stylesheet">
   <link href="css/animate.css?ver=<?php //echo date('his'); ?><!--" rel="stylesheet">-->
   <link href="css/owl-carousel.css?ver=<?php //echo date('his'); ?><!--" rel="stylesheet">-->
   <link href="css/lightbox.css?ver=<?php //echo date('his'); ?><!--" rel="stylesheet">-->
   <link href="css/products.css?ver=<?php //echo date('his'); ?><!--" rel="stylesheet">-->
   <link href="css/slick-slider.css?ver=<?php //echo date('his'); ?><!--" rel="stylesheet">-->
   <link href="css/loader.css?ver=<?php //echo date('his'); ?><!--" rel="stylesheet">-->
   <link href="css/date.css?ver=<?php //echo date('his'); ?><!--" rel="stylesheet">
</head>
<body>
<style>
            /* .shop-backdrop {
        position: absolute;
        /* top: 0;
        right: 0;
        bottom: 0;
        left: 0; 
        background-color: rgba(16, 21, 44,0.6);
        z-index: 1;
    } */
    .shop-container{
        height: 100vh;
        width: 100vw;
        margin: 0;
        padding: 0;
        overflow: hidden; /* Prevent scrolling */
    }
    .shop-hero {
        
        position: fixed; /* Fixed positioning */
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        background: linear-gradient(270deg, #0101024D 0%, #010101 64%) 0% 0% no-repeat padding-box, url("img/back.jpeg");
        background-size: cover;
        
    }
    .shop-place-me{
        position: absolute;

    }

    .home-border {
        padding: 10px;
        /*width: 5px;*/
        /*height: 102px;*/
        border-color:  #CCBAAA;
        border-top: 2px solid #CCBAAA ;
        border-left: 2px solid #CCBAAA ;
        border-right: 2px solid #CCBAAA ;
        border-radius: 15px;
        cursor:default;
        opacity: 1;
    }


</style>
<?php include 'navbar_2.php'; ?>
<div class="shop-backdrop" >


        <div class="shop-hero" ></div>
        <div class=" float-left w-100">
        <div class="container">
            <div class="row">
                    <div class="left-columm col-lg-6 col-md-6">
                        <div class="product-large-image tab-content col-sm-9 col-xs-8 float-right">
                            <div class="single-img img-full">
                                <a href="img/12.png"><img src="img/12.png" class="img-fluid zoomImg" alt=""></a>
                            </div>
                            <!-- <div class="single-img">
                                <a href="img/36.jpg"><img src="img/36.jpg" class="img-fluid" alt=""></a>
                            </div>
                            <div class="single-img">
                                <a href="img/cup and sugar bowls.png"><img src="img/cup and sugar bowls.png" class="img-fluid" alt=""></a>
                            </div>
                            <div class="single-img">
                                <a href="img/IMG_6385.jpg"><img src="img/IMG_6385.jpg" class="img-fluid" alt=""></a>
                            </div>
                            <div class="single-img">
                                <a href="img/IMG_6496.jpg"><img src="img/IMG_6496.jpg" class="img-fluid" alt=""></a>
                            </div> -->
                        </div>

                        <div class="compact small-image-list col-sm-3 col-xs-4 float-left text-center">
                            <div class="single-small-image img-full">
                                <img src="img/12.png" class="img-fluid" alt="">
                            </div>
                            <div class="single-small-image img-full">
                                <img src="img/36.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="single-small-image img-full">
                                <img src="img/cup and sugar bowls.png" class="img-fluid" alt="">
                            </div>
                            <div class="single-small-image img-full">
                                <img src="img/IMG_6385.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="single-small-image img-full">
                                <img src="img/IMG_6496.jpg.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="right-columm col-lg-6 col-md-6">
                        <div class="product-information">
                            <h4 class="product-title text-capitalize float-left w-100 text-white">
                            Ceramic Vase
                            </h4>
                            <div class="description text-white">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Donec quis viverra purus, non viverra nulla.
                                Sed vehicula libero eu lectus eleifend volutpat.
                                Sed et placerat arcu. Proin mi leo, interdum eu tortor at,
                                euismod gravida velit. Fusce non enim lectus. Duis euismod,
                                lorem vitae pharetra rhoncus, ligula risus elementum nunc,
                                at interdum eros nunc eget augue. Donec dapibus nec diam ut tempor.
                                Duis malesuada neque turpis, ut congue ipsum euismod eget.
                                Sed egestas ipsum enim, sed semper magna auctor non.
                            </div>
                            <div class="rating">
                                <div class="product-ratings d-inline-block align-middle">
                                    <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                    <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                    <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                    <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                    <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                </div>
                                <!-- <a href="#" class="review-down ">(customer reviews)</a> -->

                            </div>

                            <div class="price float-left w-100 d-flex text-white mt-2">
                                <div class="regular-price">KES 1000.00</div>

                            </div>
                            <div class="product-variants float-left w-100">
                                <div class="col-md-3 col-sm-2 col-xs-12 mt-2 size-options d-flex align-items-center text-white">
                                    <h6 >Size:</h6>

                                    <select class="form-control" name="select">
                                        <option value="" selected="">Size</option>
                                        <option value="black">Medium</option>
                                        <option value="white">Large</option>
                                        <option value="gold">Small</option>
                                        <option value="rose gold">Extra large</option>
                                    </select>
                                </div>
                                <div class="color-option d-flex align-items-center mt-2 text-white">
                                    <h6>Color :</h6>
                                    <ul class="color-categories">
                                        <li class="active">
                                            <a class="tt-pink" href="#" title="Pink"></a>
                                        </li>
                                        <li>
                                            <a class="tt-blue" href="#" title="Blue"></a>
                                        </li>
                                        <li>
                                            <a class="tt-yellow" href="#" title="Yellow"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-cart d-flex align-items-center mt-2 float-left w-100 text-white">
                                <h6>Quantity:</h6>
                                <input value="1" type="number">
                                <button type="button" class="btn btn-secondary btn-cart text-centre ml-5" data-target="#cart-pop" data-toggle="modal">
                                    <i class="material-icons">shopping_cart</i>
                                    Add To Cart
                                </button>
                            </div>
                            <div class="tt-links d-flex align-items-center float-left w-100 mb-15">
                                <a href="compare" class="link btn-compare">
                                    <i class="material-icons">equalizer</i>
                                    <span>Compare</span>
                                </a>
                                <a href="wishlist" class="link btn-wishlist">
                                    <i class="material-icons">favorite</i>
                                    <span>wishlist</span>
                                </a>
                            </div>
                            <div  class="col-6 order-2">
                            <div   class="float-bottom">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone text-white mx-2" viewBox="0 0 16 16">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook text-white mx-2" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram text-white mx-2" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x text-white mx-2" viewBox="0 0 16 16">
                                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"/>
                                </svg>
                            </div>
                        </div>

                        </div>

                    </div>
            </div>
        </div>
    </div>




</div>
                
               
            

           
   

    
</body>
</html>