
@extends('layouts.master')
    @section('title', 'HOME')
        
        @section('header')
        <h1>Home</h1>
        @stop

        @section('content') 

            
           <div class="account_login">
         
          <div class="container" ng-app="postApp" ng-controller="postController">
    <div class="row">
                
               	 <div class="login-box-body" >
                 <h2>Register</h2>
                     @if($errors->has())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                              <p> {{ $error }} </p>
                            @endforeach
                         </div>
                            @endif 
                   
                    <form class="form-horizontal Register" action="{{url('myaccount/signup')}}"   name="userForm"  method="post">
                        {{ csrf_field() }}
                         
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                           <!-- <label for="name" class="control-label">First name</label>-->

                                <input id="name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" ng-model="name" placeholder="First Name">
                                 @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <!--<label for="email" class=" control-label">E-Mail Address</label>-->

                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" ng-model="email" placeholder="E-Mail Address" >
                                 @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                           <!-- <label for="password" class="control-label">Password</label>-->

                                <input id="password" type="password" class="form-control" name="password" ng-model="password" placeholder="Password">
                                 @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                           
                        </div>

                        <div class="form-group{{ $errors->has('confirm_password') ? ' has-error' : '' }}">
                           <!-- <label for="password-confirm" class="control-label">Confirm Password</label>-->

                           
                                <input id="password-confirm" type="password" class="form-control" name="confirm_password" ng-model="confirm_password" placeholder="Confirm Password" >
                                
                                @if ($errors->has('confirm_password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('confirm_password') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group">
                           
                                <button type="submit" class="blue-btn btn">
                                     Register
                                </button>
                                <a href="{{ url('myaccount/login') }}" class="link">Already Registered? Login Here ? </a>
                            </div>
                            
                    </form>
                   
                
        </div></div>
    </div>
</div>
 
@stop

