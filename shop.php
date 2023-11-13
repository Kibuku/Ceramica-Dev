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
    background: linear-gradient(270deg, #0101024D 0%, #010101 64%) 0% 0% no-repeat padding-box, url("img/Africa1.jpeg");
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

<div class="shop-backdrop" >

<?php include 'navbar.php'; ?>
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