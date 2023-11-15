<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-light bg-transparent sticky-top px-4 px-lg-5 py-lg-0">
    <a href="index.php" class="navbar-brand d-flex align-self-end bg-transparent  " style="transform: scale(1.2);">
        <h1 class="">
            <!-- <i class="fa fa-building text-primary me-3"></i> -->
            <img src="img/logo_text.png" style="height: 150px;">

        </h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse" style="font-size: medium; ">
        <div class="navbar-nav ms-auto px-3 py-3 py-lg-0 ml-5 text-white">
            

            <a href="index.php" id="navHome" class="nav-item nav-link text-white" style="padding: 10px 20px">Ceramica</a>
            <!-- <div class="nav-item "> -->
                <a href="shop.php" id="navShop" class="nav-item nav-link text-white" style="padding: 10px 20px"
                >Shop</a>
                <!-- <div class="dropdown-menu bg-light m-0">
                    <a href="products.php" class="dropdown-item">Products </a>
                    <a href="tools.php" class="dropdown-item">Tools</a>
                    <a href="glazes.php" class="dropdown-item">Glazes</a>
                    <a href="Equipment.php" class="dropdown-item">Equipment</a>
                    <a href="Stains.php" class="dropdown-item">Stains</a>
                    <a href="Others.php" class="dropdown-item">Others</a>
                </div> -->
            <!-- </div> -->
            <!-- <div class="nav-item dropdown"> -->
                <a href="class.php" id="navShop" class="nav-item nav-link text-white" style="padding: 10px 20px"
                >Classes</a>
                <!-- <div class="dropdown-menu bg-light m-0">
                    <a href="ongoing-classes.php" class="dropdown-item">On-going Pottery Class </a>
                    <a href="book-class.php" class="dropdown-item">Book a Class</a>
                    
                </div> -->
            <!-- </div> -->
            
            <a href="about_us.php" id="navAbout" class="nav-item nav-link text-white" style="padding: 10px 20px">
            About Us</a>

            <a href="contact.php" id="navContact" class="nav-item nav-link text-white" style="padding: 10px 20px">
            Contact us</a>
            
            <a href="" class="nav-item nav-link" style="padding: 10px 20px">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                    class="bi bi-cart" viewBox="0 0 16 16">
                    <path
                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
            </a>
            
            

            <script>
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


                if (lastItem === "home.php") {
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
    </div>
</nav>
<!-- Navbar End -->