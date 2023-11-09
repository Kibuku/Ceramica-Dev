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
                products
            </li>
        </ol>
    </nav>
    <div class="main-content w-100 float-left blog-column" style="transform: none;">
        <div class="container" style="transform: none;">
            <div class="row" style="transform: none;">
                <div class="sidebar col-xl-3 col-lg-3 order-lg-1" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                        <div class="sidebar-blog left-sidebar w-100 float-left">
                            <div class="title">
                                <a data-toggle="collapse" href="#sidebar-blog" aria-expanded="false" aria-controls="sidebar-blog" class="block-toggler widget-title text-capitalize" style='white-space: nowrap;'>Recent Products</a>
                            </div>
                            <div id="sidebar-blog" >
                                <div class="ttblog w-100 float-left">
                                    <div class="item">
                                        <div class="ttblog_image_holder col-sm-4 float-left">
                                            <a href="product_details">
                                                <img src="img/products/01.jpg" alt="01">
                                            </a>
                                        </div>
                                        <div class="blog-content-wrap col-sm-8 float-right">
                                            <div class="blog_inner">
                                                <h6 class="product-title" style='white-space: nowrap; width: 20vh; overflow: hidden; text-overflow: ellipsis;'>Greek with handles</h6>
                                                <div class="post-info d-flex">
                                                    <span class="date d-flex" style='white-space: nowrap;'>
                                                        <i class="material-icons">date_range</i>
                                                        <span>7 Sept 2023</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ttblog w-100 float-left">
                                    <div class="item">
                                        <div class="ttblog_image_holder col-sm-4 float-left">
                                            <a href="product_details">
                                                <img src="img/products/02.jpg" alt="02">
                                            </a>
                                        </div>
                                        <div class="blog-content-wrap col-sm-8 float-right">
                                            <div class="blog_inner">
                                                <h6 class="product-title" style='white-space: nowrap; width: 20vh; overflow: hidden; text-overflow: ellipsis;'>
                                                    District Ceramics
                                                </h6>
                                                <div class="post-info d-flex">
                                                    <span class="date d-flex" style='white-space: nowrap;'>
                                                        <i class="material-icons">date_range</i>
                                                        <span>7 Sept 2023</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-categories left-sidebar w-100 float-left">
                            <div class="title">
                                <a data-toggle="collapse" href="#sidebar-categories" aria-expanded="false" aria-controls="sidebar-categories" class="block-toggler widget-title text-capitalize" style='white-space: nowrap;'>Products categories</a>
                            </div>
                            <div id="sidebar-categories" >
                                <ul class="list">
                                          <li>
                                        <a href="products">All</a>
                                    </li>
                                       <?php 
                                   
 
                 $res_category = all_category($conn);
 
                
                           if($res_category){
                              
                                        foreach ($res_category as $row){
                                            
                              
                                    ?>
                                    <li>
                                        <a href="products?category_id=<?php echo $row['category_id']; ?>"><?php echo $row['description'];  ?></a>
                                    </li>
                                    <?php  } } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-blog left-sidebar w-100 float-left">
                            <div class="title">
                                <a data-toggle="collapse" href="#top-rated" aria-expanded="false" aria-controls="sidebar-blog" class="block-toggler widget-title text-capitalize" style='white-space: nowrap;'>Top Rated Products</a>
                            </div>
                            <div id="top-rated" class="collapse">
                                <div class="ttblog w-100 float-left">
                                    <div class="item">
                                        <div class="ttblog_image_holder col-sm-4 float-left">
                                            <a href="product_details">
                                                <img src="img/products/08.jpg" alt="08">
                                            </a>
                                        </div>
                                        <div class="blog-content-wrap col-sm-8 float-right">
                                            <div class="blog_inner">
                                                <p class="product-title mb-0 mt-0" style='white-space: nowrap; width: 20vh; overflow: hidden; text-overflow: ellipsis;'>
                                                    Channel
                                                </p>
                                                <div class="rating mt-0">
                                                    <div class="product-ratings d-inline-block align-middle">
                                                        <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                        <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                        <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                        <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                        <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <div class="regular-price" style='font: 500 18px/20px Poppins, Helvetica, sans-serif; color: #57bf6d;'>KES 100.00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ttblog w-100 float-left">
                                    <div class="item">
                                        <div class="ttblog_image_holder col-sm-4 float-left">
                                            <a href="product_details">
                                                <img src="img/products/07.jpg" alt="07">
                                            </a>
                                        </div>
                                        <div class="blog-content-wrap col-sm-8 float-right">
                                            <div class="blog_inner">
                                                <p class="product-title  mb-0 mt-0" style='white-space: nowrap; width: 20vh; overflow: hidden; text-overflow: ellipsis;'>
                                                    Oblong
                                                </p>
                                                <div class="rating mt-0">
                                                    <div class="product-ratings d-inline-block align-middle">
                                                        <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                        <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                        <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                        <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                        <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <div class="regular-price" style='font: 500 18px/20px Poppins, Helvetica, sans-serif; color: #57bf6d;'>KES 100.00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                            <div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                <div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 253px; height: 1868px;"></div>
                            </div>
                            <div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                <div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="products-grid col-xl-9 col-lg-9 order-lg-2 overflow" id="about-us">
                    <div class="row" style="position: relative;">
                        <div class="grid-sizer"></div>
                        <div class="main-content w-100 float-left">
                            <div id="about-main-3" class="float-left w-100 mb-150 mb-sm-30">
                                <div class="container">
                                    <div class="about-us-team">
                                        <?php
                                        if(isset($_GET['category_id'])){
                                            $category_id = $_GET['category_id'];
                                             $check_product= mysqli_query($conn,"SELECT * FROM `product` WHERE `category_id`='$category_id' AND status=1") or die(mysqli_error($conn));
                                        }else{
                                                $check_product= mysqli_query($conn,"SELECT * FROM `product` WHERE status=1") or die(mysqli_error($conn));
                                        }
                                       
                                       if(mysqli_num_rows($check_product) > 0){ 
                                           while($row_p = mysqli_fetch_array($check_product)){
                                               
                                           ?>
                                        <div class="team-block col-sm-6 col-md-3 col-lg-3 float-left mb-sm-30 mb-4"  >
                                            <div class="team-block-inner position-relative">
                                                <div class="team-image text-center">
                                                    <img src="img/products/<?php echo check_image($conn,$row_p['product_id'],1); ?>" alt="team-01" />
                                                    <a href='product_details?product_id=<?php echo $row_p['product_id']; ?>' class="overlay"></a>
                                                </div>
                                                <div class="team-content text-center float-left w-100">
                                                    <div class="team-name text-capitalize font-weight-bold" style='text-transform: uppercase !important;'><?php echo $row_p['product_name']; ?></div>
                                                    <div class="team-designation text-capitalize">
                                                        <div class="rating mt-0">
                                                            <div class="product-ratings d-inline-block align-middle">
                                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                            </div>
                                                        </div>
                                                        <div style='white-space: nowrap;'>
                                                            <div class="regular-price mb-0 ml-4 float-left" style='font: 500 9px/11px Poppins, Helvetica, sans-serif; color: #57bf6d;'><?php echo $currency; ?> <?php echo number_format($row_p['amount'] * $convert, 2, '.', ','); ?></div>
                                                            <div class="regular-price mb-0 mr-4 float-right" style='font: 300 9px/11px Poppins, Helvetica, sans-serif; color: #666; text-decoration: line-through;'><?php echo $currency; ?> <?php echo number_format($row_p['amount'] * $convert, 2, '.', ','); ?></div>
                                                        </div>
                                                    </div>
                                                    <div class="social-sharing float-left w-100">
                                                        <ul class="d-flex justify-content-center">
                                                           

                                                            <li class="twitter">
                                                                <a href="wishlist" class="twitter_link">
                                                                    <i class="material-icons" style='font-size: 16px; margin-top: 7px;'>favorite</i>
                                                                </a>
                                                            </li>

                                                            <li class="google">
                                                                <a href="#" class="google_link btn-compare">
                                                                    <i class="material-icons" style='font-size: 16px; margin-top: 7px;'>equalizer</i>
                                                                </a>
                                                            </li>

                                                            <li class="pinterest">
                                                                <a href='product_details?product_id=<?php echo $row_p['product_id']; ?>' class="overlay" class="pinterest_link" >
                                                                    <i class="material-icons" style='font-size: 16px; margin-top: 7px;'>visibility</i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php 
                                           }
                                       }
                                       ?>
                                        
                                        
                                       
                                        
                                    </div>
                                </div>
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