<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    /* .about-backdrop {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: #3a2a1d;
    z-index: 1;
    
    } */
    .about-container{
    height: 100vh;
    width: 100vw;
    margin: 0;
    padding: 0;
    overflow: hidden; /* Prevent scrolling */
    }
    .about-hero {
    position: fixed; /* Fixed positioning */
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(360deg, #0101024D 0%, #010101 64%) 0% 0% no-repeat padding-box, url("img/Africa1.jpeg");
    background-size: cover;
    
    }
    .about-place-me{
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
    <div class="about-backdrop">
    <?php include 'navbar_2.php'; ?>
        <div class="about-hero"></div>
        <div class="about-container ">
    
            <div class=" container h-100 w-100" >
                <div class=" w-100 d-flex justify-content-center align-items-center ">
                    <div class="row w-100 justify-content-center align-items-center"  >
                        <div class=" text-white col-12 my-5">
                            Ceramica is a premier ceramics studio located in the heart of Kenya, dedicated to the art of
                            crafting exquisite, tailor-made ceramics.
                            With a commitment to craftsmanship and creativity, we blend traditional techniques with
                            modern design to produce one-of-a-kind ceramic
                            pieces that reflect the unique tastes and preferences of our clients. Our team of skilled
                            artisans collaborates closely with customers
                            to bring their visions to life, whether it's custom dinnerware, decorative tiles, or
                            personalized ceramic gifts. At Kenya Crafted Ceramics,
                            we transform clay into personalized works of art that elevate any space or occasion.
                        </div>

                        <div class="col-lg-2 h6 text-uppercase text-white py-4 home-border d-flex justify-content-center align-items-center">Artists</div>
                        <div class="col-lg-1 mx-1"></div>
                        <div class="col-lg-2 h6 text-uppercase text-white py-4 home-border d-flex justify-content-center align-items-center">Partners</div>
                        <div class="col-lg-1 mx-1"></div>
                        <div class="col-lg-2 h6 text-uppercase text-white py-4 home-border d-flex justify-content-center align-items-center">Testimonial</div>
                    </div>


                </div>
            </div>
            
            
        </div>
        </div>
    
</body>
</html>