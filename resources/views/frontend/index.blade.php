@extends('frontend.layouts.app')

@section('content')
      <div id="content">
            <div class="container">
               <div class="banner-slider banner-slider3">
                  <div class="wrap-item" data-pagination="true" data-autoplay="false" data-transition="fade" data-navigation="true" data-itemscustom="[[0,1]]">
                     @foreach($banner as $val)
                     <div class="item-slider item-slider3">
                        <div class="banner-thumb">
                           <a href="#"><img src="{{asset($val['photo'])}}" alt="" /></a>
                        </div>
                        <div class="banner-info text-center white animated" data-animated="bounceIn">
                           <h2 class="title60 light-font inline-block"><span>collection</span></h2>
                           <h2 class="title60"><span>fashion spring</span></h2>
                           <a href="#" class="shop-button title18">Shop now</a> 
                        </div>
                     </div>
                     @endforeach
                     <!-- <div class="item-slider item-slider3">
                        <div class="banner-thumb">
                           <a href="#"><img src="{{asset('frontend/images/slider-2.jpg')}}" alt="" /></a>
                        </div>
                        <div class="banner-info text-center white animated" data-animated="bounceIn">
                           <h2 class="title60 light-font inline-block"><span>Shipping</span></h2>
                           <h2 class="title60"><span>good shop</span></h2>
                           <a href="#" class="shop-button title18">Shop now</a> 
                        </div>
                     </div>
                     <div class="item-slider item-slider3">
                        <div class="banner-thumb">
                           <a href="#"><img src="{{asset('frontend/images/slider-3.jpg')}}" alt="" /></a>
                        </div>
                        <div class="banner-info text-center white animated" data-animated="bounceIn">
                           <h2 class="title60 light-font inline-block"><span>Mega Sale</span></h2>
                           <h2 class="title60"><span>up to 70% off</span></h2>
                           <a href="#" class="shop-button title18">Shop now</a> 
                        </div>
                     </div>
                     <div class="item-slider item-slider3">
                        <div class="banner-thumb">
                           <a href="#"><img src="{{asset('frontend/images/slider-4.jpg')}}" alt="" /></a>
                        </div>
                        <div class="banner-info text-center white animated" data-animated="bounceIn">
                           <h2 class="title60 light-font inline-block"><span>Mega Sale</span></h2>
                           <h2 class="title60"><span>up to 70% off</span></h2>
                           <a href="#" class="shop-button title18">Shop now</a> 
                        </div>
                     </div> -->
                  </div>
               </div>
               <!-- <div class="our-features-box" id="content-desktop">
                  <div class="container pb-40">
                     <ul>
                        <li>
                           <div class="feature-box need-help color-black">
                              <div class="icon-truck"></div>
                              <div class="content">Monday Same Day Delivery in Hamburg</div>
                           </div>
                        </li>
                        <li>
                           <div class="feature-box free-shipping color-black">
                              <div class="icon-support"></div>
                              <div class="content">Free Shipping On Order Over €34.99</div>
                           </div>
                        </li>
                        <li>
                           <div class="feature-box money-back color-black">
                              <div class="icon-money"></div>
                              <div class="content mt-10">Secure Payment</div>
                           </div>
                        </li>
                        <li class="last">
                           <div class="feature-box return-policy color-black">
                              <div class="icon-return"></div>
                              <div class="content mt-10">Customer Support</div>
                           </div>
                        </li>
                     </ul>
                  </div>
                  </div>
                  <div class="container" id="content-mobile">
                  
                     <ul class="row" id="lst">
                        <li class="col-sm-12 col-xs-12">
                           <div class="feature-box need-help1 color-black">
                              <div class="icon-truck"></div>
                              <div class="content">Monday Same Day Delivery in Hamburg</div>
                           </div>
                        </li>
                     </ul>
                     <ul class="row">
                        <li class="col-sm-12 col-xs-12" id="lst">
                           <div class="feature-box free-shipping1 color-black">
                              <div class="icon-support"></div>
                              <div class="content">Free Shipping On Order Over €34.99</div>
                           </div>
                        </li>
                     </ul>
                     <ul class="row">
                        <li class="col-sm-12 col-xs-12" id="lst">
                           <div class="feature-box money-back1 color-black">
                              <div class="icon-money"></div>
                              <div class="content mt-10">Secure Payment</div>
                           </div>
                        </li>
                     </ul>
                     <ul class="row">
                        <li class="col-sm-12 col-xs-12" id="lst">
                           <div class="feature-box return-policy1 color-black">
                              <div class="icon-return"></div>
                              <div class="content mt-10">Customer Support</div>
                           </div>
                        </li>
                     </ul>
                  
                  </div> -->
            </div>
            <!-- <div class="container">
               <div class="banner-top1 bg-white radius6 drop-shadow">
                  <div class="row">
                     <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="banner-thumb1 banner-adv zoom-image">
                           <a href="#" class="adv-thumb-link"><img class="radius6" src="{{asset('frontend/images/welcome.jpg')}}" alt=""></a>
                        </div>
                     </div>
                     <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="banner-info1">
                           <h2 class="title30 title-underline"><span>WE ARE THE BEST!</span></h2>
                           <p class="desc">Grocery is the fastest leading Online Supermarket. We are selling more than 12000 products with over 1000 brands. You will find almost everything in our inventory which you are looking for. We have Best range Grocery's, Beverages, Personal care products and Many more which you require in day to day life. Choose the best available products with the best quality in the lowest price from extensive range of options in all category. We promise you on time delivery with best quality. Our motto is, "Make Our Customers Always Happy With Our Best Services". We completely sell our genuine products at fair values. We firmly believe that customers should get right quality products for what they are paying.</p> <a href="#" class="shop-button">Read more</a> </div>
                     </div>
                  </div>
               </div>
               </div> -->
            <!-- <div class="collection3 border-top pt-40">
               <div class="container">
                  <div class="col-md-3 col-sm-12 col-xs-12">
                     <div class="item-adv6">
                        <div class="banner-adv zoom-out">
                           <a href="#" class="adv-thumb-link"> <img src="{{asset('frontend/images/rice-&-flour.jpg')}}" class="img-fluid" alt=""> <img src="{{asset('frontend/images/rice-&-flour.jpg')}}" class="img-fluid" alt=""> </a>
                           <div class="adv-info6 bg-color"> <a href="#">Rice & Flour</a> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-12 col-xs-12">
                     <div class="item-adv6">
                        <div class="banner-adv zoom-out">
                           <a href="#" class="adv-thumb-link"> <img src="{{asset('frontend/images/spices.jpg')}}" class="img-fluid" alt=""> <img src="{{asset('frontend/images/spices.jpg')}}" class="img-fluid" alt=""> </a>
                           <div class="adv-info6 bg-color"> <a href="#">Spices</a> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-12 col-xs-12">
                     <div class="item-adv6">
                        <div class="banner-adv zoom-out">
                           <a href="#" class="adv-thumb-link"> <img src="{{asset('frontend/images/ready-to-eat.jpg')}}" class="img-fluid" alt=""> <img src="{{asset('frontend/images/ready-to-eat.jpg')}}" class="img-fluid" alt=""> </a>
                           <div class="adv-info6 bg-color"> <a href="#">Ready to Eat</a> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-12 col-xs-12">
                     <div class="item-adv6">
                        <div class="banner-adv zoom-out">
                           <a href="#" class="adv-thumb-link"> <img src="{{asset('frontend/images/snacks.jpg')}}" class="img-fluid" alt=""> <img src="{{asset('frontend/images/snacks.jpg')}}" class="img-fluid" alt=""> </a>
                           <div class="adv-info6 bg-color"> <a href="#">Snacks</a> </div>
                        </div>
                     </div>
                  </div>
               </div>
               </div> -->
            <div class="container">
               <div class="row">
                  <div class="row">
                     <div class="col-md-9">
                        <!-- <h3>
                           New Products
                           </h3> -->
                        <h2 class="title30 title-box5 text-left"><span>New Products</span></h2>
                     </div>
                     <div class="col-md-3">
                        <!-- Controls -->
                        <div class="controls pull-right">
                           <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example"
                              data-slide="prev"></a>&nbsp;<a class="right fa fa-chevron-right btn btn-success" href="#carousel-example"
                              data-slide="next"></a>
                        </div>
                     </div>
                     <a class="title30 title-underline" href="{{Route('home.productlist')}}" id="content-desktop" style="float: right;font-size: 22px;margin-top: 3%;">View More</a>
                     <a class="title30 title-underline" href="{{Route('home.productlist')}}" id="content-mobile" style="float: left;font-size: 13px;margin-top: 3%;margin-left: 3%;">View More</a>
                  </div>
                  <div id="carousel-example" class="carousel slide" data-ride="carousel">
                     <!-- Wrapper for slides -->
                     <div class="carousel-inner">
                        <div class="item active">
                           <div class="row" id="content-desktop">
                              @foreach($product as $val)
                              <div class="col-sm-3 col-xs-3">
                                 <div class="item-product text-center">
                                    <div class="product-thumb"> <img alt="{{$val['name']}}" src="{{asset($val['photos'])}}"> </div>
                                    <div class="product-info">
                                       <h3 class="product-title"><a href="">{{$val['name']}}</a></h3>
                                       <div class="product-price"> <ins><span>{{$val['unit_price']}}</span></ins> </div>
                                       <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                                    </div>
                                 </div>
                              </div>
                              @endforeach
                           </div>
                            <!--  <div class="row" id="content-mobile">
                               <div class="col-sm-6 col-xs-6">
                                 <div class="item-product text-center">
                                    <div class="product-thumb"> <img alt="Hamdard Rooh Afza" src="{{asset('frontend/images/products/hamdard-rooh.jpg')}}"> </div>
                                    <div class="product-info">
                                       <h3 class="product-title"><a href="">Hamdard Rooh Afza 800 ML</a></h3>
                                       <div class="product-price"> <ins><span>€2,99</span></ins> </div>
                                       <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-6 col-xs-6">
                                 <div class="item-product text-center">
                                    <div class="product-thumb"> <img alt="Hamdard Rooh Afza" src="{{asset('frontend/images/products/trs-mustard-seeds.jpg')}}"> </div>
                                    <div class="product-info">
                                       <h3 class="product-title"><a href="">Nagchampa Agarbati - Blue </a></h3>
                                       <div class="product-price"> <ins><span>€1,20</span></ins> </div>
                                       <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                                    </div>
                                 </div>
                              </div> -->
                              <!-- <div class="col-sm-4 col-xs-4">
                                 <div class="item-product text-center">
                                    <div class="product-thumb"> <img alt="Hamdard Rooh Afza" src="{{asset('frontend/images/products/ayurveda-indian-paneer.jpg')}}"> </div>
                                    <div class="product-info">
                                       <h3 class="product-title"><a href="">Ayurveda Indian Paneer 250GM</a></h3>
                                       <div class="product-price"> <ins><span>€2,99</span></ins> </div>
                                       <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                                    </div>
                                 </div>
                              </div>
                               <div class="col-sm-3 col-xs-3">
                                 <div class="item-product text-center">
                                    <div class="product-thumb"> <img alt="Hamdard Rooh Afza" src="{{asset('frontend/images/products/maggi-masala-noodles.jpg')}}"> </div>
                                    <div class="product-info">
                                       <h3 class="product-title"><a href="">Maggi Noodles Single Pack</a></h3>
                                       <div class="product-price"> <ins><span>€2,99</span></ins> </div>
                                       <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                                    </div>
                                 </div>
                               </div>
                           </div> -->
                        <!-- </div>
                        <div class="item">
                           <div class="row" id="content-desktop">
                              <div class="col-sm-3 col-xs-3">
                                 <div class="item-product text-center">
                                    <div class="product-thumb"> <img alt="Hamdard Rooh Afza" src="{{asset('frontend/images/products/annam-sona-masoori-rice.jpg')}}"> </div>
                                    <div class="product-info">
                                       <h3 class="product-title"><a href="">Annam Sona Masuri Rice 5KG</a></h3>
                                       <div class="product-price"> <ins><span>€2,99</span></ins> </div>
                                       <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-3 col-xs-3">
                                 <div class="item-product text-center">
                                    <div class="product-thumb"> <img alt="Hamdard Rooh Afza" src="{{asset('frontend/images/products/trs-toor-dal-plain.jpg')}}"> </div>
                                    <div class="product-info">
                                       <h3 class="product-title"><a href="">TRS Toor Dal Plain 2KG</a></h3>
                                       <div class="product-price"> <ins><span>€2,99</span></ins> </div>
                                       <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-3 col-xs-3">
                                 <div class="item-product text-center">
                                    <div class="product-thumb"> <img alt="Hamdard Rooh Afza" src="{{asset('frontend/images/products/trs-chana-dal.jpg')}}"> </div>
                                    <div class="product-info">
                                       <h3 class="product-title"><a href="">TRS Chana Dal 500GM</a></h3>
                                       <div class="product-price"> <ins><span>€2,99</span></ins> </div>
                                       <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-3 col-xs-3">
                                 <div class="item-product text-center">
                                    <div class="product-thumb"> <img alt="Hamdard Rooh Afza" src="{{asset('frontend/images/products/annam-sona-masoori-rice.jpg')}}"> </div>
                                    <div class="product-info">
                                       <h3 class="product-title"><a href="">Annam Sona Masuri Rice 5KG</a></h3>
                                       <div class="product-price"> <ins><span>€2,99</span></ins> </div>
                                       <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row" id="content-mobile">
                              <div class="col-sm-6 col-xs-6">
                                 <div class="item-product text-center">
                                    <div class="product-thumb"> <img alt="Hamdard Rooh Afza" src="{{asset('frontend/images/products/annam-sona-masoori-rice.jpg')}}"> </div>
                                    <div class="product-info">
                                       <h3 class="product-title"><a href="">Annam Sona Masuri Rice 5KG</a></h3>
                                       <div class="product-price"> <ins><span>€2,99</span></ins> </div>
                                       <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-6 col-xs-6">
                                 <div class="item-product text-center">
                                    <div class="product-thumb"> <img alt="Hamdard Rooh Afza" src="{{asset('frontend/images/products/trs-toor-dal-plain.jpg')}}"> </div>
                                    <div class="product-info">
                                       <h3 class="product-title"><a href="">TRS Toor Dal Plain 2KG</a></h3>
                                       <div class="product-price"> <ins><span>€2,99</span></ins> </div>
                                       <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                                    </div>
                                 </div>
                              </div>
                               <div class="col-sm-4 col-xs-4">
                                 <div class="item-product text-center">
                                    <div class="product-thumb"> <img alt="Hamdard Rooh Afza" src="{{asset('frontend/images/products/trs-chana-dal.jpg')}}"> </div>
                                    <div class="product-info">
                                       <h3 class="product-title"><a href="">TRS Chana Dal 500GM</a></h3>
                                       <div class="product-price"> <ins><span>€2,99</span></ins> </div>
                                       <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                                    </div>
                                 </div>
                              </div>
                               <div class="col-sm-3 col-xs-3">
                                 <div class="item-product text-center">
                                    <div class="product-thumb"> <img alt="Hamdard Rooh Afza" src="{{asset('frontend/images/products/annam-sona-masoori-rice.jpg')}}"> </div>
                                    <div class="product-info">
                                       <h3 class="product-title"><a href="">Annam Sona Masuri Rice 5KG</a></h3>
                                       <div class="product-price"> <ins><span>€2,99</span></ins> </div>
                                       <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                                    </div>
                                 </div>
                              </div>
                           </div> 
                        </div> -->
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
                        <h2 class="title30 title-box5 text-left"><span>Special offer</span></h2>
                     </div>
                     <div class="col-md-3">
                        <!-- Controls -->
                        <div class="controls pull-right">
                           <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example1"
                              data-slide="prev"></a>&nbsp;<a class="right fa fa-chevron-right btn btn-success" href="#carousel-example1"
                              data-slide="next"></a>
                        </div>
                     </div>
                     <a class="title30 title-underline" href="{{Route('home.productlist')}}" id="content-desktop" style="float: right;font-size: 22px;margin-top: 3%;">View More</a>
                     <a class="title30 title-underline" href="{{Route('home.productlist')}}" id="content-mobile" style="float: left;font-size: 13px;margin-top: 3%;margin-left: 3%;">View More</a>
                  </div>
                  <div id="carousel-example1" class="carousel slide" data-ride="carousel">
                     <!-- Wrapper for slides -->
                     <div class="carousel-inner">
                        <div class="item active">
                           <div class="row " id="content-desktop">
                              @foreach($product as $vals)
                              <div class="col-sm-3 col-xs-3">
                                 <div class="item-product text-center">
                                    <div class="product-thumb"> <img alt="{{$vals['name']}}" src="{{asset($vals['photos'])}}"> </div>
                                    <div class="product-info">
                                       <h3 class="product-title"><a href="">{{$vals['name']}}</a></h3>
                                       <div class="product-price"> <ins><span>{{$vals['price']}}</span></ins> </div>
                                       <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                                    </div>
                                 </div>
                              </div>
                              @endforeach
                              <!-- <div class="col-sm-3 col-xs-3">
                                 <div class="item-product text-center">
                                    <div class="product-thumb"> <img alt="Hamdard Rooh Afza" src="{{asset('frontend/images/products/trs-mustard-seeds.jpg')}}"> </div>
                                    <div class="product-info">
                                       <h3 class="product-title"><a href="">Nagchampa Agarbati - Blue </a></h3>
                                       <div class="product-price"> <ins><span>€1,20</span></ins> </div>
                                       <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                                    </div>
                                 </div>
                              </div> -->
                              <!-- <div class="col-sm-3 col-xs-3">
                                 <div class="item-product text-center">
                                    <div class="product-thumb"> <img alt="Hamdard Rooh Afza" src="{{asset('frontend/images/products/ayurveda-indian-paneer.jpg')}}"> </div>
                                    <div class="product-info">
                                       <h3 class="product-title"><a href="">Ayurveda Indian Paneer 250GM</a></h3>
                                       <div class="product-price"> <ins><span>€2,99</span></ins> </div>
                                       <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-3 col-xs-3">
                                 <div class="item-product text-center">
                                    <div class="product-thumb"> <img alt="Hamdard Rooh Afza" src="{{asset('frontend/images/products/maggi-masala-noodles.jpg')}}"> </div>
                                    <div class="product-info">
                                       <h3 class="product-title"><a href="">Maggi Noodles Single Pack</a></h3>
                                       <div class="product-price"> <ins><span>€2,99</span></ins> </div>
                                       <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                                    </div>
                                 </div>
                              </div> -->
                           </div>
                           <!-- <div class="row" id="content-mobile">
                              <div class="col-sm-6 col-xs-6">
                                 <div class="item-product text-center">
                                    <div class="product-thumb"> <img alt="Hamdard Rooh Afza" src="{{asset('frontend/images/products/hamdard-rooh.jpg')}}"> </div>
                                    <div class="product-info">
                                       <h3 class="product-title"><a href="">Hamdard Rooh Afza 800 ML</a></h3>
                                       <div class="product-price"> <ins><span>€2,99</span></ins> </div>
                                       <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-6 col-xs-6">
                                 <div class="item-product text-center">
                                    <div class="product-thumb"> <img alt="Hamdard Rooh Afza" src="{{asset('frontend/images/products/trs-mustard-seeds.jpg')}}"> </div>
                                    <div class="product-info">
                                       <h3 class="product-title"><a href="">Nagchampa Agarbati - Blue </a></h3>
                                       <div class="product-price"> <ins><span>€1,20</span></ins> </div>
                                       <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- <div class="col-sm-4 col-xs-4">
                                 <div class="item-product text-center">
                                    <div class="product-thumb"> <img alt="Hamdard Rooh Afza" src="{{asset('frontend/images/products/ayurveda-indian-paneer.jpg')}}"> </div>
                                    <div class="product-info">
                                       <h3 class="product-title"><a href="">Ayurveda Indian Paneer 250GM</a></h3>
                                       <div class="product-price"> <ins><span>€2,99</span></ins> </div>
                                       <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                                    </div>
                                 </div>
                              </div> -->
                             <!--  <div class="col-sm-3 col-xs-3">
                                 <div class="item-product text-center">
                                    <div class="product-thumb"> <img alt="Hamdard Rooh Afza" src="{{asset('frontend/images/products/maggi-masala-noodles.jpg')}}"> </div>
                                    <div class="product-info">
                                       <h3 class="product-title"><a href="">Maggi Noodles Single Pack</a></h3>
                                       <div class="product-price"> <ins><span>€2,99</span></ins> </div>
                                       <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                                    </div>
                                 </div>
                              </div> -->
                           <!-- </div> -->
                        </div>
                       <!--  <div class="item">
                           <div class="row" id="content-desktop">
                              <div class="col-sm-3 col-xs-3">
                                 <div class="item-product text-center">
                                    <div class="product-thumb"> <img alt="Hamdard Rooh Afza" src="{{asset('frontend/images/products/annam-sona-masoori-rice.jpg')}}"> </div>
                                    <div class="product-info">
                                       <h3 class="product-title"><a href="">Annam Sona Masuri Rice 5KG</a></h3>
                                       <div class="product-price"> <ins><span>€2,99</span></ins> </div>
                                       <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-3 col-xs-3">
                                 <div class="item-product text-center">
                                    <div class="product-thumb"> <img alt="Hamdard Rooh Afza" src="{{asset('frontend/images/products/trs-toor-dal-plain.jpg')}}"> </div>
                                    <div class="product-info">
                                       <h3 class="product-title"><a href="">TRS Toor Dal Plain 2KG</a></h3>
                                       <div class="product-price"> <ins><span>€2,99</span></ins> </div>
                                       <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-3 col-xs-3">
                                 <div class="item-product text-center">
                                    <div class="product-thumb"> <img alt="Hamdard Rooh Afza" src="{{asset('frontend/images/products/trs-chana-dal.jpg')}}"> </div>
                                    <div class="product-info">
                                       <h3 class="product-title"><a href="">TRS Chana Dal 500GM</a></h3>
                                       <div class="product-price"> <ins><span>€2,99</span></ins> </div>
                                       <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-3 col-xs-3">
                                 <div class="item-product text-center">
                                    <div class="product-thumb"> <img alt="Hamdard Rooh Afza" src="{{asset('frontend/images/products/annam-sona-masoori-rice.jpg')}}"> </div>
                                    <div class="product-info">
                                       <h3 class="product-title"><a href="">Annam Sona Masuri Rice 5KG</a></h3>
                                       <div class="product-price"> <ins><span>€2,99</span></ins> </div>
                                       <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row" id="content-mobile">
                              <div class="col-sm-6 col-xs-6">
                                 <div class="item-product text-center">
                                    <div class="product-thumb"> <img alt="Hamdard Rooh Afza" src="{{asset('frontend/images/products/annam-sona-masoori-rice.jpg')}}"> </div>
                                    <div class="product-info">
                                       <h3 class="product-title"><a href="">Annam Sona Masuri Rice 5KG</a></h3>
                                       <div class="product-price"> <ins><span>€2,99</span></ins> </div>
                                       <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-6 col-xs-6">
                                 <div class="item-product text-center">
                                    <div class="product-thumb"> <img alt="Hamdard Rooh Afza" src="{{asset('frontend/images/products/trs-toor-dal-plain.jpg')}}"> </div>
                                    <div class="product-info">
                                       <h3 class="product-title"><a href="">TRS Toor Dal Plain 2KG</a></h3>
                                       <div class="product-price"> <ins><span>€2,99</span></ins> </div>
                                       <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- <div class="col-sm-4 col-xs-4">
                                 <div class="item-product text-center">
                                    <div class="product-thumb"> <img alt="Hamdard Rooh Afza" src="{{asset('frontend/images/products/trs-chana-dal.jpg')}}"> </div>
                                    <div class="product-info">
                                       <h3 class="product-title"><a href="">TRS Chana Dal 500GM</a></h3>
                                       <div class="product-price"> <ins><span>€2,99</span></ins> </div>
                                       <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                                    </div>
                                 </div>
                              </div> -->
                              <!-- <div class="col-sm-3 col-xs-3">
                                 <div class="item-product text-center">
                                    <div class="product-thumb"> <img alt="Hamdard Rooh Afza" src="{{asset('frontend/images/products/annam-sona-masoori-rice.jpg')}}"> </div>
                                    <div class="product-info">
                                       <h3 class="product-title"><a href="">Annam Sona Masuri Rice 5KG</a></h3>
                                       <div class="product-price"> <ins><span>€2,99</span></ins> </div>
                                       <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                                    </div>
                                 </div>
                              </div> -->
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
            </div><br>
            @include('frontend/inc/gellery')
            <div class="container" style="padding-top: 2%;">
               <div class="col-md-6 col-sm-12 pull-left">
                  <div class="bottom-banner-img1">
                     <a href="#"> <img src="{{asset('frontend/images/banners-1.jpg')}}" alt=" banner"> </a>
                  </div>
               </div>
               <div class="col-md-6 col-sm-12 pull-right">
                  <div class="bottom-banner-img1">
                     <a href="#"> <img src="{{asset('frontend/images/banners-2.jpg')}}" alt=" banner"> </a>
                  </div>
               </div>
            </div>
            <!--  <div class="container pt-50">
               <div class="featured-product5">
                  <h2 class="title30 title-box5 text-left"><span>Featured</span></h2>
                  <div class="product-slider5">
                     <div class="wrap-item show-navi" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1],[560,2],[768,3],[1200,4]]">
                        <div class="item-product text-center">
                           <div class="product-thumb"> <img alt="Hamdard Rooh Afza" src="{{asset('frontend/images/products/trs-mustard-seeds.jpg')}}"> </div>
                           <div class="product-info">
                              <h3 class="product-title"><a href="">Nagchampa Agarbati - Blue </a></h3>
                              <div class="product-price"> <ins><span>€1,20</span></ins> </div>
                              <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                           </div>
                        </div>
                        <div class="item-product text-center">
                           <div class="product-thumb"> <img alt="Hamdard Rooh Afza" src="{{asset('frontend/images/products/annam-ponni-boiled-rice.jpg')}}"> </div>
                           <div class="product-info">
                              <h3 class="product-title"><a href="">Annam Ponni Boiled Rice 1KG</a></h3>
                              <div class="product-price"> <ins><span>€2,99</span></ins> </div>
                              <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                           </div>
                        </div>
                        <div class="item-product text-center">
                           <div class="product-thumb"> <img alt="Hamdard Rooh Afza" src="{{asset('frontend/images/products/wagh-bakri-premium.jpg')}}"> </div>
                           <div class="product-info">
                              <h3 class="product-title"><a href="">Wagh Bakri Premium Tea 500GM</a></h3>
                              <div class="product-price"> <ins><span>€2,99</span></ins> </div>
                              <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                           </div>
                        </div>
                        <div class="item-product text-center">
                           <div class="product-thumb"> <img alt="Hamdard Rooh Afza" src="{{asset('frontend/images/products/shalamar-basmati-rice.jpg')}}"> </div>
                           <div class="product-info">
                              <h3 class="product-title"><a href="">Shalamar Extra Long Basmati Rice 5KG</a></h3>
                              <div class="product-price"> <ins><span>€2,99</span></ins> </div>
                              <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                           </div>
                        </div>
                        <div class="item-product text-center">
                           <div class="product-thumb"> <img alt="Hamdard Rooh Afza" src="{{asset('frontend/images/products/fresh-green-round.jpg')}}"> </div>
                           <div class="product-info">
                              <h3 class="product-title"><a href="">Fresh Green Round Aubergine 250GM</a></h3>
                              <div class="product-price"> <ins><span>€2,99</span></ins> </div>
                              <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                           </div>
                        </div>
                        <div class="item-product text-center">
                           <div class="product-thumb"> <img alt="Hamdard Rooh Afza" src="{{asset('frontend/images/products/periyar-matta-rice.jpg')}}"> </div>
                           <div class="product-info">
                              <h3 class="product-title"><a href="">Periyar Matta Rice 10KG</a></h3>
                              <div class="product-price"> <ins><span>€2,99</span></ins> </div>
                              <div class="product-extra-link style2"> <a href="#" class="addcart-link">Add to cart</a> </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               </div> -->
            <div class="container" style="margin-top: 3%;">
               <div class="featured-brand bg-white drop-shadow">
                  <div class="intro-brand white bg-color text-center"> <strong class="title18">FEATURED BRANDS</strong> <span>Shop over 2,500 healthy brands!</span> </div>
                  <div class="brand-slider4">
                     <div class="wrap-item show-navi" data-pagination="false" data-navigation="true" data-itemscustom="[[0,2],[600,3],[980,4],[1200,5]]">
                        @foreach($brand as $val)
                        <div class="item-brand">
                           <a href="#"><img src="{{asset($val['logo'])}}" alt="" /></a>
                        </div>
                        @endforeach
                        <!-- <div class="item-brand">
                           <a href="#"><img src="{{asset('frontend/images/logo-2.jpg')}}" alt="" /></a>
                        </div>
                        <div class="item-brand">
                           <a href="#"><img src="{{asset('frontend/images/logo-3.jpg')}}" alt="" /></a>
                        </div>
                        <div class="item-brand">
                           <a href="#"><img src="{{asset('frontend/images/logo-4.jpg')}}" alt="" /></a>
                        </div>
                        <div class="item-brand">
                           <a href="#"><img src="{{asset('frontend/images/logo-5.jpg')}}" alt="" /></a>
                        </div>
                        <div class="item-brand">
                           <a href="#"><img src="{{asset('frontend/images/logo-6.jpg')}}" alt="" /></a>
                        </div>
                        <div class="item-brand">
                           <a href="#"><img src="{{asset('frontend/images/logo-7.jpg')}}" alt="" /></a>
                        </div>
                        <div class="item-brand">
                           <a href="#"><img src="{{asset('frontend/images/logo-8.jpg')}}" alt="" /></a>
                        </div>
                        <div class="item-brand">
                           <a href="#"><img src="{{asset('frontend/images/logo-9.jpg')}}" alt="" /></a>
                        </div>
                        <div class="item-brand">
                           <a href="#"><img src="{{asset('frontend/images/logo-10.jpg')}}" alt="" /></a>
                        </div> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End Content -->
      <a href="#" class="scroll-top radius6"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
      <div class="wishlist-mask">
         <div class="wishlist-popup">
            <span class="popup-icon"><i class="fa fa-bullhorn" aria-hidden="true"></i></span>
            <p class="wishlist-alert">"Good shop Product" was added to wishlist</p>
            <div class="wishlist-button"> <a href="#">Continue Shopping (<span class="wishlist-countdown">10</span>)</a> <a href="#">Go To Shopping Cart</a> </div>
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
      <!-- End Preload -->
      </div>
      @endsection