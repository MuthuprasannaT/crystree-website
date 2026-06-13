<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', 'Crystree Solutions Pvt Ltd | Software Development Company in Trichy')</title>

<meta name="description"content="Crystree Solutions Pvt Ltd is a leading Software Development Company in Trichy offering Website Development, Mobile App Development, ERP Software, CRM Software, Digital Marketing, SEO Services and E-Commerce Solutions.">
<meta name="keywords"content="Software Development Company Trichy, Website Development Trichy, Mobile App Development, ERP Software, CRM Software, SEO Services, Digital Marketing, E-Commerce Solutions">
<meta name="author" content="Crystree Solutions Pvt Ltd">
<meta name="robots" content="index, follow">
<meta property="og:title" content="Crystree Solutions Pvt Ltd">
<meta property="og:description"content="Software Development, Mobile App Development, ERP Solutions, Digital Marketing and SEO Services.">
<meta property="og:image" content="{{ asset('assets/img/logo/newlogo1.png') }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="website">
<link rel="canonical" href="{{ url()->current() }}">
    @include('Layouts.header')
</head>

<body class="page vs-home2 bg-theme-8">
    <div class="preloader">
        <div class="preloader-inner">
            <img src="{{ asset('assets/img/logo/free_loaded.png') }}" alt="Best Software company in tamilnadu">
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