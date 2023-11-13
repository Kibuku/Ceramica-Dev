<?php
require_once 'header.php';
?>
<section style='min-height: calc(100vh - 40px);'>
    <nav aria-label="breadcrumb" class="w-100 float-left">
        <ol class="breadcrumb parallax justify-content-center" data-source-url="img/banner/parallax_.jpg" style="background-image: url(&quot;img/banner/parallax_.jpg&quot;); background-position: 50% 49.7062%; background-repeat: no-repeat; background-size: cover; overflow: hidden;  position: relative;">
            <div style='height: 100%; width: 100%; z-index: 2; background-color: #080d15; opacity: .7; position: absolute; top: 0;'></div>
            <li class="breadcrumb-item active" style='z-index: 5;'>
                <a href="index">Home</a>
            </li>
            <li class="breadcrumb-item active" style='z-index: 5;' aria-current="page">Book a class</li>
        </ol>
    </nav>

    <div class="container">
        <p class="text-center h6">
            <b>Click on a date that you want to book a class and proceed with the booking</b>
        </p>
    </div>
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
                                    <div class="col-sm-4">Amount(USD)</div>
                                    <div class="col-sm">$20</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">Description</div>
                                    <div class="col-sm text-justify">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
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
</section>
<?php
require_once 'footer.php';
?>