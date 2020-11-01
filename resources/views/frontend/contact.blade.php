@extends('frontend.layouts.app')
@section('content')
	<div id="content">

		<div class="content-page">
			<div class="container">
				<div class="bread-crumb bg-white border radius6">
					<a href="#">Home</a> <span class="color">Contact Us</span>
				</div>
				<div class="contact-page-info blockquote">
							<div class="row">
								<div class="col-md-5 col-sm-12 col-xs-12">
									<div class="contact-box">
										<span class="color"><i class="fa fa-institution"></i></span>
										<label class="title16 color">ADDRESS:</label>
										<p class="desc">TNI Tradenet International Handels GmbH <br>Akshey Sharma<br> Randstr. 1-522525 Hamburg</p>
									</div>
								</div>
								<div class="col-md-4 col-sm-7 col-xs-12">
									<div class="contact-box">
										<span class="color"><i class="fa fa-phone"></i></span>
										<ul class="list-inline-block">
											<li>
												<label class="title16 color">PHONES:</label>
											</li>
											<li>
												<span>0162-1357047</span>
												<span>040 41347887</span>
											</li>
										</ul>
									</div>
									<div class="contact-box">
										<span class="color"><i class="fa fa-fax"></i></span>
										<ul class="list-inline-block">
											<li>
												<label class="title16 color">FAX:</label>
											</li>
											<li>
												<span>040 52014094</span>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-3 col-sm-5 col-xs-12">
									<div class="contact-box">
										<span class="color"><i class="fa fa-envelope-open"></i></span>
										<label class="title16 color">E-mail:</label>
										<p class="desc"><a href="mailto:info@tnigmbh.com">info@tnigmbh.com</a></p>
									</div>
								</div>
							</div>
						</div>
				<div class="main-content-page">
					<div class="content-contact-page">
					   <!-- End Contact Info -->
						<div class="contact-form-faq">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="contact-form">
										<h2 class="title18">Contact Form</h2>
										<form>
											<input onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" value="Your name *" type="text">
											<input onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" value="Your e-mail address *" type="text">
											<input onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" value="Subject *" type="text">
											<textarea onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" rows="7">Message *</textarea>
											<input type="submit" value="send" class="shop-button" />
											<input type="reset" value="Clear" class="shop-button style2" />
										</form>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2368.4743203844255!2d9.926819015550958!3d53.58499788002968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b185e1f9814461%3A0x60b0c63654ad35cc!2sTNI%20Transnet%20International%20Handels%20GmbH!5e0!3m2!1sen!2sin!4v1597977735414!5m2!1sen!2sin" width="100%" height="355" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
	
	 <a href="#" class="scroll-top radius6"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
	  <div class="wishlist-mask">
		<div class="wishlist-popup"> <span class="popup-icon"><i class="fa fa-bullhorn" aria-hidden="true"></i></span>
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