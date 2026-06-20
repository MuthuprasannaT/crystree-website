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
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600;700&display=swap" rel="stylesheet">
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @include('Layouts.header')
</head>

<body class="page vs-home2 bg-theme-8">
    <div class="preloader">
        <div class="preloader-inner">
            <img src="{{ asset('assets/img/logo/free_loaded.png') }}" alt="Best Software company in tamilnadu"loading="lazy">
            <span class="vs-loader"></span>
        </div>
    </div>

    @include('Layouts.mobile-menu')

    @include('Layouts.navbar')

    @yield('content')

    @include('Layouts.footer')

    @include('Layouts.scripts')
<div class="floating-buttons">
    
    <!-- WhatsApp -->
    <a href="https://wa.me/919566968212" target="_blank" class="float-btn whatsapp-btn">
        <i class="fab fa-whatsapp"></i>
    </a>

    <a href="tel:+916381324611" class="call-btn">
       <img src="{{ asset('assets/img/sticky/telephone.png') }}" alt="Call Us" width="60">
    </a>
    <!-- Scroll Top -->
    <button id="scrollTopBtn" class="float-btn top-btn">
        <i class="fas fa-angle-up up" ></i>
    </button>

</div>

<style>
 .floating-buttons{
    position: fixed;
    right: 25px;
    bottom: 30px;
    z-index: 99999;
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.float-btn{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display:flex;
    align-items:center;
    justify-content:center;
    text-decoration:none;
    color:#fff;
    font-size:30px;
    box-shadow:0 5px 15px rgba(0,0,0,.25);
    transition:.3s;
}


.float-btn:hover{
    transform:translateY(-4px);
    color:#fff;
}

.whatsapp-btn{
    background:#25D366;
}

.call-btn img{
    width: 50px;
    height: 50px;
    border-radius: 50%;
}

.top-btn{
    background: linear-gradient(90deg, #011548 0%, #85ff03 100%);
    border:none;
    cursor:pointer;
    display: none; /* Hide initially */
}

@media(max-width:768px){
    .floating-buttons{
        right:15px;
        bottom:20px;
    }

    .float-btn{
        width:55px;
        height:55px;
        font-size:24px;
    }
}
</style>

<script>
const scrollTopBtn = document.getElementById("scrollTopBtn");

// Show button only after scrolling 300px
window.addEventListener("scroll", function () {
    if (window.scrollY > 300) {
        scrollTopBtn.style.display = "flex";
    } else {
        scrollTopBtn.style.display = "none";
    }
});

// Scroll to top
scrollTopBtn.addEventListener("click", function () {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});
</script>
    


</body>

</html>