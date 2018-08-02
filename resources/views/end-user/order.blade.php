
@extends('layouts.master')
    @section('title', 'HOME')
        
        @section('header')
        <h1>Home</h1>
        @stop

        @section('content') 
            <section id="checkout_outer">
                <div class="container">
                    <div class="col-md-8">
                        <h2>Checkout</h2>
                        
                        
                        <div class="bs-example">
                <div class="panel-group" id="accordion">
                @if($userData==null) 
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Checkout</a>
                            </h4>
                        </div>
                        
                        <div id="collapseOne" class="panel-collapse collapse {{ ($tab==0)?'in':''}}">
                            <!-- panel-body  -->
                                <div class="panel-body">
                                    <div class="row">       
                        
                                        <!-- guest-login -->            
                                        <div class="col-md-6 col-sm-6 guest-login">
                                            <h4 class="checkout-subtitle">User Registration</h4>
                                            <p class="text title-tag-line">Sign up for future features::</p>
                        
                                            <!-- radio-form  -->
                                            <form class="register-form" role="form">
                                                <div class="radio">  
                                                    <!--<input id="guest" name="text" value="konuk" checked="" type="radio">  -->
                                                  <!--   <label class="radio-button guest-check" for="guest">Checkout as Guest</label>  
                                                      <br> -->                                                    
                                                    <label class="radio-button" for="register">Register</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <input id="register" name="text" value="kayıt olmak" type="radio" checked="checked">
                                                </div>  
                                            </form>
                                            <!-- radio-form  -->
                        
                                            <h4 class="checkout-subtitle outer-top-vs">Register and save time</h4>
                                            <p class="text title-tag-line ">Sign up for future features::</p>
                                            
                                            <ul class="text instruction inner-bottom-30">
                                                <li class="save-time-reg">- Quick and easy control</li>
                                                <li>-  Easy access to your order history and status</li>
                                            </ul>
                                             <!--<a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="index.htm#collapseTwo2">-->
                                             <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><button class="btn-upper btn btn-primary">Register </button></a>
                                            <!--<button   type="button" class="btn-upper btn btn-primary checkout-page-button checkout-continue ">Devam et</button> </a>-->
                                        </div>
                                        <!-- guest-login -->
                        
                                        <!-- already-registered-login -->
                                        <div class="col-md-6 col-sm-6 already-registered-login">
                                            <h4 class="checkout-subtitle">Already Registered?</h4> 
                        
                                               <form method="POST" action="{{ url('Ajaxlogin') }}"  class="form-horizontal" role="form" id="loginForm">
                                                {!! csrf_field() !!}
                                                <div class="form-group">
                                                <label class="info-title" for="exampleInputEmail1">Email Adress <span>*</span></label>
                                                <input class="form-control unicase-form-control text-input" name="email" id="exampleInputEmail1" placeholder="" type="email">
                                              </div>
                                              <div class="form-group">
                                                <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
                                                <input class="form-control unicase-form-control text-input" name="password" id="exampleInputPassword1" placeholder="" type="password">
                                                <a href="index.htm#" class="forgot-password">Forget Password?</a>
                                              </div>
                                              <button type="button"  class="btn-upper btn btn-primary checkout-page-button"  onclick="loginBtn()">Login</button>
                                              <span id="loginError" style="padding: 5px; color: red"></span>
                                            </form>
                                        </div>  
                                        <!-- already-registered-login -->       
                        
                                    </div>          
                                </div>
                                <!-- panel-body  -->
                        </div>
                    </div>
                        
                        
                    <div class="panel panel-default" id="register">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"> Register</a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse ">
                            <div class="panel-body">
                                    <div class="col-md-6 col-sm-6 already-registered-login"> 
                                        <form class="register-form" role="form" id="register">
                                              {!! csrf_field() !!}
                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputEmail1">First name <span>*</span></label>
                                                <input class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="" type="text" name="first_name">
                                            </div> 

                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputEmail1">Last name <span>*</span></label>
                                                <input class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="" type="text" name="last_name">
                                            </div> 

                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputEmail1">Email Adress <span>*</span></label>
                                                <input class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="" type="email" name="email">
                                            </div>
                                          <div class="form-group">
                                            <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
                                            <input class="form-control unicase-form-control text-input" id="exampleInputPassword1" placeholder="" name="password" type="password">
                                             
                                          </div>

                                          <div class="form-group">
                                            <label class="info-title" for="exampleInputPassword1">Confirm Password <span>*</span></label>
                                            <input class="form-control unicase-form-control text-input" id="exampleInputPassword1" placeholder="" name="confirm_password" type="password">
                                             
                                          </div> 
                                          
                                          <button type="button" onclick="signUp()"  class="btn-upper btn btn-primary checkout-page-button">Continue</button> 

                                        </form>
                                        <span id="regErr" style="color: red"></span>
                                    </div>  
                            </div>
                        </div>
                    </div>
                    @endif    
                        
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Billing Information</a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse {{($tab==1)?'in':''}}">
                            <div class="panel-body">
                                     <div class="col-md-6 col-sm-6 already-registered-login"> 
                                        <form method="post" class="register-form" role="form" id="billing" action="{{route('billing')}}"> 
                                              {!! csrf_field() !!}
                                              <div class="form-group">
                                                <label class="info-title" for="exampleInputEmail1">Name <span>*</span></label>
                                                <input class="form-control unicase-form-control text-input" id="name" placeholder="" value="{{$billing->name or ''}}" type="text" name="name" required="required">
                                            </div> 

                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                                                <input class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="" value="{{$billing->email or ''}}" type="email" name="email" required="required">
                                            </div>
                                          <div class="form-group">
                                            <label class="info-title" for="exampleInputPassword1">Mobile No <span>*</span></label>
                                            <input class="form-control unicase-form-control text-input" name="mobile" id="mobile" placeholder="" value="{{$billing->mobile or ''}}" type="text">
                                             
                                          </div> 

                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputPassword1"> Address
                                                <span>*</span></label>
                                                <input class="form-control unicase-form-control text-input" id="exampleInputPassword1" placeholder="" value="{{$billing->address1 or ''}}"  name="address1" type="text"> 
                                            </div>
                                                   
                                          <button type="submit" class="btn-upper btn btn-primary checkout-page-button" onclick="billing()">Continue</button> 
                                        </form>
                                    </div>  
                            </div>
                        </div>
                    </div>
                        
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Shipping Information</a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse {{($tab==2)?'in':''}}">
                            <div class="panel-body">
                                   <div class="col-md-6 col-sm-6 already-registered-login" id="shopping"> 
                                        <form method="post" class="register-form" role="form" id="billing" action="{{route('shipping')}}">  
                                            {!! csrf_field() !!}
                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputEmail1">Name <span>*</span></label>
                                                <input class="form-control unicase-form-control text-input" id="name" placeholder="" value="{{$shipping->name or ''}}" type="text" name="name" required="required">
                                            </div> 

                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                                                <input class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="" value="{{$shipping->email or ''}}" type="email" name="email" required="required">
                                            </div>
                                          <div class="form-group">
                                            <label class="info-title" for="exampleInputPassword1">Mobile No. <span>*</span></label>
                                            <input class="form-control unicase-form-control text-input" name="mobile" id="mobile" placeholder="" value="{{$shipping->mobile or ''}} "type="text">
                                             
                                          </div>

                                            <div class="form-group">
                                                <label class="info-title" for="zip_code"> Zip code
                                                <span>*</span></label>
                                                <input class="form-control unicase-form-control text-input" id="zip_code" placeholder=""  value="{{$shipping->zip_code or '' }}" name="zip_code" type="text">  
                                            </div>


                                            <div class="form-group">
                                                <label class="info-title" for="city"> City
                                                <span>*</span></label>
                                                <input class="form-control unicase-form-control text-input" id="city" placeholder="" type="text" name="city" value="{{$shipping->city or '' }}"> 
                                            </div>
 

                                            <div class="form-group">
                                                <label class="info-title" for="state"> State

                                                <span>*</span></label>
                                                <input class="form-control unicase-form-control text-input" id="state" placeholder="state" value="{{$shipping->state or ''}}" name="state" type="text"> 
                                            </div>


                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputPassword1"> Address1
                                                <span>*</span></label>
                                                <input class="form-control unicase-form-control text-input" id="exampleInputPassword1" placeholder="" value="{{$shipping->address1 or '' }}"" type="text" name="address1"> 
                                            </div>

                                               <div class="form-group">
                                                <label class="info-title" for="exampleInputPassword1"> Address2
                                                <span>*</span></label>
                                                <input class="form-control unicase-form-control text-input" id="exampleInputPassword1" placeholder="" value="{{$shipping->address2 or '' }}"" type="text" name="address2"> 
                                            </div>
                                    
                                          <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Continue</button>
                                        </form>
                                    </div>  
                            </div>
                        </div>
                    </div>
                        
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Payment Method</a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse {{($tab==3)?'in':''}}">
                            <div class="panel-body">
                                  <div class="col-md-6 col-sm-6 already-registered-login"> 
                                        <form method="post" class="register-form" role="form" id="billing" action="{{route('shippingMethod')}}">  
                                            {!! csrf_field() !!}
                                            
                                            <div class="form-group"> 
                                                <!--<input class="form-control  " id="cod" placeholder="" type="hidden" value="cod">Kapıda ödeme-->
                                                <input class="" id="cod" placeholder="" {{ (Session::get('paymentMethod') == 'COD') ? 'checked': '' }} name="paymentMethod" type="radio" value="COD">Cash on Delivery<br>
                                                <input class="" id="cod" placeholder="" {{ (Session::get('paymentMethod') == 'card') ? 'checked': '' }} name="paymentMethod" type="radio" value="card">Debit/Credit Card
                                            </div> 
                                         <!--<a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="index.htm#collapseSix">-->
                                          <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Continue</button></a>
                                        </form>
                                    </div>  
                            </div>
                        </div>
                    </div>
                        
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Order Review</a>
                            </h4>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse {{($tab==4)?'in':''}}">
                            <div class="panel-body">
                                    <div class="">
                                        <div class="shopping-cart">
                                            <div class="shopping-cart-table ">
                                                <div class="table-responsive">
                                                 @if(count($cart))
                                                    <table class="table">
                                                        <thead>
                                                                <tr>
                                                            <th class="cart-product-name item">Product name</th>
                                                            <th class="cart-edit item">Price</th>
                                                            <th class="cart-qty item">Quantity</th>
                                                            <th class="cart-sub-total item">Sub Total</th> 
                                                        </tr>
                                                        </thead><!-- /thead -->
                                              
                                                     <tbody>
                                                            @foreach($cart as  $item)
                                                            <tr> 
                                                                <td class="cart_description">
                                                                        <h4><a href="">{{$item->name}}</a></h4> 
                                                                </td>
                                                                <td class="cart_price">
                                                                    <p>£ {{$item->price}}</p>
                                                                </td>
                                                                <td class="cart_quantity">
                                                                    <div class="cart_quantity_button">
                                                                        {{$item->qty}} 
                                                                        
                                                                    </div>
                                                                </td>
                                                                <td class="cart_total">
                                                                    <p class="cart_total_price">$ {{ money_format('%!i', $item->subtotal) }}</p>
                                                                </td>  
                                                            </tr> 
                                                            @endforeach
                                                        @else
                                                    <p>No items in your shopping cart</p>
                                                    @endif
                                                    </tbody>
                                                    </table><!-- /table -->
                                                </div>
                                                <hr>
                                            </div><!-- /.shopping-cart-table -->                
                                   
                 
                
                                                <div class="col-md-12 col-sm-12 cart-shopping-total">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    <div class="cart-sub-total">
                                                                        <span class="inner-left-md">Sub Total £ {{$sub_total}} ( Incl. VAT) </span>
                                                                    </div>
                                                                    <div class="cart-grand-total">
                                                                        <span class="inner-left-md">Grand Total £ {{$sub_total}} (Incl. VAT) </span>
                                                                    </div>
                                                                     <div class="cart-grand-total">
                                                                     <br><br>
                                                                       <a href="{{url('orderSuccess')}}" class="btn btn-primary">Continue to Order</a>
                                                                    </div>
                                                                </th>
                                                            </tr>
                                                        </thead><!-- /thead -->
                        
                                                    </table><!-- /table -->
                                                </div><!-- /.cart-shopping-total -->            
                                        </div><!-- /.shopping-cart -->
                                    </div> <!-- /.row -->
                            </div>
                        </div>
                    </div>
                </div>
                <p><strong>Note:</strong> Click on the linked heading text to expand or collapse accordion panels.</p>
            </div>
                    </div>
                    
                    
                    <div class="col-md-4">
                        <h2>Your Checkout Progress</h2>
                        
                        <div class="checkout-order-list">
                                           <ul>
                                               <li>Sub Total: <span>£ {{ $sub_total }} (Incl. VAT)</span></li>
                                               <li>Total: <span>£ {{ $sub_total }} (Incl. VAT)</span></li>                                               
                                           </ul>
                                            <a href="{{url('/')}}" class="btn btn-success">Continue Shopping</a> 
                                            <!--<a href="{{url('orderSuccess')}}" class="btn btn-primary">Order</a> -->
                                       </div>
                                       
                                       
                    </div>
                </div>
            </section>
        @stop