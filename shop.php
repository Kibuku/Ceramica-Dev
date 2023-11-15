<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ceramica</title>
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
        background: linear-gradient(270deg, #0101024D 0%, #010101 64%) 0% 0% no-repeat padding-box, url("img/Africa1.jpeg");
        background-size: cover;
        z-index: inherit;
        
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
        <!-- Navigation-->
        <div class="shop-backdrop" >
        <?php include 'navbar_2.php'; ?>
            <div class="shop-hero" ></div>
                    
                    <div class="container h-100 " >
                        <div class=" w-100 d-flex justify-content-center align-items-center  ">
                            
                            <section class="">
                            <div class="justify-content-center align-items-end">
                            <p class="text-white">Search icon on a button:
                                <button type="button" class="btn btn-default text-white">
                                <span class="glyphicon glyphicon-search"></span> Search
                                </button>
                             </p>
                            </div> 
                                <div class="container px-4 px-lg-5 mt-5">
                                    <div class="row  justify-content-center">
                                        <div class="col mb-5">
                                            <div class="card h-100">
                                                <!-- Product image-->
                                                <img class="card-img-top h-100" src="img/30.jpg" alt="..." />
                                                <!-- Product details-->
                                                <div class="card-body p-4">
                                                    <div class="text-center">
                                                        <!-- Product name-->
                                                        <h5 class="fw-bolder">Crockery</h5>
                                                        <!-- Product price-->
                                                        Ksh740.00 - Ksh1800.00
                                                    </div>
                                                </div>
                                                <!-- Product actions-->
                                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="productdet.php">View options</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mb-5">
                                            <div class="card h-100">
                                                <!-- Sale badge-->
                                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                                                <!-- Product image-->
                                                <img class="card-img-top h-100" src="img/IMG_6485.jpg" alt="..." />
                                                <!-- Product details-->
                                                <div class="card-body p-4">
                                                    <div class="text-center">
                                                        <!-- Product name-->
                                                        <h5 class="fw-bolder">Special Item</h5>
                                                        <!-- Product reviews-->
                                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                                            <div class="bi-star-fill"></div>
                                                            <div class="bi-star-fill"></div>
                                                            <div class="bi-star-fill"></div>
                                                            <div class="bi-star-fill"></div>
                                                            <div class="bi-star-fill"></div>
                                                        </div>
                                                        <!-- Product price-->
                                                        <span class="text-muted text-decoration-line-through">Ksh420.00</span>
                                                        Ksh580.00
                                                    </div>
                                                </div>
                                                <!-- Product actions-->
                                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mb-5">
                                            <div class="card h-100">
                                                <!-- Sale badge-->
                                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                                                <!-- Product image-->
                                                <img class="card-img-top h-100" src="img/IMG_6424.jpg" alt="..." />
                                                <!-- Product details-->
                                                <div class="card-body p-4">
                                                    <div class="text-center">
                                                        <!-- Product name-->
                                                        <h5 class="fw-bolder">Clay</h5>
                                                        <!-- Product price-->
                                                        <span class="text-muted text-decoration-line-through">Ksh550.00</span>
                                                        Ksh925.00
                                                    </div>
                                                </div>
                                                <!-- Product actions-->
                                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mb-5">
                                            <div class="card h-100">
                                                <!-- Product image-->
                                                <img class="card-img-top h-100" src="img/IMG_6571.jpg" alt="..." />
                                                <!-- Product details-->
                                                <div class="card-body p-4">
                                                    <div class="text-center">
                                                        <!-- Product name-->
                                                        <h5 class="fw-bolder">Popular Item</h5>
                                                        <!-- Product reviews-->
                                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                                            <div class="bi-star-fill"></div>
                                                            <div class="bi-star-fill"></div>
                                                            <div class="bi-star-fill"></div>
                                                            <div class="bi-star-fill"></div>
                                                            <div class="bi-star-fill"></div>
                                                        </div>
                                                        <!-- Product price-->
                                                        Ksh540.00
                                                    </div>
                                                </div>
                                                <!-- Product actions-->
                                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mb-5">
                                            <div class="card h-100">
                                                <!-- Sale badge-->
                                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                                                <!-- Product image-->
                                                <img class="card-img-top h-100" src="img/IMG_6323.png" alt="..." />
                                                <!-- Product details-->
                                                <div class="card-body p-4">
                                                    <div class="text-center">
                                                        <!-- Product name-->
                                                        <h5 class="fw-bolder">Sale Item</h5>
                                                        <!-- Product price-->
                                                        <span class="text-muted text-decoration-line-through">Ksh550.00</span>
                                                        Ksh750.00
                                                    </div>
                                                </div>
                                                <!-- Product actions-->
                                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mb-5">
                                            <div class="card h-100">
                                                <!-- Product image-->
                                                <img class="card-img-top w-100 h-100" src="img/IMG_6500.jpg" alt="..." />
                                                <!-- Product details-->
                                                <div class="card-body p-4">
                                                    <div class="text-center">
                                                        <!-- Product name-->
                                                        <h5 class="fw-bolder">Deco</h5>
                                                        <!-- Product price-->
                                                        Ksh1420.00 - Ksh3880.00
                                                    </div>
                                                </div>
                                                <!-- Product actions-->
                                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="productdet.php">View options</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mb-5">
                                            <div class="card h-100">
                                                <!-- Sale badge-->
                                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                                                <!-- Product image-->
                                                <img class="card-img-top w-100 h-100" src="img/image00058.jpg" alt="..." />
                                                <!-- Product details-->
                                                <div class="card-body p-4">
                                                    <div class="text-center">
                                                        <!-- Product name-->
                                                        <h5 class="fw-bolder">Special Item</h5>
                                                        <!-- Product reviews-->
                                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                                            <div class="bi-star-fill"></div>
                                                            <div class="bi-star-fill"></div>
                                                            <div class="bi-star-fill"></div>
                                                            <div class="bi-star-fill"></div>
                                                            <div class="bi-star-fill"></div>
                                                        </div>
                                                        <!-- Product price-->
                                                        <span class="text-muted text-decoration-line-through">Ksh220.00</span>
                                                        Ksh1800.00
                                                    </div>
                                                </div>
                                                <!-- Product actions-->
                                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mb-5">
                                            <div class="card h-100">
                                                <!-- Product image-->
                                                <img class="card-img-top w-100 h-100" src="img/85.jpg" alt="..." />
                                                <!-- Product details-->
                                                <div class="card-body p-4">
                                                    <div class="text-center">
                                                        <!-- Product name-->
                                                        <h5 class="fw-bolder">Popular Item</h5>
                                                        <!-- Product reviews-->
                                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                                            <div class="bi-star-fill"></div>
                                                            <div class="bi-star-fill"></div>
                                                            <div class="bi-star-fill"></div>
                                                            <div class="bi-star-fill"></div>
                                                            <div class="bi-star-fill"></div>
                                                        </div>
                                                        <!-- Product price-->
                                                        Ksh3400.00
                                                    </div>
                                                </div>
                                                <!-- Product actions-->
                                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>




                        </div>
                    </div>
                    
                

                

        </div>

        <!-- Header-->
        
        <!-- Section-->
        
        <!-- Footer-->
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
