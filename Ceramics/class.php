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
/* .classes-backdrop {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: rgba(77, 55, 41,0.8);
    z-index: 1;
} */
.classes-page-container{
    height: 100vh;
    width: 100vw;
    margin: 0;
    padding: 0;
    overflow: hidden; /* Prevent scrolling */
}
.classes-hero {
    
    position: absolute; /* Fixed positioning */
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    /* background-image: url('/images/35.jpg'); */
    background: linear-gradient(360deg, #0101024D 0%, #010101 54%) 0% 0% no-repeat padding-box, url("img/Africa1.jpeg");
    background-size: cover;
    
}

.classes-place-me{
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
<div class="classes-page-container">
            
<?php include 'navbar.php'; ?>

            <div class="classes-hero"></div>
            <div class="classes-backdrop">

                <div class="container h-100 w-100 bg-dark">

                    <div class="d-flex mt-5 justify-content-center align-items-center h-100  bg-danger" style="padding-top:10%">
                        
                        <div
                            class="col-lg-3  text-white  h6 text-uppercase py-4 home-border 
                            d-flex justify-content-center align-items-center" >Book a Class
                        </div>
                    </div>

                </div>
            </div>
        </div>
    
</body>
</html>