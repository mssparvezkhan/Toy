
@extends('layouts.master')
    @section('title', 'HOME')
        
        @section('header')
        <h1>Home</h1>
        @stop

        @section('content') 

            
            @include('partials.home-left-category-sidebar')
            <section class="main_container">
                <div class="container">
                        @include('partials.home-left-panel')
                    
                        @include('partials.home-right-panel')
                    
                </div>
            </section>  

            
        @stop