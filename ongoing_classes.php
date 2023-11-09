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
            <li class="breadcrumb-item active" style='z-index: 5;' aria-current="page">Ongoing Classes</li>
        </ol>
    </nav>
    <div class="container">
        <p class="text-center h6">
            <b>Ongoing Classes</b>
        </p>
    </div>
    <div class="container">
        <br>
        <div class="calendar">
            <!-- booking dates -->
            <input type="hidden" id='class_full' value="2023-09-17">
            <input type="hidden" id='class_not_full' value="2023-09-18">
            <!-- booking dates -->
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
                <div class="info overflow" style='height: 65vh;'>
                    <div class="row">
                        <div class="col-md">
                            <p class="text-center h6 text-uppercase">
                                <b>Ongoing Class Details</b>
                                <hr>
                            </p>

                        </div>

                    </div>
                </div>

                <div class="actions">
                    <button class="dismiss">
                        Dismiss <i class="fa fa-times"></i>
                    </button>
                    <a href="book_class" class="save">
                        Book Now <i class="fa fa-check"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
<?php
require_once 'footer.php';
?>