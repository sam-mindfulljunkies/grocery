@extends('frontend.layouts.app')
@section('content')
<div class="wrap" id="replaced">
@include('frontend.productbox')	
</div>
@endsection

@push('scripts')
<script type="text/javascript">
	
$("body").on('click',"#wishlistadd",function(){	
	var id = "{{$product->id}}";
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

$(document).on('click',"#cartitemadd",function(){
	var qty = $(".qunatity_value").html();
		var id = "{{$product->id}}";
		var tax = "{{$product->tax}}";
		var price = $("#purchase_pricesss").val();
		var shipping_cost = "{{$product->shipping_cost}}";
		var variation = "{{$product->variation}}";
		
		$.ajax({
		type:'POST',
		method:'POST',
		url:"{{Route('userhome.add_to_cart')}}",
		data:{'id':id,'_token':"{{csrf_token()}}",'tax':tax,'price':price,'variation':variation,'shipping_cost':shipping_cost,'qunatity':qty,'product_id':id},
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

$(document).on('click',".choose_size",function(){
var product_id = $(this).data("id");
var size = $(this).data("val");

			$.ajax({
               type:'POST',
               method:'POST',
               url:"{{Route('size_change')}}",
               data:{'id':product_id,'_token':"{{csrf_token()}}",'size':size},
               success:function(data) {
				$("#replaced").html(data);
			   }
			})

})
</script>
@endpush