    <div class="col-md-9">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
                    </a>
            </div>
        @endif
        <div class="col-md-6">
            <div class="ubislider-image-container" data-ubislider="#slider4" id="imageSlider4"></div>
            <div id="slider4" class="ubislider">
                <a class="arrow prev"></a>
                <a class="arrow next"></a>
                <ul id="gal1" class="ubislider-inner">
                    <li> 
                        <a> 
                            <img class="product-v-img" src="{{ asset('storage/uploads/products/'. $product->photo) }}">
                        </a> 
                    </li>
                    @if(!empty($product->additional_images))
                        @foreach(json_decode($product->additional_images) as $rows)                                        
                            <li> 
                                <a> 
                                    <img class="product-v-img" src="{{ asset('storage/uploads/products/'. $rows) }}"> 
                                </a> 
                            </li>
                        @endforeach                                        
                     @endif
                </ul>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="product_detail_outer">
                <h2>{{$product->product_title}}</h2>
                <div class="price_outer">
                    <span>£ {{$product->price-($product->price*$product->discount/100)}}</span>
                    <span> <strike>£ {{$product->price}}</strike> </span>
                </div>
                <div class="product-availability">
                                            <ul class="stock-detail">
                                                <li>Available:<strong class="green-color"> <i class="fa fa-check-circle"></i> In Stock </strong> | </li>
                                                <li>Product Id:<strong> #SKU{{$product->id}} </strong> </li>
                                            </ul>
                                        </div>
                  
                 
                <div class="product-size">
                    <label>Qty</label>
                        <input type="number" value="1" onchange="updateCart(this.value)" min=1>
                        <a href="{{ url(str_slug($product->product_title,'-').'/addToCart/'.$product->id) }}" class="blue-btn btn"> Add To cart!<i class="fa fa-caret-right"></i></a>
                        <a  href="{{ url(str_slug($product->product_title,'-').'/buyNow/'.$product->id) }}" class="blue-btn btn"><i class="fa fa-balance-scale"></i>Buy Now</a>
                </div>
                <div class="links">
                    <a href="{{ url('updateWishlist/'.$product->id) }}"><i class="fa fa-heart-o"></i> Add to Wish List</a>
                    <!--<a  href="{{ url(str_slug($product->product_title,'-').'/buyNow/'.$product->id) }}"><i class="fa fa-balance-scale"></i>Buy Now</a>-->
                </div>
                <div class="social_wrap"><!--<b>Share:</b>-->
                    <a class="color1" title="Share it on Facebook" href="http://www.facebook.com/sharer.php?s=100&p[url]={{url()->current()}}&p[images][0]={{ asset('storage/uploads/products/'. $product->photo) }}&p[title]={{$product->product_title}}&p[summary]={!! str_limit($product->description,100) !!}" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="http://twitter.com/share?text=Check out {{$product->product_title}} at Lazimbana.com!&url={{url()->current()}}&hashtags=Lazimbana" class="color2" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{url()->current()}}&title={{$product->product_title}}&summary=Check out {{$product->product_title}} at Lazimbana.com!&source=LinkedIn" target="_blank" class="color4"><i class="fa fa-linkedin"></i></a>
                    <a href="https://pinterest.com/pin/create/button/?url={{url()->current()}}&media={{ asset('storage/uploads/products/'. $product->photo) }}&description={!! str_limit($product->description,100) !!}" target="_blank" class="color5"><i class="fa fa-pinterest"></i></a>
                    
                </div>
            </div>
        </div>
        
        
        <div class="col-md-12">
            <div id="horizontalTab">
                <ul class="resp-tabs-list">
                    <li> Description </li>
                    <li>Other Products</li>
                    <li>Comments</li>
                    <li>Video</li>
                </ul>
                <div class="resp-tabs-container">
                    <div>
                        <p>{!! ($product->description) !!}</p>
                    </div>
                    <div>
                        @foreach($hot_products as $result)
                            <div class="col-md-4">
                                <div class="product_inner">
                                    <div class="product_img">
                                        <!--<span>{{ ($result->discount) ? '-'.$result->discount.'%' : ''  }}</span>-->
                                        @if($result->discount && $result->discount != '0.00')
                                            <span>{{ ($result->discount) ? '-'.$result->discount.'%' : ''  }}</span>
                                        @endif
                                        <a href="{{ url($result->url) }}"><img src="{{ asset('storage/uploads/products/'. $result->photo) }}" height="180px"></a>
                                    </div>
                                    <h3>{{$result->product_title}}</h3>
                                    <p class="price">£<strike>{{$result->price }}</strike> <span>£{{$result->price-($result->price*$result->discount)/100}}</span></p>
                                        
                                    <div class="rating">
                                        
                                        <i class="fa fa-star {{ ($result->rating >= 1) ? 'yellow' : ''}}"></i>
                                        <i class="fa fa-star {{ ($result->rating >= 2) ? 'yellow' : ''}}"></i>
                                        <i class="fa fa-star {{ ($result->rating >= 3) ? 'yellow' : ''}}"></i>
                                        <i class="fa fa-star {{ ($result->rating >= 4) ? 'yellow' : ''}}"></i>
                                        <i class="fa fa-star {{ ($result->rating >= 5) ? 'yellow' : ''}}"></i>
                                        
                                    </div>
                                    <a href="{{ url($result->url) }}" class="blue-btn btn"> View<i class="fa fa-caret-right"></i></a>
                                </div>
                            </div>
                        @endforeach                                                                            
                                            
                    </div>
                    <div>
                                               
                                        <?php 
                                            $comment= $helper->getComments($product->id);  
                                            ?>
                                            @if($comment)

                                            @foreach($comment as $rs)
                                            <p style="
                                                color: brown;
                                                background-color: beige;
                                                padding: 5px; margin: 3px; border-radius: 5px; 
                                            "> <b> By  {{ucfirst($rs->name)}} de </b> on {!! Carbon\Carbon::parse($rs->created_at)->format('d-M-Y'); !!}: <br>{{$rs->comments}} </p>
                                                                                        @endforeach
                                                                                        @endif
                                                                                        
                                  <div class="product-review">
                    
                               
                           
                            <h2>Comment here</h2>
                            @if ($errors->has('successMsg'))
                               <span class="btn btn-success">{{ $errors->first('successMsg') }}</span>
                                
                           @endif

                           <div class="comment_form row" id="comments">
                            <form class="contact-form" action="{{url('submitComment')}}" method="post">
                               <input type="hidden" name="product_id" id="product_id" value="{{$product->id}}">
                       <input type="hidden" name="_token" value="{{csrf_token()}}"> 
                            <div class="col-md-6">
                               <span class="label label-danger" style="color:#ffffff">{{ $errors->first('name', ':message') }}</span> 
                               <input class="input-text" type="text" placeholder="Name" name="name" value="{{old('name')}}">
                           </div>
                               <div class="col-md-6">
                                   <span class="label label-danger" style="color:#ffffff">{{ $errors->first('email', ':message') }}</span> 
                                   <input class="input-text" type="email" placeholder="E-Mail" name="email" value="{{old('email')}}">
                               </div>
                               <div class="col-md-12">
                                   <span class="label label-danger" style="color:#ffffff">{{ $errors->first('comments', ':message') }}</span>
                                   <textarea class="input-text" placeholder="Comment" name="comments">{{old('comments')}}</textarea>  
                               </div>
                               <div class="col-md-12">
                               	<button class="submit-btn blue-btn btn" type="submit">Submit</button>
                               <!--<input value="Submit" class="submit-btn blue-btn btn" type="submit">--></div>
                           </div>
                       </form>
                          <h2  id="displayRating" data="{{$product->rating or 0}}">Rating </h2>

                       <div class="rating_outer"><span class="fa fa-star" id="star1" onclick="rating(1,{{$product->id}})"></span>
                           <span class="fa fa-star" id="star2" onclick="rating(2,{{$product->id}})"></span>
                           <span class="fa fa-star" id="star3" onclick="rating(3,{{$product->id}})"></span>
                           <span class="fa fa-star" id="star4" onclick="rating(4,{{$product->id}})"></span>
                           <span class="fa fa-star" id="star5" onclick="rating(5,{{$product->id}})"></span>
                          <br> <span id="rating"></span>
                       </div>
                </div>                                                      
                                                                                        
                                                                                        
                    </div>
                    
                    <div>
                    	 <?php
                if($product->video){
                    $v1 = explode('=',$product->video);
                    $v2 = explode('/',$product->video);                                
                }
                ?>
                
                <iframe width="420" height="315"
                    src="https://www.youtube.com/embed/{{ isset($v1[1]) ? $v1[1] : (isset($v2[3]) ? $v2[3] : '') }}">
                </iframe>
                    </div>
                </div>
            </div>
        </div>
        
    </div>