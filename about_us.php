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
    background: linear-gradient(180deg, #0101024D 0%, #010101 64%) 0% 0% no-repeat padding-box, url("img/Africa1.jpeg");
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
    <?php include 'navbar.php'; ?>
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