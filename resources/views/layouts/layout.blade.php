<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Resume Builder - resumeAI</title>
    <link rel="shortcut icon" href="#">
    <link rel="apple-touch-icon"
          href="#">
    <link rel="apple-touch-icon" sizes="72x72"
          href="#">
    <link rel="apple-touch-icon" sizes="114x114"
          href="#">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css"
          integrity="sha512-6f7HT84a/AplPkpSRSKWqbseRTG4aRrhadjZezYQ0oVk/B+nm/US5KzQkyyOyh0Mn9cyDdChRdS9qaxJRHayww=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="{{asset('css/css.css')}}" rel="stylesheet">
    <link href="{{asset('css/all.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/template.css')}}" rel="stylesheet">
</head>
<body class="">

<div class="page-loader" style="display: none;">
    <div class="page-loader-inner">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div>

<header class="header header-transparent">
    <div class="container-fluid">
        <div class="inner-header"><a class="inner-brand"
                                     href="{{route('home')}}">resumeAI</a></div>
        <!-- Navigation-->
        <div class="inner-navigation collapse">
            <div class="inner-nav">
                <ul>
                    <li class="menu-item-has-children menu-item-has-mega-menu"><a href="#"><span class="menu-item-span">Home</span></a>
                        <div class="mega-menu">
                            <ul class="sub-menu mega-menu-row" data-background="assets/images/menu-3.jpg"
                                style="background-image: url(&quot;assets/images/menu-3.jpg&quot;);">
                                <!-- Column 1-->
                                <li class="menu-item-has-children mega-menu-col"><a href="#">Multi Page</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="#">Parallax</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item-has-children"><a href="#"><span class="menu-item-span">AI</span></a>
                        <ul class="sub-menu">
                            <li><a href="{{route('removebg')}}">Remove Background</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="{{route('examples')}}"><span class="menu-item-span">Examples</span></a>
                    <li class="menu-item"><a href="#start"><span class="menu-item-span">Pricing</span></a>
                    <li class="menu-item"><a href="{{route('blog')}}"><span class="menu-item-span">Blog</span></a>
                    <li class="menu-item"><a href="{{route('faq')}}"><span class="menu-item-span">FAQ</span></a>
                    </li>
                    @if (auth()->check())
                        @if (Route::currentRouteName() == 'main')
                            <li class="menu-item-span-mobile">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <span class="menu-item-span">LOGOUT</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @else
                            <li class="menu-item-span-mobile">
                                <a href="{{route('main')}}"><span class="menu-item-span"><i class="ti-user" style="padding-right: 8px"></i>{{ auth()->user()->name }}</span></a>
                            </li>
                        @endif
                    @else
                        <li class="menu-item-span-mobile">
                            <a href="{{route('login')}}"><span class="menu-item-span">LOGIN</span></a>
                        </li>
                        <li class="menu-item-span-mobile">
                            <a href="{{route('register')}}"><span class="menu-item-span">REGISTER</span></a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="extra-nav">
            <ul>
                <li><a class="off-canvas-open" href="#"><span class="menu-item-span"><i class="ti-menu"></i></span></a>
                </li>
                <li class="nav-toggle"><a href="#" data-toggle="collapse" data-target=".inner-navigation"><span
                            class="menu-item-span"><i class="ti-menu"></i></span></a></li>
            </ul>
        </div>
        <div class="dop-nav">
            @if (auth()->check())
                <ul>
                    <li>
                        <a class="nav-toggles" href="{{ route('main') }}">
                            <span class="menu-item-span"><i class="ti-user" style="padding-right: 8px"></i>{{ auth()->user()->name }}</span>
                        </a>
                    </li>
{{--                    <li><a class="nav-toggles" href="{{route('logout')}}"><span class="menu-item-span">LOGOUT</span></a>--}}
                </ul>
            @else
                <ul>
                    <li>
                        <a class="nav-toggles" href="{{route('create')}}"><span class="menu-item-span"><button type="button" class="btn btn-primary" style="margin-top: 0!important; border-radius: 10px!important;">Створюй резюме!</button></span></a>
                    </li>
                </ul>
            @endif
        </div>
    </div>
</header>
<!-- Header end-->

<!-- Wrapper-->
<div class="wrapper">
    <div id="app">
        @yield('content')
    </div>
    <!-- Footer-->
    <footer class="footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <!-- Text widget-->
                        <aside class="widget widget-text">
                            <div class="widget-title">
                                <h6>Про нас</h6>
                            </div>
                            <div class="textwidget">
                                <p>Ми допомагаємо вам створити ідеальне резюме, яке відповідає найвищим стандартам. Використовуйте штучний інтелект, щоб адаптувати своє резюме під конкретні вакансії та збільшити шанси на успіх.</p>
                                <ul class="social-icons">
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <div class="col-md-3">
                        <!-- Recent works-->
                        <aside class="widget widget-recent-works">
                            <div class="widget-title">
                                <h6>Портфоліо</h6>
                            </div>
                            <ul>
                                <li><a href="#"><img src="{{asset('image/1_002.jpg')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('image/2_002.jpg')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('image/3_004.jpg')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('image/7.jpg')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('image/8.jpg')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('image/6.jpg')}}" alt=""></a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-md-3">
                        <!-- Twitter widget-->
                        <aside class="widget twitter-feed-widget">
                            <div class="widget-title">
                                <h6>Контакти</h6>
                            </div>
                            <div class="textwidget">
                                <p>
                                    Location: location<br>
                                    E-mail: support@gmail.com<br>
                                    Phone: 9 000 000 0000<br>
                                </p>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>© 2024 ResumeAI, All Rights Reserved. TESTING PROCCESS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer end-->
</div>
<!-- Wrapper end-->
<!-- Off canvas-->
<div class="off-canvas-sidebar">
    <div class="off-canvas-sidebar-wrapper" style="margin-right: 0px;">
        <div class="off-canvas-header"><a class="off-canvas-close" href="#"><span class="ti-close"></span></a></div>
        <div class="off-canvas-content">
            <!-- Text widget-->
            <aside class="widget widget-text">
                <div class="textwidget">
                    <p class="text-center"><img src="{{asset('image/logo-light-2.png')}}" alt="" width="80px"></p>
                    <p class="text-center">See how users experience your website in realtime to see changes.</p>
                </div>
            </aside>
            <!-- Recent portfolio widget-->
            <aside class="widget widget-recent-works">
                <ul>
                    <li><a href="#"><img src="{{asset('image/1_002.jpg')}}" alt=""></a></li>
                    <li><a href="#"><img src="{{asset('image/2_002.jpg')}}" alt=""></a></li>
                    <li><a href="#"><img src="{{asset('image/3_004.jpg')}}" alt=""></a></li>
                    <li><a href="#"><img src="{{asset('image/4_002.jpg')}}" alt=""></a></li>
                    <li><a href="#"><img src="{{asset('image/5_002.jpg')}}" alt=""></a></li>
                    <li><a href="#"><img src="{{asset('image/6.jpg')}}" alt=""></a></li>
                    <li><a href="#"><img src="{{asset('image/7.jpg')}}" alt=""></a></li>
                    <li><a href="#"><img src="{{asset('image/8.jpg')}}" alt=""></a></li>
                    <li><a href="#"><img src="{{asset('image/9.jpg')}}" alt=""></a></li>
                </ul>
            </aside>
            <ul class="social-icons text-center">
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
            </ul>
        </div>
    </div>
</div>

<a class="scroll-top" href="#top"><i class="ti-arrow-up"></i></a>
@vite(['resources/js/app.js'])
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugins.min.js')}}"></script>
<script src="{{asset('js/custom.min.js')}}"></script>
</body>
</html>
