@extends('frontend.layouts.app') @section('content')
<div id="content">
	<div class="container">
		<div class="banner-slider banner-slider3">
			<div class="wrap-item" data-pagination="true" data-autoplay="false" data-transition="fade" data-navigation="true" data-itemscustom="[[0,1]]"> @foreach($banner as $val)
				<div class="item-slider item-slider3">
					<div class="banner-thumb">
						<a href="javascript:;"><img src="{{asset($val['photo'])}}" alt="" /></a>
					</div>
					<div class="banner-info text-center white animated" data-animated="bounceIn">
						<h2 class="title60 light-font inline-block"><span>collection</span></h2>
						<h2 class="title60"><span>fashion spring</span></h2> <a href="javascript:;" class="shop-button title18">Shop now</a> </div>
				</div> @endforeach </div>
		</div>
		<div class="container">
			<div class="row">
				<div class="row">
					<div class="col-md-9">
						<!-- <h3>
            New Products
            </h3> -->
						<h2 class="title30 title-box5 text-left"><span>New Products</span></h2> </div>
					<div class="col-md-3">
						<!-- Controls -->
						<div class="controls pull-right">
							<a class="left fa fa-chevron-left btn btn-success" href="#carousel-example" data-slide="prev"></a>&nbsp;
							<a class="right fa fa-chevron-right btn btn-success" href="#carousel-example" data-slide="next"></a>
						</div>
					</div> <a class="title30 title-underline" href="{{Route('userhome.products')}}" id="content-desktop" style="float: right;font-size: 22px;margin-top: 3%;">View More</a> <a class="title30 title-underline" href="{{Route('userhome.products')}}" id="content-mobile" style="float: left;font-size: 13px;margin-top: 3%;margin-left: 3%;">View More</a> </div>
				<div id="carousel-example" class="carousel slide" data-ride="carousel">
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<div class="row" id="content-desktop"> @foreach($product as $key=> $val)
								<div class="col-sm-3 col-xs-3 grid1-{{$val->id}}">
									<div class="item-product text-center">
										<div class="product-thumb"> <img alt="{{$val->name}}" src="{{asset($val->thumbnail_img)}}"> </div>
										<div class="product-info">
											<h3 class="product-title"><a href="">{{$val->name}}</a></h3>
											<div class="product-price"> <ins><span>€{{$val->purchase_price}}</span></ins> </div>
											<div class="product-extra-link style2"> 
                                 <a href="javascript:;" class="addcart-link cartitemadd-grid1" data-id="{{$val->id}}">Add to cart</a></div>
											<input type="hidden" value="{{$val->purchase_price}}" name="price" id="price">
											<input type="hidden" value="{{$val->id}}" name="product_id" id="product_id">
											<input type="hidden" value="{{$val->shipping_cost}}" name="shipping_cost" id="shipping_cost">
											<input type="hidden" value="{{$val->tax}}" name="tax" id="tax">
											<input type="hidden" value="{{$val->variation}}" name="variation" id="variation"> </div>
									</div>
								</div> @php if($key >= 3){ break; } @endphp @endforeach </div>
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="container">
				<div class="row">
					<div class="row">
						<div class="col-md-9">
							<!-- <h3>
               Special offer
               </h3> -->
							<h2 class="title30 title-box5 text-left"><span>Special offer</span></h2> </div>
						<div class="col-md-3">
							<!-- Controls -->
							<div class="controls pull-right">
								<a class="left fa fa-chevron-left btn btn-success" href="#carousel-example1" data-slide="prev"></a>&nbsp;
								<a class="right fa fa-chevron-right btn btn-success" href="#carousel-example1" data-slide="next"></a>
							</div>
						</div> <a class="title30 title-underline" href="{{Route('userhome.products')}}" id="content-desktop" style="float: right;font-size: 22px;margin-top: 3%;">View More</a> <a class="title30 title-underline" href="{{Route('userhome.products')}}" id="content-mobile" style="float: left;font-size: 13px;margin-top: 3%;margin-left: 3%;">View More</a> </div>
					<div id="carousel-example1" class="carousel slide" data-ride="carousel">
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
								<div class="row " id="content-desktop"> @foreach($product as $key=> $vals)
									<div class="col-sm-3 col-xs-3 grid2-{{$val->id}}">
										<div class="item-product text-center">
											<div class="product-thumb"> <img alt="{{$vals->name}}" src="{{asset($vals->thumbnail_img)}}"> </div>
											<div class="product-info">
												<h3 class="product-title"><a href="">{{$vals->name}}</a></h3>
												<div class="product-price"> <ins><span>€{{$vals->purchase_price}}</span></ins> </div>
												<div class="product-extra-link style2"> <a href="javascript:;" data-id='{{$val->id}}' class="addcart-link cartitemadd-grid2">Add to cart</a> </div>
												<input type="hidden" value="{{$vals->purchase_price}}" name="price" id="price1">
												<input type="hidden" value="{{$vals->id}}" name="product_id" id="product_id1">
												<input type="hidden" value="{{$vals->shipping_cost}}" name="shipping_cost" id="shipping_cost1">
												<input type="hidden" value="{{$vals->tax}}" name="tax" id="tax1">
												<input type="hidden" value="{{$vals->variation}}" name="variation" id="variation1"> </div>
										</div>
									</div> @php if($key >= 3){ break; } @endphp @endforeach </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br> @include('frontend/inc/gellery')
			<div class="container" style="padding-top: 2%;">
				<div class="col-md-6 col-sm-12 pull-left">
					<div class="bottom-banner-img1">
						<a href="javascript:;"> <img src="{{asset('frontend/images/banners-1.jpg')}}" alt=" banner"> </a>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 pull-right">
					<div class="bottom-banner-img1">
						<a href="javascript:;"> <img src="{{asset('frontend/images/banners-2.jpg')}}" alt=" banner"> </a>
					</div>
				</div>
			</div>
			<div class="container" style="margin-top: 3%;"></div>
			<div class="featured-brand bg-white drop-shadow">
				<div class="intro-brand white bg-color text-center"> <strong class="title18">FEATURED BRANDS</strong> <span>Shop over 2,500 healthy brands!</span> </div>
				<div class="brand-slider4">
					<div class="wrap-item show-navi" data-pagination="false" data-navigation="true" data-itemscustom="[[0,2],[600,3],[980,4],[1200,5]]"> @foreach($brand as $val)
						<div class="item-brand">
							<a href="javascript:;"><img src="{{asset($val['logo'])}}" alt="" /></a>
						</div> @endforeach </div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Content --><a href="javascript:;" class="scroll-top radius6"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
<div class="wishlist-mask">
	<div class="wishlist-popup"> <span class="popup-icon"><i class="fa fa-bullhorn" aria-hidden="true"></i></span>
		<p class="wishlist-alert">"Good shop Product" was added to wishlist</p>
		<div class="wishlist-button"> <a href="javascript:;">Continue Shopping (<span class="wishlist-countdown">10</span>)</a> <a href="javascript:;">Go To Shopping Cart</a> </div>
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
</div> @endsection 
@push('scripts')
<script ty>
$(".cartitemadd-grid1").on('click',function() {
	var id = $(this).data('id');
	var tax = $(".grid1-" + id).find("#tax").val();
	var price = $(".grid1-" + id).find("#price").val();
	var shipping_cost = $(".grid1-" + id).find('#shipping_cost').val();
	var variation = $(".grid1-" + id).find('#variation').val();
	$.ajax({
		type: 'POST',
		method: 'POST',
		url: "{{Route('userhome.add_to_cart')}}",
		data: {
			'id': id,
			'_token': "{{csrf_token()}}",
			'tax': tax,
			'price': price,
			'variation': variation,
			'shipping_cost': shipping_cost,
			'qunatity': 1,
			'product_id': id
		},
		dataType: 'json',
		success: function(data) {
			if(data.status == 200) {
				swal("success", data.msg, "success");
			}
			if(data.status == 412) {
				swal(data.msg);
			}
		}
	});
});
</script> @endpush