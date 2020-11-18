@extends('frontend.layouts.app')
@section('content')
<div class="wrap">
	@include('frontend.cartbox')
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
		var cart_id = $(this).data('id');
		var val = $("#tr-"+cart_id).find(".qty_val").html();
		// alert(cart_id);
		var price = $(".price_amt").html();
		val =  parseInt(val)+1;
		// $(this).find(".qty_val").html(val);
		// $(this).find(".total_amt").html(parseInt(val) * parseInt(price));
		$.ajax({
               type:'POST',
               method:'POST',
               url:"{{Route('userhome.update_cart')}}",
               data:{'id':cart_id,'_token':"{{csrf_token()}}",'quantity':parseInt(val)},
               success:function(data) {
               	$(".wrap").html(data);
               }
            });
	})

	$('body').on('click',".down_qty",function(){
		var cart_id = $(this).data('id');
		var val = $("#tr-"+cart_id).find(".qty_val").html();
		var price = $(".price_amt").html();
		if(parseInt(val) < parseInt(1)){
			val = 0;
			$(".qty_val").html(val);
			$(this).parent('tr').remove();
			return false;
		}
		val =  parseInt(val) - 1;
		// $(this).find(".qty_val").html(val);
		// $(this).find(".total_amt").html(parseInt(val) * parseInt(price));
		$.ajax({
               type:'POST',
               method:'POST',
               url:"{{Route('userhome.update_cart')}}",
               data:{'id':cart_id,'_token':"{{csrf_token()}}",'quantity':val},
               success:function(data) {
               	$(".wrap").html(data);
              	}
            });
	})

	$('body').on('click',".remove_cart",function(){
		var cart_id = $(this).data('id');
		$.ajax({
               type:'POST',
               method:'POST',
               url:"{{Route('userhome.remove_cart')}}",
               data:{'id':cart_id,'_token':"{{csrf_token()}}"},
               success:function(data) {
               		$(".wrap").html(data);
               	}
            });
	})
</script>
@endpush