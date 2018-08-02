
@extends('layouts.master')
    @section('title', 'HOME')
        
        @section('header')
        <h1>Home</h1>
        @stop

        @section('content') 

            
            <section class="product_main_container">
                <div class="container">
                    
                   <div class="cart-table-outer"> 
                    <div class="col-md-12">
                                    
                                    <div class="table-responsive">
                                    
                                        <table class="table table-bordered ">
                                            <thead>
                                                <tr>
                                                    <td>Image</td>
                                                    <td>Product Name</td>                                                    
                                                    
                                                    
                                                    <td>Price</td>
                                                    <td>remove</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(count($wishlist))
                                                @foreach($wishlist as  $item)
                                                <tr>
                                                    <td class="table-img" valign="middle">
                                                        <a href="{{$item->url}}">
                                                            
                                    
                                                                @if($item->photo)
                                                                 <img style="width: 100px;height: 100px;" src="{{ asset('storage/uploads/products/'. $item->photo) }}" alt="">
                                                                 @endif
                                                            
                                                        </a>
                                                    </td>
                                                    <td valign="middle"><a class="cart-pro-name" href="{{$item->url}}">{{$item->product_title}}</a></td>                                                    
                                                    
                                                    
                                                    <td class="cart-price">£ {{ money_format('%!i', $item->price) }}</td>
                                                    <td><a href="{{ url('clearwishlist/'.$item->id) }}" class="btn-remove-cart" onclick=" var c = confirm('Are you sure want to delete?'); if(!c) return false;"><i class="fa fa-trash"></i></a></td>
                                                </tr>
                                                @endforeach
                                                @else
                                                <p>No Items in the wishlist</p>
                                                @endif
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                    <div class="buttons">
                                        
                                        <div class="pull-right checkout-cart">
                                            <a class="btn " href="{{url('/')}}">continue shopping</a>
                                        </div>
                                    </div>
                                </div>
                      </div>          
                                
                                
                                
                </div>
            </section>  

            
        @stop