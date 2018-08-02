
<div class="product_outer">
            <div class="col-md-12"><h2>specials</h2></div>
            <?php $i = 0;?>    
            @foreach($categories as $key => $value) 
                    @foreach($products as $key2 => $product)                        
                        @if($value['id']!=$product->category->parent_id && $key < 1)
                            
                            <div class="col-md-3">
                                <div class="product_inner">
                                    <div class="product_img">
                                    @if($product->discount && $product->discount != '0.00')
                                        <span>{{ ($product->discount) ? '-'.$product->discount.'%' : ''  }}</span>
                                    @endif
                                        <a href="{{ url($product->url) }}"><img src="{{ asset('storage/uploads/products/'. $product->photo) }}" height="180px"></a>
                                    </div>
                                    <h3>{{$product->product_title}}</h3>
                                    <p class="price">£ <strike>{{$product->price }}</strike> <span>£ {{$product->price-($product->price*$product->discount)/100}}</span></p>
                                        
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
                                
                        @endif
                        <?php $i++; ?>
                    @endforeach
            @endforeach                    
        </div>