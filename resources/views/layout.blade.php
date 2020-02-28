
<!DOCTYPE html>
<html lang="en">
@include('html.head')
<body>
<!-- HEADER -->
@includeIf('html.header')
<!-- /HEADER -->

<!-- NAVIGATION -->
@includeIf('html.nav')
<!-- /NAVIGATION -->

<section class="product-section spad">
    <div class="container">
        @yield('content')
    </div>
</section>
<!-- FOOTER -->
@includeIf("html.footer")
<!-- /FOOTER -->

<!-- jQuery Plugins -->
@include("html.js")
</body>
</html>
