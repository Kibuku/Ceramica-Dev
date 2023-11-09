<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
            <link href="https://fonts.gstatic.com" rel="preconnect"/>
            <link
                href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
                rel="stylesheet"/>
                <link rel="stylesheet" href="public/fonts/icomoon/style.css">

<link rel="stylesheet" href="css2/owl.carousel.min.css">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css2/bootstrap.min.css">

<!-- Style -->
<link rel="stylesheet" href="css2/style.css">
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
    background: linear-gradient(270deg, #0101024D 0%, #010101 64%) 0% 0% no-repeat padding-box, url("/images/Africa1.jpeg");
    background-size: cover;
    
}
.shop-place-me{
    position: absolute;

}
    </style>

<div class="shop-backdrop" >
<header id="header" class="header sticky-top d-flex align-items-center ">
                <div class="  d-flex align-items-center justify-content-centre ">

                <div class=" col-10 w-100 ml-5 zoom">
                            {/* <a href="/"><img src="images/logo_map2.png" alt="ceramica" style="height:100px" /></a> */}
                            <a href="/"><img src="images/logo_text.png" alt="ceramica" style="height:200px" /></a>
                </div>

                    
                    <nav id="navmenu" class="navmenu" >
                        <ul>
                            <li><a href="/" class= "nav-link active" >Home</a></li>
                            <li><a href="/shop" class= "" >Shop</a></li>
                            <li><a href="/classes" class= "" >Classes</a></li>
                            <li><a href="/about_us" class= "">About Us</a></li>
                            <li><a href="/contact_us" class= "">Contact Us</a></li>
                            <li>
                                <a href="" 
                                    
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-cart" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>

                        <i class=""></i>
                    </nav>
                    

                    

                </div>
            </header>
            <!-- {/*<div class={showModalBackDrop() ? "modal-backdrop" : ""} />*/} -->
            <div class="shop-hero" ></div>
            <div class="shop-container">
                <div class="container h-100 " >
                    <div class=" w-100 d-flex justify-content-center align-items-center  ">
                        
                        <div class=" d-flex justify-content-center row w-75" style="padding-top:5%">

                                <div class="col-lg-2 col-md-6 col-sm-12 text-white h6 text-uppercase py-4 home-border d-flex justify-content-center align-items-center  px-5 ">Crockery</div>
                                 <div class="col-lg-2 col-md-0 col-sm-0 mx-1"></div>
                                <div class="col-lg-2 col-md-6 col-sm-12 text-white h6 text-uppercase py-4 home-border d-flex justify-content-center align-items-center px-5 ">Deco</div>
                                 <div class="col-lg-2 mx-1"></div>
                                 <div class="col-lg-2 col-md-6 col-sm-12 text-white h6 text-uppercase py-4 home-border d-flex justify-content-center align-items-center px-5  ">Tiles</div>

                                <div class="col-lg-12 my-1"></div>

                                <div class="col-lg-2 col-md-6 col-sm-12 text-white h6 text-uppercase py-4 home-border text-center d-flex justify-content-center align-items-center px-5 " >Clay</div>
                                 <div class="col-lg-2 mx-1"></div> 
                                <div class="col-lg-2 col-md-6 col-sm-12 text-white h6 text-uppercase py-4 home-border text-center d-flex justify-content-center align-items-center px-5">Customs</div>
                                 <div class="col-lg-2 mx-1"></div> 
                                 <div class="col-lg-2 col-md-6 col-sm-12 text-white h6 text-uppercase py-4 home-border text-center d-flex justify-content-center align-items-center px-5">Curios</div>

                        </div>
                    </div>
                </div>
                
               
            </div>

           
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>