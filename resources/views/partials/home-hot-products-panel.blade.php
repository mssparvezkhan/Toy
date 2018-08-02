<div class="further_info">
    <h2 class="title"> Featured Products</h2>
    <ul>@foreach($hot_products as $result)                    
            <li>
                <a href="{{ url($result->url) }}"><strong>{{ $result->product_title }}</strong> 
                <span>(£{{ $result->price - ($result->price*$result->discount)/100 }}</span> <span><strike>£{{ $result->price }}</strike>)</span></a>
            </li>
        @endforeach                     
    </ul>
</div>