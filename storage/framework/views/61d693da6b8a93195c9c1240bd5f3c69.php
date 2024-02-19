<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.com/fastkart/front-end/index-9.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Feb 2024 08:47:03 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fastkart">
    <meta name="keywords" content="Fastkart">
    <meta name="author" content="Fastkart">
    <link rel="icon" href="<?php echo e(asset('public/assets/images/favicon/7.png')); ?>" type="image/x-icon">
    <title>On-demand last-mile delivery</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;family=Qwitcher+Grypen:wght@400;700&amp;display=swap">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/css/vendors/bootstrap.css')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- wow css -->
    <link rel="stylesheet" href="public/assets/css/animate.min.css">

    <!-- Iconly css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/css/bulk-style.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/css/vendors/animate.css')); ?>">

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/css/style.css')); ?>">
</head>

<body class="theme-color-5">


    <?php if(Session::has('success')): ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '<?php echo e(Session::get('success')); ?>',
                showConfirmButton: false,
                timer: 2000  // Auto-close after 3 seconds
            });
        });
    </script>
    <?php endif; ?>

    <?php if(Session::has('warning')): ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                icon: 'warning',
                title: 'Warning!',
                text: '<?php echo e(Session::get('warning')); ?>',
                showConfirmButton: false,
                timer: 20000  // Auto-close after 3 seconds
            });
        });
    </script>
    <?php endif; ?>

    <?php if(Session::has('error')): ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                icon: 'error',
                title: 'Warning!',
                text: '<?php echo e(Session::get('warning')); ?>',
                showConfirmButton: false,
                timer: 20000  // Auto-close after 3 seconds
            });
        });
    </script>
    <?php endif; ?>

    <!-- Loader Start -->
    <div class="fullpage-loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <!-- Loader End -->

    <?php echo $__env->make('website.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>

    <!-- Footer Section Start -->
    <footer class="section-t-space footer-section-2 footer-color-3">
        <div class="container-fluid-lg">
            <div class="main-footer">
                <div class="row g-md-4 gy-sm-5">
                    <div class="col-xxl-4 col-xl-4 col-sm-6">
                        <h2 href="#" class="foot-logo theme-logo" style="color:white">
                            IDA Fashion
                        </h2>
                        <p class="information-text information-text-2">it is a long established fact that a reader will
                            be distracted by the readable content.</p>
                        <ul class="social-icon">
                            <li class="light-bg">
                                <a href="https://www.facebook.com/" class="footer-link-color">
                                    <i class="bi bi-facebook"></i>
                                </a>
                            </li>
                            <li class="light-bg">
                                <a href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&amp;flowEntry=ServiceLogin"
                                    class="footer-link-color">
                                    <i class="bi bi-google"></i>
                                </a>
                            </li>
                            <li class="light-bg">
                                <a href="https://twitter.com/i/flow/login" class="footer-link-color">
                                    <i class="bi bi-twitter"></i>
                                </a>
                            </li>
                            <li class="light-bg">
                                <a href="https://www.instagram.com/" class="footer-link-color">
                                    <i class="bi bi-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-xxl-4 col-xl-4 col-sm-6">
                        <div class="footer-title">
                            <h4 class="text-white">About Fastkart</h4>
                        </div>
                        <ul class="footer-list footer-contact footer-list-light">
                            <li>
                                <a href="<?php echo e(url('/aboutus')); ?>" class="light-text">About Us</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/contactus')); ?>" class="light-text">Contact Us</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('faq')); ?>" class="light-text">Faq</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-xxl-4 col-xl-4 col-sm-6">
                        <div class="footer-title">
                            <h4 class="text-white">Store information</h4>
                        </div>
                        <ul class="footer-address footer-contact">
                            <li>
                                <a href="javascript:void(0)" class="light-text">
                                    <div class="inform-box flex-start-box">
                                        <i data-feather="map-pin"></i>
                                        <p>IDA Fashion store, India</p>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)" class="light-text">
                                    <div class="inform-box">
                                        <i data-feather="phone"></i>
                                        <p>Call us: 123-456-7890</p>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)" class="light-text">
                                    <div class="inform-box">
                                        <i data-feather="mail"></i>
                                        <p>Email Us: info@idafashion.com</p>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)" class="light-text">
                                    <div class="inform-box">
                                        <i data-feather="printer"></i>
                                        <p>Fax: 123456</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="sub-footer sub-footer-lite section-b-space section-t-space">

                <ul class="payment-box">
                    <li>
                        <img src="<?php echo e(asset('public/assets/images/icon/paymant/visa.png')); ?>" class="blur-up lazyload"
                            alt="">
                    </li>
                    <li>
                        <img src="<?php echo e(asset('public/assets/images/icon/paymant/discover.png')); ?>" alt=""
                            class="blur-up lazyload">
                    </li>
                    <li>
                        <img src="<?php echo e(asset('public/assets/images/icon/paymant/american.png')); ?>" alt=""
                            class="blur-up lazyload">
                    </li>
                    <li>
                        <img src="<?php echo e(asset('public/assets/images/icon/paymant/master-card.png')); ?>" alt=""
                            class="blur-up lazyload">
                    </li>
                    <li>
                        <img src="<?php echo e(asset('public/assets/images/icon/paymant/giro-pay.png')); ?>" alt=""
                            class="blur-up lazyload">
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->



    <!-- Location Modal Start -->
    <div class="modal location-modal fade theme-modal" id="locationModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Choose your Delivery Location</h5>
                    <p class="mt-1 text-content">Enter your address and we will specify the offer for your area.</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="location-list">
                        <div class="search-input">
                            <input type="search" class="form-control" placeholder="Search Your Area">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>

                        <div class="disabled-box">
                            <h6>Select a Location</h6>
                        </div>

                        <ul class="location-select custom-height">
                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Alabama</h6>
                                    <span>Min: $130</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Arizona</h6>
                                    <span>Min: $150</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>California</h6>
                                    <span>Min: $110</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Colorado</h6>
                                    <span>Min: $140</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Florida</h6>
                                    <span>Min: $160</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Georgia</h6>
                                    <span>Min: $120</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Kansas</h6>
                                    <span>Min: $170</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Minnesota</h6>
                                    <span>Min: $120</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>New York</h6>
                                    <span>Min: $110</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Washington</h6>
                                    <span>Min: $130</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Location Modal End -->

    <!-- Deal Box Modal Start -->
    <div class="modal fade theme-modal deal-modal" id="deal-box" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title w-100" id="deal_today">Deal Today</h5>
                        <p class="mt-1 text-content">Recommended deals for you.</p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="deal-offer-box">
                        <ul class="deal-offer-list">
                            <li class="list-1">
                                <div class="deal-offer-contain">
                                    <a href="#" class="deal-image">
                                        <img src="<?php echo e(asset('public/assets/images/vegetable/product/10.png')); ?>"
                                            class="blur-up lazyload" alt="">
                                    </a>

                                    <a href="#" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-2">
                                <div class="deal-offer-contain">
                                    <a href="#" class="deal-image">
                                        <img src="<?php echo e(asset('public/assets/images/vegetable/product/11.png')); ?>"
                                            class="blur-up lazyload" alt="">
                                    </a>

                                    <a href="" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-3">
                                <div class="deal-offer-contain">
                                    <a href="#" class="deal-image">
                                        <img src="<?php echo e(asset('public/assets/images/vegetable/product/12.png')); ?>"
                                            class="blur-up lazyload" alt="">
                                    </a>

                                    <a href="#" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-1">
                                <div class="deal-offer-contain">
                                    <a href="#" class="deal-image">
                                        <img src="<?php echo e(asset('public/assets/images/vegetable/product/13.png')); ?>"
                                            class="blur-up lazyload" alt="">
                                    </a>

                                    <a href="#" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Deal Box Modal End -->



    <!-- latest jquery-->
    <script src="<?php echo e(asset('public/assets/js/jquery-3.6.0.min.js')); ?>"></script>

    <!-- jquery ui-->
    <script src="<?php echo e(asset('public/assets/js/jquery-ui.min.js')); ?>"></script>

    <!-- Bootstrap js-->
    <script src="<?php echo e(asset('public/assets/js/bootstrap/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/assets/js/bootstrap/bootstrap-notify.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/assets/js/bootstrap/popper.min.js')); ?>"></script>

    <!-- feather icon js-->
    <script src="<?php echo e(asset('public/assets/js/feather/feather.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/assets/js/feather/feather-icon.js')); ?>"></script>

    <!-- Lazyload Js -->
    <script src="<?php echo e(asset('public/assets/js/lazysizes.min.js')); ?>"></script>

    <!-- Slick js-->
    <script src="<?php echo e(asset('public/assets/js/slick/slick.js')); ?>"></script>
    <script src="<?php echo e(asset('public/assets/js/slick/slick-animation.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/assets/js/slick/custom_slick.js')); ?>"></script>

    <!-- Auto Height Js -->
    <script src="<?php echo e(asset('public/assets/js/auto-height.js')); ?>"></script>

    <!-- WOW js -->
    <script src="<?php echo e(asset('public/assets/js/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/assets/js/custom-wow.js')); ?>"></script>

    <!-- script js -->
    <script src="<?php echo e(asset('public/assets/js/script.js')); ?>"></script>

    <!-- theme setting js -->
    <script src="<?php echo e(asset('public/assets/js/theme-setting.js')); ?>"></script>
</body>


<!-- Mirrored from themes.pixelstrap.com/fastkart/front-end/index-9.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Feb 2024 08:47:36 GMT -->

</html><?php /**PATH E:\xampp\htdocs\fastkart\resources\views/layouts/app.blade.php ENDPATH**/ ?>