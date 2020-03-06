<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <li class="active"><a href="{{url("/")}}">Home</a></li>
                @foreach(\App\Category::all() as $c)
                    <li><a href="{{url("/store/{$c ->id}")}}">{{$c ->category_name}}</a></li>
                @endforeach
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>