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
    position: fixed;
    top: 0px;
    left: 0px;
    width: 100vw;
    height: 100vh;
    background: linear-gradient(90deg, #0101024D 0%, #010101 64%) 0% 0% no-repeat padding-box, url("img/Africa1.jpeg");
    background-position: 0%;
    background-size: cover;
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
.zoom {
    padding: 0px;
    /* background-color: black; */
    transition: transform .2s; /* Animation */
    /* width: 200px;
    height: 200px; */
    margin: 0 auto;
  }
  
  .zoom:hover {
    transform: scale(1.2); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
  }
    </style>
<div>

            <?php include 'navbar.php'; ?>
            <div class="home-hero ">


                <div class=" container h-100  align-self-end  ">

                    <div class="h-100  w-100 d-flex justify-content-end align-items-center  ">


                        <div class="row mt-5 h-80 w-50 justify-content-center" style = "margin-right:5%" >
                            <div
                                class=" col-lg-5 text-white h6 py-3 my-3 home-border d-flex align-items-center justify-content-center" 
                                >SHOP
                            </div>
                            <div class="col-lg-1 mx-1"></div>
                            <div
                                class="col-lg-5 text-white h6 my-3 py-3 home-border text-center d-flex align-items-center justify-content-center"
                                >CLASSES
                            </div>

                            <div class=" my-3"></div>
                            <div
                                class="col-lg-5 text-white h6 my-3 py-3 home-border text-center d-flex align-items-center justify-content-center"
                                >ABOUT US
                            </div>
                            <div class="col-lg-1 mx-1"></div>
                            <div
                                class="col-lg-5 text-white h6 my-3 py-3 home-border text-center d-flex align-items-center justify-content-center"
                                >CONTACT US
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
</body>
</html>