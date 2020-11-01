@php 

use App\Http\Controllers\FrontendController;

$new = new FrontendController();
$categories = $new->getCategory();
@endphp
@extends('frontend.layouts.app')
@section('content')
<div id="content">

		<div class="content-page">
			<div class="container">
               <div class="bread-crumb bg-white border radius6">
					<a href="index.php">Home</a> <a href="#">Indian</a> <span class="color">Festival Specialities</span>
				</div>
     			<div class="main-content-page">
					<div class="row">
						<div class="col-md-3 col-sm-4 col-xs-12">
						<div class="sidebar-home4 sidebar-left">
							<div class="wrap-cat-icon box-border-top bg-white drop-shadow hidden-xs hidden-sm">
								<h2 class="title18 title-box4 title-cat-icon">Categories</h2>
								<ul class="list-cat-icon">
														@foreach($categories as $val)
									<li class="has-cat-mega">
										<a href="#"><span>{{$val->name}}</span></a>
										<div class="cat-mega-menu cat-mega-style1">
											<div class="row">
												<div class="col-md-4 col-sm-4">
													<div class="list-cat-mega-menu">
														<h2 class="title-cat-mega-menu">{{$val->name}}</h2>
														<ul class="list-none">
														@foreach($val->subcategories as $val1)
															<li><a href="#">{{$val1->name}}</a></li>
														@endforeach
														</ul>
													</div>
													
												</div>
												<div class="col-md-4 col-sm-4">
													<div class="banner-adv fade-out-in">
														<a href="#" class="adv-thumb-link"><img alt="" src="images/home/home4/cat-mega-thumb.png"></a>
													</div>
												</div>
											</div>
										</div> 
									</li>
									@endforeach
								</ul>
							</div>
							<!-- End Wrap Icon -->
						
							
							
						</div>
					</div>
						<div class="col-md-9 col-sm-8 col-xs-12">
							<div class="content-shop">
								<div class="sort-pagi-bar">
									<h2 class="title30">Festival Specialities</h2>
								 </div>
								</div>
								<div class="grid-shop">
									<div class="row">
										@foreach($products as $val)
										<div class="col-md-4 col-sm-6 col-xs-6">
											<div class="item-product1 style-border">
												<div class="product-thumb">
													<a href=""><img alt="Hamdard Rooh Afza" src="{{asset($val['photos'])}}"></a>
												</div>
												<div class="product-info">
													<h3 class="product-title"><a href="">{{$val->name}}</a></h3>
													<div class="product-price">
														<ins><span>€{{$val->unit_price}}</span></ins>
													</div>
													<div class="product-extra-link">
														<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i><span>Wishlist</span></a>
														<a href="#" class="addcart-link"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Add to cart</span></a>
														<a href="#" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a>
													</div>
												</div>
											</div>
										</div>
										@endforeach
										
									</div>
								</div>
								<div class="pagi-nav-bar text-center"><!-- 
									<a href="#" class="shop-button style2 btn-small prev-page"><i class="fa fa-caret-left" aria-hidden="true"></i></a> -->
									<!-- <a href="#" class=""> -->{{$products->links()}}<!-- </a> -->
									<!-- <a href="#" class="shop-button style2 btn-small next-page"><i class="fa fa-caret-right" aria-hidden="true"></i></a> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
	</div>
	<!-- End Content -->
	
	 <a href="#" class="scroll-top radius6"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
	  <div class="wishlist-mask">
		<div class="wishlist-popup"> <span class="popup-icon"><i class="fa fa-bullhorn" aria-hidden="true"></i></span>
			<p class="wishlist-alert">"Good shop Product" was added to wishlist</p>
			<div class="wishlist-button"> <a href="#">Continue Shopping (<span class="wishlist-countdown">10</span>)</a> <a href="#">Go To Shopping Cart</a> </div>
		</div>
	</div>
	<div id="loading">
		<div id="loading-center">
			<div id="loading-center-absolute">
				<div class="object" id="object_four"></div>
				<div class="object" id="object_three"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_one"></div>
			</div>
		</div>
	</div>
	<!-- End Preload -->
	</div>

@endsection