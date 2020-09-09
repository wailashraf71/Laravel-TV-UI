<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel TV UI</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link type="text/css" href="{{asset('css/style.css')}}" media="all" rel="stylesheet"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.5.10/plyr.css"/>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <link href="{{asset('css/owl.carousel.min.css')}}" type="text/css" media="all" rel="stylesheet"/>

</head>
<body dir="rtl">

<!-- Header -->
<header class="header">
    <div class="header__wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="header__content">
                        <!-- header logo -->
                        <a href="{{url('/')}}" class="header__logo">
                            <img src="{{asset('images/logo.png')}}" alt="">
                        </a>
                        <!-- end header logo -->

                        <!-- header nav -->
                        <ul class="header__nav">
                            <li class="header__nav-item">
                                <a class="header__nav-link {{ Request::segment(1) === 'home' ? 'nav_active' : null }}"
                                   href="{{url('home')}}" role="button">{{ __('tr.home') }}</a>
                            </li>
                            <li class="header__nav-item">
                                <a class="header__nav-link {{ Request::segment(1) === 'news' ? 'nav_active' : null }}"
                                   href="{{url('news')}}" role="button">{{ __('tr.news') }}</a>
                            </li>
                            <li class="header__nav-item">
                                <a class="header__nav-link {{ Request::segment(1) === 'sport' ? 'nav_active' : null }}"
                                   href="{{url('sport')}}" role="button">{{ __('tr.sport') }}</a>
                            </li>
                            <li class="header__nav-item">
                                <a class="header__nav-link {{ Request::segment(1) === 'action' ? 'nav_active' : null }}"
                                   href="{{url('action')}}" role="button">{{ __('tr.action') }}</a>
                            </li>
                            <li class="header__nav-item">
                                <a class="header__nav-link {{ Request::segment(1) === 'kids' ? 'nav_active' : null }}"
                                   href="{{url('kids')}}" role="button">{{ __('tr.kids') }}</a>
                            </li>
                        </ul>


                        <!-- header auth -->
                        <div class="header__auth px-lg-5">
                            <div class="search px-lg-4">
                                <button type="submit" class="searchButton">
                                    <i class="fa fa-search"></i>
                                </button>
                                <input type="text" class="searchTerm" placeholder="{{ __('tr.search_hint') }}">
                            </div>
                        </div>
                        <!-- end header auth -->

                        <!-- header menu btn -->
                        <button class="header__btn" type="button">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <!-- end header menu btn -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- /Header -->


<!-- Content -->
<div class="content">
    @yield('content')

</div>
<!-- /Content -->

<br>
<br>
<!-- Site footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- footer list -->
            <div class="col-12 col-md-3">
                <h6 class="footer__title">{{ __('tr.download_app') }}</h6>
                <ul class="footer__app">
                    <li><a href="#"><img src="{{asset('images/Download_on_the_App_Store_Badge.png')}}" alt=""></a></li>
                    <li><a href="#"><img src="{{asset('images/google-play-badge.png')}}" alt=""></a></li>
                </ul>
            </div>
            <!-- end footer list -->

            <!-- footer list -->
            <div class="col-6 col-sm-4 col-md-3">
                <h6 class="footer__title">{{ __('tr.legal') }}</h6>
                <ul class="footer__list">
                    <li><a href="#">{{ __('tr.about') }}</a></li>
                    <li><a href="#">{{ __('tr.terms') }}</a></li>
                </ul>
            </div>
            <!-- end footer list -->

            <!-- footer list -->
            <div class="col-12 col-sm-4 col-md-3">
                <h6 class="footer__title">{{ __('tr.contact') }}</h6>
                <ul class="footer__list">
                    <li><a href="tel:+9647701234567">0770-123-4567</a></li>
                    <li><a href="mailto:email@example.com">email@example.com</a></li>
                </ul>
                <ul class="footer__social">
                    <li class="facebook"><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                    <li class="instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="whatsapp"><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                </ul>
            </div>
            <!-- end footer list -->
            <div class="col-12">
                <div class="footer__copyright" style="justify-content: flex-end; text-align: end;">
                    <small><a target="_blank" href="https://github.com/wailashraf71">Created by <h4>Genius
                                Solutions</h4></a></small>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /Site footer -->

<!-- Scripts -->
<script src="{{asset('js/app.js')}}" charset="utf-8"></script>
<!--Jquery -->
<script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>


@yield('scripts')

<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
<!-- /Scripts -->

</body>
</html>
