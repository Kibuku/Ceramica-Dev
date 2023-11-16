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
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css?ver=<?php echo date('his'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

    <!-- Bootstrap core CSS -->
    <link href="css/styles.css?ver=<?php echo date('his'); ?>" rel="stylesheet">
    <link href="css/animate.css?ver=<?php echo date('his'); ?>" rel="stylesheet">
    <link href="css/owl-carousel.css?ver=<?php echo date('his'); ?>" rel="stylesheet">
    <link href="css/lightbox.css?ver=<?php echo date('his'); ?>" rel="stylesheet">
    <link href="css/products.css?ver=<?php echo date('his'); ?>" rel="stylesheet">
    <link href="css/slick-slider.css?ver=<?php echo date('his'); ?>" rel="stylesheet">
    <link href="css/loader.css?ver=<?php echo date('his'); ?>" rel="stylesheet">
    <link href="css/date.css?ver=<?php echo date('his'); ?>" rel="stylesheet">
</head>
<body>
<style>
    /*.home-backdrop {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: transparent linear-gradient(90deg, #0101024D 0%, #010101 64%) 0% 0% no-repeat padding-box;
    z-index: 1;
    }*/
    .home-hero {
        position: fixed; /* Fixed positioning */
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, #0101024D 0%, #010101 64%) 0% 0% no-repeat padding-box, url("img/Africa1.jpeg");
        background-size: cover;
        z-index: inherit;
    }


    .home-container1 {
        display: flex;
        padding-top: 100px;
        /*padding-left: 500px;*/

        align-items: end;
        width: 40%;
        /*height: 100px;*/
        position: relative;
        opacity: 100%;
    }

    .home-container2 {
        display: flex;

        align-items: center;
        float: left;
        width: 33.33%;
        padding: 10px;

        /* align-items: center; */
        position: relative;

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
<?php include 'navbar_2.php'; ?>
<div class="home-hero">
    <section style='min-height: calc(100vh - 40px); padding: top 20px;'>
        
        <div class="cart-area table-area pt-110 pb-95 float-left w-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 float-left cart-wrapper" style='padding-top:10%;'>
                        <div class="table-responsive">
                            <table class="table product-table text-center text-white">
                                <thead>
                                    <tr>
                                        <th class="table-remove text-capitalize">remove</th>
                                        <th class="table-image text-capitalize">image</th>
                                        <th class="table-p-name text-capitalize">product</th>
                                        <th class="table-p-price text-capitalize">price</th>
                                        <th class="table-p-qty text-capitalize">quantity</th>
                                        <th class="table-total text-capitalize">total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="table-remove">
                                            <button>
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </td>
                                        <td class="table-image">
                                            <a href="product_details">
                                                <img src="img/36.jpg" alt=""></a>
                                        </td>
                                        <td class="table-p-name text-capitalize">
                                            <a href="product_details" class="text-white">District Ceramics</a>
                                        </td>
                                        <td class="table-p-price">
                                            <p>KES
                                                <span id="cost">
                                                    100.00
                                                </span>
                                            </p>
                                        </td>
                                        <td class="table-p-qty">
                                            <input value="1" name="cart-qty" id='qty' type="number" min="0" onkeyup="myTotals()" onchange="myTotals()">
                                        </td>
                                        <td class="table-total pt-4">
                                            <p>KES
                                                <span id="total_cost">
                                                    <!-- Total will be calculated and dispayed here  -->
                                                </span>
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="table-bottom-wrapper">
                            <div class="table-coupon d-flex d-xs-block d-lg-flex d-sm-flex fix justify-content-start float-left">
                                <input type="text" placeholder="Coupon code">
                                <button type="submit" class="btn-primary btn">Apply coupon</button>
                            </div>
                            <div class="table-update d-flex d-xs-block d-lg-flex d-sm-flex justify-content-end">
                                <button type="button" class="btn-primary btn">Update cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="table-total-wrapper mt-5 d-flex justify-content-end pt-60 col-md-12 col-sm-12 col-lg-4 float-left  align-items-center">
                        <div class="table-total-content">
                            <h2 class="pb-20 ">Cart totals</h2>
                            <div class="table-total-amount">
                                <div class="single-total-content d-flex justify-content-between float-left w-100">
                                    <strong >Subtotal</strong>
                                    <span class="c-total-price">
                                        <p>KES
                                            <span id="sub_total">
                                            </span>
                                        </p>
                                    </span>
                                </div>
                                <div class="single-total-content d-flex  justify-content-between float-left w-100">
                                    <strong>Shipping</strong>
                                    <span class="c-total-price w-50">
                                        <select name="" class="custom-select d-block w-100" id="choose">
                                            <option value="" selected='true' disabled='disabled'>Choose shipping...</option>
                                            <option value="office">Pick at our offices</option>
                                            <option value="kenya">Around Kenya</option>
                                            <option value="other">Other Countries</option>
                                        </select>
                                    </span>
                                </div>
                                <div id="counties" style='display: none'>
                                    <div class="single-total-content d-flex justify-content-between float-left w-100">
                                        <strong>County</strong>
                                        <span class="c-total-price w-50">
                                            <select name="" class="custom-select d-block w-100" id="county">
                                                <option value="" selected='true' disabled='disabled'>Choose county...</option>
                                                <option value="nairobi">Nairobi</option>
                                                <option value="mombasa">Mombasa</option>
                                                <option value="kisumu">Kisumu</option>
                                            </select>
                                        </span>
                                    </div>
                                </div>
                                <div id="countries" style='display: none'>
                                    <div class="single-total-content d-flex justify-content-between float-left w-100">
                                        <strong>Country</strong>
                                        <span class="c-total-price w-50">
                                            <select name="" class="custom-select d-block w-100" id="country">
                                                <option value="" selected='true' disabled='disabled'>Choose country...</option>
                                                <option value="">Uganda</option>
                                                <option value="">Tanzania</option>
                                                <option value="">Rwanda</option>
                                            </select>
                                        </span>
                                    </div>
                                </div>
                                <div id="office_totals" style='display: none'>
                                    <div class="single-total-content d-flex justify-content-between float-left w-100">
                                        <strong>Shipping Cost</strong>
                                        <span class="c-total-price">
                                            Free
                                        </span>
                                    </div>
                                </div>
                                <div id="county_totals" style='display: none'>
                                    <div class="single-total-content d-flex justify-content-between float-left w-100">
                                        <strong>Shipping Cost</strong>
                                        <span class="c-total-price">
                                            KES 
                                            <span id='total_county'>100.00</span>
                                        </span>
                                    </div>
                                </div>
                                <div id="other_totals" style='display: none'>
                                    <div class="single-total-content d-flex justify-content-between float-left w-100">
                                        <strong>Shipping Cost</strong>
                                        <span class="c-total-price">
                                            KES 
                                            <span id='total_other'>200.00</span>
                                        </span>
                                    </div>
                                </div>

                                <div class="single-total-content tt-total  d-flex justify-content-between float-left w-100">
                                    <strong>Total</strong>
                                    <span class="c-total-price">
                                        KES 
                                        <span id='final'></span>
                                    </span>
                                </div>
                                <a href="checkout_page" class="btn btn-primary float-left w-100 text-center">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
</body>
</html>