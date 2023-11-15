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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
    <!--    <link href="vendor/bootstrap/css/bootstrap.css?ver=--><?php //echo date('his'); ?><!--" rel="stylesheet">-->
    <!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css"-->
    <!--          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">-->
    <!--    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>-->

    <!-- Bootstrap core CSS -->
    <!--    <link href="css/styles.css?ver=--><?php //echo date('his'); ?><!--" rel="stylesheet">-->
    <!--        <link href="css/animate.css?ver=--><?php //echo date('his'); ?><!--" rel="stylesheet">-->
    <!--        <link href="css/owl-carousel.css?ver=--><?php //echo date('his'); ?><!--" rel="stylesheet">-->
    <!--        <link href="css/lightbox.css?ver=--><?php //echo date('his'); ?><!--" rel="stylesheet">-->
    <!--    <link href="css/products.css?ver=--><?php //echo date('his'); ?><!--" rel="stylesheet">-->
    <!--    <link href="css/slick-slider.css?ver=--><?php //echo date('his'); ?><!--" rel="stylesheet">-->
    <!--    <link href="css/loader.css?ver=--><?php //echo date('his'); ?><!--" rel="stylesheet">-->
    <!--    <link href="css/date.css?ver=--><?php //echo date('his'); ?><!--" rel="stylesheet">-->

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'></script>
</head>
<body>
<style>
    .classes-page-containers {
        height: 100vh;
        width: 100vw;
        margin: 0;
        padding: 0;
        overflow: hidden; /* Prevent scrolling */
    }

    .book-hero {
        position: absolute; /* Fixed positioning */
        top: 0;
        left: 0;
        width: 100%;
        height: 170%;
        z-index: 0;
        /* background-image: url('/images/35.jpg'); */
        background: linear-gradient(360deg, #0101024D 0%, #010101 54%) 0% 0% no-repeat padding-box, url("img/Africa1.jpeg");
        background-size: cover;

    }

    #calender_wrapper {
        z-index: 10;
        position: relative;
        background-color: #FFFFFF;
        padding: 10px;
    }
</style>
<script>

    document.addEventListener('DOMContentLoaded', function () {

//Get a reference to the button and the modal
        let openModalBtn = document.getElementById('openModalBtn')
        let calendarEl = document.getElementById('calendar');
        let calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth'
        });
        calendar.render();

        calendar.on('dateClick', function (info) {
            console.log('clicked on ' + info.dateStr);
            openModalBtn.click();
        });


        openModalBtn.style.display = "none"


    });

</script>
<?php include 'navbar_2.php'; ?>
<div class="classes-page-container">

    <div class="book-hero"></div>
    <div id="calender_wrapper" class="container align-content-center justify-content-center ">
        <div id='calendar' class="calender_container"></div>
    </div>

    <button id="openModalBtn" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
    </button>


    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="exampleModalLabel">PERSONAL DETAILS</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form>
                        <div class="row">
                            <div class="col-md">
                                <p class="text-center h6 text-uppercase">
                                    <b>Booking Details</b>
                                <hr>
                                </p>
                                <div class="row">
                                    <div class="col-sm-4">Amount(USD)</div>
                                    <div class="col-sm">$20</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">Description</div>
                                    <div class="col-sm text-justify">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley of type and scrambled it to make a type
                                        specimen book.
                                        It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged.
                                        It was popularised in the 1960s with the release of Letraset sheets containing
                                        Lorem Ipsum passages, and more recently with desktop publishing software like
                                        Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">Location</div>
                                    <div class="col-sm">Gong road</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">Number of people</div>
                                    <div class="col-sm">20</div>
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
                                    <input type="tel" class="form-control" placeholder="Phone" pattern='[0-9]{10}'
                                           title='Format: 0701234567' required>
                                </div>
                            </div>
                        </div>
                        <!--<button type="submit" class="btn btn-primary">Submit</button>-->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn">Book appointments</button>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>


