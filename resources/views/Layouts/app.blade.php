<!DOCTYPE html>
<html lang="en">

<head>
    @include('Layouts.header')
</head>

<body class="page vs-home2 bg-theme-8">
    <div class="preloader">
        <div class="preloader-inner">
            <img src="{{ asset('assets/img/logo/crystree-1.png') }}" alt="Best Software company in tamilnadu">
            <span class="vs-loader"></span>
        </div>
    </div>

    @include('Layouts.mobile-menu')

    @include('Layouts.navbar')

    @yield('content')

    @include('Layouts.footer')

    @include('Layouts.scripts')

</body>

</html>