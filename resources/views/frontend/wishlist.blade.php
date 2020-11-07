@extends('frontend.layouts.app')
@section('content')
<div class="wrap">
	<section id="content">
		<div class="content-page">
			<div class="container">
				<div class="bread-crumb bg-white border radius6">
					<a href=javascript:;>Home</a> <span class="color">Wislist</span>
				</div>
				<div class="content-cart-checkout woocommerce">
					<h2 class="title30 font-bold text-uppercase">wishlist</h2>
					<form method="post">
						<div class="table-responsive">
							<table class="shop_table cart table">
								<thead>
									<tr>
										<th class="product-remove">Remove</th>
										<th class="product-thumbnail">&nbsp;</th>
										<th class="product-name">Product NAme</th>
										<th class="product-name">Product</th>
										<th class="product-name">price</th>
										<th class="product-name">Add to cart</th>

									</tr>
								</thead>
								<tbody>
									@php 
									$total = 0;
									@endphp
									@foreach($wishlist as $val)
									<tr class="cart_item" id="tr-{{$val->id}}">
										<td class="product-remove">
											<a class="remove remove_wishlist" data-id="{{$val->id}}" href=javascript:;><i class="fa fa-times"></i></a>
										</td>
										
										<td class="product-thumbnail">
											<a href=javascript:;>
											@if(isset($val->product->name))
												{{asset($val->product->name)}}
												@endif
											</a>					
										</td>
										
										<td class="product-thumbnail">
											<a href=javascript:;>
											@if(isset($val->product->photos))
												<img  src="{{asset($val->product->photos)}}" alt=""/>
												@endif
											</a>					
										</td>
										<td class="product-name" data-title="Product">
											@if(isset($val->product->name))<a href=javascript:;>{{$val->product->name}} @endif</a>					
										</td>
										
										<td class="product-price" data-title="Price">
											@if(isset($val->price))€<span class="amount price_amt">{{$val->price}} </span>@endif	

													<input type="hidden" name="price" id="purchase_price" @if(isset($val->product->purchase_price)) value="{{$val->product->purchase_price}}"@endif>

													<input type="hidden" name="shipping_cost" id="shipping_cost" @if(isset($val->product->shipping_cost)) value="{{$val->product->shipping_cost}}"@endif>

													<input type="hidden" name="varitation" id="purchase_price" @if(isset($val->product->varitation)) value="{{$val->product->varitation}}"@endif>

													<input type="hidden" name="tax" id="tax" @if(isset($val->product->tax)) value="{{$val->product->purchase_price}}"@endif>

													<input type="hidden" name="wish_list" id="wishlist_id" @if(isset($val->id)) value="{{$val->id}}"@endif>
										</td>
										<td class="product-price" data-title="Price">
											<a href="javascript:;" data-id="{{$val->id}}" class="btn btn-primary wishlisttocart" name="move_cart">Add to cart</a>					
										</td>

									</tr>
									@endforeach
								</tbody>
							</table>
							<center>{{$wishlist->links()}}</center>
						</div>
					</form>
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
	$('body').on('click',".remove_wishlist",function(){
		var id = $(this).data('id');
		var wishlist_id = $("#wishlist_id").val();
		// $(this).find(".qty_val").html(val);
		$.ajax({
               type:'POST',
               method:'POST',
               url:"{{Route('userhome.remove')}}",
               data:{'id':wishlist_id,'_token':"{{csrf_token()}}"},
               dataType:'json',
               success:function(data) {
               		if(data.status == 200){
               			if(data.count >  5){
               				$("tr-"+id).remove();	
               			}else{
               				location.reload('users/wishlist');
               			}
               		}
               	}
            });
	})


	$(document).on('click',".wishlisttocart",function(){
				var id = $(this).data('id');
				var tax = $("#tax").val();
				var price = $("#price").val();
				var shipping_cost = $('#shipping_cost').val();
				var variation = $('#variation').val();
				var wishlist_id = $("#wishlist_id").val();
			 $.ajax({
               type:'POST',
               method:'POST',
               url:"{{Route('userhome.wishlisttocart')}}",
               data:{'id':id,'_token':"{{csrf_token()}}",'tax':tax,'price':price,'variation':variation,'shipping_cost':shipping_cost,'qunatity':1,'wishlist_id':wishlist_id},
               dataType:'json',
               success:function(data) {
               		if(data.status == 200){
							if(data.count > 1){
               				$('#tr-'+id).remove();
               				location.reload('/users/wishlist?page=1');
               			}
               		}
               		if(data.status == 412){
						swal(data.msg);
               		}
               }
            });						
		});
</script>
@endpush