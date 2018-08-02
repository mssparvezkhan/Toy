
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
                                                    
                                                    <td>qty</td>
                                                    <td>sub Total</td>
                                                    <td>remove</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(count($cart))
                                                @foreach($cart as  $item)
                                                <tr>
                                                    <td class="table-img" valign="middle">
                                                        <a href="">
                                                            @foreach($product_photo as $key => $photo)
                                    
                                                                @if($photo['id']==$item->id)
                                                                 <img style="width: 100px;height: 100px;" src="{{ asset('storage/uploads/products/'. $photo['photo']) }}" alt="">
                                                                 @endif
                                                            @endforeach
                                                        </a>
                                                    </td>
                                                    <td valign="middle"><a class="cart-pro-name" href="">{{$item->name}}</a></td>                                                    
                                                    
                                                    <td>
                                                        <div class="cart_quantity_button">
                                                            <a class="cart_quantity_up" href="{{ url('updateCart?product_id='.$item->id.'&increment=1')}}"> + </a>
                                                            <input class="cart_quantity_input" type="text" name="quantity" value="{{$item->qty}}" readonly autocomplete="off" size="2">
                                                            <a class="cart_quantity_down" href="{{ url('updateCart?product_id='.$item->id.'&decrease=1')}}"> - </a>
                                                        </div>
                                                    </td>
                                                    <td class="cart-price">£ {{ money_format('%!i', $item->subtotal) }}</td>
                                                    <td><a href="{{ url('removeItem/'.$item->id) }}" class="btn-remove-cart"><i class="fa fa-trash"></i></a></td>
                                                </tr>
                                                @endforeach
                                                @else
                                                <p>No Items in the Cart</p>
                                                @endif
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                    <div class="buttons">
                                        <div class="pull-left">
                                            <a class="btn " href="">clear shopping cart</a>
                                        </div>
                                        <!--<div class="pull-right">
                                            <a class="btn " href="">update shopping cart</a>
                                        </div>-->
                                        <div class="pull-right checkout-cart">
                                            <a class="btn " href="{{url('/')}}">continue shopping</a>
                                        </div>
                                    </div>
                                </div>
                      </div>          
                                
                                
                                <div class="cart-process-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                   <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-6">
                                        <!--    <div class="shipping-tax">
                                                <h2>Estimate Shipping and Tax</h2>
                                            </div>
                                             <div class="shipping-form">
                                                <form class="shipping-cart">
                                                    <p>Enter your destination to get a shipping estimate.</p>
                                                    <ul class="form-list">
                                                        <li>
                                                            <label class="required">Country</label>
                                                            <div class="input-box">
                                                                <select title="Country">
                                                                    <option>Please Select</option>
                                                                    <option>Åland Islands</option>
                                                                    <option>Albania</option>
                                                                    <option>Algeria</option>
                                                                </select>                    
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <label>State/Province</label>
                                                            <div class="input-box">
                                                                <select title="Country">
                                                                    <option>Please Select</option>
                                                                    <option>Aland Islands</option>
                                                                    <option>Albania</option>
                                                                    <option>Algeria</option>
                                                                </select>                    
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <label>Zip/Postal Code</label>
                                                            <div class="input-box">
                                                                <input class="input-zip" type="text">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="pull-left">
                                                        <a class="btn " href="">get a quote</a>
                                                    </div>
                                                </form>
                                            </div>-->
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-6">
                                            <div class="shipping-tax">
                                                <h2>Discount Codes</h2>
                                            </div>
                                            <div class="shipping-form">
                                                <form class="shipping-cart">
                                                    <p>Enter your coupon code if you have one.</p>
                                                    <input class="caupon-input" type="text">
                                                    <div class="pull-left">
                                                        <a class="btn " href="">apply caupon</a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                   <div class="proceed-to-checkout">
                                       <h2>Subtotal <span>£ {{$sub_total}} (Incl. VAT)</span></h2>
                                       <h4>grand total <span>£ {{$sub_total}} (Incl. VAT)</span></h4>
                                       <div class="pull-left full-btn">
                                            <a class="btn " href="{{route('order')}}">proceed to checkout</a>
                                        </div>
                                        <!--<p class="multi-add"><a href="">Checkout with Multiple Addresses</a></p>-->
                                   </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>  

            
        @stop