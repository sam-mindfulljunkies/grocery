@php 

use App\Http\Controllers\FrontendController;

$new = new FrontendController();
$categories = $new->getCategory();
@endphp

<!DOCTYPE HTML>
<html lang="en">
   <meta http-equiv="content-type" content="text/php;charset=UTF-8" />
   <head>
      <meta charset="UTF-8">
      <title>Online Indian Grocery Shop in Germany, Netherlands, France &amp; Austria | Online Indian Store</title>
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta name="robots" content="noodp,index,follow" />
      <meta name='revisit-after' content='1 days' />
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700%7cPoppins:400,600,700&amp;display=swap">
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/libs/font-awesome.min.css')}}" />
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/libs/bootstrap.min.css')}}" />
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/libs/bootstrap-theme.min.css')}}" />
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/libs/jquery.fancybox.css')}}" />
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/libs/jquery-ui.min.css')}}" />
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/libs/owl.carousel.css')}}" />
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/libs/owl.transitions.css')}}" />
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/libs/owl.theme.css')}}" />
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/libs/animate.css')}}" />
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/libs/hover.css')}}" />
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/main.css')}}" />
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/theme.css')}}" />
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/responsive.css')}}" />
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/browser.css')}}" />
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/content/theme.css')}}" media="all">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
      <script type="text/javascript">  var translate_src = 'en';</script>
      <script src='https://kit.fontawesome.com/a076d05399.js'></script>
   </head>
   <body class="preload" style="background:#fff">
      <div class="wrap">
      @include('frontend/inc/nav')
          @yield('content')
      @include('frontend/inc/footer');
      <script type="text/javascript" src="{{asset('frontend/js/libs/jquery-3.2.1.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('frontend/js/libs/bootstrap.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('frontend/js/libs/jquery.fancybox.js')}}"></script>
      <!-- <script type="text/javascript" src="{{asset('frontend/js/libs/jquery-ui.min.js')}}"></script> -->
      <script type="text/javascript" src="{{asset('frontend/js/libs/owl.carousel.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('frontend/js/libs/jquery.jcarousellite.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('frontend/js/libs/timecircles.js')}}"></script>
      <script type="text/javascript" src="{{asset('frontend/js/libs/CircularLoader-v1.3.js')}}"></script>
      <script type="text/javascript" src="{{asset('frontend/js/libs/wow.js')}}"></script>
      <script type="text/javascript" src="{{asset('frontend/js/theme.js')}}"></script>
      <!-- Begin Translation Button -->
      <script type="text/javascript"> var translate_src = 'en';</script>
      <script type="text/javascript" src="https://www.certifiedchinesetranslation.com/translate.js"></script>
      <script type="text/javascript" src="{{asset('frontend/content/jquery-3.2.1.min.js.download')}}"></script>
      <script type="text/javascript" src="{{asset('frontend/content/bootstrap.min.js.download')}}"></script>
      <script type="text/javascript" src="content/jquery-ui.min.js"></script>
      <script type="text/javascript" src="{{asset('frontend/content/jquery.jcarousellite.min.js.download')}}"></script>
      <script type="text/javascript" src="{{asset('frontend/content/jquery.elevatezoom.js.download')}}"></script>
      <script type="text/javascript" src="{{asset('frontend/content/theme.js.download')}}"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
      <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<link href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css"/>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" /> -->
  <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

</html>
<style type="text/css">
   #content-desktop {display: block;}
   #content-mobile {display: none;}
   @media screen and (max-width: 768px) {
   #content-desktop {display: none;}
   #content-mobile {display: block;}
   }
   #lst
   {
   list-style: none;
   }
   .main-nav > ul > li.menu-item-has-children > a::after{
      display: none;
   }
   ul.typeahed.dropdown-menu{
    top: 46px !important;
    left: 14px !important;
    display: block !important;
    z-index: 99999 !important;
    width: 356px !important;
}
.dropdown-menu>li>a{
    height:1000px;
}
</style>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
   $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
}); 
   


   var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
   (function(){
   var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
   s1.async=true;
   s1.src='https://embed.tawk.to/5f5a76964704467e89edebe7/default';
   s1.charset='UTF-8';
   s1.setAttribute('crossorigin','*');
   s0.parentNode.insertBefore(s1,s0);
   })();

    $(document).ready(function(){
      $("a.page-link").addClass('inline-block');
      $("a.active").addClass('current-page');
      $("a.current-page").removeClass('active');

    })
</script>
<script type="text/javascript">
//  var route = "{{ url('autocomplete') }}";
     $('#searchall_home').typeahead({
        source: function (term, process) {
        $.get("{{route('userhome.search')}}", { term: term }, function (data) {
                return process(data);
            });
        },
        afterSelect: function (data) {
            console.log(data);
                window.location.replace("/product/detail/"+data.id);
            }
    });
</script>
@stack('scripts')

<!--End of Tawk.to Script-->

