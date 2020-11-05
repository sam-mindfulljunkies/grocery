@extends('frontend.layouts.app')
@section('content')
<div class="wrap">
	<section id="content">
		<div class="content-page">
			<div class="container">
				<div class="bread-crumb bg-white border radius6">
					<a href=javascript:;>Home</a> <span class="color">Cart</span>
				</div>
				<div class="content-cart-checkout woocommerce">
					<h2 class="title30 font-bold text-uppercase">Cart</h2>
					<form method="post">
						<div class="table-responsive">
							<table class="shop_table cart table">
								<thead>
									<tr>
										<th class="product-remove">&nbsp;</th>
										<th class="product-thumbnail">&nbsp;</th>
										<th class="product-name">Product</th>
										<th class="product-price">Price</th>
										<th class="product-quantity">Quantity</th>
										<th class="product-subtotal">Total</th>
									</tr>
								</thead>
								<tbody>
									@php 
									$total = 0;
									@endphp
									@foreach($carts as $val)
									<tr class="cart_item" id="tr-{{$val->id}}">
										<td class="product-remove">
											<a class="remove remove_cart" data-id="{{$val->id}}" href=javascript:;><i class="fa fa-times"></i></a>
										</td>
										<td class="product-thumbnail">
											<a href=javascript:;><img  src="{{asset($val->product->photos)}}" alt=""/></a>					
										</td>
										<td class="product-name" data-title="Product">
											@if(isset($val->product->name))<a href=javascript:;>{{$val->product->name}} @endif</a>					
										</td>
										<td class="product-price" data-title="Price">
											@if(isset($val->price))€<span class="amount price_amt">{{$val->price}} </span>@endif					
										</td>
										<td class="product-quantity" data-title="Quantity">
											<div class="detail-qty info-qty border radius6 text-center">
												<a href=javascript:void(0); id="down_qty" data-id="{{$val->id}}" class="down_qty qty-{{$val->id}}"><i class="fa fa-angle-down" aria-hidden="true"></i></a>

												@if(isset($val->quantity))
												<span class="qty_val" data-id="{{$val->id}}"> {{$val->quantity}} </span>@endif
												<a href=javascript:; id="up-qty"  class="up_qty" data-id="{{$val->id}}"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
											</div>		
										</td>
										<td class="product-subtotal" data-title="Total">
											@if(isset($val->price))<span class="amount total_amt">€{{($val->price + $val->product_shipping_cost) * $val->quantity}} </span>@endif					
										</td>
											@php 
											$total += ($val->price + $val->product_shipping_cost) * $val->quantity;
											@endphp
									</tr>
									@endforeach

									<!-- <tr class="cart_item">
										<td class="product-remove">
											<a class="remove" href=javascript:;><i class="fa fa-times"></i></a>					
										</td>
										<td class="product-thumbnail">
											<a href=javascript:;><img  src="content/goodshop_bakery_12.jpg" alt=""/></a>					
										</td>
										<td class="product-name" data-title="Product">
											<a href=javascript:;>Theme Fusion item name</a>					
										</td>
										<td class="product-price" data-title="Price">
											<span class="amount">$19.00</span>					
										</td>
										<td class="product-quantity" data-title="Quantity">
											<div class="detail-qty info-qty border radius6 text-center">
												<a href=javascript:; class="qty-down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
												<span class="qty_val">2</span>
												<a href=javascript:; class="qty-up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
											</div>			
										</td>
										<td class="product-subtotal" data-title="Total">
											<span class="amount">$38.00</span>					
										</td>
									</tr> -->
									<tr>
										<td class="actions" colspan="6">
											<div class="coupon">
												<label for="coupon_code">Coupon:</label> 
												<input type="text" placeholder="Coupon code" value="" id="coupon_code" class="input-text" name="coupon_code"> 
												<input type="submit" value="Apply Coupon" name="apply_coupon" class="button bg-color">
											</div>
											<input type="submit" value="Update Cart" name="update_cart" class="button bg-color">			
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</form>
					<div class="cart-collaterals">
						<div class="cart_totals ">
							<h2>Cart Totals</h2>
							<div class="table-responsive">
								<table class="table">
									<tbody>
										<tr class="cart-subtotal">
											<th>Subtotal</th>
											<td><strong class="amount grand-total">€{{$total}}</strong></td>
										</tr>
										<tr class="shipping">
											<th>Shipping</th>
											<td>
												<ul class="list-none" id="shipping_method">
													<li>
														<input type="radio" class="shipping_method" checked="checked" value="free_shipping" id="shipping_method_0_free_shipping" data-index="0" name="shipping_method[0]">
														<label for="shipping_method_0_free_shipping">Free Shipping</label>
													</li>
													<li>
														<input type="radio" class="shipping_method" value="local_delivery" id="shipping_method_0_local_delivery" data-index="0" name="shipping_method[0]">
														<label for="shipping_method_0_local_delivery">Local Delivery (Free)</label>
													</li>
													<li>
														<input type="radio" class="shipping_method" value="local_pickup" id="shipping_method_0_local_pickup" data-index="0" name="shipping_method[0]">
														<label for="shipping_method_0_local_pickup">Local Pickup (Free)</label>
													</li>
												</ul>
											</td>
										</tr>
										<tr class="order-total">
											<th>Total</th>
											<td><strong><span class="amount">$106.00</span></strong> </td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="wc-proceed-to-checkout">
								<a class="checkout-button button alt wc-forward bg-color" href="{{Route('userhome.checkout_product')}}">Proceed to Checkout</a>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<!-- End Content Pages -->
	</section>
	<!-- End Content -->
	<a href=javascript:; class="scroll-top radius6"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
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
	$("body").on('click',".up_qty",function(){
		var val = $(".qty_val").html();
		var cart_id = $(this).data('id');
		var price = $(".price_amt").html();
		val =  parseInt(val)+1;
		$(this).find(".qty_val").html(val);
		$(this).find(".total_amt").html(parseInt(val) * parseInt(price));
		$.ajax({
               type:'POST',
               method:'POST',
               url:"{{Route('userhome.update_cart')}}",
               data:{'id':cart_id,'_token':"{{csrf_token()}}",'quantity':parseInt(val)},
               dataType:'json',
               success:function(data) {
               }
            });
	})

	$('body').on('click',".down_qty",function(){
		var val = $(".qty_val").html();
		var price = $(".price_amt").html();
		var cart_id = $(this).data('id');
		if(parseInt(val) < parseInt(1)){
			val = 0;
			$(".qty_val").html(val);
			$(this).parent('tr').remove();
			return false;
		}
		val =  parseInt(val) - 1;
		$(this).find(".qty_val").html(val);
		$(this).find(".total_amt").html(parseInt(val) * parseInt(price));
		$.ajax({
               type:'POST',
               method:'POST',
               url:"{{Route('userhome.update_cart')}}",
               data:{'id':cart_id,'_token':"{{csrf_token()}}",'quantity':val},
               dataType:'json',
               success:function(data) {
               		if(data.status == 200){
				
              	 }
              	}
            });
	})

	$('body').on('click',".remove_cart",function(){
		var id = $(this).data('id');
		var cart_id = $(this).data('id');
		// $(this).find(".qty_val").html(val);
		$.ajax({
               type:'POST',
               method:'POST',
               url:"{{Route('userhome.remove_cart')}}",
               data:{'id':cart_id,'_token':"{{csrf_token()}}"},
               dataType:'json',
               success:function(data) {
               		if(data.status == 200){
               			$('#tr-'+data.id).remove();
               		}
               	}
            });
	})
</script>
@endpush