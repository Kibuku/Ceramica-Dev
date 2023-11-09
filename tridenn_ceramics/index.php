<?php
require_once 'header.php';
?>

<main>
	<!-- Main jumbotron for a primary marketing message or call to action -->
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active left-to-right hb-animate-element">
				<div style='height: 100%; width: 100%; z-index: 2; background-color: #080d15; opacity: .7; position: absolute;'></div>
				<img class="d-block w-100" src="img/slider/carousel-1.webp" style='height: calc(100vh - 17vh); object-fit: cover;' alt="First slide">
				<div class="carousel-caption animate__animated wow animate__bounceInRight" style="top: 30%;">
					<h1 style="text-transform: uppercase;"><strong>We Manufacture Curios Souvenirs and Gifts</strong></h1>

					<a href="contact_us" class="btn btn-outline-light mt-4">Contact us</a>
				</div>
			</div>
			<div class="carousel-item left-to-right hb-animate-element">
				<div style='height: 100%; width: 100%; z-index: 2; background-color: #080d15; opacity: .7; position: absolute;'></div>
				<img class="d-block w-100" src="img/slider/carousel-2.webp" style='height: calc(100vh - 17vh); object-fit: cover;' alt="Second slide">
				<div class="carousel-caption animate__animated wow animate__bounceInRight" style="top: 30%;">
					<h1 style="text-transform: uppercase;"><strong>TRIDENN CERAMICS</strong></h1>
					<h5>We Design, Manufacture and Supply Ceramics Products</h5>
				</div>
			</div>
			<div class="carousel-item left-to-right hb-animate-element">
				<div style='height: 100%; width: 100%; z-index: 2; background-color: #080d15; opacity: .7; position: absolute;'></div>
				<img class="d-block w-100" src="img/slider/carousel-3.webp" style='height: calc(100vh - 17vh); object-fit: cover;' alt="Third slide">
				<div class="carousel-caption animate__animated wow animate__bounceInRight" style="top: 30%;">
					<h1 style="text-transform: uppercase;"><strong>We offer custom-made interior design products</strong></h1>
					<h5>Lamps, art objects, functional items, candle holders, mirror frames</h5>
					<a href="contact_us" class="btn btn-outline-light mt-4">Contact us</a>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<div class='p-2 d-flex justify-content-center align-items-center' style="border: solid 1px #fff; border-radius: 20px; width: 5vh; height: 5vh;">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</div>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<div class='p-2 d-flex justify-content-center align-items-center' style="border: solid 1px #fff; border-radius: 20px; width: 5vh; height: 5vh;">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</div>
		</a>
	</div>

	<div class="main-content">
		<div id="ttcmsbanner" class="ttcmsbanner my-40 my-sm-25">
			<div class="ttbannerblock container text-center">
				<div class="row">
					<div class="ttbanner1 ttbanner col-sm-6 col-xs-6 left-to-right hb-animate-element hb-in-viewport">
						<div class="ttbanner-img">
							<a href="products">
								<img src="img/banner/cms-01.jpg" alt="cms-01" height="600" width="630">
							</a>
						</div>
						<div class="ttbanner-inner d-inline-block align-top float-none">
							<div class="ttbanner-desc float-left w-100">
								<h2 class="ttbanner-heading text-uppercase float-left w-100" style='white-space: nowrap;'>Obsidian</h2>
								<span class="title text-uppercase float-left w-100 pb-3">collection</span>
								<span class="subtitle float-left w-100 py-20">Et harum quidem rerum facilis est et expedita m libero tempore, cum solut</span>
								<span class="shop-now float-left w-100">
									<a href="products" class="d-inline-block align-top float-none btn-primary">Shop Now</a>
								</span>
							</div>
						</div>
					</div>
					<div class="ttbanner2 ttbanner col-sm-6 col-xs-6 right-to-left hb-animate-element hb-in-viewport">
						<div class="ttbanner-img">
							<a href="products">
								<img src="img/banner/cms-02.jpg" alt="cms-02" height="600" width="630">
							</a>
						</div>
						<div class="ttbanner-inner d-inline-block align-top float-none">
							<div class="ttbanner-desc">
								<h2 class="ttbanner-heading text-uppercase" style='white-space: nowrap;'>Dalmation</h2>
								<span class="title text-uppercase float-left w-100 pb-3">collection</span>
								<span class="subtitle float-left w-100 py-20">Et harum quidem rerum facilis est et expedita m libero tempore, cum solut</span>
								<span class="shop-now float-left w-100">
									<a href="products" class="d-inline-block align-top float-none btn-primary">Shop Now</a>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="main">
			<div id="hometab" class="home-tab my-40 my-sm-25 bottom-to-top hb-animate-element hb-in-viewport">
				<div class="container">
					<div class="row">
						<div class="tt-title d-inline-block float-none w-100 text-center">Trending Products</div>
						<div class="tabs">
							<ul class="nav nav-tabs justify-content-center">
								<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#ttfeatured-main" id="featured-tab">
										<div class="tab-title">Featured</div>
									</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#ttnew-main" id="new-tab">
										<div class="tab-title">Latest</div>
									</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#ttbestseller-main" id="bestseller-tab">
										<div class="tab-title">Bestseller</div>
									</a></li>
							</ul>
						</div>
						<div class="tab-content float-left w-100">
							<div class="tab-pane active float-left w-100" id="ttfeatured-main" role="tabpanel" aria-labelledby="featured-tab">
								<section id="ttfeatured" class="ttfeatured-products">
									<div class="ttfeatured-content products grid owl-carousel owl-loaded owl-drag" id="owl1">

										<div class="owl-stage-outer">
											<div class="owl-stage" style="transform: translate3d(-3233px, 0px, 0px); transition: all 0.25s ease 0s; width: 5174px;">
												<div class="owl-item cloned" style=" width: 323.333px !important;">
													<div class="product-layouts">
														<div class="product-thumb">
															<div class="image zoom">
																<a href="product_details">
																	<img src="img/products/05.jpg" alt="05" style="height: 350px; object-fit: cover;" width="385">
																	<img src="img/products/05.jpg" alt="05" class="second_image img-responsive" style="height: 350px; object-fit: cover;" width="385"></a>
															</div>
															<div class="thumb-description">
																<div class="caption">
																	<h4 class="product-title text-capitalize"><a href="product_details">Bottle</a></h4>
																</div>
																<div class="rating">
																	<div class="product-ratings d-inline-block align-middle">
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons off">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons off">star</i></span>
																	</div>
																</div>
																<div class="price">
																	<div class="regular-price">KSh100.00</div>
																	<div class="old-price">KSh150.00</div>
																</div>
																<div class="button-wrapper">
																	<div class="button-group text-center">
																		<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
																		<a href="wishlist" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
																		<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
																		<button type="button" class="btn btn-primary btn-quickview" data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="owl-item cloned" style=" width: 323.333px !important;">
													<div class="product-layouts">
														<div class="product-thumb">
															<div class="image zoom">
																<a href="product_details">
																	<img src="img/products/06.jpg" alt="06" style="height: 350px; object-fit: cover;" width="385">
																	<img src="img/products/06.jpg" alt="06" class="second_image img-responsive" style="height: 350px; object-fit: cover;" width="385"> </a>
															</div>
															<div class="thumb-description">
																<div class="caption">
																	<h4 class="product-title text-capitalize"><a href="product_details">Iron Stand</a></h4>
																</div>
																<div class="rating">
																	<div class="product-ratings d-inline-block align-middle">
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons off">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons off">star</i></span>
																	</div>
																</div>
																<div class="price">
																	<div class="regular-price">KSh100.00</div>
																	<div class="old-price">KSh150.00</div>
																</div>
																<div class="button-wrapper">
																	<div class="button-group text-center">
																		<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
																		<a href="wishlist" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
																		<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
																		<button type="button" class="btn btn-primary btn-quickview" data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="owl-item cloned" style=" width: 323.333px !important;">
													<div class="product-layouts">
														<div class="product-thumb">
															<div class="image zoom">
																<a href="product_details">
																	<img src="img/products/07.jpg" alt="07" style="height: 350px; object-fit: cover;" width="385">
																	<img src="img/products/07.jpg" alt="07" class="second_image img-responsive" style="height: 350px; object-fit: cover;" width="385"> </a>
															</div>
															<div class="thumb-description">
																<div class="caption">
																	<h4 class="product-title text-capitalize"><a href="product_details">Oblong</a></h4>
																</div>
																<div class="rating">
																	<div class="product-ratings d-inline-block align-middle">
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons off">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons off">star</i></span>
																	</div>
																</div>
																<div class="price">
																	<div class="regular-price">KSh100.00</div>
																	<div class="old-price">KSh150.00</div>
																</div>
																<div class="button-wrapper">
																	<div class="button-group text-center">
																		<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
																		<a href="wishlist" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
																		<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
																		<button type="button" class="btn btn-primary btn-quickview" data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="owl-item cloned" style=" width: 323.333px !important;">
													<div class="product-layouts">
														<div class="product-thumb">
															<div class="image zoom">
																<a href="product_details">
																	<img src="img/products/08.jpg" alt="08" style="height: 350px; object-fit: cover;" width="385">
																	<img src="img/products/08.jpg" alt="08" class="second_image img-responsive" style="height: 350px; object-fit: cover;" width="385"></a>
															</div>
															<div class="thumb-description">
																<div class="caption">
																	<h4 class="product-title text-capitalize"><a href="product_details">Channel</a></h4>
																</div>
																<div class="rating">
																	<div class="product-ratings d-inline-block align-middle">
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons off">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons off">star</i></span>
																	</div>
																</div>
																<div class="price">
																	<div class="regular-price">KSh100.00</div>
																	<div class="old-price">KSh150.00</div>
																</div>
																<div class="button-wrapper">
																	<div class="button-group text-center">
																		<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
																		<a href="wishlist" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
																		<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
																		<button type="button" class="btn btn-primary btn-quickview" data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="owl-item" style="width: 323.333px !important;">
													<div class="product-layouts">
														<div class="product-thumb">
															<div class="image zoom">
																<a href="product_details">
																	<img src="img/products/01.jpg" alt="01" style="height: 350px; object-fit: cover;" width="385">
																	<img src="img/products/01.jpg" alt="01" class="second_image img-responsive" style="height: 350px; object-fit: cover;" width="385"> </a>
																<ul class="countdown1 countdown">
																	<li><span class="days">00</span>
																		<p class="days_text">Days</p>
																	</li>
																	<li><span class="hours">00</span>
																		<p class="hours_text">Hours</p>
																	</li>
																	<li><span class="minutes">00</span>
																		<p class="minutes_text">Minutes</p>
																	</li>
																	<li><span class="seconds">00</span>
																		<p class="seconds_text">Seconds</p>
																	</li>
																</ul>
															</div>
															<div class="thumb-description">
																<div class="caption">
																	<h4 class="product-title text-capitalize"><a href="product_details">Greek With handles</a></h4>
																</div>
																<div class="rating">
																	<div class="product-ratings d-inline-block align-middle">
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons off">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons off">star</i></span>
																	</div>
																</div>
																<div class="price">
																	<div class="regular-price">KSh100.00</div>
																	<div class="old-price">KSh150.00</div>
																</div>
																<div class="button-wrapper">
																	<div class="button-group text-center">
																		<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
																		<a href="wishlist" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
																		<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
																		<button type="button" class="btn btn-primary btn-quickview" data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="owl-item" style="width: 323.333px !important;">
													<div class="product-layouts">
														<div class="product-thumb">
															<div class="image zoom">
																<a href="product_details">
																	<img src="img/products/02.jpg" alt="02" style="height: 350px; object-fit: cover;" width="385">
																	<img src="img/products/02.jpg" alt="02" class="second_image img-responsive" style="height: 350px; object-fit: cover;" width="385"> </a>
																<div class="flags">
																	<div class="sale">sale</div>
																	<div class="new">new</div>
																</div>
																<ul class="countdown countdown2">
																	<li><span class="days">00</span>
																		<p class="days_text">Days</p>
																	</li>
																	<li><span class="hours">00</span>
																		<p class="hours_text">Hours</p>
																	</li>
																	<li><span class="minutes">00</span>
																		<p class="minutes_text">Minutes</p>
																	</li>
																	<li><span class="seconds">00</span>
																		<p class="seconds_text">Seconds</p>
																	</li>
																</ul>
															</div>
															<div class="thumb-description">
																<div class="caption">
																	<h4 class="product-title text-capitalize"><a href="product_details">District Ceramics</a></h4>
																</div>
																<div class="rating">
																	<div class="product-ratings d-inline-block align-middle">
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons off">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons off">star</i></span>
																	</div>
																</div>
																<div class="price">
																	<div class="regular-price">KSh100.00</div>
																	<div class="old-price">KSh150.00</div>
																</div>
																<div class="button-wrapper">
																	<div class="button-group text-center">
																		<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
																		<a href="wishlist" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
																		<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
																		<button type="button" class="btn btn-primary btn-quickview" data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="owl-item" style="width: 323.333px !important;">
													<div class="product-layouts">
														<div class="product-thumb">
															<div class="image zoom">
																<a href="product_details">
																	<img src="img/products/03.jpg" alt="03" style="height: 350px; object-fit: cover;" width="385">
																	<img src="img/products/03.jpg" alt="03" class="second_image img-responsive" style="height: 350px; object-fit: cover;" width="385"></a>
															</div>
															<div class="thumb-description">
																<div class="caption">
																	<h4 class="product-title text-capitalize"><a href="product_details">Flatland</a></h4>
																</div>
																<div class="rating">
																	<div class="product-ratings d-inline-block align-middle">
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons off">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons off">star</i></span>
																	</div>
																</div>
																<div class="price">
																	<div class="regular-price">KSh100.00</div>
																	<div class="old-price">KSh150.00</div>
																</div>
																<div class="button-wrapper">
																	<div class="button-group text-center">
																		<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
																		<a href="wishlist" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
																		<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
																		<button type="button" class="btn btn-primary btn-quickview" data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="owl-item" style="width: 323.333px !important;">
													<div class="product-layouts">
														<div class="product-thumb">
															<div class="image zoom">
																<a href="product_details">
																	<img src="img/products/04.jpg" alt="04" style="height: 350px; object-fit: cover;" width="385">
																	<img src="img/products/04.jpg" alt="04" class="second_image img-responsive" style="height: 350px; object-fit: cover;" width="385"> </a>
															</div>
															<div class="thumb-description">
																<div class="caption">
																	<h4 class="product-title text-capitalize"><a href="product_details">Cottage</a></h4>
																</div>
																<div class="rating">
																	<div class="product-ratings d-inline-block align-middle">
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons off">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons off">star</i></span>
																	</div>
																</div>
																<div class="price">
																	<div class="regular-price">KSh100.00</div>
																	<div class="old-price">KSh150.00</div>
																</div>
																<div class="button-wrapper">
																	<div class="button-group text-center">
																		<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
																		<a href="wishlist" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
																		<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
																		<button type="button" class="btn btn-primary btn-quickview" data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="owl-item" style=" width: 323.333px !important;">
													<div class="product-layouts">
														<div class="product-thumb">
															<div class="image zoom">
																<a href="product_details">
																	<img src="img/products/05.jpg" alt="05" style="height: 350px; object-fit: cover;" width="385">
																	<img src="img/products/05.jpg" alt="05" class="second_image img-responsive" style="height: 350px; object-fit: cover;" width="385"></a>
															</div>
															<div class="thumb-description">
																<div class="caption">
																	<h4 class="product-title text-capitalize"><a href="product_details">Bottle</a></h4>
																</div>
																<div class="rating">
																	<div class="product-ratings d-inline-block align-middle">
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons off">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons off">star</i></span>
																	</div>
																</div>
																<div class="price">
																	<div class="regular-price">KSh100.00</div>
																	<div class="old-price">KSh150.00</div>
																</div>
																<div class="button-wrapper">
																	<div class="button-group text-center">
																		<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
																		<a href="wishlist" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
																		<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
																		<button type="button" class="btn btn-primary btn-quickview" data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="owl-item" style=" width: 323.333px !important;">
													<div class="product-layouts">
														<div class="product-thumb">
															<div class="image zoom">
																<a href="product_details">
																	<img src="img/products/06.jpg" alt="06" style="height: 350px; object-fit: cover;" width="385">
																	<img src="img/products/06.jpg" alt="06" class="second_image img-responsive" style="height: 350px; object-fit: cover;" width="385"> </a>
															</div>
															<div class="thumb-description">
																<div class="caption">
																	<h4 class="product-title text-capitalize"><a href="product_details">Iron Stand</a></h4>
																</div>
																<div class="rating">
																	<div class="product-ratings d-inline-block align-middle">
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons off">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons off">star</i></span>
																	</div>
																</div>
																<div class="price">
																	<div class="regular-price">KSh100.00</div>
																	<div class="old-price">KSh150.00</div>
																</div>
																<div class="button-wrapper">
																	<div class="button-group text-center">
																		<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
																		<a href="wishlist" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
																		<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
																		<button type="button" class="btn btn-primary btn-quickview" data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="owl-item active" style=" width: 323.333px !important;">
													<div class="product-layouts">
														<div class="product-thumb">
															<div class="image zoom">
																<a href="product_details">
																	<img src="img/products/07.jpg" alt="07" style="height: 350px; object-fit: cover;" width="385">
																	<img src="img/products/07.jpg" alt="07" class="second_image img-responsive" style="height: 350px; object-fit: cover;" width="385"> </a>
															</div>
															<div class="thumb-description">
																<div class="caption">
																	<h4 class="product-title text-capitalize"><a href="product_details">Oblong</a></h4>
																</div>
																<div class="rating">
																	<div class="product-ratings d-inline-block align-middle">
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons off">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons off">star</i></span>
																	</div>
																</div>
																<div class="price">
																	<div class="regular-price">KSh100.00</div>
																	<div class="old-price">KSh150.00</div>
																</div>
																<div class="button-wrapper">
																	<div class="button-group text-center">
																		<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
																		<a href="wishlist" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
																		<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
																		<button type="button" class="btn btn-primary btn-quickview" data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="owl-item active" style=" width: 323.333px !important;">
													<div class="product-layouts">
														<div class="product-thumb">
															<div class="image zoom">
																<a href="product_details">
																	<img src="img/products/08.jpg" alt="08" style="height: 350px; object-fit: cover;" width="385">
																	<img src="img/products/08.jpg" alt="08" class="second_image img-responsive" style="height: 350px; object-fit: cover;" width="385"></a>
															</div>
															<div class="thumb-description">
																<div class="caption">
																	<h4 class="product-title text-capitalize"><a href="product_details">Channel</a></h4>
																</div>
																<div class="rating">
																	<div class="product-ratings d-inline-block align-middle">
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons off">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons off">star</i></span>
																	</div>
																</div>
																<div class="price">
																	<div class="regular-price">KSh100.00</div>
																	<div class="old-price">KSh150.00</div>
																</div>
																<div class="button-wrapper">
																	<div class="button-group text-center">
																		<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
																		<a href="wishlist" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
																		<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
																		<button type="button" class="btn btn-primary btn-quickview" data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="owl-item cloned active" style=" width: 323.333px !important;">
													<div class="product-layouts">
														<div class="product-thumb">
															<div class="image zoom">
																<a href="product_details">
																	<img src="img/products/01.jpg" alt="01" style="height: 350px; object-fit: cover;" width="385">
																	<img src="img/products/01.jpg" alt="01" class="second_image img-responsive" style="height: 350px; object-fit: cover;" width="385"> </a>
																<ul class="countdown1 countdown">
																	<li><span class="days">00</span>
																		<p class="days_text">Days</p>
																	</li>
																	<li><span class="hours">00</span>
																		<p class="hours_text">Hours</p>
																	</li>
																	<li><span class="minutes">00</span>
																		<p class="minutes_text">Minutes</p>
																	</li>
																	<li><span class="seconds">00</span>
																		<p class="seconds_text">Seconds</p>
																	</li>
																</ul>
															</div>
															<div class="thumb-description">
																<div class="caption">
																	<h4 class="product-title text-capitalize"><a href="product_details">Greek With handles</a></h4>
																</div>
																<div class="rating">
																	<div class="product-ratings d-inline-block align-middle">
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons off">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons off">star</i></span>
																	</div>
																</div>
																<div class="price">
																	<div class="regular-price">KSh100.00</div>
																	<div class="old-price">KSh150.00</div>
																</div>
																<div class="button-wrapper">
																	<div class="button-group text-center">
																		<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
																		<a href="wishlist" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
																		<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
																		<button type="button" class="btn btn-primary btn-quickview" data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="owl-item cloned" style=" width: 323.333px !important;">
													<div class="product-layouts">
														<div class="product-thumb">
															<div class="image zoom">
																<a href="product_details">
																	<img src="img/products/02.jpg" alt="02" style="height: 350px; object-fit: cover;" width="385">
																	<img src="img/products/02.jpg" alt="03" class="second_image img-responsive" style="height: 350px; object-fit: cover;" width="385"> </a>
																<div class="flags">
																	<div class="sale">sale</div>
																	<div class="new">new</div>
																</div>
																<ul class="countdown countdown2">
																	<li><span class="days">00</span>
																		<p class="days_text">Days</p>
																	</li>
																	<li><span class="hours">00</span>
																		<p class="hours_text">Hours</p>
																	</li>
																	<li><span class="minutes">00</span>
																		<p class="minutes_text">Minutes</p>
																	</li>
																	<li><span class="seconds">00</span>
																		<p class="seconds_text">Seconds</p>
																	</li>
																</ul>
															</div>
															<div class="thumb-description">
																<div class="caption">
																	<h4 class="product-title text-capitalize"><a href="product_details">District Ceramics</a></h4>
																</div>
																<div class="rating">
																	<div class="product-ratings d-inline-block align-middle">
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons off">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons off">star</i></span>
																	</div>
																</div>
																<div class="price">
																	<div class="regular-price">KSh100.00</div>
																	<div class="old-price">KSh150.00</div>
																</div>
																<div class="button-wrapper">
																	<div class="button-group text-center">
																		<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
																		<a href="wishlist" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
																		<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
																		<button type="button" class="btn btn-primary btn-quickview" data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="owl-item cloned" style=" width: 323.333px !important;">
													<div class="product-layouts">
														<div class="product-thumb">
															<div class="image zoom">
																<a href="product_details">
																	<img src="img/products/03.jpg" alt="03" style="height: 350px; object-fit: cover;" width="385">
																	<img src="img/products/03.jpg" alt="03" class="second_image img-responsive" style="height: 350px; object-fit: cover;" width="385"></a>
															</div>
															<div class="thumb-description">
																<div class="caption">
																	<h4 class="product-title text-capitalize"><a href="product_details">Flatland</a></h4>
																</div>
																<div class="rating">
																	<div class="product-ratings d-inline-block align-middle">
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons off">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons off">star</i></span>
																	</div>
																</div>
																<div class="price">
																	<div class="regular-price">KSh100.00</div>
																	<div class="old-price">KSh150.00</div>
																</div>
																<div class="button-wrapper">
																	<div class="button-group text-center">
																		<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
																		<a href="wishlist" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
																		<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
																		<button type="button" class="btn btn-primary btn-quickview" data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="owl-item cloned" style=" width: 323.333px !important;">
													<div class="product-layouts">
														<div class="product-thumb">
															<div class="image zoom">
																<a href="product_details">
																	<img src="img/products/04.jpg" alt="04" style="height: 350px; object-fit: cover;" width="385">
																	<img src="img/products/04.jpg" alt="04" class="second_image img-responsive" style="height: 350px; object-fit: cover;" width="385"> </a>
															</div>
															<div class="thumb-description">
																<div class="caption">
																	<h4 class="product-title text-capitalize"><a href="product_details">Cottage</a></h4>
																</div>
																<div class="rating">
																	<div class="product-ratings d-inline-block align-middle">
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons off">star</i></span>
																		<span class="fa fa-stack"><i class="material-icons off">star</i></span>
																	</div>
																</div>
																<div class="price">
																	<div class="regular-price">KSh100.00</div>
																	<div class="old-price">KSh150.00</div>
																</div>
																<div class="button-wrapper">
																	<div class="button-group text-center">
																		<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
																		<a href="wishlist" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
																		<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
																		<button type="button" class="btn btn-primary btn-quickview" data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="owl-dots disabled"></div>
									</div>
								</section>
							</div>
							<div class="tab-pane float-left w-100" id="ttnew-main" role="tabpanel" aria-labelledby="new-tab">
								<section id="ttnew" class="ttnew-products">
									<div class="ttnew-content products grid owl-carousel" id="owl2">
										<div class="product-layouts">
											<div class="product-thumb">
												<div class="image zoom">
													<a href="product_details">
														<img src="img/products/01.jpg" alt="01" style="height: 350px; object-fit: cover;" width="385">
														<img src="img/products/01.jpg" alt="01" class="second_image img-responsive" style="height: 350px; object-fit: cover;" width="385"> </a>
													<ul class="countdown1 countdown">
														<li><span class="days">00</span>
															<p class="days_text">Days</p>
														</li>
														<li><span class="hours">00</span>
															<p class="hours_text">Hours</p>
														</li>
														<li><span class="minutes">00</span>
															<p class="minutes_text">Minutes</p>
														</li>
														<li><span class="seconds">00</span>
															<p class="seconds_text">Seconds</p>
														</li>
													</ul>
												</div>
												<div class="thumb-description">
													<div class="caption">
														<h4 class="product-title text-capitalize"><a href="product_details">Greek With handles</a></h4>
													</div>
													<div class="rating">
														<div class="product-ratings d-inline-block align-middle">
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons off">star</i></span>
															<span class="fa fa-stack"><i class="material-icons off">star</i></span>
														</div>
													</div>
													<div class="price">
														<div class="regular-price">KSh100.00</div>
														<div class="old-price">KSh150.00</div>
													</div>
													<div class="button-wrapper">
														<div class="button-group text-center">
															<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
															<a href="wishlist" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
															<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
															<button type="button" class="btn btn-primary btn-quickview" data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-layouts">
											<div class="product-thumb">
												<div class="image zoom">
													<a href="product_details">
														<img src="img/products/02.jpg" alt="02" style="height: 350px; object-fit: cover;" width="385">
														<img src="img/products/02.jpg" alt="02" class="second_image img-responsive" style="height: 350px; object-fit: cover;" width="385"> </a>
												</div>
												<div class="thumb-description">
													<div class="caption">
														<h4 class="product-title text-capitalize"><a href="product_details">District Ceramics</a></h4>
													</div>
													<div class="rating">
														<div class="product-ratings d-inline-block align-middle">
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons off">star</i></span>
															<span class="fa fa-stack"><i class="material-icons off">star</i></span>
														</div>
													</div>
													<div class="price">
														<div class="regular-price">KSh100.00</div>
														<div class="old-price">KSh150.00</div>
													</div>
													<div class="button-wrapper">
														<div class="button-group text-center">
															<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
															<a href="wishlist" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
															<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
															<button type="button" class="btn btn-primary btn-quickview" data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-layouts">
											<div class="product-thumb">
												<div class="image zoom">
													<a href="product_details">
														<img src="img/products/03.jpg" alt="03" style="height: 350px; object-fit: cover;" width="385">
														<img src="img/products/03.jpg" alt="03" class="second_image img-responsive" style="height: 350px; object-fit: cover;" width="385"> </a>
												</div>
												<div class="thumb-description">
													<div class="caption">
														<h4 class="product-title text-capitalize"><a href="product_details">Flatland</a></h4>
													</div>
													<div class="rating">
														<div class="product-ratings d-inline-block align-middle">
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons off">star</i></span>
															<span class="fa fa-stack"><i class="material-icons off">star</i></span>
														</div>
													</div>
													<div class="price">
														<div class="regular-price">KSh100.00</div>
														<div class="old-price">KSh150.00</div>
													</div>
													<div class="button-wrapper">
														<div class="button-group text-center">
															<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
															<a href="wishlist" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
															<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
															<button type="button" class="btn btn-primary btn-quickview" data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-layouts">
											<div class="product-thumb">
												<div class="image zoom">
													<a href="product_details">
														<img src="img/products/04.jpg" alt="04" style="height: 350px; object-fit: cover;" width="385">
														<img src="img/products/04.jpg" alt="04" class="second_image img-responsive" style="height: 350px; object-fit: cover;" width="385"></a>
												</div>
												<div class="thumb-description">
													<div class="caption">
														<h4 class="product-title text-capitalize"><a href="product_details">Cottage</a></h4>
													</div>
													<div class="rating">
														<div class="product-ratings d-inline-block align-middle">
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons off">star</i></span>
															<span class="fa fa-stack"><i class="material-icons off">star</i></span>
														</div>
													</div>
													<div class="price">
														<div class="regular-price">KSh100.00</div>
														<div class="old-price">KSh150.00</div>
													</div>
													<div class="button-wrapper">
														<div class="button-group text-center">
															<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
															<a href="wishlist" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
															<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
															<button type="button" class="btn btn-primary btn-quickview" data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-layouts">
											<div class="product-thumb">
												<div class="image zoom">
													<a href="product_details">
														<img src="img/products/05.jpg" alt="05" style="height: 350px; object-fit: cover;" width="385">
														<img src="img/products/05.jpg" alt="05" class="second_image img-responsive" style="height: 350px; object-fit: cover;" width="385"></a>
												</div>
												<div class="thumb-description">
													<div class="caption">
														<h4 class="product-title text-capitalize"><a href="product_details">Bottle</a></h4>
													</div>
													<div class="rating">
														<div class="product-ratings d-inline-block align-middle">
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons off">star</i></span>
															<span class="fa fa-stack"><i class="material-icons off">star</i></span>
														</div>
													</div>
													<div class="price">
														<div class="regular-price">KSh100.00</div>
														<div class="old-price">KSh150.00</div>
													</div>
													<div class="button-wrapper">
														<div class="button-group text-center">
															<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
															<a href="wishlist" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
															<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
															<button type="button" class="btn btn-primary btn-quickview" data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-layouts">
											<div class="product-thumb">
												<div class="image zoom">
													<a href="product_details">
														<img src="img/products/06.jpg" alt="06" style="height: 350px; object-fit: cover;" width="385">
														<img src="img/products/06.jpg" alt="06" class="second_image img-responsive" style="height: 350px; object-fit: cover;" width="385"></a>
												</div>
												<div class="thumb-description">
													<div class="caption">
														<h4 class="product-title text-capitalize"><a href="product_details">Iron Stand</a></h4>
													</div>
													<div class="rating">
														<div class="product-ratings d-inline-block align-middle">
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons off">star</i></span>
															<span class="fa fa-stack"><i class="material-icons off">star</i></span>
														</div>
													</div>
													<div class="price">
														<div class="regular-price">KSh100.00</div>
														<div class="old-price">KSh150.00</div>
													</div>
													<div class="button-wrapper">
														<div class="button-group text-center">
															<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
															<a href="wishlist" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
															<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
															<button type="button" class="btn btn-primary btn-quickview" data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-layouts">
											<div class="product-thumb">
												<div class="image zoom">
													<a href="product_details">
														<img src="img/products/07.jpg" alt="07" style="height: 350px; object-fit: cover;" width="385">
														<img src="img/products/07.jpg" alt="07" class="second_image img-responsive" style="height: 350px; object-fit: cover;" width="385"></a>
												</div>
												<div class="thumb-description">
													<div class="caption">
														<h4 class="product-title text-capitalize"><a href="#">Oblong</a></h4>
													</div>
													<div class="rating">
														<div class="product-ratings d-inline-block align-middle">
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons off">star</i></span>
															<span class="fa fa-stack"><i class="material-icons off">star</i></span>
														</div>
													</div>
													<div class="price">
														<div class="regular-price">KSh100.00</div>
														<div class="old-price">KSh150.00</div>
													</div>
													<div class="button-wrapper">
														<div class="button-group text-center">
															<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
															<a href="wishlist" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
															<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
															<button type="button" class="btn btn-primary btn-quickview" data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-layouts">
											<div class="product-thumb">
												<div class="image zoom">
													<a href="product_details">
														<img src="img/products/08.jpg" alt="08" style="height: 350px; object-fit: cover;" width="385">
														<img src="img/products/08.jpg" alt="08" class="second_image img-responsive" style="height: 350px; object-fit: cover;" width="385"></a>
												</div>
												<div class="thumb-description">
													<div class="caption">
														<h4 class="product-title text-capitalize"><a href="product_details">Channel</a></h4>
													</div>
													<div class="rating">
														<div class="product-ratings d-inline-block align-middle">
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons off">star</i></span>
															<span class="fa fa-stack"><i class="material-icons off">star</i></span>
														</div>
													</div>
													<div class="price">
														<div class="regular-price">KSh100.00</div>
														<div class="old-price">KSh150.00</div>
													</div>
													<div class="button-wrapper">
														<div class="button-group text-center">
															<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
															<a href="wishlist" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
															<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
															<button type="button" class="btn btn-primary btn-quickview" data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
							<div class="tab-pane float-left w-100" id="ttbestseller-main" role="tabpanel" aria-labelledby="bestseller-tab">
								<section id="ttbestseller" class="ttbestseller-products">
									<div class="ttbestseller-content products grid owl-carousel" id="owl3">
										<div class="product-layouts">
											<div class="product-thumb">
												<div class="image zoom">
													<a href="product_details">
														<img src="img/products/01.jpg" alt="01" style="height: 350px; object-fit: cover;" width="385">
														<img src="img/products/01.jpg" alt="01" class="second_image img-responsive" style="height: 350px; object-fit: cover;" width="385"> </a>
													<ul class="countdown1 countdown">
														<li><span class="days">00</span>
															<p class="days_text">Days</p>
														</li>
														<li><span class="hours">00</span>
															<p class="hours_text">Hours</p>
														</li>
														<li><span class="minutes">00</span>
															<p class="minutes_text">Minutes</p>
														</li>
														<li><span class="seconds">00</span>
															<p class="seconds_text">Seconds</p>
														</li>
													</ul>
												</div>
												<div class="thumb-description">
													<div class="caption">
														<h4 class="product-title text-capitalize"><a href="product_details">Greek With handles</a></h4>
													</div>

													<div class="rating">
														<div class="product-ratings d-inline-block align-middle">
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons off">star</i></span>
															<span class="fa fa-stack"><i class="material-icons off">star</i></span>
														</div>
													</div>
													<div class="price">
														<div class="regular-price">KSh100.00</div>
														<div class="old-price">KSh150.00</div>
													</div>
													<div class="button-wrapper">
														<div class="button-group text-center">
															<button type="button" class="btn btn-primary btn-cart" data-toggle="modal" data-target="#product_view"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
															<a href="wishlist" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
															<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
															<button type="button" class="btn btn-primary btn-quickview" data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-layouts">
											<div class="product-thumb">
												<div class="image zoom">
													<a href="product_details">
														<img src="img/products/02.jpg" alt="02" style="height: 350px; object-fit: cover;" width="385">
														<img src="img/products/02.jpg" alt="03" class="second_image img-responsive" style="height: 350px; object-fit: cover;" width="385"></a>
												</div>
												<div class="thumb-description">
													<div class="caption">
														<h4 class="product-title text-capitalize"><a href="product_details">District Ceramics</a></h4>
													</div>
													<div class="rating">
														<div class="product-ratings d-inline-block align-middle">
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons off">star</i></span>
															<span class="fa fa-stack"><i class="material-icons off">star</i></span>
														</div>
													</div>
													<div class="price">
														<div class="regular-price">KSh100.00</div>
														<div class="old-price">KSh150.00</div>
													</div>
													<div class="button-wrapper">
														<div class="button-group text-center">
															<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
															<a href="wishlist" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
															<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
															<button type="button" class="btn btn-primary btn-quickview" data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-layouts">
											<div class="product-thumb">
												<div class="image zoom">
													<a href="product_details">
														<img src="img/products/03.jpg" alt="03" style="height: 350px; object-fit: cover;" width="385">
														<img src="img/products/03.jpg" alt="03" class="second_image img-responsive" style="height: 350px; object-fit: cover;" width="385"></a>
												</div>
												<div class="thumb-description">
													<div class="caption">
														<h4 class="product-title text-capitalize"><a href="product_details">Flatland</a></h4>
													</div>
													<div class="rating">
														<div class="product-ratings d-inline-block align-middle">
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons off">star</i></span>
															<span class="fa fa-stack"><i class="material-icons off">star</i></span>
														</div>
													</div>
													<div class="price">
														<div class="regular-price">KSh100.00</div>
														<div class="old-price">KSh150.00</div>
													</div>
													<div class="button-wrapper">
														<div class="button-group text-center">
															<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
															<a href="wishlist" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
															<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
															<button type="button" class="btn btn-primary btn-quickview" data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-layouts">
											<div class="product-thumb">
												<div class="image zoom">
													<a href="product_details">
														<img src="img/products/04.jpg" alt="03" style="height: 350px; object-fit: cover;" width="385">
														<img src="img/products/04.jpg" alt="04" class="second_image img-responsive" style="height: 350px; object-fit: cover;" width="385"></a>
												</div>
												<div class="thumb-description">
													<div class="caption">
														<h4 class="product-title text-capitalize"><a href="product_details">Cottage</a></h4>
													</div>
													<div class="rating">
														<div class="product-ratings d-inline-block align-middle">
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons off">star</i></span>
															<span class="fa fa-stack"><i class="material-icons off">star</i></span>
														</div>
													</div>
													<div class="price">
														<div class="regular-price">KSh100.00</div>
														<div class="old-price">KSh150.00</div>
													</div>
													<div class="button-wrapper">
														<div class="button-group text-center">
															<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
															<a href="wishlist" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
															<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
															<button type="button" class="btn btn-primary btn-quickview" data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-layouts">
											<div class="product-thumb">
												<div class="image zoom">
													<a href="product_details">
														<img src="img/products/05.jpg" alt="03" style="height: 350px; object-fit: cover;" width="385">
														<img src="img/products/05.jpg" alt="05" class="second_image img-responsive" style="height: 350px; object-fit: cover;" width="385"> </a>
												</div>
												<div class="thumb-description">
													<div class="caption">
														<h4 class="product-title text-capitalize"><a href="product_details">Bottle</a></h4>
													</div>
													<div class="rating">
														<div class="product-ratings d-inline-block align-middle">
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons off">star</i></span>
															<span class="fa fa-stack"><i class="material-icons off">star</i></span>
														</div>
													</div>
													<div class="price">
														<div class="regular-price">KSh100.00</div>
														<div class="old-price">KSh150.00</div>
													</div>
													<div class="button-wrapper">
														<div class="button-group text-center">
															<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
															<a href="wishlist" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
															<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
															<button type="button" class="btn btn-primary btn-quickview" data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-layouts">
											<div class="product-thumb">
												<div class="image zoom">
													<a href="product_details">
														<img src="img/products/06.jpg" alt="06" style="height: 350px; object-fit: cover;" width="385">
														<img src="img/products/06.jpg" alt="06" class="second_image img-responsive" style="height: 350px; object-fit: cover;" width="385"> </a>
												</div>
												<div class="thumb-description">
													<div class="caption">
														<h4 class="product-title text-capitalize"><a href="product_details">Iron Stand</a></h4>
													</div>
													<div class="rating">
														<div class="product-ratings d-inline-block align-middle">
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons off">star</i></span>
															<span class="fa fa-stack"><i class="material-icons off">star</i></span>
														</div>
													</div>
													<div class="price">
														<div class="regular-price">KSh100.00</div>
														<div class="old-price">KSh150.00</div>
													</div>
													<div class="button-wrapper">
														<div class="button-group text-center">
															<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
															<a href="wishlist" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
															<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
															<button type="button" class="btn btn-primary btn-quickview" data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-layouts">
											<div class="product-thumb">
												<div class="image zoom">
													<a href="product_details">
														<img src="img/products/07.jpg" alt="07" style="height: 350px; object-fit: cover;" width="385">
														<img src="img/products/07.jpg" alt="07" class="second_image img-responsive" style="height: 350px; object-fit: cover;" width="385"> </a>
												</div>
												<div class="thumb-description">
													<div class="caption">
														<h4 class="product-title text-capitalize"><a href="product_details">Oblong</a></h4>
													</div>
													<div class="rating">
														<div class="product-ratings d-inline-block align-middle">
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons off">star</i></span>
															<span class="fa fa-stack"><i class="material-icons off">star</i></span>
														</div>
													</div>
													<div class="price">
														<div class="regular-price">KSh100.00</div>
														<div class="old-price">KSh150.00</div>
													</div>
													<div class="button-wrapper">
														<div class="button-group text-center">
															<button type="button" class="btn btn-primary btn-cart" data-toggle="modal" data-target="#product_view"> <i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
															<a href="wishlist" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
															<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
															<button type="button" class="btn btn-primary btn-quickview" data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-layouts">
											<div class="product-thumb">
												<div class="image zoom">
													<a href="product_details">
														<img src="img/products/08.jpg" alt="08" style="height: 350px; object-fit: cover;" width="385"></a>
												</div>
												<div class="thumb-description">
													<div class="caption">
														<h4 class="product-title text-capitalize"><a href="product_details">Channel</a></h4>
													</div>
													<div class="rating">
														<div class="product-ratings d-inline-block align-middle">
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons">star</i></span>
															<span class="fa fa-stack"><i class="material-icons off">star</i></span>
															<span class="fa fa-stack"><i class="material-icons off">star</i></span>
														</div>
													</div>
													<div class="price">
														<div class="regular-price">KSh100.00</div>
														<div class="old-price">KSh150.00</div>
													</div>
													<div class="button-wrapper">
														<div class="button-group text-center">
															<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
															<a href="wishlist" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
															<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
															<button type="button" class="btn btn-primary btn-quickview" data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div id="ttsmartblog" class="my-40 my-sm-25 bottom-to-top hb-animate-element">
				<div class="tt-title d-inline-block float-none w-100 text-center text-capitalize">latest news</div>
				<div class="container">
					<div class="row">
						<div class="smartblog-content owl-carousel owl-loaded owl-drag">
							<div class="owl-stage-outer">
								<div class="owl-stage" style="transform: translate3d(-646px, 0px, 0px); transition: all 0s ease 0s; width: 1617px;">
									<div class="owl-item" style=" width: 323.333px !important;">
										<div class="ttblog">
											<div class="item">
												<div class="ttblog_image_holder">
													<a href="#">
														<img src="img/banner/blog-01.jpg" alt="blog-01" width="415" height="269"> </a>
													<span class="blogicons">
														<a title="Click to view Full Image" href="img/banner/blog-01.jpg" data-lightbox="example-set" class="icon zoom"><i class="material-icons">search</i></a> </span>
												</div>
												<div class="blog-content-wrap float-left w-100">
													<div class="blog_inner">
														<h4 class="product-title"><span>Share the Love</span></h4>
														<div class="blog-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
														<div class="read-more text-capitalize">
															<a title="Click to view Read More" class="readmore">read more</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="owl-item" style=" width: 323.333px !important;">
										<div class="ttblog">
											<div class="item">
												<div class="ttblog_image_holder">
													<a href="#">
														<img src="img/banner/blog-02.jpg" alt="blog-02" width="415" height="269"> </a>
													<span class="blogicons">
														<a title="Click to view Full Image" href="img/banner/blog-02.jpg" data-lightbox="example-set" class="icon zoom"><i class="material-icons">search</i></a> </span>
												</div>
												<div class="blog-content-wrap float-left w-100">
													<div class="blog_inner">
														<h4 class="product-title"><span>Upon of seasons earth</span></h4>
														<div class="blog-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
														<div class="read-more text-capitalize">
															<a title="Click to view Read More" class="readmore">read more</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="owl-item active" style=" width: 323.333px !important;">
										<div class="ttblog">
											<div class="item">
												<div class="ttblog_image_holder">
													<a href="#">
														<img src="img/banner/blog-03.jpg" alt="blog-03" width="415" height="269"> </a>
													<span class="blogicons">
														<a title="Click to view Full Image" href="img/banner/blog-03.jpg" data-lightbox="example-set" class="icon zoom"><i class="material-icons">search</i></a> </span>
												</div>
												<div class="blog-content-wrap float-left w-100">
													<div class="blog_inner">
														<h4 class="product-title"><span>From Now we are certified web</span></h4>
														<div class="blog-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
														<div class="read-more text-capitalize">
															<a title="Click to view Read More" class="readmore">read more</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="owl-item active" style=" width: 323.333px !important;">
										<div class="ttblog">
											<div class="item">
												<div class="ttblog_image_holder">
													<a href="#">
														<img src="img/banner/blog-04.jpg" alt="blog-04" width="415" height="269"> </a>
													<span class="blogicons">
														<a title="Click to view Full Image" href="img/banner/blog-04.jpg" data-lightbox="example-set" class="icon zoom"><i class="material-icons">search</i></a> </span>
												</div>
												<div class="blog-content-wrap float-left w-100">
													<div class="blog_inner">
														<h4 class="product-title"><span>Viderer voluptatum te eum</span></h4>
														<div class="blog-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
														<div class="read-more text-capitalize">
															<a title="Click to view Read More" class="readmore">read more</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="owl-item active" style=" width: 323.333px !important;">
										<div class="ttblog">
											<div class="item">
												<div class="ttblog_image_holder">
													<a href="#">
														<img src="img/banner/blog-05.jpg" alt="blog-05" width="415" height="269"> </a>
													<span class="blogicons">
														<a title="Click to view Full Image" href="img/banner/blog-05.jpg" data-lightbox="example-set" class="icon zoom"><i class="material-icons">search</i></a> </span>
												</div>
												<div class="blog-content-wrap float-left w-100">
													<div class="blog_inner">
														<h4 class="product-title"><span>Share the Love</span></h4>
														<div class="blog-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
														<div class="read-more text-capitalize">
															<a title="Click to view Read More" class="readmore">read more</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="material-icons"></i></button><button type="button" role="presentation" class="owl-next"><i class="material-icons"></i></button></div>
							<div class="owl-dots disabled"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php
require_once 'footer.php';
?>