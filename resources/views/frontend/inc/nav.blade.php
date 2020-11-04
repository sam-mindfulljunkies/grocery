@php 

use App\Http\Controllers\FrontendController;

$new = new FrontendController();
$categories = $new->getCategory();
@endphp
<div id="header">
   <div class="header  black-color">
      <div class="top-header" id="content-desktop">
         <div class="container">
            <div class="row">
               <div class="col-md-4 col-sm-12 col-xs-4">
                  <ul class="top-header-link list-inline-block pull-left">
                     <!-- <li><a href=javascript:; class="white">We guarantee on time delivery, and the best quality!</a></li> -->
                     <li style="padding-left: 17px;"><i class="fa fa-shipping-fast" style="width:3px;"></i></li>
                     <li> <a href=javascript:; class="white" style="color: #f67500;">FREE SHIPPING ON ORDERS €29+ WITHIN GERMANY</a> </li>
                     <!-- <li>QUESTIONS?WRITE US AN <a href="">E-MAIL</a></li> -->
                  </ul>
               </div>
               <div class="col-md-6 col-sm-12 col-xs-4">
                  <!-- Begin Button -->
                  <!--  <span style="margin-top: 3%;float: right;"> QUESTIONS?WRITE US AN <a href="">E-MAIL</a></span> -->
                  <div class="translate" style="margin-top: 3%;float: right;">
                     <a class="translate_no_drop" title="English Translation" href="https://www.certifiedchinesetranslation.com/" > <span class="image_english">English Translation</span></a>
                     <a class="translate_no_drop" title="German Translation" href="https://www.certifiedchinesetranslation.com/German/" ><span class="image_german">German Translation</span></a>
                     <!-- <td width="35"><a class="translate_no_drop" title="Simplified Chinese Translation" href="https://www.certifiedchinesetranslation.com/" ><span class="image_chinese">Chinese Translation</span> </a></td>
                        <td width="35"><a class="translate_no_drop" title="Traditional Chinese Translation" href="https://www.certifiedchinesetranslation.com/" ><span class="image_chinese_tr">Chinese Translation</span> </a></td>
                        <td width="35"><a class="translate_no_drop" title="Spanish Translation" href="https://www.certifiedchinesetranslation.com/Spanish/" ><span class="image_spanish">Spanish Translation</span> </a></td> -->
                     <!--  <td width="35"><a class="translate_no_drop" title="Japanese Translation" href="https://www.certifiedchinesetranslation.com/Japanese/" ><span class="image_japanese">Japanese Translation</span> </a></td>
                        <td width="35"><a class="translate_no_drop" title="French Translation" href="https://www.certifiedchinesetranslation.com/French/" ><span class="image_french">French Translation</span> </a></td>
                        <td width="35"><a class="translate_no_drop" title="Arabic Translation" href="https://www.certifiedchinesetranslation.com/Arabic/" ><span class="image_arabic">Arabic Translation</span> </a></td>
                        <td width="35"><a class="translate_no_drop" title="Greek Translation" href="https://www.certifiedchinesetranslation.com/" ><span class="image_greek">Greek Translation</span> </a></td>
                        <td width="35"><a class="translate_no_drop" title="Italian Translation" href="https://www.certifiedchinesetranslation.com/" ><span class="image_italian">Italian Translation</span> </a></td>
                        <td width="35"><a class="translate_no_drop" title="Korean Translation" href="https://www.certifiedchinesetranslation.com/Korean/" ><span class="image_korean">Korean Translation</span> </a></td>
                        <td width="35"><a class="translate_no_drop" title="Hindi Translation" href="https://www.certifiedchinesetranslation.com/" ><span class="image_hindi">Hindi Translation</span> </a></td>
                        <td width="35"><a class="translate_no_drop" title="Russian Translation" href="https://www.certifiedchinesetranslation.com/" ><span class="image_russian">Russian Translation</span> </a></td>
                        <td width="35"> <a class="translate_no_drop" title="Swedish Translation" href="https://www.certifiedchinesetranslation.com/" ><span class="image_swedish">Swedish Translation</span> </a> </td>
                        <td width="35"><a class="translate_drop" title="Translate" ><span class="image_more">translation</span></a></td> -->
                  </div>
               </div>
               <!-- End Button -->
               <div class="col-md-2 col-sm-12 col-xs-3">
                  <div class="row">
                     <div class="col-md-6 col-sm-12 col-xs-3">
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-3">
                     <ul class="list-inline-block pull-right top-profile">
                        <!-- <li> <a href=javascript:; class="white">Shipping Policy </a> </li>
                           <li> <a href=javascript:; class="white">Wishlist </a> </li>
                           <li> <a href=javascript:; class="white">Checkout</a> </li> -->
                        <li> <a href=javascript:; class="white" style="color: #f67500;"> Login or Register&nbsp;<i class="fa fa-user" aria-hidden="true"></i></a> </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="top-header" id="content-mobile">
         <div class="container">
            <div class="row">
               <div class="col-md-2 col-sm-2 col-xs-3" style="float: right;">
                 
                  <ul class="list-inline-block pull-right top-profile" style="margin-left: -27px;">
                     <!-- <li> <a href=javascript:; class="white">Shipping Policy </a> </li>
                        <li> <a href=javascript:; class="white">Wishlist </a> </li>
                        <li> <a href=javascript:; class="white">Checkout</a> </li> -->
                     <li style="font-size: 10px;"> <a href=javascript:; class="white" style="color: #f67500;"> Login or Register&nbsp;<i class="fa fa-user" aria-hidden="true" style="max-width: 5%;"></i></a> </li>
                  </ul>
               </div>
               <div class="col-md-5 col-sm-3 col-xs-3" style="float: right;">
                  <!-- Begin Button -->
                   <div class="translate" style="margin-top: 17%;">
                     <div class="row">
                        <div style="width: 50%;float: left;">
                           <a class="translate_no_drop" title="English Translation" href="https://www.certifiedchinesetranslation.com/" > <span class="image_english">English Translation</span></a>
                        </div>
                        <div style="width: 50%;float: left;">
                           <a class="translate_no_drop" title="German Translation" href="https://www.certifiedchinesetranslation.com/German/" ><span class="image_german">German Translation</span></a>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- End Button -->

               <div class="col-md-3 col-sm-4 col-xs-3" style="float: right;">
                  <ul class="top-header-link list-inline-block pull-left">
                     <!-- <li><a href=javascript:; class="white">We guarantee on time delivery, and the best quality!</a></li> -->
                     <li style="margin-left: 0px;"><i class="fa fa-shipping-fast" style="width:3px;"></i></li>
                     <li> <a href=javascript:; class="white" style="color: #f67500;">Shipping</a> </li>
                  </ul>
               </div>
               
            </div>
         </div>
      </div>
      <!-- End Top Header -->
      <div class="main-header">
         <div class="container">
            <div class="row" id="content-desktop">
               <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="logo logo2">
                     <a href="javascript:;"><img src="{{asset('frontend/images/rlogo1.png')}}" alt="" style="padding-bottom: 11px;"></a>
                  </div>
               </div>
               <div class="col-md-5 col-sm-4 col-xs-12">
                  <!-- <input type="text" name="" value="Search Your favourite Asian Products...." class="srch"> -->
                  <div class="row">
                     <div class="col-sm-12 col-xs-12 col-md-12">
                        <form class="example" action="/action_page.php">
                           <input type="text" placeholder="Search your product..." name="search">
                           <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                        <!-- <div class="input-group-append">
                           <span class="input-group-text amber lighten-3" id="basic-text1"><i class="fa fa-search text-"
                              aria-hidden="true"></i></span>
                           </div> -->
                     </div>
                  </div>
               </div>
               <div class="col-md-3 col-sm-4 col-xs-12">
                  <div class="mini-cart-box mini-cart2 pull-right">
                     <a class="mini-cart-link" href="{{route('userhome.cart')}}"> <span class="mini-cart-icon"></span> 
                     </a>
                     <!-- <div class="mini-cart-content text-left">
                        <h2 class="title18 color">(2) ITEMS IN MY CART</h2>
                        <div class="list-mini-cart-item">
                           <div class="product-mini-cart table">
                              <div class="product-thumb">
                                     <a href="" class="product-thumb-link"><img alt="" 
                                        src="{{asset('frontend/images/products/fresh-green-round.jpg')}}"></a>
                              </div>
                              <div class="product-info">
                                 <h3 class="product-title"><a href=javascript:;>Fresh Green Round Aubergine</a></h3>
                                 <!-- <div class="product-price"> <ins><span>€400.00</span></ins> <del><span>€520.00</span></del> </div> -->
                              </div>
                           </div>
                           <div class="product-mini-cart table">
                              <div class="product-thumb">
                                 <a href="" class="product-thumb-link"><img alt="" src="{{asset('frontend/images/products/fresh-green-round.jpg')}}"></a>
                              </div>
                              <div class="product-info">
                                 <h3 class="product-title"><a href=javascript:;>Fresh Green Round Aubergine</a></h3>
                                 <!-- <div class="product-price"> <ins><span>€400.00</span></ins> <del><span>€520.00</span></del> </div> -->
                              </div>
                           </div>
                        </div>
                        <!-- <div class="mini-cart-total  clearfix"> <strong class="pull-left title18">TOTAL</strong> <span class="pull-right color title18">€800.00</span> </div> -->
                        <div class="mini-cart-button"> <a class="mini-cart-view shop-button" href=javascript:;>View cart </a> <a class="mini-cart-checkout shop-button" href=javascript:;>Checkout</a> </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row"  id="content-mobile">
               <div class="col-md-4 col-sm-5 col-xs-5">
                  <div class="">
                     <a href="{{Route('userhome')}}"><img src="{{asset('frontend/images/rlogom1.png')}}" alt="" style="padding-bottom: 11px;max-width: none;"></a>
                  </div>
               </div>
               <div class="col-md-5 col-sm-7 col-xs-7">
                  <!-- <input type="text" name="" value="Search Your favourite Asian Products...." class="srch"> -->
                  <div class="mini-cart-box mini-cart2 pull-right">
                     <a class="mini-cart-link" href=""> <span class="mini-cart-icon"></span> 
                     </a>
                     <div class="mini-cart-content text-left">
                        <h2 class="title18 color">(2) ITEMS IN MY CART</h2>
                        <div class="list-mini-cart-item">
                           <div class="product-mini-cart table">
                              <div class="product-thumb">
                                 <a href="" class="product-thumb-link"><img alt="" src="{{asset('frontend/images/products/fresh-green-round.jpg')}}"></a>
                              </div>
                              <div class="product-info">
                                 <h3 class="product-title"><a href=javascript:;>Fresh Green Round Aubergine</a></h3>
                                 <!-- <div class="product-price"> <ins><span>€400.00</span></ins> <del><span>€520.00</span></del> </div> -->
                              </div>
                           </div>
                           <div class="product-mini-cart table">
                              <div class="product-thumb">
                                 <a href="" class="product-thumb-link"><img alt="" src="{{asset('frontend/images/products/fresh-green-round.jpg')}}"></a>
                              </div>
                              <div class="product-info">
                                 <h3 class="product-title"><a href=javascript:;>Fresh Green Round Aubergine</a></h3>
                                 <!-- <div class="product-price"> <ins><span>€400.00</span></ins> <del><span>€520.00</span></del> </div> -->
                              </div>
                           </div>
                        </div>
                        <!-- <div class="mini-cart-total  clearfix"> <strong class="pull-left title18">TOTAL</strong> <span class="pull-right color title18">€800.00</span> </div> -->
                        <div class="mini-cart-button"> <a class="mini-cart-view shop-button" href=javascript:;>View cart </a> <a class="mini-cart-checkout shop-button" href=javascript:;>Checkout</a> </div>
                     </div>
                  </div>
                  
               </div>
            </div>
            <div class="row" id="content-mobile">
               <div class="col-md-3 col-sm-4 col-xs-12">
                  <form class="example" action="/action_page.php">
                           <input type="text" placeholder="Search your product..." name="search">
                           <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
               </div>
            </div>
         </div>
      </div><br>
      <!-- End Main Header -->
      <div class="header-nav header-nav8" >
         <div class="container">
            <nav class="main-nav style2 main-nav8">
               <ul>
                  <li class="current-menu-item"> <a href="{{Route('userhome')}}">Home</a> </li>
                  <li class="menu-item-has-children">
                     <a href="">All Categories</a>
                     <ul class="sub-menu">
                        <li class="menu-item-has-children">
                            @foreach($categories as $val)
                           <a href="{{Route('userhome.filterCat',['id'=>$val->id])}}">{{$val->name}}</a>
                           <ul class="sub-menu">

                           @foreach($val->subcategories as $val1)
                           <li><a href="{{Route('userhome.filterSubcat',['id'=>$val->id])}}">{{$val1->name}}</a></li>
                           @endforeach
                        </ul>
                        @endforeach
                        </li>
                     </ul>
                  </li>
                  <li><a href="javascript:;">Sale</a></li>
                  <li><a href="javascript:;">Brands</a></li>
                  <li><a href="{{Route('userhome.about')}}">About Us</a></li>
                  <li><a href="{{Route('userhome.contact')}}">Contact Us</a></li>
               </ul>
               <a href=javascript:; class="toggle-mobile-menu"><span></span></a>
               <!-- <form class="search-form right-icon search-form8">
                  <div class="submit-form">
                     <input type="submit" value="" /> </div>
                  <input onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" value="Search" type="text"> </form> -->
            </nav>
         </div>
      </div>
      <!-- End Header Nav -->
   </div>
</div>
<!-- End Header -->
<style type="text/css">
   form.example input[type=text] {
   padding: 10px;
   font-size: 17px;
   border: 1px solid grey;
   float: left;
   width: 80%;
   /*background: #f1f1f1;*/
   }
   form.example button {
   float: left;
   width: 20%;
   padding: 10px;
   background: white;
   color: #f67500;
   font-size: 17px;
   border: 1px solid grey;
   border-left: none;
   cursor: pointer;
   }
   form.example button:hover {
   background: #f67500;
   }
   form.example::after {
   content: "";
   clear: both;
   display: table;
   }
</style>