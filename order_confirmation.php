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
            <li class="breadcrumb-item active" style='z-index: 5;' aria-current="page">order-confirmation</li>
        </ol>
    </nav>

    <div class="order-inner float-left w-100">
        <div class="container">
            <div class="row">
                <div id="order-confirmation" class="card float-left w-100 mb-10">
                    <div class="card-block p-20">
                        <h3 class="card-title text-success">Your order is confirmed</h3>
                        <p>An email has been sent to your mail address admin7890@gmail.com.</p>
                    </div>
                </div>

                <div id="order-itens" class="card float-left w-100 mb-10">
                    <div class="card-block p-20">
                        <h3 class="card-title">order items</h3>
                        <div class="order-confirmation-table float-left w-100">
                            <div class="order-line float-left w-100">
                                <div class="row">
                                    <div class="col-sm-1 col-xs-3 float-left">
                                        <img src="img/products/02.jpg" alt="">
                                    </div>
                                    <div class="col-sm-5 col-xs-9 details float-left">
                                        <span>aspetur autodit autfugit</span>
                                    </div>
                                    <div class="col-sm-6 col-xs-12 qty float-left d-flex">
                                        <div class="col-xs-5 col-sm-5 text-sm-right text-xs-left">KES 100.00</div>
                                        <div class="col-xs-2 col-sm-2">Qty 1</div>
                                        <div class="col-xs-5 col-sm-5 text-sm-right bold">KES 100.00</div>
                                    </div>
                                </div>
                            </div>
                            <hr class="float-left w-100">
                            <table class="float-left w-100 mb-30">
                                <tbody>
                                    <tr class="mb-10">
                                        <td>Subtotal</td>
                                        <td class="text-right">
                                            KES 100.00
                                        </td>
                                    </tr>
                                    <tr class="mb-10">
                                        <td>
                                            Shipping and handling
                                        </td>
                                        <td class="text-right">
                                            KES 7.00
                                        </td>
                                    </tr>
                                    <tr class="font-weight-bold">
                                        <td>
                                            <span class="text-uppercase">Total</span>
                                            (tax excl.)
                                        </td>
                                        <td class="text-right">
                                            KES 107.00
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div id="order-details" class="float-left w-100">
                                <h3 class="h3 card-title">
                                    Order details:
                                </h3>
                                <ul>
                                    <li>
                                        Order reference: ZSMQIPYEH
                                    </li>
                                    <li>
                                        Payment method: Bank transfer
                                    </li>
                                    <li>
                                        Shipping method: Demo Store<br>
                                        <em>Pick up in-store</em>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div id="content-hook_payment_return" class="card definition-list float-left w-100">
                    <div class="card-block p-20">
                        <div class="row">
                            <div class="col-md-12">
                                <p>
                                    Your order on Demo Store is complete.<br>
                                    Please send us a bank wire with:
                                </p>


                                <div class="order-content-main">
                                    <div class="order-content mb-10">
                                        <div>Amount</div>
                                        <div>KES 107.00</div>
                                    </div>
                                    <div class="order-content mb-10">
                                        <div>Name of account owner</div>
                                        <div>___________</div>
                                    </div>
                                    <div class="order-content mb-10">
                                        <div>Please include these details</div>
                                        <div>___________</div>
                                    </div>
                                    <div class="order-content mb-10">
                                        <div>Bank name</div>
                                        <div>___________</div>
                                    </div>
                                </div>


                                <p>
                                    Please specify your order reference ZSMQIPYEH in the bankwire description.<br>
                                    We've also sent you this information by e-mail.
                                </p>
                                <strong>
                                    Your order will be sent as soon as we receive payment.
                                </strong>
                                <p>
                                    If you have questions, comments or concerns, please contact our
                                    <strong>
                                        <a href="contact_us">expert customer support team</a>
                                    </strong>
                                </p>

                            </div>
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