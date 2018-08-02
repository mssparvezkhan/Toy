
<div class="col-md-3">
        	@include('partials.home-hot-products-panel')
            <div class="newsletter">
            	<h2 class="title">newsletter</h2>
                <p>Phasellus rhoncus quis nunc vitae dapibus. Integer vehicula urna ut nisl ullamcorper.</p>
                <div class="newsletter_inner">
                	<input type="text" class="input_text" placeholder="Enter Your Email Address">
                    <button><i class="fa fa-paper-plane"></i></button>
                </div>
            </div>
            <div class="testinomial">
            	<div id="slider" class="carousel slide" data-ride="carousel">
								
									<ol class="carousel-indicators">
										<li data-target="#slider" data-slide-to="0" class="active"></li>
										<li data-target="#slider" data-slide-to="1"></li>
										<li data-target="#slider" data-slide-to="2"></li>
									</ol>
									
									<div class="carousel-inner">
										<div class="item active">
                                        	<img src="{{ asset('public/new/images/user1.jpg') }}">
                                            <h3>yahdi romelo</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes</p>
										</div>
										
										<div class="item">
                                        	<img src="{{ asset('public/new/images/user2.jpg') }}">
                                            <h3>yahdi romelo</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes</p>
										</div>

										
										<div class="item">
                                        	<img src="{{ asset('public/new/images/user3.jpg') }}">
                                            <h3>jhon romelo</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes</p>
										</div>
									</div>  <!-- carousel-inner -->
									
								</div>
            </div>
        </div>