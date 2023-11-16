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
        position: absolute; /* Fixed positioning */
        top: 0;
        left: 0;
        width: 100%;
        height: 150%;
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
<section style='min-height: calc(140vh - 10px); padding-top: 10%';>
    

    <div class="checkout-inner float-left w-100">
        <div class="container ">
            <div class="row">
                <div class="cart-block-left col-md-4 order-md-2 mb-0 " >
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span>Your cart</span>
                    </h4>
                    <div class="list-group mb-3">
                        <div class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Vases</h6>
                            </div>
                            <span class="text-muted" style='white-space: nowrap;'>KES 20</span>
                        </div>
                        <div class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">VAT</h6>
                            </div>
                            <span class="text-muted" style='white-space: nowrap;'>KES 20</span>
                        </div>
                        <div class="list-group-item d-flex justify-content-between">
                            <div class="text-success">
                                <h6 class="my-0">Promo code</h6>
                                <small>EXAMPLECODE</small>
                            </div>
                            <span class="text-success" style='white-space: nowrap;'>-KES 5</span>
                        </div>
                        <div class="list-group-item d-flex justify-content-between">
                            <strong>Total (KES)</strong>
                            <strong style='white-space: nowrap;'>KES 35</strong>
                        </div>
                        <div class="list-group-item  justify-content-between">
                            <div class="custom-control custom-radio" id="checkbox-card">
                                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                <label class="custom-control-label " for="credit"> Credit card</label>
                            </div>
                            <div class="custom-control custom-radio" id="checkbox-card-debit">
                                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                <label class="custom-control-label" for="debit">Debit card</label>
                            </div>
                            <div class="col-lg-6 custom-control custom-radio" id="checkbox-card-paypal">
                                <input id="paypal" name="paymentMethod" type="radio" class=" float-right custom-control-input" required="">
                                <label class="custom-control-label float-left" for="paypal">Paypal</label>
                            </div>
                        </div>
                        <div id="card-dropdown">
                            <div class="list-group-item  justify-content-between">
                                <div class="col-md-12 mb-3 p-0">
                                    <label for="cc-name">Name on card</label>
                                    <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                                    <small class="text-muted">Full name as displayed on card</small>
                                    <div class="invalid-feedback">
                                        Name on card is required
                                    </div>
                                </div>
                                <div class="col-md-12 p-0">
                                    <label for="cc-number">Credit card number</label>
                                    <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                                    <div class="invalid-feedback">
                                        Credit card number is required
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item d-flex justify-content-between">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="cc-expiration">Expiration</label>
                                        <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                                        <div class="invalid-feedback">
                                            Expiration date required
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="cc-expiration">CVV</label>
                                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                                        <div class="invalid-feedback">
                                            Security code required
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="card-dropdown-debit">
                            <div class="list-group-item  justify-content-between">
                                <div class="col-md-12 mb-3 p-0">
                                    <label for="cc-name">Name on card</label>
                                    <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                                    <small class="text-muted">Full name as displayed on card</small>
                                    <div class="invalid-feedback">
                                        Name on card is required
                                    </div>
                                </div>
                                <div class="col-md-12 p-0">
                                    <label for="cc-number">Credit card number</label>
                                    <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                                    <div class="invalid-feedback">
                                        Credit card number is required
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item d-flex justify-content-between">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="cc-expiration">Expiration</label>
                                        <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                                        <div class="invalid-feedback">
                                            Expiration date required
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="cc-expiration">CVV</label>
                                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                                        <div class="invalid-feedback">
                                            Security code required
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="card-dropdown-paypal">
                            <div class="list-group-item  justify-content-between">
                                <div class="image"><img src="img/logos/paypal.png"></div>
                            </div>
                        </div>
                        <a href="order_confirmation" class="btn btn-primary btn-lg btn-primary">Place an order</a>


                        <!-- <form class="card p-2">
                        <div class="input-group">
                        <input type="text" class="form-control" placeholder="Promo code">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary btn-primary">Redeem</button>
                        </div>
                        </div>
                        </form> -->
                    </div>
                </div>
                <div class="cart-block-right col-md-8 order-md-1" >
                    <h4 class="mb-3">Billing address</h4>
                    <form class="needs-validation" novalidate="">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">First name <span class="required">*</span></label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Last name <span class="required">*</span></label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="username">Username <span class="required">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input type="text" class="form-control" id="username" placeholder="Username" required="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Your username is required.
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email">Email <span class="text-muted">(Optional)</span></label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address">Address<span class="required">*</span> </label>
                            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                            <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                        </div>

                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="country">Country <span class="required">*</span></label>
                                <select class="custom-select d-block w-100" id="country" required="">
                                    <option value="">Choose...</option>
                                    <option>United States</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid country.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="state">State <span class="required">*</span></label>
                                <select class="custom-select d-block w-100" id="state" required="">
                                    <option value="">Choose...</option>
                                    <option>California</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid state.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="zip">Zip <span class="required">*</span></label>
                                <input type="text" class="form-control" id="zip" placeholder="" required="">
                                <div class="invalid-feedback">
                                    Zip code required.
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <div class="custom-control custom-checkbox" id="same-address-main">
                            <input type="checkbox" class="custom-control-input" id="same-address">
                            <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                        </div>
                        <div id="checkout-shipping-address">
                            <address>
                                John duff <br>
                                ABCD Street Name, City, vancouver <br>
                                canada <br>
                                (123) 456-7890
                            </address>
                        </div>
                        <div class="custom-control custom-checkbox" id="different-address-main">
                            <input type="checkbox" class="custom-control-input" id="different-address">
                            <label class="custom-control-label" for="different-address">ship to a different address?</label>
                        </div>
                        <div id="checkout-shipping-address-diff">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">First name <span class="required">*</span></label>
                                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Last name <span class="required">*</span></label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="username">Username <span class="required">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">@</span>
                                    </div>
                                    <input type="text" class="form-control" id="username" placeholder="Username" required="">
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Your username is required.
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email">Email <span class="text-muted">(Optional)</span></label>
                                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address">Address<span class="required">*</span> </label>
                                <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                                <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                            </div>

                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <label for="country">Country <span class="required">*</span></label>
                                    <select class="custom-select d-block w-100" id="country" required="">
                                        <option value="">Choose...</option>
                                        <option>United States</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid country.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="state">State <span class="required">*</span></label>
                                    <select class="custom-select d-block w-100" id="state" required="">
                                        <option value="">Choose...</option>
                                        <option>California</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="zip">Zip <span class="required">*</span></label>
                                    <input type="text" class="form-control" id="zip" placeholder="" required="">
                                    <div class="invalid-feedback">
                                        Zip code required.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="save-info">
                            <label class="custom-control-label" for="save-info">Save this information for next time</label>
                        </div>
                        <hr class="mb-4">


                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</div>


</body>
</html>