<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Zakas - Fashion eCommerce </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/img/icon.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- ************************* CSS Files ************************* -->

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.css')}}">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('public/assets/css/vendor.css')}}">

    <!-- style css -->
    <link rel="stylesheet" href="{{asset('public/assets/css/main.css')}}">
    <style>
        .selected {
            border: 1px solid white!important; 
            background-color:#c2080f!important;
            color:white!important
            /* Set the border style as needed */
        }
    </style>
</head>

<body>

    <!-- Preloader Start -->
    <div class="zakas-preloader active">
        <div class="zakas-preloader-inner h-100 d-flex align-items-center justify-content-center">
            <div class="zakas-child zakas-bounce1"></div>
            <div class="zakas-child zakas-bounce2"></div>
            <div class="zakas-child zuka-bounce3"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Main Wrapper Start -->
    <div class="wrapper">
        <!-- Header Start -->
        <header class="header">
            <div class="header-topbar">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-5 text-center text-lg-start">
                            <p class="font-weight-light">Welcome to “IDA Fahion”</p>
                        </div>
                        <div class="col-md-7 text-center text-lg-end">
                            <ul class="header-contact-list list-inline">
                                <li class="list-inline-item"><i class="fa fa-phone"></i><span>+98 558 547 589</span></li>
                                <li class="list-inline-item"><i class="fa fa-envelope"></i><a href="mailto:education@email">education@email.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- x-layout.blade.php -->



            <div class="header-inner fixed-header bg-color" data-bg-color="#f6ece4">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-10 col-lg-9 col-3">
                            <nav class="main-navigation">
                                <div class="site-branding">
                                    <a href="{{url('/index')}}" class="logo">
                                      <h3>  IDA FASHION</h3>
                                        <!--<figure class="logo--transparent">
                                            <img src="{{asset('public/assets/img/logo/logo-white.png')}}" alt="Logo">
                                        </figure>
                                        <figure class="logo--normal">
                                            <img src="{{asset('public/assets/img/logo/logo.png')}}" alt="Logo">
                                        </figure>-->
                                    </a>
                                </div>
                                <div class="mainmenu-nav d-none d-lg-block">
                                    <ul class="mainmenu">
                                        <li class="mainmenu__item menu-item-has-children active">
                                            <a href="{{url('/index')}}" class="mainmenu__link">
                                                <span class="mm-text">Home</span>
                                            </a>
                                           
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children">
                                            <a href="{{url('/shop')}}" class="mainmenu__link">
                                                <span class="mm-text">Shop</span>
                                            </a>
                                          
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children">
                                            <a href="{{url('/about')}}" class="mainmenu__link">
                                                <span class="mm-text">About</span>
                                            </a>
                                           
                                        </li>
                                        
                                        <li class="mainmenu__item">
                                            <a href="{{url('/contact')}}" class="mainmenu__link">
                                                <span class="mm-text">Contact Us</span>
                                            </a>
                                        </li>
                                        @if(empty(session('auth')))
                                        
                                        <li class="mainmenu__item">
                                            <a href="#miniCart" class="  mainmenu__link mini-cart-btn header-toolbar__btn toolbar-btn ">
                                               login
                                            </a>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-9 text-end">
                            <ul class="header-toolbar">
                                @if(!empty(session('auth'))) <li class="header-toolbar__item">
                                    <a href="{{url('/wishlistuser')}}" class="header-toolbar__btn  mini-cart-btn">
                                        <i class="flaticon flaticon-like"></i>
                                        <sup class="mini-cart-count">{{ $wishlistcount}}</sup>
                                    </a>
                                </li>
                               
                                <li class="header-toolbar__item mini-cart-item">
                                    <a href="{{url('/cart')}}" class="header-toolbar__btn  mini-cart-btn">
                                        <i class="flaticon flaticon-shopping-cart"></i>
                                        <sup class="mini-cart-count">{{ $cartcount}}</sup>
                                    </a>
                                </li>
                                @endif
                                @if(!empty(session('auth')))
                                <li class="header-toolbar__item user-info">
                                    <a href="#" class="header-toolbar__btn">
                                        <i class="flaticon flaticon-user"></i>
                                    </a>
                                    <ul class="user-info-menu">
                                        <li>
                                            <a href="{{url('/my_account')}}">My Account</a>
                                        </li>
                                        <li>
                                            <a href="{{url('/cart')}}">Shopping Cart</a>
                                        </li>
                                       
                                        <li>
                                            <a href="{{url('/wishlistuser')}}">Wishlist</a>
                                        </li>
                                        
                                        <li>
                                            <a href="{{url('/logout')}}">Logout</a>
                                        </li>
                                    </ul>
                                </li>
                                @endif
                                <!--<li class="header-toolbar__item">
                                    <a href="#searchForm" class="header-toolbar__btn toolbar-btn">
                                        <i class="flaticon flaticon-search"></i>
                                    </a>
                                </li>-->
                                <li class="header-toolbar__item d-lg-none">
                                    <a href="#" class="header-toolbar__btn menu-btn">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->
       
          
      
        
       {{$slot}}

        <!-- Footer Start-->
        <footer class="footer">
            <div class="footer-top bg-color ptb--50" data-bg-color="#f6f6f6">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-9 text-center">
                            <div class="footer-widget mb--50">
                                <div class="textwidget">
                                    <img src="{{asset('public/assets/img/logo/logo.png')}}" alt="Logo">
                                </div>
                            </div>
                            <!--<div class="footer-widget mb--50 pb--1">
                                <ul class="footer-menu">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Terms &amp; Conditions</a></li>
                                    <li><a href="#">Policy</a></li>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>-->
                            <div class="footer-widget">
                                <!-- Social Icons Start Here -->
                                <ul class="social">
                                    <li class="social__item">
                                        <a href="https://plus.google.com/" target="_blank" rel="noopener" class="social__link google-plus">
                                            <span>Google Plus</span>
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li class="social__item">
                                        <a href="https://facebook.com/" target="_blank" rel="noopener" class="social__link facebook">
                                            <span>facebook</span>
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="social__item">
                                        <a href="https://pinterest.com/" target="_blank" rel="noopener" class="social__link pinterest">
                                            <span>pinterest</span>
                                            <i class="fa fa-pinterest-p"></i>
                                        </a>
                                    </li>
                                    <li class="social__item">
                                        <a href="youtube.html" target="_blank" rel="noopener" class="social__link twitter">
                                            <span>twitter</span>
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- Social Icons End Here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom bg-color ptb--25" data-bg-color="#e7e7e7">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-6 text-sm-start text-center mb-xs--10">
                            <p class="copyright-text">&copy; 2023 Made With <i class="fa fa-heart"></i> BY Riveyra Infotech Pvt. Ltd.<a href="https://riveyrainfotech.com/" target="_blank" rel="noopener"></a></p>
                        </div>
                        <div class="col-sm-6 text-sm-end text-center">
                            <figure>
                                <img src="{{asset('public/assets/img/others/payment.png')}}" alt="payment">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End-->

        <!-- Searchform Popup Start -->
        <div class="searchform__popup" id="searchForm">
            <a href="#" class="btn-close"><i class="flaticon flaticon-cross"></i></a>
            <div class="searchform__body">
                <p>Start typing and press Enter to search</p>
                <form class="searchform">
                    <input type="text" name="popup-search" id="popup-search" class="searchform__input" placeholder="Search Entire Store...">
                    <button type="submit" class="searchform__submit"><i class="flaticon flaticon-magnifying-glass-icon"></i></button>
                </form>
            </div>
        </div>
        <!-- Searchform Popup End -->

        <!-- Mini Cart Start -->
     <aside class="mini-cart" id="miniCart">
        <div class="mini-cart-wrapper">
            <button type="button" class="btn-close"><i class="flaticon flaticon-cross"></i></button>
            <div class="mini-cart-inner">
                <h3 class="mini-cart__heading mb--40 mb-lg--30">Login </h3>
                <div class="mini-cart__content">
                    <div class="login-box">
                       
                        
                        <form class="form form--login" method="POST" action="{{ route('log') }}">
                            @csrf
                            <div class="form__group mb--20">
                                <label class="form__label form__label--2" for="username_email">Username or email address <span class="required">*</span></label>
                                <input type="email" class="form__input form__input--2" id="username_email" name="email">
                            </div>
                            <div class="form__group mb--20">
                               <label class="form__label form__label--2" for="login_password">Password <span class="required">*</span></label>
                                <input type="password" class="form__input form__input--2" id="" name="password">
                            </div>
                            <div class="d-flex align-items-center mb--20">
                                <div class="form__group mr--30">
                                    <input type="submit" value="Log in" class="btn-submit">
                                </div>
                                
                            </div>
                            Not a member ? <a class="forgot-pass" href="{{url('/register')}}"> register now</a>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </aside>
    <!-- Mini Cart End -->

        <!-- Global Overlay Start -->
        <div class="zakas-global-overlay"></div>
        <!-- Global Overlay End -->

    </div>
    <!-- Main Wrapper End -->

   
    <!-- ************************* JS Files ************************* -->

    <!-- jQuery JS -->
    <script src="{{asset('public/assets/js/vendor.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('public/assets/js/main.js')}}"></script>

    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @if (Session::has('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ Session::get('success') }}',
                showConfirmButton: false,
                timer: 3000  // Auto-close after 3 seconds
            });
        });
    </script>
    @endif
     @if (Session::has('error'))
   
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'warning',
                title: 'Warning!',
                text: '{{ Session::get('error') }}',
                showConfirmButton: false,
                timer: 3000  // Auto-close after 3 seconds
            });
        });
    </script>
    @endif
</body>


</html>