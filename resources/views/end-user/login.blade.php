@extends('layouts.master')
    @section('title', 'HOME')
        
        @section('header')
        <h1>Home</h1>
        @stop

        @section('content') 

            
   <div class="account_login">
         
   <div class="container">
            <div class="row">

                    <div class="already-registered-login">
                        

                            @if($errors->has())
                            <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            <p> {{ $error }} </p>
                            @endforeach
                            </div>
                            @endif 
                            <div class="login-box-body">
                            	<h2>Login</h2>
                              <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}" >
                                {{ csrf_field() }}

                                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                   <!-- <label for="email" class="col-md-4 control-label">E-Mail Address</label>-->

                                        <input id="email" type="email" class="form-control unicase-form-control text-input" name="email" value="{{ old('email') }}" placeholder="E-Mail Address">

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" >
                                    <!--<label for="password" class="col-md-4 control-label">Password</label>-->

                                        <input id="password" type="password" placeholder="Password" class="form-control unicase-form-control text-input" name="password">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                </div>

                                

                                <div class="form-group">
                                   
                                        <button type="submit" class="blue-btn btn">
                                             Login

                                        </button>
                                        <a class="" href="{{ url('myaccount/signup') }}" style="margin-left: 20px">  Register?</a>  
                                        <a class="" href="{{ url('/password/reset') }}" > Forget Password?</a>  
                                         
                                       
                                    
                                </div>
                            </form>
                        
                        </div>
                    </div>
                
        </div>
    </div>
 </div>
        @stop
        
 
