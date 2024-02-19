<!-- Header Start -->
<header class="">
    <div class="top-nav top-header sticky-header">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="navbar-top">
                        <button class="navbar-toggler d-xl-none d-inline navbar-menu-button" type="button"
                            data-bs-toggle="offcanvas" data-bs-target="#primaryMenu">
                            <span class="navbar-toggler-icon">
                                <i class="bi bi-grid-fill me-2"></i>
                            </span>
                        </button>
                        <h2 class="web-logo nav-logo">
                            IDA Fashion
                        </h2>

                        <div class="header-nav-middle">
                            <div class="main-nav navbar navbar-expand-xl navbar-light navbar-sticky">
                                <div class="offcanvas offcanvas-collapse order-xl-2" id="primaryMenu">
                                    <div class="offcanvas-header navbar-shadow">
                                        <h5>Menu</h5>
                                        <button class="btn-close lead" type="button"
                                            data-bs-dismiss="offcanvas"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <ul class="navbar-nav">
                                            <li class="nav-item">
                                                <a class="nav-link ps-xl-2 ps-0" href="{{ url('/') }}">Home</a>
                                            </li>

                                            <li class="nav-item dropdown">
                                                <a class="nav-link" href="{{ url('/shop') }}">Shop</a>
                                            </li>

                                            <li class="nav-item dropdown">
                                                <a class="nav-link" href="{{ url('/aboutus') }}">About Us</a>
                                            </li>

                                            <li class="nav-item dropdown">
                                                <a class="nav-link" href="{{ url('/contactus') }}">Contact Us</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="rightside-box">
                            <div class="search-full">
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i data-feather="search" class="font-light"></i>
                                    </span>
                                    <input type="text" class="form-control search-type" placeholder="Search here..">
                                    <span class="input-group-text close-search">
                                        <i data-feather="x" class="font-light"></i>
                                    </span>
                                </div>
                            </div>
                            <ul class="right-side-menu">
                                <li class="right-side">
                                    <div class="delivery-login-box">
                                        <div class="delivery-icon">
                                            <div class="search-box">
                                                <i data-feather="search"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="right-side">
                                    <div class="onhover-dropdown header-badge">
                                        @if(session()->get('name'))
                                        <a href="{{url('/usercart')}}"
                                            class="btn p-0 position-relative header-wishlist">
                                            <i data-feather="shopping-cart"></i>
                                            <span
                                                class="position-absolute top-0 start-100 translate-middle badge">{{$cart}}
                                                <span class="visually-hidden">unread messages</span>
                                            </span>
                                        </a>
                                        @else
                                        <a href="#" class="btn p-0 position-relative header-wishlist">
                                            <i data-feather="shopping-cart"></i>
                                            <span class="position-absolute top-0 start-100 translate-middle badge">0
                                                <span class="visually-hidden">unread messages</span>
                                            </span>
                                        </a>
                                        @endif
                                    </div>
                                </li>
                                <li class="right-side onhover-dropdown">
                                    <div class="delivery-login-box">
                                        <div class="delivery-icon">
                                            @if(session()->get('name'))
                                            <a href="{{url('userprofile')}}"><i data-feather="user"></i></a>
                                        </div>
                                    </div>
                                    @else
                                    <a href="#">Login/Signup</a>
                                    <div class="onhover-div onhover-div-login">
                                        <ul class="user-box-name">
                                            <li class="product-box-contain">
                                                <i></i>
                                                <a href="{{url('logi')}}">Log In</a>
                                            </li>

                                            <li class="product-box-contain">
                                                <a href="{{url('signup')}}">Register</a>
                                            </li>

                                            <li class="product-box-contain">
                                                <a href="{{url('forget')}}">Forgot Password</a>
                                            </li>
                                        </ul>
                                        @endif
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->

<!-- mobile fix menu start -->
<div class="mobile-menu d-md-none d-block mobile-cart">
    <ul>
        <li class="active">
            <a href="{{url('/')}}">
                <!--<i class="iconly-Home icli"></i>-->
                <i class='bi bi-house-door-fill fs-3' style='color:#ffffff'></i>
                <span>Home</span>
            </a>
        </li>

        <li class="mobile-category">
            <a href="{{url('shop')}}">
                <!--<i class="iconly-Category icli js-link"></i>-->
                <i class='bi bi-columns-gap fs-3' style='color:#ffffff'></i>
                <span>Shop All</span>
            </a>
        </li>

        <li>
            <a href="{{url('usercart')}}">
                <i class='bi bi-handbag fs-3' style='color:#ffffff'></i>
                <span>Cart</span>
            </a>
        </li>


        <li>
            <a href="{{url('userprofile')}}" class="search-box">

                <i class='bi bi-person-lines-fill fs-3' style='color:#ffffff'></i>
                <span>Profile</span>
            </a>
        </li>
    </ul>
</div>
<!-- mobile fix menu end -->