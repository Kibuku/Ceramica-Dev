<style>

</style>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-icons.css" rel="stylesheet">
<link href="css/glightbox.min.css" rel="stylesheet">
<link href="css/swiper-bundle.min.css" rel="stylesheet">
<link href="css/aos.css" rel="stylesheet">
<link href="css/mobile_navbar.css" rel="stylesheet">

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
<!--<link href="css/main.css" rel="stylesheet">-->
<style>
    #product_wrapper {
        /*z-index: 10;*/
        position: relative;
        border-radius: 20px;

        padding: 0px;
    }

    .modal-backdrop {
        z-index: 1020;
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

<header id="header" class="header sticky-top d-flex align-items-center ">
    <div class="  d-flex align-items-center justify-content-centre ">

        <div class=" col-7 w-100 ml-2">

            <a href="index.php"><img src="img/logo_text.png" alt="ceramica" style="height:150px"/></a>
        </div>

        <div id="product-wrapper">
        

            <nav id="navmenu" class="navmenu ml-5 align-items-end">
                <ul>
                    <li><a href="index.php" id="navHome" class="nav-item nav-link">Home</a></li>
                    <li><a href="shop.php" id="navShop" class="nav-item nav-link">Shop</a></li>
                    <li><a href="class.php" id="navClass" class="nav-item nav-link">Classes</a></li>
                    <li><a href="about_us.php" id="navAbout" class="nav-item nav-link">About Us</a></li>
                    <li><a href="contact.php" id="navContact" class="nav-item nav-link">Contact Us</a></li>
                    <li id="cartIcon">
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-cart" viewBox="0 0 16 16">
                                <path
                                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                        </a>
                    </li>
                </ul>

                <i id="showNav" class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <button id="openModalBtn2" type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#exampleModal2" data-backdrop="false">
                Launch demo modal
            </button>


        </div>
        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" id="exampleModal2" tabindex="-1" role="dialog"
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
                    <div class= "modal-body">
                        <div>
                            <div id="modalCartDetails">
                                <div id="modalCartClose" class="float-right mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                                        <path style="fill:black"
                                              d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
                                    </svg>
                                </div>
                                <br/>
                                <br/>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-2"></div>
                                            <div class="col-lg-8 bg-success preview-box rounded-lg "
                                                 style="height:200px"></div>
                                            <div class="col-lg-2"></div>
                                            <div class="col-lg-12 my-2 text-brown d-flex justify-content-center align-items-center">
                                                10-inch plate
                                            </div>
                                            <div class="col-lg-4"></div>
                                            <div class="col-lg-4  rounded-sm bg-brown  my-2 row d-flex justify-content-center align-items-center">
                                                <div class="col-lg-1  border-0" >
                                                    -
                                                </div>
                                                <div class="col-lg-2  border-0 d-flex justify-content-center align-items-center">
                                                    {cartCount()}
                                                </div>
                                                <div class="col-lg-1 border-0 " >
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                         fill="currentColor" class="bi bi-plus " viewBox="0 0 16 16">
                                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                                    </svg>

                                                </div>
                                            </div>

                                            <div class="col-lg-12  my-1 d-flex justify-content-center align-items-center ">
                                                view other items
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-6 text-black">Cart Total</div>
                                            <div class="col-lg-6 text-black"> %1000.00</div>
                                            <div class="col-lg-12 my-1"></div>

                                            <div class="col-lg-6 text-black">Tax</div>
                                            <div class="col-lg-6 text-black"> %16.000</div>
                                            <div class="col-lg-12 my-1"></div>

                                            <div class="col-lg-6 text-black">Delivery</div>
                                            <div class="col-lg-6 text-black"> %5</div>
                                            <div class="col-lg-12 my-1"></div>

                                            <div class="col-lg-6 text-black">Discount</div>
                                            <div class="col-lg-6 text-black"> -%10</div>

                                            <div class="col-lg-2"></div>
                                            <div class="col-lg-5 border-bottom  my-4"></div>
                                            <div class="col-lg-2"></div>

                                            <div class="col-lg-6 text-black">Cart Total</div>
                                            <div class="col-lg-6 text-black"> 1000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="modalCheckOutDetails">
                                <div id="modalCheckOutShowCart" class="float-right ">

                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                                        <path style="fill:black"
                                              d="M380.6 81.7c7.9 15.8 1.5 35-14.3 42.9L103.6 256 366.3 387.4c15.8 7.9 22.2 27.1 14.3 42.9s-27.1 22.2-42.9 14.3l-320-160C6.8 279.2 0 268.1 0 256s6.8-23.2 17.7-28.6l320-160c15.8-7.9 35-1.5 42.9 14.3z"/>
                                    </svg>


                                </div>
                                <br/>
                                <br/>
                                <div class="row mt-5">
                                    <div class="col-lg-6 text-black ml-4"><h2 class="text-black">Grand total</h2></div>
                                    <div class="col-lg-6 text-black ml-4"><h2 class="text-black">$111.5</h2></div>
                                </div>
                                <h4 class="text-black my-5 ml-3">Complete payment via :</h4>
                                <div class="ml-3 row justify-content-centre align-items-centre">
                                    <div class="col-lg-3 check-out-item-border py-3 text-uppercase  text-center justify-content-center align-content-center">
                                        <h6 class="text-dark home-border">mpesa</h6></div>
                                    <div class="col-lg-1 mx-1"></div>
                                    <div class="col-lg-3 check-out-item-border py-3 text-uppercase  text-center  justify-content-center align-content-center">
                                        <h6 class="text-dark home-border">card</h6></div>
                                    <div class="col-lg-1 mx-1"></div>
                                    <div class="col-lg-3 check-out-item-border py-3 text-uppercase  text-center justify-content-center align-content-center">
                                        <h6 class="text-dark home-border">cash</h6></div>
                                </div>
                                <div class="my-4"></div>
                            </div>


                        </div>


                    </div>
                    <div class="modal-footer">
                        <button id="modalCartCloseFooter" type="button" class="btn btn-primary" data-dismiss="modal">
                            Close
                        </button>
                        <button id="modalCartCheckoutFooter" type="button" class="btn btn-primary">checkout</button>
                    </div>
                </div>
            </div>
        </div>
        

        <script>
            let cartPage = 1;
            let modalCartCloseFooter = document.getElementById('modalCartCloseFooter')
            let modalCartClose = document.getElementById('modalCartClose')

            let modalCartCheckoutFooter = document.getElementById('modalCartCheckoutFooter')
            let modalCheckOutShowCart = document.getElementById('modalCheckOutShowCart')

            let modalCheckOutDetails = document.getElementById('modalCheckOutDetails')
            let modalCartDetails = document.getElementById('modalCartDetails')
            modalCheckOutDetails.style.opacity = "none"

            let openModalBtn2 = document.getElementById('openModalBtn2')
            let cartIcon = document.getElementById("cartIcon");
            openModalBtn2.style.display = "none"
            cartIcon.addEventListener('click', (e) => {
                e.preventDefault();
                openModalBtn2.click();
            });

            modalCartClose.addEventListener('click', (e) => {
                e.preventDefault();
                console.log("hi...")
                modalCartCloseFooter.click();
            });

            modalCartCheckoutFooter.addEventListener('click', (e) => {
                e.preventDefault();
                modalCartDetails.style.display = "none"
                modalCheckOutDetails.style.display = "block"
            });

            let showNavBar = true;


            let showNav = document.getElementById("showNav");
            showNav.addEventListener('click', (e) => {
                showNavBar = !showNavBar; // Toggle the variable

                // Toggle the class based on showNavBar value
                if (showNavBar) {
                    console.log("true...")
                    showNav.classList.remove("bi-list");
                    showNav.classList.add("bi-x");
                    // document.getElementById("navmenu").classList.add("show");
                } else {
                    console.log("false...")
                    showNav.classList.remove("bi-x");
                    showNav.classList.add("bi-list");
                    // document.getElementById("navmenu").classList.remove("show");
                }
            });


            let thePath = window.location.pathname;
            const lastItem = thePath.substring(thePath.lastIndexOf('/') + 1);

            if (lastItem === "contact.php") {
                document.getElementById("navContact").classList.add("active");

                document.getElementById("navAbout").classList.remove("active");
                document.getElementById("navClass").classList.remove("active");
                document.getElementById("navShop").classList.remove("active");
                document.getElementById("navHome").classList.remove("active");


            }

            if (lastItem === "about_us.php") {
                document.getElementById("navAbout").classList.add("active");

                document.getElementById("navContact").classList.remove("active");
                document.getElementById("navClass").classList.remove("active");
                document.getElementById("navShop").classList.remove("active");
                document.getElementById("navHome").classList.remove("active");

            }


            if (lastItem === "index.php") {
                document.getElementById("navHome").classList.add("active");

                document.getElementById("navContact").classList.remove("active");
                document.getElementById("navClass").classList.remove("active");
                document.getElementById("navShop").classList.remove("active");
                document.getElementById("navAbout").classList.remove("active");
            }

            if (lastItem === "shop.php") {
                document.getElementById("navShop").classList.add("active");

                document.getElementById("navContact").classList.remove("active");
                document.getElementById("navClass").classList.remove("active");
                document.getElementById("navAbout").classList.remove("active");
                document.getElementById("navHome").classList.remove("active");

            }

            if (lastItem === "class.php") {
                document.getElementById("navClass").classList.add("active");

                document.getElementById("navContact").classList.remove("active");
                document.getElementById("navAbout").classList.remove("active");
                document.getElementById("navHome").classList.remove("active");
                document.getElementById("navShop").classList.remove("active");
            }


        </script>
    </div>
</header>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/glightbox.min.js"></script>
<script src="js/purecounter_vanilla.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/swiper-bundle.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/validate.js"></script>
<script src="js/main.js"></script>
