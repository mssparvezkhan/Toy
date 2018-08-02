    <div class="col-md-9">
        <div class="addvertigment_outer">
            <div class="col-md-4 col-sm-12 fashion-bg">
                <div class="fashion-wrap light-bg">
                    <div class="box-container height-445">
                        <div class="box-img-wrap img-right">
                            <img alt=" " src="{{ asset('public/new/images/fashion-1.png')}}">
                        </div>
    
                        <div class="col-md-6 text-center pull-left">
                            <div class="fashion-new">
                                <div class="pink-new-tag new-tag">
                                    <a href="#" class="funky-font">New</a>
                                </div>
                            </div>
                            <div class="title-wrap">
                                <h2 class="section-title with-divider">
                                    <span>
                                        <span class="funky-font pink-tag">Child </span> 
                                        <span class="italic-font">Accessories &amp; Wear</span>
                                    </span>
                                </h2>  
                                <h3 class="sub-title-small">Upto <span class="bold-font pink-color"> 80% </span> Off</h3>
                                <a href="{{url($categories[0]['slug'])}}" class="pink-color title-link space-top-35"> Shop Now <i class="fa fa-caret-right"></i> </a>
                            </div>                                                                        
                        </div>
                        <div class="fashion-icon">
                            <img src="{{ asset('public/new/images/icon-1.png') }}" alt=" ">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-12 fashion-bg">
                <div class="fashion-wrap light-bg">
                    <div class="box-container height-195">
                        <div class="box-img-wrap img-right">
                            <img alt=" " src="{{ asset('public/new/images/fashion-2.png')}}">
                        </div>
                        <div class="col-md-6 col-sm-5 pull-left">                                    
                            <div class="title-wrap">
                                <h2 class="section-title">
                                    <span>
                                        <span class="funky-font blue-tag">Shoes </span> 
                                        <span class="italic-font">For Childrens</span>
                                    </span>
                                </h2>  
                                <h3 class="sub-title-small font-20">Stylish Footwares</h3>
                                <hr class="dash-divider">
                                <a href="{{url($categories[1]['slug'])}}" class="blue-btn btn"> Shop Now!<i class="fa fa-caret-right"></i></a>
                            </div>                                                                        
                        </div>
                        <div class="fashion-icon">
                            <img src="{{ asset('public/new/images/icon-2.png') }}" alt=" ">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 fashion-bg">
                <div class="fashion-wrap light-bg">   
                    <div class="box-container height-195">
                        <div class="box-img-wrap img-right">
                            <img alt=" " src="{{ asset('public/new/images/fashion-3.png')}}">
                        </div>
                        <div class="first-smile">
                            <a href="{{url($categories[2]['slug'])}}" class="section-title">
                                <span>
                                    <span class="funky-font green-tag">First </span> 
                                    <span class="italic-font">Smile</span>
                                </span>
                            </a>                                                                                                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 fashion-bg">
                <div class="fashion-wrap height-205 light-bg">
                    <div class="box-container height-195">
                        <div class="box-img-wrap img-right">
                            <img alt=" " src="{{ asset('public/new/images/fashion-4.png')}}">
                        </div>
                        <div class="col-md-6 col-sm-6  text-center pull-left">                                    
                            <div class="title-wrap">
                                <h2 class="section-title with-divider">
                                    <span>
                                        <span class="sub-title-small font-20">Clothes </span> 
                                        <span class="italic-font">For Baby</span>
                                    </span>
                                </h2>   
                                <a href="{{url($categories[3]['slug'])}}" class="pink-color title-link"> Shop Now <i class="fa fa-caret-right"></i> </a>
                            </div>                                                                        
                        </div>
                        <div class="fashion-icon">
                            <img src="{{ asset('public/new/images/icon-3.png') }}" alt=" ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
        <div class="about_outer">
            <div class="col-md-6">
                <img src="{{ asset('public/new/images/Meow_Slush_4cups_Poster.jpg') }}">
            </div>
            <div class="col-md-6">
                <h2>who we are ?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat veniam aut perferendis eos quidem ratione consequuntur quod dolorum magnam inventore delectus dolor possimus! Non animi doloribus rem quos vero deleniti veniam rerum architecto hic earum. Quidem debitis quia ducimus temporibus mollitia culpa cupiditate odit et repellat fugit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat veniam aut perferendis eos quidem ratione consequuntur quod dolorum magnam inventore delectus dolor possimus! Non animi doloribus rem quos vero deleniti veniam rerum architecto hic earum. Quidem debitis quia ducimus temporibus</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat veniam aut perferendis eos quidem ratione consequuntur quod dolorum magnam inventore delectus dolor possimus! Non animi doloribus rem quos vero deleniti veniam rerum architecto hic earum. </p>
            </div>
        </div>
                
                
        @include('partials.home-product-panel')
    </div>