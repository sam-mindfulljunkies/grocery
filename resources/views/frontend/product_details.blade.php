@extends('frontend.layouts.app')
@section('content')
	<!-- <link rel="stylesheet" type="text/css" href="content/color.css" media="all"> -->
	<!-- <link rel="stylesheet" type="text/css" href="content/responsive.css" media="all"> -->
<style type="text/css">.fancybox-margin{margin-right:17px;}</style></head>
<body class="" style="background:#fafafa">
<div class="wrap">

	<div id="content">
		<div class="content-page">
			<div class="container">
				<div class="bread-crumb bg-white border radius6">
					<a href="#">Home</a> <a href="#">Bakery</a> <span class="color">Brithday</span>
				</div>
				<div class="main-content-page">
					<div class="detail-product">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="detail-gallery">
									<div class="wrap-detail-gallery">
										<div class="mid">
											@if(isset($product->photos))
											<img src="{{asset($product->photos)}}" alt="">
											@endif
											@if(isset($product['video_link']))
											<a href="{{$product['video_link']}}" class="fancybox-media shop-button"><i class="fas fa-video"></i></a>
											@endif
										</div>
										<div class="gallery-control">
											<div class="carousel" data-vertical="true" style="visibility: visible; overflow: hidden; position: relative; z-index: 2; left: 0px; height: 320px;">
												<ul class="list-none" style="margin: 0px; padding: 0px; position: relative; list-style: none; z-index: 1; height: 3040px; top: -320px;">
													@if(isset($product->photos))
													<li style="overflow: hidden; float: none; width: 70px; height: 70px;">
														<a href="#" class=""><img src="{{asset($product->photos)}}" alt=""></a>
													</li>
													@endif
													@if(isset($product->thumbnail_img))
													<li style="overflow: hidden; float: none; width: 70px; height: 70px;">
														<a href="#"><img src="{{asset($product->thumbnail_img)}}" alt=""></a>
													</li>
													@endif
													@if(isset($product->featured_img))
													<li style="overflow: hidden; float: none; width: 70px; height: 70px;">
														<a href="#"><img src="{{asset($product['featured_img'])}}" alt=""></a>
													</li>
													@endif
													@if(isset($product->flash_deal_img))
													<li style="overflow: hidden; float: none; width: 70px; height: 70px;">
														<a href="#"><img src="{{asset($product->flash_deal_img)}}" alt=""></a>
													</li>
													@endif
													<!-- <li style="overflow: hidden; float: none; width: 70px; height: 70px;">
														<a href="#"><img src="{{asset('frontend/content/goodshop_bakery_19.jpg')}}" alt=""></a>
													</li>
													<li style="overflow: hidden; float: none; width: 70px; height: 70px;">
														<a href="#"><img src="{{asset('frontend/content/goodshop_bakery_18.jpg')}}" alt=""></a>
													</li>
													<li style="overflow: hidden; float: none; width: 70px; height: 70px;">
														<a href="#"><img src="{{asset('frontend/content/goodshop_bakery_17.jpg')}}" alt=""></a>
													</li>
													<li style="overflow: hidden; float: none; width: 70px; height: 70px;">
														<a href="#" class=""><img src="{{asset('frontend/content/goodshop_bakery_16.jpg')}}" alt=""></a>
													</li> -->
											</ul>
											</div>
											<div class="control-button-gallery text-center">
												<a href="#" class="shop-button prev"><i class="fa fa-angle-down"></i></a>
												<a href="#" class="shop-button next"><i class="fa fa-angle-up"></i></a>
											</div>
										</div>
									</div>
									<div class="social-detail social-footer text-center">
										<a href="#" class="float-shadow"><img src="{{asset('frontend/content/icon-face.png')}}" alt=""></a>
										<a href="#" class="float-shadow"><img src="{{asset('frontend/content/icon-twit.png')}}" alt=""></a>
										<a href="#" class="float-shadow"><img src="{{asset('frontend/content/icon-gplus.png')}}" alt=""></a>
									</div>
								</div>
								<!-- End Gallery -->
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="detail-info">
									<h2 class="title-product-detail title30">@if(isset($product->name)){{$product->name}}@endif</h2>
									<ul class="list-inline-block review-rating">
										<li>
											<div class="product-rate">
												<div class="product-rating" style="width:100%"></div>
											</div>
										</li>
										<li>
											<span class="number-rate">@if(isset($product->rating)){{$product->rating}}@endif</span>
										</li>
										<li>
											<a href="#" class="add-review">Add your review</a>
										</li>
									</ul>
									<div class="product-price">
										@if(isset($product->unit_price))<del><span>€{{$product->unit_price}}</span></del>@endif
										@if(isset($product->purchase_price))<ins><span>€{{$product->purchase_price}}</span></ins>@endif
										@if(isset($product->discount))<span class="percent-sale white radius6">{{$product->discount}} </span>@endif
									</div>
									<div class="title-tab-gal-detail">
										<div class="color-gal-tab">
											<label>Color: </label><span>@if(isset($product->colors)){{$product->colors}}@endif</span>
										</div>
										<!-- <ul class="list-inline-block">
											<li class="active"><a href="#"><img src="{{asset('frontend/content/goodshop_bakery_09.jpg')}}" alt=""><i class="fas fa-check-circle checkicon"></i></a></li>
											<li><a href="#"><img src="{{asset('frontend/content/goodshop_bakery_08.jpg')}}" alt=""></a></li>
											<li><a href="#"><img src="{{asset('frontend/content/goodshop_bakery_07.jpg')}}" alt=""></a></li>
										</ul> -->
									</div>
									<!-- <div class="detail-attr-size">
										<label>Size: </label>
										<ul class="list-inline-block">
											<li><a href="#">s</a></li>
											<li><a href="#">m</a></li>
											<li><a href="#">l</a></li>
										</ul>
									</div> -->
									<div class="detail-qty info-qty border radius6 append_hidden">
										<a href="#" class="qty-down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
										<span class="qty-val qunatity_value">1</span>
										<a href="#" class="qty-up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
									</div>
									<a class="addcart-link add-cart-detail shop-button title18 style2" href="#">Add to Cart</a>
									<div class="product-extra-link">
										<a href="#" class="wishlist-link"><i class="far fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
										<a href="#" class="compare-link"><i class="fab fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
									</div>
									<div class="detail-extra">
										@if(isset($product->stocks[0]) && count($product->stocks) > 0)
											<p class="desc product-code">SUK: <span>{{$product->stocks[0]['sku']}}</span></p>
						
										<p class="desc product-available">Available: 
											@if(count($product->stocks) > 0)
											<span class="avail-instock">instock</span>
											@else
											<span class="avail-instock">Stock Out</span>
											@endif
										</p>
											<p class="desc tags-detail">
												<span>Tags:</span> 
												<a href="javascript:;">{{$product->tags}}</a>
											</p>
									</div>
										@endif
								</div>
							</div>
						</div>
					</div>
					<!-- End Detail Product -->
					<div class="tabs-detail">
						<div class="title-tab-detail">
							<ul class="list-inline-block text-center">
								<li class="active"><a href="#tab1" data-toggle="tab">Description</a></li>
								<li><a href="#tab2" data-toggle="tab">Additional Information</a></li>
								<li><a href="#tab3" data-toggle="tab">Reviews</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div id="tab1" class="tab-pane active">
								<div class="detail-descript">
									<div class="row">
										<div class="col-md-8 col-sm-8 col-xs-12">
											@if(isset($product->description))<p class="desc">{{$product->description}}</p>@endif
											<!-- <div class="table">
												<div class="detail-des-icon">
													<span class="title30"><i class="fa fa-shopping-bag"></i></span>
												</div>
												<div class="detail-des-info">
													<p class="desc">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
												</div>
											</div>
											<div class="table">
												<div class="detail-des-icon">
													<span class="title30"><i class="fa fa-pied-piper"></i></span>
												</div>
												<div class="detail-des-info">
													<p class="desc">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
												</div>
											</div> -->
										</div>
										<div class="col-md-4 col-sm-4 hidden-xs">
											<div class="banner-adv fade-in-out">
												@if(isset($product->photos))
												<a href="#" class="adv-thumb-link"><img class="img-responsive" src="{{asset($product->photos)}}" alt=""></a>
												@endif
											</div>
										</div>
									</div>
								</div>
							</div>

							<div id="tab2" class="tab-pane">
								<div class="detail-addition">
									<table class="table table-bordered table-striped">
										<tbody><tr>
											<td><p class="desc">Product Name</p></td>
											<td>
												@if(isset($product->name))
												<p class="desc">{{$product->name}}</p>
												@else
												<p class="desc"> - </p>
												@endif
											</td>
										</tr>
										<tr>
											<td><p class="desc">Unit Price</p></td>
											<td>
												@if(isset($product->unit_price))
												<p class="desc">{{$product->unit_price}}</p>
												@else
												<p class="desc"> - </p>
												@endif
											</td>
										</tr>
										<tr>
											<td><p class="desc">Variant Product</p></td>
											<td>
												@if(isset($product->variant_product))
												<p class="desc">{{$product->variant_product}}</p>
												@else
												<p class="desc"> - </p>
												@endif</td>
										</tr>
										<tr>
											<td><p class="desc">Colors</p></td>
											<td>
												@if(isset($product->colors))
												<p class="desc">{{$product->colors}}</p>
												@else
												<p class="desc"></p>
												@endif</p></td>
										</tr>
										<tr>
											<td><p class="desc">Shipping type</p></td>
											<td>
												@if(isset($product->shipping_type))
												<p class="desc">{{$product->shipping_type}}</p>
												@else
												<p class="desc"> - </p>
												@endif</td>
										</tr>
										<tr>
											<td><p class="desc">Shipping cost</p></td>
											<td>
												@if(isset($product->shipping_cost))
												<p class="desc">{{$product->shipping_cost}}</p>
												@else
												<p class="desc"> - </p>
												@endif
											</td>
										</tr>
										<tr>
											<td style="width:50%"><p class="desc">Product detail</p></td>
											<td>
												@if(isset($product->description))
												<p class="desc">{{$product->description}}</p>
												@else
												<p class="desc"> - </p>
												@endif</td>
										</tr>
									</tbody></table>
								</div>
							</div>
							<div id="tab3" class="tab-pane">
								<div class="content-tags-detail">
									<h3 class="title14">2 Review for bakery macaron</h3>
									<ul class="list-none list-tags-review">
										<li>
											<div class="review-author">
												<a href="#"><img src="{{asset('frontend/content/av1.jpg')}}" alt=""></a>
											</div>
											<div class="review-info">
												<p class="review-header"><a href="#"><strong>7up-theme</strong></a> – March 30, 2017:</p>
												<div class="product-rate">
													<div class="product-rating" style="width:100%"></div>
												</div>
												<p class="desc">Really a nice stool. It was better than I expected in quality. The color is a rich, honey brown and looks a little lighter than pictured but still a great stool for the money.</p>
											</div>
										</li>
										<li>
											<div class="review-author">
												<a href="#"><img src="{{asset('frontend/content/av2.jpg')}}" alt=""></a>
											</div>
											<div class="review-info">
												<p class="review-header"><a href="#"><strong>7up-theme</strong></a> – March 30, 2017:</p>
												<div class="product-rate">
													<div class="product-rating" style="width:100%"></div>
												</div>
												<p class="desc">Really a nice stool. It was better than I expected in quality. The color is a rich, honey brown and looks a little lighter than pictured but still a great stool for the money.</p>
											</div>
										</li>
									</ul>
									<div class="add-review-form">
										<h3 class="title14">Add a Review</h3>
										<p>Your email address will not be published. Required fields are marked *</p>
										<form class="review-form">
											<div>
												<label>Name *</label>
												<input name="name" id="name" type="text">
											</div>
											<div>
												<label>Email *</label>
												<input name="email" id="email" type="text">
											</div>
											<div>
												<label>Your Rating</label>
												<div class="product-rate">
													<div class="product-rating" style="width:100%"></div>
												</div>
											</div>
											<div>
												<label>Your Review *</label>
												<textarea name="messasge" id="message" cols="30" rows="10"></textarea>
											</div>
											<div>
												<input class="btn-rect radius6" value="Submit" type="submit">
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Tab Detail -->
					<div class="related-product">
						<h2 class="title30">LATEST products</h2>
						<div class="related-slider">
							<div class="wrap-item show-navi owl-carousel owl-theme" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1],[480,2],[768,3],[980,4]]" style="opacity: 1; display: block;">
								<div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 3600px; left: 0px; display: block;"><div class="owl-item active" style="width: 300px;"><div class="item-product1 style-border">
									<div class="product-thumb">
										<a href="" class="product-thumb-link">
											<img src="{{asset('frontend/content/goodshop_bakery_07.jpg')}}" alt="">
										</a>
										<a href="http://demo.7uptheme.com/html/goodshop/quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
										<span class="product-label new-label"></span>
									</div>
									<div class="product-info">
										<h3 class="product-title"><a href="http://demo.7uptheme.com/html/goodshop/detail.html">Goodshop Product name</a></h3>
										<div class="product-price">
											<ins><span>$32.00</span></ins>
										</div>
										<div class="product-rate">
											<div class="product-rating" style="width:100%"></div>
										</div>
										<a href="http://demo.7uptheme.com/html/goodshop/product-grid.html" class="product-incat">Coockies <span>(13)</span></a>
										<div class="product-extra-link">
											<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i><span>Wishlist</span></a>
											<a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
											<a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
										</div>
									</div>
								</div></div><div class="owl-item active" style="width: 300px;"><div class="item-product1 style-border">
									<div class="product-thumb">
										<a href="" class="product-thumb-link">
											<img src="{{asset('frontend/content/goodshop_bakery_15.jpg')}}" alt="">
										</a>
										<a href="http://demo.7uptheme.com/html/goodshop/quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
										<span class="product-label new-label"></span>
									</div>
									<div class="product-info">
										<h3 class="product-title"><a href="http://demo.7uptheme.com/html/goodshop/detail.html">Goodshop Product name</a></h3>
										<div class="product-price">
											<ins><span>$18.00</span></ins>
										</div>
										<div class="product-rate">
											<div class="product-rating" style="width:100%"></div>
										</div>
										<a href="http://demo.7uptheme.com/html/goodshop/product-grid.html" class="product-incat">Coockies <span>(13)</span></a>
										<div class="product-extra-link">
											<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i><span>Wishlist</span></a>
											<a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
											<a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
										</div>
									</div>
								</div></div><div class="owl-item active" style="width: 300px;"><div class="item-product1 style-border">
									<div class="product-thumb">
										<a href="" class="product-thumb-link">
											<img src="{{asset('frontend/content/goodshop_bakery_10.jpg')}}" alt="">
										</a>
										<a href="http://demo.7uptheme.com/html/goodshop/quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
									</div>
									<div class="product-info">
										<h3 class="product-title"><a href="http://demo.7uptheme.com/html/goodshop/detail.html">Goodshop Product name</a></h3>
										<div class="product-price">
											<ins><span>$25.00</span></ins>
										</div>
										<div class="product-rate">
											<div class="product-rating" style="width:100%"></div>
										</div>
										<a href="http://demo.7uptheme.com/html/goodshop/product-grid.html" class="product-incat">Coockies <span>(13)</span></a>
										<div class="product-extra-link">
											<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i><span>Wishlist</span></a>
											<a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
											<a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
										</div>
									</div>
								</div></div><div class="owl-item active" style="width: 300px;"><div class="item-product1 style-border">
									<div class="product-thumb">
										<a href="" class="product-thumb-link">
											<img src="{{asset('frontend/content/goodshop_bakery_19.jpg')}}" alt="">
										</a>
										<a href="http://demo.7uptheme.com/html/goodshop/quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
										<span class="product-label new-label"></span>
									</div>
									<div class="product-info">
										<h3 class="product-title"><a href="http://demo.7uptheme.com/html/goodshop/detail.html">Goodshop Product name</a></h3>
										<div class="product-price">
											<ins><span>$9.00</span></ins>
										</div>
										<div class="product-rate">
											<div class="product-rating" style="width:100%"></div>
										</div>
										<a href="http://demo.7uptheme.com/html/goodshop/product-grid.html" class="product-incat">Coockies <span>(13)</span></a>
										<div class="product-extra-link">
											<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i><span>Wishlist</span></a>
											<a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
											<a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
										</div>
									</div>
								</div></div><div class="owl-item" style="width: 300px;"><div class="item-product1 style-border">
									<div class="product-thumb">
										<a href="" class="product-thumb-link">
											<img src="{{asset('frontend/content/goodshop_bakery_20.jpg')}}" alt="">
										</a>
										<a href="http://demo.7uptheme.com/html/goodshop/quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
									</div>
									<div class="product-info">
										<h3 class="product-title"><a href="http://demo.7uptheme.com/html/goodshop/detail.html">Goodshop Product name</a></h3>
										<div class="product-price">
											<ins><span>$34.00</span></ins>
										</div>
										<div class="product-rate">
											<div class="product-rating" style="width:100%"></div>
										</div>
										<a href="http://demo.7uptheme.com/html/goodshop/product-grid.html" class="product-incat">Coockies <span>(13)</span></a>
										<div class="product-extra-link">
											<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i><span>Wishlist</span></a>
											<a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
											<a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
										</div>
									</div>
								</div></div><div class="owl-item" style="width: 300px;"><div class="item-product1 style-border">
									<div class="product-thumb">
										<a href="" class="product-thumb-link">
											<img src="{{asset('frontend/content/goodshop_bakery_21.jpg')}}" alt="">
										</a>
										<a href="http://demo.7uptheme.com/html/goodshop/quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
										<span class="product-label new-label"></span>
									</div>
									<div class="product-info">
										<h3 class="product-title"><a href="http://demo.7uptheme.com/html/goodshop/detail.html">Goodshop Product name</a></h3>
										<div class="product-price">
											<ins><span>$23.00</span></ins>
										</div>
										<div class="product-rate">
											<div class="product-rating" style="width:100%"></div>
										</div>
										<a href="http://demo.7uptheme.com/html/goodshop/product-grid.html" class="product-incat">Coockies <span>(13)</span></a>
										<div class="product-extra-link">
											<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i><span>Wishlist</span></a>
											<a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
											<a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
										</div>
									</div>
								</div></div></div></div>
							<div class="owl-controls clickable" style="display: block;"><div class="owl-buttons"><div class="owl-prev"><i class="fa fa-caret-left" aria-hidden="true"></i></div><div class="owl-next"><i class="fa fa-caret-right" aria-hidden="true"></i></div></div></div></div>
						</div>
					</div>
					<!-- End Product Box -->
				</div>
			</div>
		</div>
	</div>
@endsection