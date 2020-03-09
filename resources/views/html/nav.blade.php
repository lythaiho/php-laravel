<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                @if(url()->current()==url("/"))
                <li class="active"><a href="{{url("/")}}">Home</a></li>
                @else
                    <li class=""><a href="{{url("/")}}">Home</a></li>
                @endif
                @foreach(\App\Category::all() as $c)
                    @if(url()->current()== url("/store/{$c ->id}") || url()->current()== url("/product/{$c ->id}"))
                    <li class="active"><a href="{{url("/store/{$c ->category_id}")}}">{{$c->category_name}}</a></li>
                    @else
                        <li><a href="{{url("/store/{$c ->id}")}}">{{$c ->category_name}}</a></li>
                        @endif
                @endforeach
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>