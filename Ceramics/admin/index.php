<?php
include_once 'header.php';
?>
<div id="logo">
    <span class="big-logo">
        <a href="index">
            <img src="../img/logos/logo.png" height='30' alt="">
            <span class="text-uppercase h3" style='font-size: 1.7vw; font-weight: 700 !important;'>
                Tridenn Ceramics
            </span>

        </a>
    </span>
    <span class="small-logo text-uppercase">
        <a href="index">
            <img src="../img/logos/logo.png" height='30' alt="">
        </a>
    </span>
</div>
<div id="left-menu" class='overflow pt-2'>
    <ul>
        <li class="active hoverable">
            <a href="index">
                <i class="fa fa-tachometer"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- <li class="has-sub hoverable">
            <a href="#">
                <i class="fa fa-user-o"></i>
                <span>Products</span>
            </a>
            <ul>
                <li>
                    <a href="#">UI Elements Item 1</a>
                </li>
                <li>
                    <a href="#">UI Elements Item 2</a>
                </li>
                <li>
                    <a href="#">UI Elements Item 3</a>
                </li>
            </ul>
        </li> -->

        <li class="hoverable">
            <a href="products">
                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                <span>Products</span>
            </a>
        </li>
        <li class="hoverable">
            <a href="category">
                <i class="fa fa-cubes" aria-hidden="true"></i>
                <span>Category</span>
            </a>
        </li>

    </ul>
</div>
<div id="main-content">
    <div id="header">
        <div class="header-left float-left">
            <i id="toggle-left-menu" class="ion-android-menu"></i>
        </div>
        <div class="header-right float-right">
            <i class="fa fa-user-circle"></i>
        </div>
    </div>

    <div id="page-container">
        <div class="card">
            <div class="title text-uppercase" style='font-weight: 600 !important; position: relative;'>
                Dashboard
            </div>
            <!-- <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input id="html" type="checkbox" class="magic-checkbox">
                                <label for="html">HTML</label>

                                <input id="css" type="checkbox" class="magic-checkbox">
                                <label for="css">CSS</label>

                                <input id="js" type="checkbox" class="magic-checkbox">
                                <label for="js">Javascript</label>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <input name="job" id="designer" type="radio" class="magic-radio">
                                <label for="designer">Web designer</label>

                                <input name="job" id="developer" type="radio" class="magic-radio">
                                <label for="developer">Web developer</label>

                                <input name="job" id="frontened" type="radio" class="magic-radio">
                                <label for="frontened">Frontened</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Button</label> <br>
                                <button class="btn btn-primary">Sumbmit</button>
                                <button class="btn btn-warning">Sumbmit</button>
                                <button class="btn btn-info">Sumbmit</button>
                                <button class="btn btn-danger">Sumbmit</button>
                                <button class="btn btn-secondary">Sumbmit</button>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Languages</label>
                                <select name="" id="" class="form-control">
                                    <option value="">HTML</option>
                                    <option value="">CSS</option>
                                    <option value="">JS</option>
                                    <option value="">PHP</option>
                                    <option value="">SQL</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
            </div> -->
        </div>
    </div>
</div>

<span id="show-lable">Hello</span>
<?php
include_once 'footer.php';
?>