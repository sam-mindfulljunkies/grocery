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
					<a href="javascript:;">Home</a> <a href="javascript:;">Indian</a> <span class="color"><!-- Festival Specialities --></span>
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
										<a href="{{Route('userhome.filterCat',['id'=>$val->id])}}"><span>{{$val->name}}</span></a>
										<div class="cat-mega-menu cat-mega-style1">
											<div class="row">
												<div class="col-md-4 col-sm-4">
													<div class="list-cat-mega-menu">
														<h2 class="title-cat-mega-menu">{{$val->name}}</h2>
														<ul class="list-none">
														@foreach($val->subcategories as $val1)
															<li><a href="{{Route('userhome.filterSubcat',['id'=>$val1->id])}}">{{$val1->name}}</a></li>
														@endforeach
														</ul>
													</div>
													
												</div>
												<div class="col-md-4 col-sm-4">
													<div class="banner-adv fade-out-in">
														<a href="javascript:;" class="adv-thumb-link"><img alt="" src="images/home/home4/cat-mega-thumb.png"></a>
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
										@if(Session::has('error'))
										{{Session::get('error')}}
										@endif
									<div class="row">
										@if(!isset($products))
										<h3 style="margin-left:300px; ">No Products available</h3>
										@endif
										@foreach($products as $val)
										<div class="col-md-4 col-sm-6 col-xs-6 tr-{{$val->id}}">
											<div class="item-product1 style-border">
												<div class="product-thumb">
													<a href="{{Route('userhome.product_details',['id'=>$val->id])}}"><img alt="{{$val->name}}" src="{{asset($val['photos'])}}"></a>
												</div>
												<div class="product-info">
													<h3 class="product-title"><a href="javascript:;">{{$val->name}}</a></h3>
													<div class="product-price">
														<ins><span>€{{$val->unit_price}}</span></ins>
													</div>
													<input type="hidden" id="product_id" name="product_id" @if(isset($val->id)) value="{{$val->id}}"@endif>

													<input type="hidden" name="tax"  id="tax" @if(isset($val->tax))value="{{$val->tax}}" @endif>

													<input type="hidden" id="variation" name="variation" @if(isset($val->variation))value="{{$val->variation}}" @endif>

													<input type="hidden" id="price" name="price" @if(isset($val->purchase_price)) value="{{$val->purchase_price}}" @endif>


													<input type="hidden" id="shipping_cost" name="shipping_cost" @if(isset($val->shipping_cost)) value="{{$val->shipping_cost}}" @endif>


													<div class="product-extra-link">
														<a href="javascript:;" class="wishlist-link wishlistadd" data-id="{{$val->id}}"><i class="fa fa-heart" aria-hidden="true"></i><span>Wishlist</span></a>
														<a href="javascript:;" class="addcart-link cartitemadd" data-id="{{$val->id}}"><i class="fa fa-shopping-basket" aria-hidden="true" ></i><span>Add to cart</span></a>
														<!-- <a href="javascript:;" class="compare-link"><i class="fa fa-stumbleupon" aria-hidden="true"></i><span>Compare</span></a> -->
													</div>
												</div>
											</div>
										</div>
										@endforeach
										
									</div>
								</div>
								<div class="pagi-nav-bar text-center"><!-- 
									<a href="javascript:;" class="shop-button style2 btn-small prev-page"><i class="fa fa-caret-left" aria-hidden="true"></i></a> -->
									<!-- <a href="javascript:;" class=""> -->{{$products->links()}}<!-- </a> -->
									<!-- <a href="javascript:;" class="shop-button style2 btn-small next-page"><i class="fa fa-caret-right" aria-hidden="true"></i></a> -->
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
	
	 <a href="javascript:;" class="scroll-top radius6"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
	  <!-- <div class="wishlist-mask">
		<div class="wishlist-popup"> <span class="popup-icon"><i class="fa fa-bullhorn" aria-hidden="true"></i></span>
			<p class="wishlist-alert">Please wait while we are adding product to your wish listg</p>
			<div class="wishlist-button"> <a href="javascript:;">Continue Shopping (<span class="wishlist-countdown">10</span>)</a> <a href="{{Route('userhome.cart')}}">Go To Shopping Cart</a> </div>
		</div> -->
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
@push('scripts')
<script type="text/javascript">
		$(document).on('click',".wishlistadd",function(){	
			var id = $(this).data('id');
			 $.ajax({
               type:'POST',
               method:'POST',
               url:"{{Route('userhome.add_to_wishlist')}}",
               data:{'id':id,'_token':"{{csrf_token()}}"},
               dataType:'json',
               success:function(data) {
               		if(data.status == 200){
               			swal("success", data.msg, "success");			
               		}
               		if(data.status == 412){
						swal(data.msg);
               		}
               }
            });
		});

		$(document).on('click',".cartitemadd",function(){
				var id = $(this).data('id');
				var tax = $(".tr-"+id).find("#tax").val();
				var price = $(".tr-"+id).find("#price").val();
				var shipping_cost = $(".tr-"+id).find('#shipping_cost').val();
				var variation = $(".tr-"+id).find('#variation').val();
			 $.ajax({
               type:'POST',
               method:'POST',
               url:"{{Route('userhome.add_to_cart')}}",
               data:{'id':id,'_token':"{{csrf_token()}}",'tax':tax,'price':price,'variation':variation,'shipping_cost':shipping_cost,'qunatity':1,'product_id':id },
               dataType:'json',
               success:function(data) {
               		if(data.status == 200){
               			swal("success", data.msg, "success");			
               		}
               		if(data.status == 412){
						swal(data.msg);
               		}
               }
            });						
		});

		
</script>
@endpush