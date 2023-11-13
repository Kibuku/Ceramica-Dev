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
            <li class="breadcrumb-item active" style='z-index: 5;' aria-current="page">
                contact us
            </li>
        </ol>
    </nav>
    <div class="main-content w-100 float-left">
        <div class="container">
            <div class="row">
                <!--Google Maps-->
                <div class="contact-form-area col-sm-7 mb-3">
                    <div class="contact-form-inner">
                        <h4 class="text-capitalize">tell us your project</h4>
                        <form id="contact-form" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="name" class="float-left">First Name<span class="required">*</span></label>
                                    <input type="text" name="name" id="name" class="float-right" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="last_name" class="float-left">Last Name<span class="required">*</span></label>
                                    <input type="text" name="last_name" id="last_name" class="float-right" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="email" class="float-left">Email<span class="required">*</span></label>
                                    <input type="text" name="email" id="email" class="float-right" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="subject" class="float-left">Subject<span class="required">*</span></label>
                                    <input type="text" name="subject" id="subject" class="float-right" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="message" class="float-left">Message</label>
                                    <textarea name="message" id="message" class="float-right"></textarea>
                                </div>
                            </div>
                            <input type="submit" class="submit-btn default-btn btn-primary btn float-right" value="Send Email">
                            <p class="form-messege"></p>
                        </form>
                    </div>
                </div>
                <div class="contact-address col-sm-5 mb-3">
                    <div class="contact-inner float-left w-100">
                        <div class="contact-information">
                            <h4 class="text-capitalize">contact us</h4>

                            <p>
                                Tridenn Ltd. is East Africa’s most innovative ceramics specialist.
                                We believe that you deserve quality Ceramic products.
                            </p>
                            <div class="contact-wrapper">
                                <div class="contact-list">
                                    <i class="material-icons">place</i>
                                    <span>Tridenn Ceramics LTD Ngong Racecourse, Nairobi, Kenya.</span>
                                </div>
                                <div class="contact-list">
                                    <i class="material-icons">call</i>
                                    <span>
                                        <a href="tel:+254 100 220 088">+254 100 220 088</a>
                                        |
                                        <a href="tel:+254 111 220 088">+254 111 220 088</a>
                                    </span>
                                </div>
                                <div class="contact-list">
                                    <i class="material-icons">email</i>
                                    <span>
                                        <a href="mailto:info@tridennceramics.com">info@tridennceramics.com</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="working-time">
                            <h5>Working hours</h5>
                            <div>
                                <div>Monday – Saturday</div>
                                <div>09AM – 07PM</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Google map-->
                <div id="map-container-google-1" class="z-depth-1-half map-container col-sm-12  mb-3" style="height: 500px">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1994.3894948993602!2d36.7383107!3d-1.3078181!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1b64804a5381%3A0x4ffb8843091bec4b!2sTridenn%20Ceramics!5e0!3m2!1sen!2ske!4v1694105885576!5m2!1sen!2ske"  width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

            </div>
        </div>
    </div>

</section>
<?php
require_once 'footer.php';
?>