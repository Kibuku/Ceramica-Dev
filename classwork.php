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
            <p class="text-center h6">
                <b>Click on a date that you want to book a class and proceed with the booking</b>
            </p>
    <!-- </div>
        
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
                                        <div class="col-sm-4">Location</div>
                                        <div class="col-sm">Ngong Racecourse</div>
                                    </div>
                                    
                            
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
    </div> -->
</body>
</html>