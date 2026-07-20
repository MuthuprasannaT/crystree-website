<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', 'Crystree Solutions Pvt Ltd | Software Development Company in Trichy')</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Crystree Solutions Pvt Ltd is a leading Software Development Company in Trichy offering Website Development, Mobile App Development, ERP Software, CRM Software, Digital Marketing, SEO Services and E-Commerce Solutions.">

    <meta name="keywords" content="Software Development Company Trichy, Website Development Trichy, Mobile App Development, ERP Software, CRM Software, SEO Services, Digital Marketing, E-Commerce Solutions">

    <meta name="author" content="Crystree Solutions Pvt Ltd">
    <meta name="robots" content="index,follow">

    <meta property="og:title" content="Crystree Solutions Pvt Ltd">
    <meta property="og:description" content="Software Development, Mobile App Development, ERP Solutions, Digital Marketing and SEO Services.">
    <meta property="og:image" content="{{ asset('assets/img/logo/newlogo1.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="google-site-verification" content="HXG6BBcWmnmiDcOOC21f3hhMV_SqjK_wdEpN7a_oEmM">

    <link rel="canonical" href="{{ url()->current() }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5/dist/fancybox/fancybox.css">

    @include('Layouts.header')
</head>

<body class="page vs-home2 bg-theme-8">
    <div class="preloader">
        <div class="preloader-inner">
            <img src="{{ asset('assets/img/logo/Logo.png') }}" alt="Best Software company in tamilnadu"loading="lazy"  width="300"
     height="300" >
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
    width: 45px;
    height: 45px;
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
    width: 45px;
    height: 45px;
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
        width:45px;
        height:45px;
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


<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5/dist/fancybox/fancybox.umd.js"></script>

<script>
Fancybox.bind("[data-fancybox='gallery']", {

    Hash: false, // Disable Fancybox's default #gallery-7

    Thumbs: {
        autoStart: false
    },

    Toolbar: {
        display: {
            left: [],
            middle: ["zoomIn", "zoomOut", "toggle1to1"],
            right: ["slideshow", "fullscreen", "close"]
        }
    },

    on: {
        reveal: (fancybox, slide) => {

            const slug = slide.triggerEl?.dataset.slug;

            if (slug) {
                history.replaceState(null, "", "#" + slug);
            }
        },

        destroy: () => {
            history.replaceState(null, "", window.location.pathname);
        }
    }

});
</script>

<!-- Google analytics link added -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GY4Q89LPNB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GY4Q89LPNB');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MP3BQ7B7');</script>
<!-- End Google Tag Manager -->
 <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MP3BQ7B7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="cookieConsent" class="cookie-consent shadow-lg">
    <div class="container">
        <div class="row align-items-center g-3">
            <div class="col-lg-8">
                <div class="d-flex align-items-start">
                    <div class="cookie-icon me-3">
                        🍪
                    </div>

                    <div>
                        <h5 class="mb-2 fw-bold">We Value Your Privacy</h5>

                        <p class="mb-0">
                            We use cookies to improve your browsing experience,
                            analyze website traffic, and personalize content.
                            By clicking <strong>Accept</strong>, you agree to our use of cookies.
                            You can choose <strong>Reject</strong> to use only essential cookies.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 text-lg-end text-center">
                <button class="btn btn-outline-secondary me-2 mb-2 mb-lg-0"
                        id="rejectCookies">
                    Reject
                </button>

                <button class="btn btn-danger"
                        id="acceptCookies">
                    Accept
                </button>
            </div>
        </div>
    </div>
</div>
<style>
  /*=========================================
    COOKIE CONSENT
=========================================*/

.cookie-consent{
    position: fixed;
    bottom: 20px;
    left: 20px;
    right: 20px;
    z-index: 99999;
    display: none;
    background: linear-gradient(135deg,#ffffff 0%,#f8fafc 100%);
    border-radius: 20px;
    border: 1px solid rgba(220,38,38,.12);
    box-shadow:
        0 20px 60px rgba(15,23,42,.18),
        0 8px 20px rgba(220,38,38,.08);
    overflow: hidden;
    animation: cookieFade .5s ease;
}

.cookie-consent::before{
    content:"";
    position:absolute;
    left:0;
    top:0;
    bottom:0;
    width:6px;
    background:linear-gradient(180deg,#85ff03 ,#85ff03 );
}

.cookie-consent .container{
    padding:24px 30px;
}

.cookie-icon{
    width:65px;
    height:65px;
    min-width:65px;
    border-radius:18px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:32px;
    background:linear-gradient(135deg,#85ff03,#85ff03);
    color:#fff;
    box-shadow:0 10px 25px rgba(220,38,38,.25);
}

.cookie-consent h5{
    color:#111827;
    font-size:24px;
    margin-bottom:8px;
    font-weight:700;
}

.cookie-consent p{
    color:#6B7280;
    line-height:1.7;
    font-size:15px;
    margin:0;
}

.cookie-consent strong{
    color:#84ff00;
}

/* Buttons */

.cookie-consent .btn{
    min-width:140px;
    padding:12px 24px;
    border-radius:12px;
    font-weight:600;
    transition:.35s;
}

.cookie-consent .btn-danger{
    background:#85ff03 ;
    border:none;
    box-shadow:0 8px 20px rgba(90, 220, 38, 0.25);
}

.cookie-consent .btn-danger:hover{
    background:#0e0606;
    transform:translateY(-2px);
}

.cookie-consent .btn-outline-secondary{
    border:2px solid #D1D5DB;
    color:#374151;
    background:#fff;
}

.cookie-consent .btn-outline-secondary:hover{
    background:#F3F4F6;
    color:#111827;
    border-color:#9CA3AF;
}

/* Floating Decoration */

.cookie-consent::after{
    content:"";
    position:absolute;
    right:-70px;
    top:-70px;
    width:180px;
    height:180px;
    background:rgba(220,38,38,.05);
    border-radius:50%;
}

/* Animation */

@keyframes cookieFade{

    from{
        opacity:0;
        transform:translateY(50px);
    }

    to{
        opacity:1;
        transform:translateY(0);
    }

}

/* Mobile */

@media(max-width:991px){

    .cookie-consent{
        left:15px;
        right:15px;
        bottom:15px;
    }

    .cookie-consent .container{
        padding:20px;
    }

    .cookie-icon{
        width:55px;
        height:55px;
        min-width:55px;
        font-size:26px;
    }

    .cookie-consent h5{
        font-size:20px;
    }

    .cookie-consent p{
        font-size:14px;
    }

    .cookie-consent .btn{
        width:100%;
        margin-top:10px;
    }

}

@media(max-width:576px){

    .cookie-consent{
        border-radius:16px;
    }

    .cookie-consent .container{
        padding:18px;
    }

    .cookie-icon{
        display:none;
    }

    .cookie-consent h5{
        font-size:18px;
    }

}
</style>


<script>
document.addEventListener("DOMContentLoaded", function () {

    const banner = document.getElementById("cookieConsent");

    const consent = localStorage.getItem("cookieConsent");

    if (!consent) {
        banner.style.display = "block";
    }

    function getVisitorID(){

        let visitor = localStorage.getItem("visitor_id");

        if(!visitor){

            visitor = "VISITOR_" + Date.now() + "_" + Math.random().toString(36).substring(2,10);

            localStorage.setItem("visitor_id",visitor);
        }

        return visitor;
    }

    function sendVisitor(status){

        localStorage.setItem("cookieConsent",status);

        fetch("/cookie-consent/store",{

            method:"POST",

            headers:{
                "Content-Type":"application/json",
                "X-CSRF-TOKEN":document.querySelector('meta[name="csrf-token"]').content
            },

            body:JSON.stringify({

                visitor_id:getVisitorID(),

                browser:navigator.userAgent,

                device:/Mobi|Android/i.test(navigator.userAgent)
                    ? "Mobile"
                    : "Desktop",

                platform:navigator.platform,

                language:navigator.language,

                screen:screen.width + "x" + screen.height,

                timezone:Intl.DateTimeFormat().resolvedOptions().timeZone,

                page:window.location.href,

                referrer:document.referrer,

                cookie_status:status

            })

        })

        .then(response=>response.json())

        .then(data=>{

            console.log("Visitor Saved :",data);

            banner.style.display="none";

        })

        .catch(error=>{

            console.log(error);

        });

    }

    document.getElementById("acceptCookies").addEventListener("click",function(){

        sendVisitor("accepted");

    });

    document.getElementById("rejectCookies").addEventListener("click",function(){

        sendVisitor("rejected");

    });

});
</script>

{{-- <script>
document.addEventListener("DOMContentLoaded", function () {

    const consent = localStorage.getItem("cookieConsent");
    const banner = document.getElementById("cookieConsent");

    if (!consent) {
        banner.style.display = "block";
    }

    document.getElementById("acceptCookies").addEventListener("click", function () {
        localStorage.setItem("cookieConsent", "accepted");
        banner.style.display = "none";

        // Initialize analytics or tracking scripts here if needed
    });

    document.getElementById("rejectCookies").addEventListener("click", function () {
        localStorage.setItem("cookieConsent", "rejected");
        banner.style.display = "none";

        // Keep only essential cookies
    });

});
</script> --}}


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GY4Q89LPNB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GY4Q89LPNB');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MP3BQ7B7');</script>
<!-- End Google Tag Manager -->


</body>

</html>