<footer class="footer">
                <div class="bg2-with-mask space-35">
                    <span class="black-mask color-mask"></span>
                    <div class="container theme-container">
                        <div class="row space-top-35">
                            <aside class="col-md-3 col-sm-6">
                                <div class="footer-widget space-bottom-35">
                                    <h3 class="footer-widget-title"> <i class="fa fa-phone-square "></i>  Contact Us </h3>                                    
                                    <p class="textwidget"> Phasellus placerat rutrum tristique. In hacse platea dictumst.  </p>
                                    <div class="address">
                                        <ul>
                                            <li> <i class="fa fa-phone "></i> <span> +61 3 8376 6284 </span> </li>
                                            <li> <i class="fa fa-envelope "></i> <a href="mailto:baby.kidsstore@example.com"> <span> company@example.com </span> </a></li>
                                            <li> <i class="fa fa-map-marker "></i> <span>121 King St </span> <span>Melbourne VIC 3000 Australi.</span> </li>                                       
                                        </ul>
                                    </div>
                                    <div class="social-icon">
                                        <ul>
                                            <li> <a href="#"> <i class="fa fa-facebook-square"></i> </a> </li>
                                            <li> <a href="#"> <i class="fa fa-twitter-square"></i>  </a></li>
                                            <li> <a href="#"> <i class="fa fa-pinterest-square"></i>  </a> </li>
                                            <li> <a href="#"> <i class="fa fa-google-plus-square"></i>  </a> </li>                                            
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                            <aside class="col-md-3 col-sm-6">
                                <div class="footer-widget space-bottom-35">
                                    <h3 class="footer-widget-title"> <i class="fa fa-user "></i> My Account  </h3>                                    
                                    <ul>
                                        <li> <a href="{{ url('myaccount') }}"> <i class="fa fa-angle-right "></i>  My Account</a> </li>
                                        <li> <a href="#"> <i class="fa fa-angle-right "></i>  view cart</a></li>
                                        <li> <a href="#"> <i class="fa fa-angle-right "></i>  my wishlist</a> </li>
                                        
                                    </ul>
                                </div>
                            </aside>
                            <aside class="col-md-3 col-sm-6">
                                <div class="footer-widget space-bottom-35">
                                    <h3 class="footer-widget-title"> <i class="fa fa-cog "></i> why us </h3>                                    
                                    <ul>
                                        <li> <a href="#"> <i class="fa fa-angle-right "></i> warranty</a> </li>
                                        <li> <a href="#"> <i class="fa fa-angle-right "></i> leasing  </a></li>
                                        <li> <a href="#"> <i class="fa fa-angle-right "></i> Secure Shopping </a> </li>
                                        <li> <a href="#"> <i class="fa fa-angle-right "></i> loyalty points  </a> </li>
                                        <li> <a href="#"> <i class="fa fa-angle-right "></i> FAQ </a> </li>
                                    </ul>
                                </div>
                            </aside>
                            <aside class="col-md-3 col-sm-6">
                                <div class="footer-widget space-bottom-35">
                                    <h3 class="footer-widget-title"> <i class="fa fa-info-circle"></i> Information </h3>                                    
                                    <div class="recent-post">
                                        <ul>
                                            <li> <a href="#"> <i class="fa fa-angle-right"></i> About Us</a> </li>
                                            <li> <a href="#"> <i class="fa fa-angle-right"></i> Delivery Information </a></li>
                                            <li> <a href="#"> <i class="fa fa-angle-right"></i> Privacy  &amp; Policy </a> </li>
                                            <li> <a href="#"> <i class="fa fa-angle-right"></i> Terms &amp; Conditions  </a> </li>
                                            <li> <a href="#"> <i class="fa fa-angle-right"></i> Manufactures </a> </li>
                                            <li> <a href="#"> <i class="fa fa-angle-right"></i> Suppliers </a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
                <div class="bg2-with-mask space-20 footer-meta">
                    <span class="black-mask color-mask"></span>                    
                    <div class="container theme-container">
                        <div class="row">
                            <aside class="col-md-6 col-sm-6 copy-rights">
                                <p> © Copyright 2018 by  All right reserved</p>
                            </aside>
                            <aside class="col-md-6 col-sm-6 payment-options">
                                <ul>
                                    <li> <a href="#"> <i class="fa fa-cc "></i> </a> </li>
                                    <li> <a href="#"> <i class="fa fa-cc-visa"></i> </a> </li>
                                    <li> <a href="#"> <i class="fa fa-cc-mastercard"></i> </a> </li>    
                                    <li> <a href="#"> <i class="fa fa-cc-paypal"></i> </a> </li>
                                    <li> <a href="#"> <i class="fa fa-cc-stripe"></i> </a> </li>
                                    <li> <a href="#"> <i class="fa fa-cc-amex"></i> </a> </li>
                                    <li> <a href="#"> <i class="fa fa-cc-discover"></i> </a> </li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>

            </footer>


</body>




<script src="{{ asset('public/new/js/jquery.min.js') }}"></script>
<script src="{{ asset('public/new/js/bootstrap.min.js') }}"></script>
   <script>
			$(document).ready(function() {   
            var sideslider = $('[data-toggle=collapse-side]');
            var sel = sideslider.attr('data-target');
            var sel2 = sideslider.attr('data-target-2');
            sideslider.click(function(event){
                $(sel).toggleClass('in');
                $(sel2).toggleClass('out');
            });
        });
		</script>
<script src="{{ asset('public/new/js/responsiveslides.min.js') }}"></script>

<script>
// You can also use "$(window).load(function() {"
$(function () {

// Slideshow 1
$("#slider1").responsiveSlides({
	maxwidth: 800,
	speed: 800,
	 auto: true,
	  pager: true
       
});

});
</script>
   
		<script type="text/javascript" src="{{ asset('public/new/js/jqueryElevateZoom.js')}}"></script>
        <script src="{{ asset('public/new/js/ubislider.min612e.js')}}"></script>

        <script type="text/javascript">
    	    
		    $('#slider4').ubislider({
		        arrowsToggle: true,
		        type: 'ecommerce',
		        hideArrows: true,
		        autoSlideOnLastClick: true,
		        modalOnClick: true,
		        onTopImageChange: function(){
		        	$('#imageSlider4 img').elevateZoom();
		        }
		    }); 
		    
        </script>

<script src="{{ asset('public/new/js/easy-responsive-tabs.js')}}"></script>
<script>
$(document).ready(function () {
    $('#horizontalTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion           
        width: 'auto', //auto or any width like 600px
        fit: true,   // 100% fit in a container
        closed: 'accordion', // Start closed if in accordion view
        activate: function(event) { // Callback function if tab is switched
            var $tab = $(this);
            var $info = $('#tabInfo');
            var $name = $('span', $info);
            $name.text($tab.text());
            $info.show();
        }
    });

});
</script>
<script>
    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.in").each(function(){
        	$(this).siblings(".panel-heading").find(".glyphicon").addClass("glyphicon-minus").removeClass("glyphicon-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        	$(this).parent().find(".glyphicon").removeClass("glyphicon-plus").addClass("glyphicon-minus");
        }).on('hide.bs.collapse', function(){
        	$(this).parent().find(".glyphicon").removeClass("glyphicon-minus").addClass("glyphicon-plus");
        });
    });
</script>
<script type="text/javascript">
        
    var url= "{{ url('/') }}";

</script>
<script src="{{ asset('public/assets/js/common.js') }}"></script>
<script>
    function view_cart(){
    //alert();
        //$('.cart-dropdown').toggle();
    }
</script>
</html>