<!DOCTYPE html>
<html lang="en">
@include('component.head')
<body>
    @include('component.navbar')
    @yield('content')
    @include('component.footer')
    <script src="/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>