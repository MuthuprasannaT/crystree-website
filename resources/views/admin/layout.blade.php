<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') | Crystree Admin Panel</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/admin-custom.css') }}">

    <!-- Summernote Rich Text Editor CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    @yield('styles')

    <style>
        /* ── Fixed-sidebar, right-scroll layout ── */
        html, body {
            height: 100%;
            margin: 0;
            overflow: hidden;          /* prevent body scroll */
        }

        .admin-wrapper {
            display: flex;
            height: 100vh;
            overflow: hidden;
        }

        /* ── Sidebar ── */
        .admin-sidebar {
            width: 240px;
            min-width: 240px;
            height: 100vh;
            display: flex !important;
            flex-direction: column;
            overflow: hidden;
            position: fixed;
            left: 0;
            top: 0;
            z-index: 1000;
            background-color: var(--primary-color) !important;
            box-shadow: 4px 0 16px rgba(0,0,0,.15);
        }

        /* Logo area – never scrolls */
        .sidebar-logo {
            flex-shrink: 0;
            padding: 18px 16px 16px;
            text-align: center;
            background-color: var(--primary-color);
            border-bottom: 1px solid rgba(255,255,255,.1);
        }
        .sidebar-logo img {
            max-height: 42px;
        }

        /* Nav list – scrolls if many items */
        .sidebar-nav {
            flex: 1;
            overflow-y: auto;
            overflow-x: hidden;
            padding: 10px 0;
        }
        .sidebar-nav::-webkit-scrollbar { width: 4px; }
        .sidebar-nav::-webkit-scrollbar-thumb { background: rgba(255,255,255,.15); border-radius: 4px; }

        /* ── Main content panel ── */
        .admin-content {
            margin-left: 240px;
            flex: 1;
            height: 100vh;
            overflow-y: auto;          /* ONLY this panel scrolls */
            display: flex;
            flex-direction: column;
        }

        /* Top bar */
        .admin-topbar {
            flex-shrink: 0;
            position: sticky;
            top: 0;
            z-index: 900;
            background: #fff;
            border-bottom: 2px solid var(--premium-gold);
            padding: 12px 28px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 6px rgba(0,0,0,.05);
        }

        /* Scrollable page body */
        .admin-page-body {
            flex: 1;
            padding: 28px;
            background-color: #f4f6fb;
        }

        footer.admin-footer {
            flex-shrink: 0;
            padding: 16px 28px;
            text-align: center;
            color: #999;
            font-size: .85rem;
            border-top: 1px solid #e0e0e0;
            background: #fff;
        }

        /* Mobile: sidebar becomes a slide-in drawer */
        @media (max-width: 767.98px) {
            .admin-sidebar {
                transform: translateX(-100%);
                transition: transform .25s ease;
            }
            .admin-sidebar.sidebar-open {
                transform: translateX(0);
            }
            .admin-content {
                margin-left: 0;
            }
            .admin-page-body {
                padding: 18px 14px;
            }
        }
    </style>
</head>
<body>

<div class="admin-wrapper">

    {{-- ══════════════ SIDEBAR ══════════════ --}}
    <nav class="admin-sidebar" id="adminSidebar">

        {{-- Fixed logo at very top --}}
        <div class="sidebar-logo">
            <a href="{{ route('admin.dashboard') }}">
                <img src="{{ asset('assets/img/logo/newlogo1.png') }}" alt="Crystree Logo" style="border-radius:10px">
            </a>
        </div>

        {{-- Scrollable nav links --}}
        <div class="sidebar-nav">
            <ul class="nav flex-column mt-1">
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('admin.dashboard') ? 'active' : '' }}"
                       href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('admin.contact-us.*') ? 'active' : '' }}"
                       href="{{ route('admin.contact-us.index') }}">
                        <i class="fas fa-envelope"></i> Contact Us
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('admin.testimonials.*') ? 'active' : '' }}"
                       href="{{ route('admin.testimonials.index') }}">
                        <i class="fas fa-quote-left"></i> Testimonials
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('admin.faqs.*') ? 'active' : '' }}"
                       href="{{ route('admin.faqs.index') }}">
                        <i class="fas fa-question-circle"></i> FAQ
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('admin.blogs.*') ? 'active' : '' }}"
                       href="{{ route('admin.blogs.index') }}">
                        <i class="fas fa-blog"></i> Blog
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('admin.bts.*') ? 'active' : '' }}"
                       href="{{ route('admin.bts.index') }}">
                        <i class="fas fa-film"></i> BTS
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('admin.gallery.*') ? 'active' : '' }}"
                       href="{{ route('admin.gallery.index') }}">
                        <i class="fas fa-images"></i> Gallery
                    </a>
                </li>

                <li class="nav-item" style="margin-top: 24px; border-top: 1px solid rgba(255,255,255,.1); padding-top: 8px;">
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST">
                        @csrf
                    </form>
                    <a class="nav-link" style="color: #ff6b6b !important;"
                       href="#"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    {{-- ══════════════ MAIN CONTENT ══════════════ --}}
    <div class="admin-content" id="adminContent">

        {{-- Sticky top bar --}}
        <div class="admin-topbar">
            <div class="d-flex align-items-center gap-3">
                {{-- Mobile hamburger --}}
                <button class="btn btn-sm btn-outline-secondary d-md-none"
                        id="sidebarToggleBtn"
                        type="button" aria-label="Toggle sidebar">
                    <i class="fas fa-bars"></i>
                </button>
                <h5 class="m-0 fw-bold text-dark">@yield('page_header', 'Dashboard')</h5>
            </div>

            <div class="d-flex align-items-center gap-3">
                <span class="text-secondary d-none d-sm-inline small">
                    Logged in as&nbsp;<strong>Admin</strong>
                </span>
                <a href="#" class="btn btn-sm btn-outline-danger"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-power-off me-1"></i> Logout
                </a>
            </div>
        </div>

        {{-- Page body --}}
        <div class="admin-page-body">

            {{-- Flash messages --}}
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fas fa-exclamation-circle me-2"></i> {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    <strong>Whoops! Something went wrong.</strong>
                    <ul class="mb-0 mt-2">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- Module content injected here --}}
            @yield('content')
        </div>

        <footer class="admin-footer">
            &copy; {{ date('Y') }} Crystree Solutions. All Rights Reserved.
        </footer>
    </div>{{-- /admin-content --}}

</div>{{-- /admin-wrapper --}}

<!-- JS Scripts -->
<script src="{{ asset('js/vendor/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

<!-- Summernote Rich Text Editor JS -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script>
    // ── Mobile sidebar toggle ──
    document.getElementById('sidebarToggleBtn')?.addEventListener('click', function () {
        document.getElementById('adminSidebar').classList.toggle('sidebar-open');
    });

    // ── Global Summernote initialisation ──
    // Any <textarea> with class "rich-editor" will become a rich-text editor.
    $(document).ready(function () {
        $('.rich-editor').summernote({
            height: 300,
            toolbar: [
                ['style',   ['style']],
                ['font',    ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
                ['fontname',['fontname']],
                ['fontsize',['fontsize']],
                ['color',   ['color']],
                ['para',    ['ul', 'ol', 'paragraph']],
                ['table',   ['table']],
                ['insert',  ['link', 'picture', 'video', 'hr']],
                ['view',    ['fullscreen', 'codeview', 'undo', 'redo', 'help']],
            ],
            fontNames: ['Arial','Courier New','Georgia','Inter','Outfit','Times New Roman','Verdana'],
            popover: {
                image: [
                    ['image',   ['resizeFull','resizeHalf','resizeQuarter','resizeNone']],
                    ['float',   ['floatLeft','floatRight','floatNone']],
                    ['remove',  ['removeMedia']],
                ],
                link: [['link', ['linkDialogShow', 'unlink']]],
                table: [
                    ['add',     ['addRowDown','addRowUp','addColLeft','addColRight']],
                    ['delete',  ['deleteRow','deleteCol','deleteTable']],
                ],
            },
            callbacks: {
                // Keep the textarea value in sync so Laravel can pick it up on submit
                onChange: function (contents) {
                    $(this).val(contents);
                }
            }
        });
    });
</script>

@yield('scripts')
</body>
</html>
