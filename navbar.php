<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top px-4 px-lg-5 py-lg-0">
    <a href="home.php" class="navbar-brand d-flex align-self-end  " style="transform: scale(1.2);">
        <h1 class="m-0">
            <!-- <i class="fa fa-building text-primary me-3"></i> -->
            <img src="img/logo_text.png" style="height: 150px;">

        </h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse" style="font-size: large;">
        <div class="navbar-nav ms-auto py-3 py-lg-0 ml-5 text-white">

            <a href="home.php" id="navHome" class="nav-item nav-link text-white">Ceramica</a>
            <div class="nav-item dropdown">
                <a href="shop.php" id="navShop" class="nav-link dropdown-toggle text-white" 
                data-bs-toggle="dropdown">Shop</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="products.php" class="dropdown-item">Products </a>
                    <a href="tools.php" class="dropdown-item">Tools</a>
                    <a href="glazes.php" class="dropdown-item">Glazes</a>
                    <a href="Equipment.php" class="dropdown-item">Equipment</a>
                    <a href="Stains.php" class="dropdown-item">Stains</a>
                    <a href="Others.php" class="dropdown-item">Others</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="class.php" id="navShop" class="nav-link dropdown-toggle text-white" 
                data-bs-toggle="dropdown">Classes</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="ongoing-classes.php" class="dropdown-item">On-going Pottery Class </a>
                    <a href="book-class.php" class="dropdown-item">Book a Class</a>
                    
                </div>
            </div>
            
            <a href="about_us.php" id="navAbout" class="nav-item nav-link text-white">About Us</a>

            <a href="contact-us2.php" id="navContact" class="nav-item nav-link text-white">Contact us</a>
            
            

            <script>
                let thePath = window.location.pathname;
                const lastItem = thePath.substring(thePath.lastIndexOf('/') + 1);
                
                if (lastItem == "contact-us2.php") {
                    document.getElementById("navContact").classList.add("active");
                   
                    document.getElementById("navAbout").classList.remove("active");
                    document.getElementById("navClass").classList.remove("active");
                    document.getElementById("navShop").classList.remove("active");
                    document.getElementById("navHome").classList.remove("active");
                    
                    
                }

                if (lastItem == "about_us.php") {
                    document.getElementById("navAbout").classList.add("active");

                    document.getElementById("navContact").classList.remove("active");                   
                    document.getElementById("navClass").classList.remove("active");
                    document.getElementById("navShop").classList.remove("active");
                    document.getElementById("navHome").classList.remove("active");
                    
                }


                if (lastItem == "home.php") {
                    document.getElementById("navHome").classList.add("active");

                    document.getElementById("navContact").classList.remove("active");                   
                    document.getElementById("navClass").classList.remove("active");
                    document.getElementById("navShop").classList.remove("active");
                    document.getElementById("navAbout").classList.remove("active");
                }

                if (lastItem == "shop.php") {
                    document.getElementById("navShop").classList.add("active");
                   
                    document.getElementById("navContact").classList.remove("active");                   
                    document.getElementById("navClass").classList.remove("active");
                    document.getElementById("navAbout").classList.remove("active");
                    document.getElementById("navHome").classList.remove("active");

                }

                if (lastItem == "class.php") {
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