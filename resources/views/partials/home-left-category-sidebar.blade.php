<section class="first-section">
    <div class="container">
        <div class="col-md-3">
            <div class="sidebar_menu">
                <h2>shop by <i class="fa fa-list"></i></h2>
                <div id="sidebarnav">
                    <div id="vertical" class="verticalmenu ttmenu hidden-xs hidden-sm">
                    <div class="navbar navbar-default" role="navigation">
                    <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                    @foreach($categories as $key => $value)
                        <li><a href="{{url($value['slug'])}}">{{$value['name']}}</a></li>
                        
                    @endforeach                                                                                                        
                </ul>
                </div></div></div></div>
                
            </div>
        </div>
        
        @include('partials.home-slider')
    </div>
</section>