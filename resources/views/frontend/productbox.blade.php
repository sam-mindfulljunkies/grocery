<div id="content">
		<div class="content-page">
			<div class="container">
				<div class="bread-crumb bg-white border radius6">
					<a href="{{route('userhome')}}">Home</a><a href="{{route('userhome.products')}}">Products</a><a href="{{route('userhome.product_details',['id'=>$product->id])}}">@if(isset($product->name)){{$product->name}}@endif</a>
				</div>
				<div class="main-content-page">
					<div class="detail-product">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="detail-gallery">
									<div class="wrap-detail-gallery">
										<div class="mid">
											@if(isset($product->thumbnail_img))
											<img src="{{asset($product->thumbnail_img)}}" alt="">
											@endif
											@if(isset($product['video_link']))
											<a href="{{$product['video_link']}}" class="fancybox-media shop-button"><i class="fas fa-video"></i></a>
											@endif
										</div>
										<div class="gallery-control">
											<div class="carousel" data-vertical="true" style="visibility: visible; overflow: hidden; position: relative; z-index: 2; left: 0px; height: 320px;">
												<ul class="list-none" style="margin: 0px; padding: 0px; position: relative; list-style: none; z-index: 1; height: 3040px; top: -320px;">
													@if(isset($product->thumbnail_img))
													<li style="overflow: hidden; float: none; width: 70px; height: 70px;">
														<a href="javascript:void(0);" class=""><img src="{{asset($product->photos)}}" alt=""></a>
													</li>
													@endif
													@if(isset($product->thumbnail_img))
													<li style="overflow: hidden; float: none; width: 70px; height: 70px;">
														<a href="javascript:void(0);"><img src="{{asset($product->thumbnail_img)}}" alt=""></a>
													</li>
													@endif
													@if(isset($product->featured_img))
													<li style="overflow: hidden; float: none; width: 70px; height: 70px;">
														<a href="javascript:void(0);"><img src="{{asset($product['featured_img'])}}" alt=""></a>
													</li>
													@endif
													@if(isset($product->flash_deal_img))
													<li style="overflow: hidden; float: none; width: 70px; height: 70px;">
														<a href="javascript:void(0);"><img src="{{asset($product->flash_deal_img)}}" alt=""></a>
													</li>
													@endif
											</ul>
											</div>
											<div class="control-button-gallery text-center">
												<a href="javascript:void(0);" class="shop-button prev"><i class="fa fa-angle-down"></i></a>
												<a href="javascript:void(0);" class="shop-button next"><i class="fa fa-angle-up"></i></a>
											</div>
										</div>
									</div>
									<div class="social-detail social-footer text-center">
										<a href="javascript:void(0);" class="float-shadow"><img src="{{asset('frontend/content/icon-face.png')}}" alt=""></a>
										<a href="javascript:void(0);" class="float-shadow"><img src="{{asset('frontend/content/icon-twit.png')}}" alt=""></a>
										<!-- <a href="javascript:void(0);" class="float-shadow"><img src="{{asset('frontend/content/icon-gplus.png')}}" alt=""></a> -->
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
											<a href="javascript:void(0);" class="add-review">Add your review</a>
										</li>
									</ul>
									<div class="product-price">
										@if(isset($product->unit_price))<del><span>€{{$product->unit_price}}</span></del>@endif
										@if(isset($product->purchase_price))<ins><span>€{{$product->purchase_price}}</span></ins>@endif
										@if(isset($product->discount))<span class="percent-sale white radius6">{{$product->discount}} </span>@endif
									<input type="hidden" id="purchase_pricesss" value="{{$product->purchase_price}}">
									</div>
									<div class="title-tab-gal-detail">
									@if(isset($product->colors))
										<div class="color-gal-tab">
											<label>Color: </label><span>
											{{$product->colors}}
											</span>
										</div>
										@endif
										<!-- <ul class="list-inline-block">
											<li class="active"><a href="javascript:void(0);"><img src="{{asset('frontend/content/goodshop_bakery_09.jpg')}}" alt=""><i class="fas fa-check-circle checkicon"></i></a></li>
											<li><a href="javascript:void(0);"><img src="{{asset('frontend/content/goodshop_bakery_08.jpg')}}" alt=""></a></li>
											<li><a href="javascript:void(0);"><img src="{{asset('frontend/content/goodshop_bakery_07.jpg')}}" alt=""></a></li>
										</ul> -->
									</div>
									<div class="detail-attr-size">
									@if(isset($product->choice_options))
										<label>Size: </label>
										<ul class="list-inline-block">
										@php
										$size = json_decode($product->choice_options);
										@endphp
										
										@foreach($size[0]->values as $val)
											<li><a href="javascript:void(0);" data-id="{{$product->id}}" data-val="{{$val}}" class="choose_size">{{($val)}}</a></li>
											@endforeach
										</ul>
										@endif
									</div>
									<div class="detail-qty info-qty border radius6 append_hidden">
										<a href="javascript:void(0);" class="qty-down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
										<span class="qty-val qunatity_value">1</span>
										<a href="javascript:void(0);" class="qty-up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
									</div>
									<a class="addcart-link add-cart-detail shop-button title18 style2 cartitemadd" id="cartitemadd" href="javascript:void(0);">Add to Cart</a>
									<div class="product-extra-link">
										<a href="javascript:void(0);" id="wishlistadd" class="wishlist-link wishlistadd"><i class="far fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
										<!-- <a href="javascript:void(0);" class="compare-link"><i class="fab fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a> -->
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
										</div>
										<div class="col-md-4 col-sm-4 hidden-xs">
											<div class="banner-adv fade-in-out">
												@if(isset($product->thumbnail_img))
												<a href="javascript:void(0);" class="adv-thumb-link"><img class="img-responsive" src="{{asset($product->thumbnail_img)}}" alt=""></a>
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
										@foreach($product_review as $val)
										<li>
											<div class="review-author">
												<a href="javascript:void(0);"><img src="{{asset($val->avatar)}}" alt=""></a>
											</div>
											<div class="review-info">
												<p class="review-header"><a href="javascript:void(0);"><strong>{{$val->name}}</strong></a> – March 30, 2017:</p>
												<div class="product-rate">
													<div class="product-rating" style="width:100%"></div>
												</div>
												<p class="desc">{{$val->comment}}</p>
											</div>
										</li>
										@endforeach
									</ul>
									<div class="add-review-form" >
										<h3 class="title14">Add a Review</h3>
										<p>Your email address will not be published. Required fields are marked *</p>
										<form class="review-form" action="{{route('userhome.review_form')}}" method="post" id="review_form">
										@csrf
											<!-- <div>
												<label>Name *</label>
												<input name="name" id="username" type="text">
												
											</div>
											<div>
												<label>Email *</label>
												<input name="email" id="useremail" type="text">
											</div> -->
											<div>
												<label>Your Rating</label>
												<div class="product-rate">
												<input type="hidden" name="product_id" value="{{$product->id}}">
													<div class="product-rating" style="width:100%"></div>
												</div>
											</div>
											<div>
												<label>Your Review *</label>
												<textarea name="messasge" id="usermessage" cols="30" rows="10"></textarea>
											</div>
											<div>
												<input class="btn-rect radius6 btnsubmitform" value="Submit" type="submit">
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>