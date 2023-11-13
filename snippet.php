<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <style>

    *{
    box-sizing: border-box

    }
    #search {
    outline: none;
    border: none;
    display: inline-block
    }
    #burgundy {
    color: rgb(153, 40, 59)
    }
    #orange,
    select,
    .btn {
    color: orange
    }
    .fa-search {
    font-size: 20px;
    padding: 10px;
    margin-bottom: 3px;
    padding-right: 20px
    }
    .search-nav-item {
    height: 40px
    }
    nav2 {
    padding: 0px 100px
    }
    .fa-user-o,
    .fa-shopping-cart {
    font-size: 20px;
    padding: 4px
    }
    .form-group {
    margin-bottom: 5px
    }
    label {
    padding-left: 10px
    }
    .form-group:last-child {
    margin-bottom: 0
    }
    h6 {
    margin-bottom: 0px
    }
    #sort {
    outline: none;
    border: none
    }
    .btn {
    border: 1px solid orange;
    border-radius: 10px;
    background-color: #fff
    }
    .btn:hover {
    color: #fff;
    background-color: orange
    }
    .card-body {
    padding: 8px
    }
    .sign {
    width: 25px;
    height: 25px
    }
    .discount {
    border: 1px solid orange;
    border-radius: 5px;
    width: 65px;
    position: absolute;
    top: 2%
    }
    @media(min-width:1200px) {
    #search {
    width: 300px;
    padding: 5px;
    padding-left: 20px
    }
    .search-nav-item {
    margin-left: 400px;
    width: 350px
    }
    .fa-user-o {
    margin-left: 300px
    }
    .text {
    display: none
    }
    .fa-user-o,
    .fa-shopping-cart {
    font-size: 20px;
    padding-left: 20px
    }
    #sidebar {
    width: 30%;
    padding: 20px;
    float: left
    }
    #products {
    width: 70%;
    padding: 10px;
    margin: 0;
    float: right
    }
    .card {
    width: 300px;
    height: 330px;
    border: none
    }
    .card-img-top {
    width: 295px;
    height: 200px;
    border-radius: 10px
    }
    del {
    padding-right: 2px
    }
    .filter,
    #mobile-filter {
    display: none
    }
    }
    @media(min-width:992px) and (max-width:1199px) {
    #search {
    width: 300px;
    padding: 5px;
    padding-left: 20px
    }
    .search-nav-item {
    margin-left: 200px;
    width: 350px
    }
    .fa-user-o {
    margin-left: 160px
    }
    .text {
    display: none
    }
    #sidebar {
    width: 30%;
    padding: 20px;
    float: left
    }
    #products {
    width: 70%;
    padding: 10px;
    margin: 0;
    float: right
    }
    .card {
    width: 200px;
    height: 330px;
    border: none
    }
    .card-img-top {
    width: 200px;
    height: 200px;
    border-radius: 10px
    }
    .fa-plus,
    .fa-minus {
    font-size: 12px
    }
    .sign {
    height: 25px
    }
    .price {
    width: 99px
    }
    .filter,
    #mobile-filter {
    display: none
    }
    }
    @media(min-width:768px) and (max-width:991px) {
    #search {
    width: 300px;
    padding: 5px;
    padding-left: 20px
    }
    .search-nav-item {
    margin-left: 60px;
    width: 350px
    }
    .fa-user-o {
    margin-left: 80px
    }
    .text {
    display: none
    }
    #sidebar {
    width: 35%;
    padding: 20px;
    float: left
    }
    #products {
    width: 65%;
    padding: 10px;
    margin: 0;
    float: right
    }
    .card {
    border: none
    }
    .filter,
    #mobile-filter {
    display: none
    }
    }
    @media(min-width:576px) and (max-width:767px) {
    .text {
    display: none
    }
    .search-nav-item {
    margin-left: 35px;
    width: 270px
    }
    #search {
    width: 240px;
    padding: 5px;
    padding-left: 20px
    }
    .fa-search {
    padding: 3px;
    font-size: 18px
    }
    #sidebar {
    width: 40%;
    padding: 20px;
    float: left
    }
    #products {
    width: 60%;
    padding: 10px;
    margin: 0;
    float: right
    }
    .card {
    border-radius: 10px;
    }
    #off {
    padding-left: 2px
    }
    #sorting span,
    #res {
    font-size: 14px
    }
    .filter,
    #mobile-filter {
    display: none
    }
    }
    @media(max-width:575px) {
    .search-nav-item {
    margin: 0;
    width: 100%;
    margin-top: 10px
    }
    #search {
    width: 80%;
    padding-left: 10px;
    margin-top: 10px;
    padding-right: 10px
    }
    .fa-search {
    padding: 10px;
    font-size: 18px
    }
    #sidebar {
    display: none
    }
    .filter {
    margin-left: 70%;
    margin-top: 2%
    }
    #sorting,
    #res {
    font-size: 12px;
    margin-top: 2%
    }
    .shop-backdrop {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0; 
        background-color: rgba(16, 21, 44,0.6);
        z-index: 1;
    }
    .shop-container{
        height: 100vh;
        width: 100vw;
        margin: 0;
        padding: 0;
        overflow: hidden; /* Prevent scrolling */
    }
    .shop-hero {
        
        position: fixed; /* Fixed positioning */
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(270deg, #0101024D 0%, #010101 100%) 0% 0% no-repeat padding-box, url("img/Africa1.jpeg");
        background-size: cover;
        
    }
    .shop-place-me{
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
    }
    </style>

    </head>
<!-- Navbar section -->
    <body>
    <div class="shop-backdrop" >
    <?php include 'navbar.php'; ?> 
    
    <div class="shop-hero"></div>
    
        <nav class="navbar navbar-expand-sm navbar-light shop-hero border-bottom"> 
        
            <a href="#" class="navbar-brand d-flex align-self-end  " style="transform: scale(1.2);">
                <h1 class="m-0">
                <!-- <i class="fa fa-building text-primary me-3"></i> -->
                <img src="img/8.png" style="height: 150px;">

                </h1>
            </a>
            
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor" 
                    aria-controls="navbarColor" aria-expanded="false" aria-label="Toggle navigation"> 
                    <span class="navbar-toggler-icon"></span> 
                </button>
            <div class="collapse navbar-collapse" id="navbarColor">
                <ul class="navbar-nav">
                    <li class="nav-item rounded bg-light search-nav-item"><input type="text" id="search" class="bg-light" placeholder="Search vases, deco, cups, plates"><span class="fa fa-search text-muted"></span></li>
                    <li class="nav-item"><a class="nav-link" href="#"><span class="fa fa-user-o"></span><span class="text">Login</span></a> </li>
                    <li class="nav-item "><a class="nav-link" href="#"><span class="fa fa-shopping-cart"></span><span class="text">Cart</span></a> </li>
                </ul>
            </div>
        </nav>
            <div class="filter"> <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#mobile-filter" aria-expanded="true" aria-controls="mobile-filter">Filters<span class="fa fa-filter pl-1"></span></button>
            </div>
        <div id="mobile-filter" >
            <p class="pl-sm-0 pl-2"> Shop | <b>Ceramics</b></p>
            <div class="border-bottom pb-2 ml-2">
                <h4 id="burgundy">Filters</h4>
            </div>
            <div class="py-2 border-bottom ml-3">
                <h6 class="font-weight-bold">Crockery</h6>
                    <div id="orange"><span class="fa fa-minus"></span></div>
                        <form>
                            <div class="form-group"> <input type="checkbox" id="artisan"> <label for="artisan">Plates</label> </div>
                            <div class="form-group"> <input type="checkbox" id="breakfast"> <label for="breakfast">Vases</label> </div>
                            <div class="form-group"> <input type="checkbox" id="healthy"> <label for="healthy">Cups</label> </div>
                            <div class="form-group"> <input type="checkbox" id="healthy"> <label for="healthy">Bowls</label> </div>
                        </form>
            </div>
            <div class="py-2 border-bottom ml-3">
                <h6 class="font-weight-bold">Deco</h6>
                    <div id="orange"><span class="fa fa-minus"></span></div>
                        <form>
                            <div class="form-group"> <input type="checkbox" id="tea"> <label for="tea">Christmas Deco</label> </div>
                            <div class="form-group"> <input type="checkbox" id="cookies"> <label for="cookies">Wildlife Deco</label> </div>
                            <div class="form-group"> <input type="checkbox" id="pastries"> <label for="pastries">Tabletops Deco</label> </div>
                            <div class="form-group"> <input type="checkbox" id="dough"> <label for="dough">Plant Deco</label> </div>
                            <div class="form-group"> <input type="checkbox" id="choco"> <label for="choco">Color Deco</label> </div>
                        </form>
            </div>
            <div class="py-2 ml-3">
                <h6 class="font-weight-bold">Top Offers</h6>
                    <div id="orange"><span class="fa fa-minus"></span></div>
                        <form>
                            <div class="form-group"> <input type="checkbox" id="25off"> <label for="25">25% off</label> </div>
                            <div class="form-group"> <input type="checkbox" id="5off"> <label for="5off" id="off">Christmass offers</label> </div>
                        </form>
            </div>
        </div>
    <!-- Sidebar filter section -->
        <section id="sidebar">
            <p> Shop | <b>Ceramics</b></p>
                <div class="border-bottom pb-2 ml-2">
                    <h4 id="burgundy">Filters</h4>
                </div>
                <div class="py-2 border-bottom ml-3">
                    <h6 class="font-weight-bold">Crockery</h6>
                        <div id="orange"><span class="fa fa-minus"></span></div>
                            <form>
                                <div class="form-group"> <input type="checkbox" id="artisan"> <label for="artisan">Plates</label> </div>
                                <div class="form-group"> <input type="checkbox" id="breakfast"> <label for="breakfast">Vases</label> </div>
                                <div class="form-group"> <input type="checkbox" id="healthy"> <label for="healthy">Cups</label> </div>
                                <div class="form-group"> <input type="checkbox" id="healthy"> <label for="healthy">Bowls</label> </div>
                            </form>
                </div>
                <div class="py-2 border-bottom ml-3">
                    <h6 class="font-weight-bold">Deco</h6>
                        <div id="orange"><span class="fa fa-minus"></span></div>
                            <form>
                            <div class="form-group"> <input type="checkbox" id="tea"> <label for="tea">Christmas</label> </div>
                            <div class="form-group"> <input type="checkbox" id="cookies"> <label for="cookies">Wildlife</label> </div>
                            <div class="form-group"> <input type="checkbox" id="pastries"> <label for="pastries">Tabletops</label> </div>
                            <div class="form-group"> <input type="checkbox" id="dough"> <label for="dough">Plant</label> </div>
                            <div class="form-group"> <input type="checkbox" id="choco"> <label for="choco">Color</label> </div>
                            </form>
                </div>
                <div class="py-2 border-bottom ml-3">
                    <h6 class="font-weight-bold">Tiles</h6>
                        <div id="orange"><span class="fa fa-minus"></span></div>
                            <form>
                                <div class="form-group"> <input type="checkbox" id="tea"> <label for="tea">Marble</label> </div>
                                <div class="form-group"> <input type="checkbox" id="cookies"> <label for="cookies">Pattern</label> </div>
                                <div class="form-group"> <input type="checkbox" id="pastries"> <label for="pastries">Plain</label> </div>
                                <div class="form-group"> <input type="checkbox" id="dough"> <label for="dough"></label> </div>
                                <div class="form-group"> <input type="checkbox" id="choco"> <label for="choco"></label> </div>
                            </form>
                </div>
                <div class="py-2 border-bottom ml-3">
                    <h6 class="font-weight-bold">Clay</h6>
                        <div id="orange"><span class="fa fa-minus"></span></div>
                            <form>
                                <div class="form-group"> <input type="checkbox" id="tea"> <label for="tea">Mould</label> </div>
                                <div class="form-group"> <input type="checkbox" id="cookies"> <label for="cookies">Vases</label> </div>
                                <div class="form-group"> <input type="checkbox" id="pastries"> <label for="pastries">Cups</label> </div>
                                <div class="form-group"> <input type="checkbox" id="dough"> <label for="dough"></label>Plates</div>
                                <div class="form-group"> <input type="checkbox" id="choco"> <label for="choco"></label>Bowls</div>
                            </form>
                </div>
                <div class="py-2 ml-3">
                    <h6 class="font-weight-bold">Top Offers</h6>
                        <div id="orange"><span class="fa fa-minus"></span></div>
                            <form>
                                <div class="form-group"> <input type="checkbox" id="25off"> <label for="25">25% off</label> </div>
                                <div class="form-group"> <input type="checkbox" id="5off"> <label for="5off" id="off">Christmass offers</label> </div>
                            </form>
                </div>
        </section>
    <!-- products section -->
        <section id="products">
            <div class="container">
                <div class="d-flex flex-row">
                    <div class="text-muted m-2" id="res">Showing 44 results
                        
                    </div>
                    <div class="ml-auto mr-lg-4">
                        <div id="sorting" class="border rounded p-1 m-1"> <span class="text-muted">Sort by</span> 
                            <select name="sort" id="sort">
                            <option value="popularity">Popularity</option>
                            <option value="prcie">Price</option>
                            <option value="rating">Rating</option>
                            </select> 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                        <div class="card "> <img class="card-img-top" src="img/12.png">
                            <div class="card-body">
                                <h5><b>Plates</b> </h5>
                                <div class="d-flex flex-row my-2">
                                    <div class="text-muted">200Ksh/plate</div>
                                        <div class="ml-auto"> 
                                            <button class="border rounded bg-white sign"><span class="fa fa-plus" id="orange"></span></button> <span class="px-sm-1">1 pc</span> <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button> </div>
                                        </div> 
                                        <button class="btn w-100 rounded my-2">Add to cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                        <div class="card"> <img class="card-img-top" src="img/16.png">
                            <div class="card-body">
                            <h5><b>Cups</b> </h5>
                                <div class="d-flex flex-row my-2">
                                    <div class="text-muted">100Ksh/piece</div>
                                    <div class="ml-auto"> 
                                        <button class="border rounded bg-white sign">
                                            <span class="fa fa-plus" id="orange"></span>
                                        </button> <span class="px-sm-1">1 pc</span> 
                                        <button class="border rounded bg-white sign">
                                            <span class="fa fa-minus" id="orange"></span>
                                        </button> 
                                    </div>
                                </div> 
                                <button class="btn w-100 rounded my-2">Add to cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                        <div class="card"> <img class="card-img-top" src="img/30.jpg">
                            <div class="card-body">
                                <h5><b>Bowls</b> </h5>
                                    <div class="d-flex flex-row my-2">
                                        <div class="text-muted">150Ksh/piece</div>
                                        <div class="ml-auto"> 
                                            <button class="border rounded bg-white sign">
                                                <span class="fa fa-plus" id="orange">

                                                </span>
                                            </button> 
                                            <span class="px-sm-1">1 pc

                                            </span> 
                                                <button class="border rounded bg-white sign">
                                                    <span class="fa fa-minus" id="orange">
                                                        
                                                    </span>
                                                </button> 
                                        </div>
                                    </div> 
                                    <button class="btn w-100 rounded my-2">Add to cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                        <div class="card"> <img class="card-img-top" src="img/IMG_6376.jpg">
                            <div class="card-body">
                                <h5><b>Vases</b> </h5>
                                <div class="d-flex flex-row my-2">
                                    <div class="text-muted">160Ksh/piece</div>
                                    <div class="ml-auto"> 
                                        <button class="border rounded bg-white sign">
                                            <span class="fa fa-plus" id="orange"></span>
                                        </button> 
                                        <span class="px-sm-1">1 pc</span> 
                                        <button class="border rounded bg-white sign">
                                            <span class="fa fa-minus" id="orange"></span>
                                        </button> 
                                    </div>
                                </div> 
                                <button class="btn w-100 rounded my-2">Add to cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                        <div class="card"> <img class="card-img-top" src="img/IMG_6485.jpg">
                            <div class="card-body">
                                <h5><b>Wildlife Deco</b> </h5>
                                <div class="d-flex flex-row my-2">
                                    <div class="text-muted">185Ksh/piece</div>
                                        <div class="ml-auto"> 
                                            <button class="border rounded bg-white sign">
                                                <span class="fa fa-plus" id="orange"></span>
                                            </button> 
                                                <span class="px-sm-1">1 pc</span> 
                                                <button class="border rounded bg-white sign">
                                                    <span class="fa fa-minus" id="orange"></span>
                                                </button> 
                                        </div>
                                </div> 
                                <button class="btn w-100 rounded my-2">Add to cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                        <div class="card d-relative"> <img class="card-img-top" src="img/IMG_6512.jpg">
                            <div class="card-body">
                                <h5><b>Flowery Deco</b> </h5>
                                <div class="rounded bg-white discount" id="orange">10% off</div>
                                    <div class="d-flex flex-row my-2">
                                        <div class="text-muted price"><del>155Ksh</del>145Ksh/piece</div>
                                            <div class="ml-auto"> 
                                                <button class="border rounded bg-white sign">
                                                    <span class="fa fa-plus" id="orange"></span>
                                                </button> <span>1pc</span> 
                                                <button class="border rounded bg-white sign">
                                                    <span class="fa fa-minus" id="orange"></span>
                                                </button>
                                            </div>
                                    </div> 
                                <button class="btn w-100 rounded my-2">Add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        <script type="text/javascript"></script>
    </body>
</html>