<div class="col-md-9">
        	
        	<div class="addvertigment_outer">
                        
                        
                        
                        <img src="{{ asset('public/new/images/category-slider1.png')}}">
                    </div>
                    
                    
                    
                    <div class="product_outer">
                    	<div class="col-md-12"><h2><span>{!! $products->count() !!} </span> Products Found</h2></div>
                        <div class="filter">
                        	<div class="filter-inner pull-left">
                                <span>Sort By:</span>
                                <div class="select_panel">
                                	<select>
                                    	<option>Best Sellers</option>
                                        <option>Most Popular</option>
                                        <option>Latest Items</option>
                                        <option>Best Sellers</option>
                                    </select>
                                </div>
                            </div>
                            <div class="filter-inner pull-right">
                                <span>Sort By:</span>
                                <div class="select_panel">
                                	<select>
                                    	<option>10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>40</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                       <div class="row">
                       @if($products->count()==0) Record not found @endif 
                            @foreach($products as $key => $product)                                
                                <div class="col-md-3">
                                    <div class="product_inner">
                                        <div class="product_img">
                                            <!--<span>{{ ($product->discount) ? '-'.$product->discount.'%' : ''  }}</span>-->
                                            @if($product->discount && $product->discount != '0.00')
                                                <span>{{ ($product->discount) ? '-'.$product->discount.'%' : ''  }}</span>
                                            @endif
                                            <a href="{{ url($product->url) }}"><img src="{{ asset('storage/uploads/products/'. $product->photo) }}" height="180px"></a>
                                        </div>
                                        <h3>{{$product->product_title}}</h3>
                                        <p class="price">$<strike>{{$product->price }}</strike> <span>${{$product->price-($product->price*$product->discount)/100}}</span></p>
                                            
                                        <div class="rating">
                                            
                                            <i class="fa fa-star {{ ($product->rating >= 1) ? 'yellow' : ''}}"></i>
                                            <i class="fa fa-star {{ ($product->rating >= 2) ? 'yellow' : ''}}"></i>
                                            <i class="fa fa-star {{ ($product->rating >= 3) ? 'yellow' : ''}}"></i>
                                            <i class="fa fa-star {{ ($product->rating >= 4) ? 'yellow' : ''}}"></i>
                                            <i class="fa fa-star {{ ($product->rating >= 5) ? 'yellow' : ''}}"></i>
                                            
                                        </div>
                                        <a href="{{ url($product->url) }}" class="blue-btn btn"> View<i class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>
                            @endforeach
                        
                        </div>
                    </div>
        </div>