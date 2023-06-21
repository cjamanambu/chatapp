<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<body>
<div class="layout-wrapper d-lg-flex">
    @include('partials.side-menu')
    @include('partials.left-side')
    @yield('content')
</div>
@include('partials.scripts')
</body>
</html>
