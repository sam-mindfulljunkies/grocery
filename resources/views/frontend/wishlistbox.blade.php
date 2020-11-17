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
											@if(isset($val->product->thumbnail_img))
												<img  src="{{asset($val->product->thumbnail_img)}}" alt=""/>
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

													<input type="hidden" name="varitation" id="varitation" @if(isset($val->product->varitation)) value="{{$val->product->varitation}}"@endif>

													<input type="hidden" name="tax" id="tax" @if(isset($val->product->tax)) value="{{$val->product->purchase_price}}"@endif>

													<input type="hidden" name="wish_list" id="wishlist_id" @if(isset($val->id)) value="{{$val->id}}"@endif>

													<input type="hidden" name="wish_list" id="product_id" @if(isset($val->product->id)) value="{{$val->product->id}}"@endif>
										</td>
										<td class="product-price" data-title="Price">
											<a href="javascript:;" data-id="{{$val->id}}" class="btn btn-primary wishlisttocart" name="move_cart">Add to cart</a>					
										</td>

									</tr>
									@endforeach
								</tbody>