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
            <li class="breadcrumb-item active" style='z-index: 5;' aria-current="page">compare</li>
        </ol>
    </nav>

    <div class="compare">
        <div class="container">
            <div class="cart-item-table commun-table">
                <div class="table-responsive">
                    <table class="table compare-info">
                        <tbody>
                            <tr>
                                <td></td>
                                <td class="image">
                                    <a href="product-detail.html"></a>
                                    <img src="img/products/01.jpg" alt="Shopholic" title="" class="img-thumbnail" height="195" width="150">
                                </td>
                                <td class="image">
                                    <a href="product-detail.html"></a>
                                    <img src="img/products/02.jpg" alt="Shopholic" title="" class="img-thumbnail" height="195" width="150">
                                </td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td class="name">
                                    <a href="product-detail.html">KES 80.00</a>
                                </td>
                                <td class="name">
                                    <a href="product-detail.html">KES 80.00</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Model</td>
                                <td>Product 2</td>
                                <td>Product 5</td>
                            </tr>
                            <tr>
                                <td>Brand</td>
                                <td>Lorem ipsum dolor sit amet,</td>
                                <td>Lorem ipsum dolor sit amet,</td>
                            </tr>
                            <tr>
                                <td>Availability</td>
                                <td class="availability">In Stock</td>
                                <td class="availability">In Stock</td>
                            </tr>
                            <tr>
                                <td>Rating</td>
                                <td class="ttrating">
                                    <div class="rating-summary-block">
                                        <div class="rating-result" title="53%">
                                            <span style="width:53%"></span>
                                        </div>
                                    </div>
                                    Based on 4 reviews.
                                </td>
                                <td class="ttrating">
                                    <div class="rating-summary-block">
                                        <div class="rating-result" title="53%">
                                            <span style="width:53%"></span>
                                        </div>
                                    </div>
                                    Based on 1 reviews.
                                </td>
                            </tr>
                            <tr>
                                <td>Summary</td>
                                <td class="ttdescription">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque elementum lacinia justo convallis ornare.
                                </td>
                                <td class="ttdescription">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque elementum lacinia justo convallis ornare.
                                </td>
                            </tr>
                            <tr>
                                <td>Weight</td>
                                <td>0.00kg</td>
                                <td>0.00kg</td>
                            </tr>
                            <tr>
                                <td>Dimensions (L x W x H)</td>
                                <td>0.00cm x 0.00cm x 0.00cm</td>
                                <td>0.00mm x 0.00mm x 0.00mm</td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td></td>
                                <td>
                                    <button type="button" class="btn btn-primary">
                                        <i class="fa fa-shopping-cart"></i>
                                        Add to Cart
                                    </button>
                                    <button class="btn btn-secondary" type="button" title="Remove">
                                        Remove
                                    </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary">
                                        <i class="fa fa-shopping-cart"></i>
                                        Add to Cart
                                    </button>
                                    <button class="btn btn-secondary" type="button" title="Remove">
                                        Remove
                                    </button>
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