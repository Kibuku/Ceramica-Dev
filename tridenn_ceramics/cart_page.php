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
            <li class="breadcrumb-item active" style='z-index: 5;' aria-current="page">cart</li>
        </ol>
    </nav>
    <div class="cart-area table-area pt-110 pb-95 float-left w-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 float-left cart-wrapper">
                    <div class="table-responsive">
                        <table class="table product-table text-center">
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
                                            <img src="img/products/02.jpg" alt=""></a>
                                    </td>
                                    <td class="table-p-name text-capitalize">
                                        <a href="product_details">District Ceramics</a>
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
                                                <!-- Total will be calculated and dispayed here -->
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
                <div class="table-total-wrapper d-flex justify-content-end pt-60 col-md-12 col-sm-12 col-lg-4 float-left  align-items-center">
                    <div class="table-total-content">
                        <h2 class="pb-20">Cart totals</h2>
                        <div class="table-total-amount">
                            <div class="single-total-content d-flex justify-content-between float-left w-100">
                                <strong>Subtotal</strong>
                                <span class="c-total-price">
                                    <p>KES
                                        <span id="sub_total">
                                        </span>
                                    </p>
                                </span>
                            </div>
                            <div class="single-total-content d-flex justify-content-between float-left w-100">
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

                            <div class="single-total-content tt-total d-flex justify-content-between float-left w-100">
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
<?php
require_once 'footer.php';
?>