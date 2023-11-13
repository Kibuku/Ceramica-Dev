<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
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
        /* .book-backdrop {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background-color: #3a2a1d;
        z-index: 1;
        
        } */
        .book-container{
        height: 100vh;
        width: 100vw;
        margin: 0;
        padding: 0;
        overflow: hidden; /* Prevent scrolling */
        }
        .book-hero {
        position: fixed; /* Fixed positioning */
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(180deg, #0101024D 0%, #010101 64%) 0% 0% no-repeat padding-box, url("img/Africa1.jpeg");
        background-size: cover;
        
        }
        .book-place-me{
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
    <div class="book-backdrop">
        <?php include 'navbar.php'; ?>
        <div class="book-hero"></div>
            <div class="container">
                <br>
                <div class="calendar">
                    <div class="front">
                        <br>
                        <br>
                        
                        <div style='position:relative'>
                            <div class="current-date"></div>
                            <div class="icons">
                                <span id="prev" class="material-symbols-rounded">
                                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                </span>
                                <span id="next" class="material-symbols-rounded">
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                        <div class="current-month">
                            <ul class="week-days">
                                <li>MON</li>
                                <li>TUE</li>
                                <li>WED</li>
                                <li>THU</li>
                                <li>FRI</li>
                                <li>SAT</li>
                                <li>SUN</li>
                            </ul>
                            <ul class="days"></ul>
                        </div>
                    </div>

                    <div class="back">
                        <form action="" method='POST'>
                            <div class="info overflow" style='height: 65vh;'>
                                <div class="row">
                                    <div class="col-md">                                
                                    <p class="text-center h6 text-uppercase">
                                            <b>Booking Details</b>
                                            <hr>
                                        </p>
                                        <div class="row">
                                            <div class="col-sm-4 text-white">Amount(USD)</div>
                                            <div class="col-sm text-white">$20</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4 text-white">Description</div>
                                            <div class="col-sm text-justify text-white">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4 text-white">Location</div>
                                            <div class="col-sm text-white">Ngong road</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4 text-white">Number of people</div>
                                            <div class="col-sm text-white">20</div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <p class="text-center h6 text-uppercase">
                                            <b>Personal Details</b>
                                            <hr>
                                        </p>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" class="form-control" placeholder="Phone"  pattern='[0-9]{10}' title='Format: 0701234567' required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="actions">
                                <button class="dismiss">
                                    Dismiss <i class="fa fa-times"></i>
                                </button>
                                <button class="save" type='submit'>
                                    Book Now <i class="fa fa-check"></i>
                                </button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
    </div>


</body>
</html>