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
            <li class="breadcrumb-item active" style='z-index: 5;' aria-current="page">checkout</li>
        </ol>
    </nav>

    <div class="checkout-inner float-left w-100">
        <div class="container">
            <div class="row">
                <div class="cart-block-left col-md-4 order-md-2 mb-4">
                    <div class="list-group mb-3">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span>Cart Totals</span>
                    </h4>
                        <div class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">aliquam quaerat voluptatem</h6>
                            </div>
                            <span class="text-muted" style='white-space: nowrap;'>KES 20</span>
                        </div>
                        <div class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">voluptas sit aspernatur</h6>
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
                                <label class="custom-control-label" for="credit">Credit card</label>
                            </div>
                            <div class="custom-control custom-radio" id="checkbox-card-debit">
                                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                <label class="custom-control-label" for="debit">Debit card</label>
                            </div>
                            <div class="custom-control custom-radio" id="checkbox-card-paypal">
                                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                <label class="custom-control-label" for="paypal">Paypal</label>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once 'footer.php';
?>