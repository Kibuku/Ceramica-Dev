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
</head>
<body>
<style>
    /*.home-backdrop {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: transparent linear-gradient(90deg, #0101024D 0%, #010101 64%) 0% 0% no-repeat padding-box;
    z-index: 1;
    }*/
    .home-hero {
        position: fixed; /* Fixed positioning */
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, #0101024D 0%, #010101 64%) 0% 0% no-repeat padding-box, url("img/Africa1.jpeg");
        background-size: cover;
        z-index: inherit;
    }


    .home-container1 {
        display: flex;
        padding-top: 100px;
        /*padding-left: 500px;*/

        align-items: end;
        width: 40%;
        /*height: 100px;*/
        position: relative;
        opacity: 100%;
    }

    .home-container2 {
        display: flex;

        align-items: center;
        float: left;
        width: 33.33%;
        padding: 10px;

        /* align-items: center; */
        position: relative;

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
    .home-border:hover{
        background-color: #CCBAAA;

    }
    
  
</style>
        <div>

        <?php include 'navbar_2.php'; ?>
            <div class="home-hero">
                <div class=" container h-100  align-self-end  ">

                    <div class="h-100  w-100 d-flex justify-content-end align-items-center">
                            
                        <div class=" row mt-5 h-80 w-50 justify-content-center" style = "margin-right:5%">
                            
                        
                            <div class=" col-lg-5  h6 py-2 my-3 home-border d-flex align-items-center 
                                justify-content-center" data-wow-delay="0.3s">
                                <a class="btn py-3 px-5 justify-content-center align-items-center text-white" 
                                href="shop.php"> SHOP </a>
                            </div>
                            <div class="col-lg-1 mx-1"></div>
                            <div
                                class="col-lg-5 h6 my-3 py-2 home-border text-center d-flex 
                                align-items-center justify-content-center" data-wow-delay="0.3s">
                                <a class="btn  py-3 px-5 justify-content-center align-items-center text-white" 
                                href="class.php"> CLASSES </a>
                            </div>

                            <div class=" my-3"></div>
                            <div
                                class="col-lg-5 h6 my-3 py-2 home-border text-center d-flex 
                                align-items-center justify-content-center" data-wow-delay="0.3s">
                                <a class="btn py-3 px-5 justify-content-center align-items-center text-white" 
                                href="about_us.php"> ABOUT US </a>
                            </div>
                            <div class="col-lg-1 mx-1"></div>
                            <div
                                class="col-lg-5  h6 my-3 py-2 home-border text-center d-flex 
                                align-items-center justify-content-center" data-wow-delay="0.3s">
                                <a class="btn py-3 px-5 justify-content-center align-items-center text-white" 
                                href="contact.php"> CONTACT US </a>
                            </div>
                        </div>
                            
                        
                    </div>


                    </div>
                </div>
            </div>
            <?php require_once 'footer.php'; ?>
        </div>
        
</body>

</html>
