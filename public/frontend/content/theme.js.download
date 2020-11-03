(function($){
"use strict"; // Start of use strict
//Tag Toggle
function toggle_tab(){
	if($('.toggle-tab').length>0){
		$('.toggle-tab').each(function(){
			$(this).find('.item-toggle-tab').first().find('.toggle-tab-content').show();
			$('.toggle-tab-title').on('click',function(){
				$(this).parent().siblings().removeClass('active');
				$(this).parent().toggleClass('active');
				$(this).parents('.toggle-tab').find('.toggle-tab-content').slideUp();
				$(this).next().stop(true,false).slideToggle();
			});
		});
	}
}	
//Popup Wishlist
function popup_wishlist(){
	$('.wishlist-link').on('click',function(event){
		event.preventDefault();
		$('.wishlist-mask').fadeIn();
		var counter = 10;
		var popup;
		popup = setInterval(function() {
			counter--;
			if(counter < 0) {
				clearInterval(popup);
				$('.wishlist-mask').hide();
			} else {
				$(".wishlist-countdown").text(counter.toString());
			}
		}, 1000);
	});
}
//Menu Responsive
function rep_menu(){
	$('.toggle-mobile-menu').on('click',function(event){
		event.preventDefault();
		$(this).parents('.main-nav').toggleClass('active');
	});
	$('.main-nav li.menu-item-has-children>a').on('click',function(event){
		if($(window).width()<768){
			event.preventDefault();
			$(this).next().stop(true,false).slideToggle();
		}
	});
}
//Custom ScrollBar
function custom_scroll(){
	if($('.custom-scroll').length>0){
		$('.custom-scroll').each(function(){
			$(this).mCustomScrollbar({
				scrollButtons:{
					enable:true
				}
			});
		});
	}
}
//Offset Menu
function offset_menu(){
	if($(window).width()>767){
		$('.main-nav .sub-menu').each(function(){
			var wdm = $(window).width();
			var wde = $(this).width();
			var offset = $(this).offset().left;
			var tw = offset+wde;
			if(tw>wdm){
				$(this).addClass('offset-right');
			}
		});
	}else{
		return false;
	}
}
//Fixed Header
function fixed_header(){
	if($('.header-ontop').length>0){
		if($(window).width()>1023){
			var ht = $('#header').height();
			var st = $(window).scrollTop();
			if(st>ht){
				$('.header-ontop').addClass('fixed-ontop');
			}else{
				$('.header-ontop').removeClass('fixed-ontop');
			}
		}else{
			$('.header-ontop').removeClass('fixed-ontop');
		}
	}
} 
//Slider Background
function background(){
	$('.bg-slider .item-slider').each(function(){
		var src=$(this).find('.banner-thumb a img').attr('src');
		$(this).css('background-image','url("'+src+'")');
	});	
}
function animated(){
	$('.banner-slider .owl-item').each(function(){
		var check = $(this).hasClass('active');
		if(check==true){
			$(this).find('.animated').each(function(){
				var anime = $(this).attr('data-animated');
				$(this).addClass(anime);
			});
		}else{
			$(this).find('.animated').each(function(){
				var anime = $(this).attr('data-animated');
				$(this).removeClass(anime);
			});
		}
	});
}
function slick_animated(){
	$('.banner-slider .item-slider').each(function(){
		var check = $(this).hasClass('slick-active');
		if(check==true){
			$(this).find('.animated').each(function(){
				var anime = $(this).attr('data-animated');
				$(this).addClass(anime);
			});
		}else{
			$(this).find('.animated').each(function(){
				var anime = $(this).attr('data-animated');
				$(this).removeClass(anime);
			});
		}
	});
}
//Detail Gallery
function detail_gallery(){
	if($('.wrap-detail-gallery').length>0){
		$('.wrap-detail-gallery').each(function(){
			var data = $(this).find(".carousel").data();
			$(this).find(".carousel").jCarouselLite({
				btnNext: $(this).find(".gallery-control .next"),
				btnPrev: $(this).find(".gallery-control .prev"),
				speed: 800,
				visible:4,
				vertical:data.vertical,
			});
			//Elevate Zoom
			if($(window).width()>1024){
				$('.wrap-detail-gallery').first().find('.mid img').elevateZoom({scrollZoom : true});
			}
			$(this).find(".carousel a").on('click',function(event) {
				event.preventDefault();
				$(this).parents('.wrap-detail-gallery').find(".carousel a").removeClass('active');
				$(this).addClass('active');
				var z_url =  $(this).find('img').attr("src");
				$(this).parents('.wrap-detail-gallery').find(".mid img").attr("src", z_url);
				$('.zoomWindow').css('background-image','url("'+z_url+'")');
			});
		});
	}
}
//Fix Detail Info
function detail_fixed(){
	if($(window).width()>767){
		if($('.fixed-detail-info').length>0){
			var ot = $('.fixed-detail-info').offset().top;
			var sh = $('.fixed-detail-info').height();
			var height = $('.detail-float').map(function (){
				return $(this).height();
			}).get();
			var dh = Math.max.apply(null, height);
			var st = $(window).scrollTop();
			var top = $(window).scrollTop() - ot;
			if(st>ot&&st<ot+sh-dh){
				$('.fixed-detail-info').addClass('onscroll');
				$('.onscroll .detail-float').css('top',top+'px');
			}else if(st<ot){
				$('.detail-float').css('top',0);
			}else{
				$('.fixed-detail-info').removeClass('onscroll');
			}
		}
	}else{
		$('.detail-float').css('top',0);
	}
}
//Document Ready
jQuery(document).ready(function(){
	//Auto Run
	if($('.list-item-deal5').length>0){
		var counter = 0;
		var num = $('.list-item-deal5 .item').length-1;
		/* console.log(num); */
		var timer=setInterval(function(){ 
			counter++;
			var li='li.item'+counter;
			$('li.item').removeClass('active');
			$(li).addClass('active');
			if(counter > num ){
				counter=0;
			}
		}, 2000);
		$('li.item').hover(
			function() {
				clearInterval(timer);
				$('li.item').removeClass('active');
				$(this).addClass('active');
		  }, function() {
				timer=setInterval(function(){ 
				counter++;
				var li='li.item'+counter;
				$('li.item').removeClass('active');
				$(li).addClass('active');
				if(counter > num ){
					counter=0;
			   }
			}, 2000);
		  }
		);
	}
	//Mix Filter
	if($('.product-filter').length>0){
		$('#product-grid-filter').mixItUp();
	}
	//Banner Background
	if($('.banner-background').length>0){
		$('.banner-background').each(function(){
			var bn_src = $(this).find('.image-background').attr('src');
			$(this).css('background-image','url("'+bn_src+'")')
		});
	}
	//Detail Gallery
	detail_gallery();
	//Widget Toggle
	$('.widget-title').on('click',function(){
		$(this).toggleClass('active');
		$(this).next().slideToggle();
	});
	//Filter Default
	$('.filter-default a,.filter-color a').on('click',function(event){
		event.preventDefault();
		$(this).toggleClass('active');
	});
	//Widget Product Category
	$('.widget-product-cat ul li.has-sub-cat>a').on('click',function(event){
		event.preventDefault();
		$(this).next().slideToggle();
	});
	//Shop The Look
	$('.box-hover-dir').each( function() {
		$(this).hoverdir(); 
	});
	//Filter Price
	if($('.range-filter').length>0){
		$( ".range-filter .slider-range" ).slider({
			range: true,
			min: 0,
			max: 700,
			values: [ 50, 500 ],
			slide: function( event, ui ) {
				$( ".range-filter .amount" ).html( "<span class='number'>" + ui.values[ 0 ] + "</span>" + "<span class='separate'> - </span>" + "<span class='number'>" + ui.values[ 1 ] + "</span>" );
			}
		});
		$( ".range-filter .amount" ).html( "<span class='number'>" + $( ".range-filter .slider-range" ).slider( "values", 0 )+ "</span>" + " <span class='separate'> - </span> " + "<span class='number'>" + $( ".range-filter .slider-range" ).slider( "values", 1 ) + "</span>" );
	}
	//Qty Up-Down
	$('.info-qty').each(function(){
		var qtyval = parseInt($(this).find('.qty-val').text(),10);
		$(this).find('.qty-up').on('click',function(event){
			event.preventDefault();
			qtyval=qtyval+1;
			$('.qty-val').text(qtyval);
		});
		$(this).find('.qty-down').on('click',function(event){
			event.preventDefault();
			qtyval=qtyval-1;
			if(qtyval>0){
				$('.qty-val').text(qtyval);
			}else{
				qtyval=0;
				$('.qty-val').text(qtyval);
			}
		});
	});
	//Toggle Tab
	toggle_tab();
	//Menu Responsive 
	rep_menu();
	//Offset Menu
	offset_menu();
	//Fixed Detail
	detail_fixed();
	//Animate
	if($('.wow').length>0){
		new WOW().init();
	}
	//Fancybox
	if($('.fancybox-buttons').length>0){
		$('.fancybox-buttons').fancybox({
			openEffect  : 'none',
			closeEffect : 'none',

			prevEffect : 'none',
			nextEffect : 'none',

			closeBtn  : false,

			helpers : {
				title : {
					type : 'inside'
				},
				buttons	: {}
			},

			afterLoad : function() {
				this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
			}
		});
	}
	//Product Quick View
	if($('.quickview-link').length>0){
		$('.quickview-link').fancybox();	
	}
	//Zoom Thumb
	if($('.quick-view-thumb').length>0){
		$('.quick-view-thumb').fancybox();	
	}
	//Fancybox Media
	$('.fancybox-media').fancybox({
		helpers : {
			media : {}
		}
	})
	//Back To Top
	$('.scroll-top').on('click',function(event){
		event.preventDefault();
		$('html, body').animate({scrollTop:0}, 'slow');
	});
	$('.percentage').each(function(){
		var data = $(this).data();
		// console.log(data);
		$(this).circularloader({
			backgroundColor: "#ffffff",//background colour of inner circle
			fontColor: "#000000",//font color of progress text
			fontSize: "40px",//font size of progress text
			radius: 11,//radius of circle
			progressBarBackground: "#e8e8e8",//background colour of circular progress Bar
			progressBarColor: data.color,//colour of circular progress bar
			progressBarWidth: 3,//progress bar width
			progressPercent: data.value,//progress percentage out of 100
			progressValue:0,//diplay this value instead of percentage
			showText: false,//show progress text or not
			title: "",//show header title for the progress bar
		});
	});
});
//Window Load
jQuery(window).on('load',function(){ 
	//Pre Load
	$('body').removeClass('preload'); 
	//Custom ScrollBar
	custom_scroll();
	//Popup Wishlist
	popup_wishlist();
	//Owl Carousel
	if($('.wrap-item').length>0){
		$('.wrap-item').each(function(){
			var data = $(this).data();
			$(this).owlCarousel({
				addClassActive:true,
				stopOnHover:true,
				itemsCustom:data.itemscustom,
				autoPlay:data.autoplay,
				transitionStyle:data.transition, 
				paginationNumbers:data.paginumber,
				beforeInit:background,
				afterAction:animated,
				navigationText:['<i class="fa fa-caret-left" aria-hidden="true"></i>','<i class="fa fa-caret-right" aria-hidden="true"></i>'],
			});
		});
	}
	//Parallax Slider
	if($('.parallax-slider').length>0){
		$(window).scroll(function() {
			var ot = $('.parallax-slider').offset().top;
			var sh = $('.parallax-slider').height();
			var st = $(window).scrollTop();
			var top = (($(window).scrollTop() - ot) * 0.4) + 'px';
			if(st>ot&&st<ot+sh){
				$('.parallax-slider .item-slider').css({
					'background-position': 'center ' + top
				});
			}
			if(st<ot){
				$('.parallax-slider .item-slider').css({
					'background-position': 'center 0'
				});
			}else{
				return false;
			}
		});
	}
	if($('.hours-countdown').length>0){
		$(".hours-countdown").TimeCircles({
			fg_width: 0.05,
			bg_width: 0,
			text_size: 0,
			circle_bg_color: "transparent",
			time: {
				Days: {
					show: false,
					text: "days",
					color: "#fff"
				},
				Hours: {
					show: true,
					text: "hours",
					color: "#fff"
				},
				Minutes: {
					show: true,
					text: "minutes",
					color: "#fff"
				},
				Seconds: {
					show: true,
					text: "seconds",
					color: "#fff"
				}
			}
		}); 
	}
	if($('.days-countdown').length>0){
		$(".days-countdown").TimeCircles({
			fg_width: 0.05,
			bg_width: 0,
			text_size: 0,
			circle_bg_color: "transparent",
			time: {
				Days: {
					show: true,
					text: "days",
					color: "#fff"
				},
				Hours: {
					show: true,
					text: "hours",
					color: "#fff"
				},
				Minutes: {
					show: true,
					text: "minutes",
					color: "#fff"
				},
				Seconds: {
					show: true,
					text: "seconds",
					color: "#fff"
				}
			}
		}); 
	}
});
//Window Resize
jQuery(window).on('resize',function(){
	offset_menu();
	fixed_header();
	detail_gallery();
	detail_fixed();
});
//Window Scroll
jQuery(window).on('scroll',function(){
	//Scroll Top
	if($(this).scrollTop()>$(this).height()){
		$('.scroll-top').addClass('active');
	}else{
		$('.scroll-top').removeClass('active');
	}
	//Fixed Header
	fixed_header();
	detail_fixed();
});
})(jQuery); // End of use strict