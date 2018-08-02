<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="author" content=""> 

    <meta name="description" content="{{$meta_description or '' }}"/>

    <meta name="keywords" content="{{$meta_key or ''}}"/>

      <meta property="og:title" content="{{$meta_key or ''}}" />
      <meta property="og:site_name" content="Lazimbana.com" />
      <meta property="og:url" content="{{url()->current()}}" />
      <meta property="og:description" content="{{$meta_description or '' }}" />
      <meta property="og:image" content="http://localhost/lazimbananew/public/new/images/logo-lazimbana.png" />
      <meta property="fb:app_id" content="136910713811254" />
  
  
    <link rel="icon" href="../../favicon.ico">

    <title> MeowSlush:
          @if(isset($meta_key))    
          {{ isset($meta_key)?$meta_key:''}}                             
                  @else
              {{  $main_title  or $product->category->name }}

              @endif                      
              
    </title>
        
<link href="{{ asset('public/new/css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('public/new/css/bootstrap.min.css') }}" rel="stylesheet">
<!--<link href="css/bannerscollection_zoominout.css" rel="stylesheet" type="text/css">-->
<link href="{{ asset('public/new/css/ubislider.min612e.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('public/new/css/style.css') }}" rel="stylesheet">
</head>

<body>
<header>
	<div class="container">
    	<section class="header-wrapper">
        	<article class="header-middle">  
                                    <!-- Logo -->
                                    <div class="logo hidden-xs col-md-3  col-sm-3">
                                        <a href="{{ url('/') }}"><img src="{{ asset('public/new/images/logo.png') }}" alt=" "></a>
                                    </div>
                                    <!-- /Logo -->

                                    <!-- Header search -->
                                    <div class="header-search col-md-6  col-sm-5">                               
                                        <form action="#" class="search-form">
                                            
                                                <label>
                                                    <input title="Search for:" name="s" value="" placeholder="Search for a Category, Brand or Product" class="search-field" type="search">
                                                </label>
                                                <input value="Search" class="search-submit" type="submit">
                                            
                                        </form>                               
                                    </div>
                                    <!-- /Header search -->

                                    <!-- Header shopping cart -->
                                    <div class="header-cart col-md-3  col-sm-4">
                                        <div class="cart-wrapper">
                                            <a href="{{url('checkout')}}" class="btn cart-btn default-btn" onclick="view_cart();">
                                                <i class="fa fa-shopping-cart blue-color"></i>
                                                <span><b> cart: </b></span>   <span class="blue-color"> <strong> ({{$total_item}} items) </strong> </span>
                                                <span class="fa fa-caret-down"></span>
                                            </a>                                  
                                        </div>                            
                                        <div class="cart-dropdown">
                                            <span class="blue-color-mask blue-box-shadow color-mask-radius"></span>
                                            <div class="pos-relative">
                                                <table class="cart-table">
                                                    <tbody>
                                                    
                                                        @foreach($cart as  $item)
                                                        <tr>
                                                            <td>
                                                                <div class="product-media">                                                                 
                                                                    <a href="#">  <img src="{{ asset('public/new/images/small-1.png') }}" alt=" "></a>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="product-content">                                                     
                                                                    <div class="product-name">
                                                                        <a href="#">{{$item->name}}</a>
                                                                        <span> {{$item->qty}}  </span>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <h5 class="price"><b> £ {{$item->price}} </b></h5>
                                                                        <a href="#" class="delete fa fa-close">  </a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                   
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td>
                                                                <div class="sub-total">
                                                                    <span class="title">Total :</span>
                                                                    <span class="amount"> <b> £{{$sub_total}} </b> </span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                <div class="chk-out">
                                                    <a href="{{ url('/checkout') }}" class="btn default-btn">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Header shopping cart -->                            
                                </article>
             
             <article class="header-navigation">                           
                                    <nav class="navbar navbar-default product-menu"> 
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#product-menu">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>                               
                                        </div>
                                        <div class="collapse navbar-collapse no-padding" id="product-menu">
                                            <ul class="nav navbar-nav">
                                                <li><a href="{{ url('/') }}">home</a></li>
                                                <!--<li><a href="#">toy & book</a></li>-->
                                                <li><a href="{{url('blogs')}}">blog</a></li>
                                                
                                                @if($userData==null)
                                                <li><a href="{{ url('/myaccount/signup') }}" >Register</a>
                                                <li><a href="{{ url('/myaccount/login') }}" >login</a>
                                                    <!--<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                                    {{ csrf_field() }}
                                                    <ul>
                                                    <li><label for="username">E-mail <span class="required">*</span></label></li>
                                                    <li><input class="input-text" name="email" id="email" value="" type="email"></li>
                                                    <li><label for="password">Password <span class="required">*</span></label></li>
                                                    <li><input class="input-text" name="password" id="password" type="password"></li>
                                                    <li><input class="button" name="login" value="Login" type="submit"></li>
                                                    <li class="reg-link"><a href="{{ url('myaccount/signup') }}" class="resig">Register</a><a href="{{ url('password/reset') }}" class="forgot">Forget Password</a></li>                                                    
                                                    </ul>                                      
                                                    </form>-->
                                                </li>
                                                @else    
                                                <li><a href="{{url('myaccount')}}">My Account</a></li>
                                                <li><a href="{{url('wishlist')}}">my wish list</a></li>                                                
                                                <li><a href="{{ url('/checkout') }}">check out</a></li>
                                                <li><a href="{{url('signout')}}">logout</a></li>
                                                @endif
                                                 
                                                </ul></div>
                                    </nav>
                                </article>                   
                                
        </section>
    </div>
</header>        