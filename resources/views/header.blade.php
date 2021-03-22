<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coronavirus Medical Prevention</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">

    <!-- plugin scripts -->

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700%7CBarlow:300,400,500,600,700,800,900%7CPT+Sans:400,700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="assets/css/vimns-icons.css">



    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <style type="text/css">

    </style>







</head>

<body>
    <div class="preloader">
        <img src="assets/images/loader.png" class="preloader__image" alt="">
    </div><!-- /.preloader -->
    <div class="page-wrapper">

        <header class="site-header-one">
            <nav class="main-nav__one stricky">
                <div class="container-fluid">
                    <div class="main-nav__logo-box">
                        <a href="index">
                            <img width="137" src="assets/images/logo-1-1.png" alt="">
                        </a>
                        <a href="#" class="side-menu__toggler"><i class="fa fa-bars"></i></a>
                    </div><!-- /.main-nav__logo-box -->
                    <div class="main-nav__main-navigation">
                        <ul class=" main-nav__navigation-box">
                            <li >
                                <a href="/">Home</a>
                              
                            </li>
                            <li>
                                <a href="about">About</a>
                            </li>
                            <li>
                                <a href="prevention">Preventions</a>
                            </li>
                            <li>
                                <a href="faq">FAQs</a>
                            </li>

                            <li>
                                <a href="blog">News</a>
                              
                            </li>
                            <li>
                                <a href="contact">Contact</a>
                            </li>
                        </ul>
                    </div><!-- /.main-nav__main-navigation -->
                    <div class="main-nav__cta">
                        <div class="main-nav__cta-icon">
                            <i class="vimns-icon-phone"></i>
                        </div><!-- /.main-nav__cta-icon -->
                        <div class="main-nav__cta-content">
                            <h3><a href="tel:666-888-0000">666 888 0000</a></h3>
                            <p>Helpline</p>
                        </div><!-- /.main-nav__cta-content -->
                    </div><!-- /.main-nav__cta -->
                    <div class="main-nav__right">
                         @guest
                            <li style="list-style:none" class="nav-item">
                                <a  class="main-nav__btn" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li style="list-style:none" class="nav-item">
                                    <a  class="main-nav__btn" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li style="list-style:none" class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <a  class="main-nav__btn" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}</a> 
                        @endguest


                       <!--  <a href="login" class="main-nav__btn">Login</a> --><!-- /.main-nav__btn -->
                    </div><!-- /.main-nav__right -->
                </div><!-- /.container-fluid -->
            </nav><!-- /.main-nav__one -->

        </header><!-- /.site-header-one -->