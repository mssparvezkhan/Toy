
@extends('layouts.master')
    @section('title', 'HOME')
        
        @section('header')
        <h1>Home</h1>
        @stop

        @section('content') 

            
            <section class="product_main_container">
                <div class="container">
                        @include('partials.left-sidebar')
                    
                        @include('partials.detail-right-panel')
                    
                </div>
            </section>  

            
        @stop