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
            <li class="breadcrumb-item active" style='z-index: 5;' aria-current="page">
                wishlist
            </li>
        </ol>
    </nav>
    <div class="cart-area table-area pt-110 pb-95 float-left w-100">
        <div class="container">
            <div class=" cart-wrapper float-left w-100">
                <div class="table-responsive">
                    <table class="table product-table text-center">
                        <thead>
                            <tr>
                                <th class="table-remove text-uppercase">remove</th>
                                <th class="table-image text-uppercase">image</th>
                                <th class="table-p-name text-uppercase">product</th>
                                <th class="table-p-price text-uppercase">price</th>
                                <th class="table-p-qty text-uppercase">Stock Status</th>
                                <th class="table-total text-uppercase">add to cart</th>
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
                                        <img src="img/products/02.jpg" alt="">
                                    </a>
                                </td>
                                <td class="table-p-name text-capitalize">
                                    <a href="product_details">aspetur autodit autfugit</a>
                                </td>
                                <td class="table-p-price">
                                    <p>KES 100.00</p>
                                </td>
                                <td class="table-p-qty">in stock</td>
                                <td class="table-addtocart">
                                    <a href="cart_page" class="btn-primary btn">Add to cart</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-remove">
                                    <button>
                                        <i class="material-icons">delete</i>
                                    </button>
                                </td>
                                <td class="table-image">
                                    <a href="product_details">
                                        <img src="img/products/03.jpg" alt=""></a>
                                </td>
                                <td class="table-p-name text-capitalize">
                                    <a href="product_details">magni dolores eosquies</a>
                                </td>
                                <td class="table-p-price">
                                    <p>KES 100.00</p>
                                </td>
                                <td class="table-p-qty">
                                    in stock
                                </td>
                                <td class="table-addtocart">
                                    <a href="cart_page" class="btn-primary btn">Add to cart</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>
<?php
require_once 'footer.php';
?>