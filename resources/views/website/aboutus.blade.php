@extends('layouts.app')

@section('content')

<!-- Breadcrumb Section Start -->
<section class="breadcrumb-section pt-0">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-contain">
                    <h2>About Us</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{url('/')}}">
                                    <i class="bi bi-house-door"></i> <i class="bi bi-caret-right-fill"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Fresh Vegetable Section Start -->
<section class="fresh-vegetable-section section-lg-space">
    <div class="container-fluid-lg">
        <div class="row gx-xl-5 gy-xl-0 g-3 ratio_148_1">
            <div class="col-xl-6 col-12">
                <div class="row g-sm-4 g-2">
                    <div class="col-6">
                        <div class="fresh-image-2">
                            <div>
                                <img src="{{asset('public/assets/images/inner-page/about-us/1.jpg')}}"
                                    class="bg-img blur-up lazyload" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="fresh-image">
                            <div>
                                <img src="{{asset('public/assets/images/inner-page/about-us/2.jpg')}}"
                                    class="bg-img blur-up lazyload" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-12">
                <div class="fresh-contain p-center-left">
                    <div>
                        <div class="review-title">
                            <h2>About Us</h2>
                            <h3>Welcome to IDA Fashion – Your Ultimate Destination for Stylish and Comfortable Men's
                                Shirts!</h3>
                        </div>

                        <div class="delivery-list">
                            <p class="text-content">At IDA Fashion, we pride ourselves on the seamless fusion of style
                                and comfort in our curated collection of men's shirts. Our commitment is to offer you
                                shirts that elevate your fashion quotient and prioritize your comfort, ensuring that
                                every piece becomes an essential part of your wardrobe.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-12 col-12 mt-5">
                <div class="fresh-contain p-center-left">
                    <div>
                        <div class="review-title">
                            <h2>Why Choose IDA Fashion?</h2>
                            <h3>Exceptional Craftsmanship:</h3>
                        </div>

                        <div class="delivery-list">
                            <p class="text-content">Our shirts are a testament to exceptional craftsmanship, featuring
                                meticulous stitching and the use of premium materials. The result is a collection of
                                shirts that exude quality and durability.
                            </p>
                        </div>
                        <div class="review-title">
                            <h3>Versatile Styles for Every Occasion: </h3>
                        </div>

                        <div class="delivery-list">
                            <p class="text-content">
                                Whether you're gearing up for a formal meeting or a casual weekend outing, IDA Fashion
                                has a diverse range of shirts to suit every occasion. From crisp, tailored formal shirts
                                to effortlessly cool casual options, our collection ensures you're covered for any
                                event.

                            </p>
                        </div>
                        <div class="review-title">
                            <h3>Luxurious Fabrics for Superior Comfort: </h3>
                        </div>

                        <div class="delivery-list">
                            <p class="text-content">
                                We understand the importance of comfort in everyday wear. That's why we source only the
                                finest fabrics, focusing on luxurious cotton, to guarantee a superior and comfortable
                                feel against your skin.

                            </p>
                        </div>
                        <div class="review-title">
                            <h3>Tailored Fit for Confidence:</h3>
                        </div>

                        <div class="delivery-list">
                            <p class="text-content">
                                Embrace confidence with our shirts that offer a modern and tailored fit. The careful
                                consideration of design ensures a silhouette that complements your physique, allowing
                                you to look and feel your best.

                            </p>
                        </div>
                        <div class="review-title">
                            <h3>Fashion-forward Designs: </h3>
                        </div>

                        <div class="delivery-list">
                            <p class="text-content">
                                Stay ahead of the fashion curve with IDA Fashion. Our design team is dedicated to
                                creating shirts that not only reflect the latest trends but also possess a timeless
                                appeal. Each piece is crafted to stand the test of time.

                            </p>
                        </div>
                        <div class="review-title">
                            <h3>Sustainability Matters: </h3>
                        </div>

                        <div class="delivery-list">
                            <p class="text-content">
                                At IDA Fashion, we believe responsibly. Our commitment to sustainability is reflected in
                                our production processes, as we strive to minimize our environmental impact. Choose IDA
                                Fashion for shirts that not only look good but also contribute to a more sustainable
                                future.

                            </p>
                        </div>
                        <div class="review-title">
                            <h3>Customer Satisfaction Guarantee: </h3>
                        </div>

                        <div class="delivery-list">
                            <p class="text-content">
                                Your satisfaction is our top priority. Our customer support team is ready to assist you
                                at every step, ensuring that your shopping experience with IDA Fashion is nothing short
                                of exceptional.

                            </p>
                        </div>
                        <div class="align center pt-2 m-5 p-5">
                        Join us at IDA Fashion, where every shirt tells a unique story of style and comfort. Redefine your
                    wardrobe with shirts that not only keep you in vogue but also provide the comfort you deserve.
                    Experience the perfect blend of fashion and functionality – only at IDA Fashion!
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fresh Vegetable Section End -->

<!-- Client Section Start -->
<!-- <section class="client-section section-lg-space">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="about-us-title text-center">
                    <h4>What We Do</h4>
                    <h2 class="center">We are Trusted by Clients</h2>
                </div>

                <div class="slider-3_1 product-wrapper">
                    <div>
                        <div class="clint-contain">
                            <div class="client-icon">
                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/3/work.svg"
                                    class="blur-up lazyload" alt="">
                            </div>
                            <h2>10</h2>
                            <h4>Business Years</h4>
                            <p>A coffee shop is a small business that sells coffee, pastries, and other morning
                                goods. There are many different types of coffee shops around the world.</p>
                        </div>
                    </div>

                    <div>
                        <div class="clint-contain">
                            <div class="client-icon">
                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/3/buy.svg"
                                    class="blur-up lazyload" alt="">
                            </div>
                            <h2>80 K+</h2>
                            <h4>Products Sales</h4>
                            <p>Some coffee shops have a seating area, while some just have a spot to order and then
                                go somewhere else to sit down. The coffee shop that I am going to.</p>
                        </div>
                    </div>

                    <div>
                        <div class="clint-contain">
                            <div class="client-icon">
                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/3/user.svg"
                                    class="blur-up lazyload" alt="">
                            </div>
                            <h2>90%</h2>
                            <h4>Happy Customers</h4>
                            <p>My goal for this coffee shop is to be able to get a coffee and get on with my day.
                                It's a Thursday morning and I am rushing between meetings.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="team-section section-lg-space">
    <div class="container-fluid-lg">
        <div class="about-us-title text-center">
            <h4 class="text-content">Our Creative Team</h4>
            <h2 class="center">fastkart team member</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="slider-user product-wrapper">
                    <div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="{{asset('public/assets/images/inner-page/user/1.jpg')}}"
                                    class="img-fluid blur-up lazyload" alt="">
                            </div>

                            <div class="team-name">
                                <h3>Anna Baranov</h3>
                                <h5>Marketing</h5>
                                <p>cheeseburger airedale mozzarella the big cheese fondue.</p>
                                <ul class="team-media">
                                    <li>
                                        <a href="https://www.facebook.com/" class="fb-bg">
                                            <i class="bi bi-facebook"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://www.google.com/" class="pint-bg">
                                            <i class="bi bi-google"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://twitter.com/" class="twitter-bg">
                                            <i class="bi bi-twitter"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://www.instagram.com/" class="insta-bg">
                                            <i class="bi bi-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="{{asset('public/assets/images/inner-page/user/2.jpg')}}"
                                    class="img-fluid blur-up lazyload" alt="">
                            </div>

                            <div class="team-name">
                                <h3>Anna Baranov</h3>
                                <h5>Marketing</h5>
                                <p>cheese on toast mozzarella bavarian bergkase smelly cheese cheesy feet.</p>
                                <ul class="team-media">
                                    <li>
                                        <a href="https://www.facebook.com/" class="fb-bg">
                                            <i class="bi bi-facebook"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://in.pinterest.com/" class="pint-bg">
                                            <i class="bi bi-google"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://twitter.com/" class="twitter-bg">
                                            <i class="bi bi-twitter"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://www.instagram.com/" class="insta-bg">
                                            <i class="bi bi-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="{{asset('public/assets/images/inner-page/user/3.jpg')}}"
                                    class="img-fluid blur-up lazyload" alt="">
                            </div>

                            <div class="team-name">
                                <h3>Anna Baranov</h3>
                                <h5>Marketing</h5>
                                <p>camembert de normandie. Bocconcini rubber cheese fromage frais port-salut.</p>
                                <ul class="team-media">
                                    <li>
                                        <a href="https://www.facebook.com/" class="fb-bg">
                                            <i class="bi bi-facebook"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://in.pinterest.com/" class="pint-bg">
                                            <i class="bi bi-google"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://twitter.com/" class="twitter-bg">
                                            <i class="bi bi-twitter"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://www.instagram.com/" class="insta-bg">
                                            <i class="bi bi-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="{{asset('public/assets/images/inner-page/user/4.jpg')}}"
                                    class="img-fluid blur-up lazyload" alt="">
                            </div>

                            <div class="team-name">
                                <h3>Anna Baranov</h3>
                                <h5>Marketing</h5>
                                <p>Fondue stinking bishop goat. Macaroni cheese croque monsieur cottage cheese.</p>
                                <ul class="team-media">
                                    <li>
                                        <a href="https://www.facebook.com/" class="fb-bg">
                                            <i class="bi bi-facebook"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://in.pinterest.com/" class="pint-bg">
                                            <i class="bi bi-google"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://twitter.com/" class="twitter-bg">
                                            <i class="bi bi-twitter"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://www.instagram.com/" class="insta-bg">
                                            <i class="bi bi-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="{{asset('public/assets/images/inner-page/user/1.jpg')}}"
                                    class="img-fluid blur-up lazyload" alt="">
                            </div>

                            <div class="team-name">
                                <h3>Anna Baranov</h3>
                                <h5>Marketing</h5>
                                <p>squirty cheese cheddar macaroni cheese airedale cheese triangles.</p>
                                <ul class="team-media">
                                    <li>
                                        <a href="https://www.facebook.com/" class="fb-bg">
                                            <i class="bi bi-facebook"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://in.pinterest.com/" class="pint-bg">
                                            <i class="bi bi-google"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://twitter.com/" class="twitter-bg">
                                            <i class="bi bi-twitter"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://www.instagram.com/" class="insta-bg">
                                            <i class="bi bi-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="review-section section-lg-space">
    <div class="container-fluid">
        <div class="about-us-title text-center">
            <h4 class="text-content">Latest Testimonials</h4>
            <h2 class="center">What people say</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="slider-4-half product-wrapper">
                    <div>
                        <div class="reviewer-box">
                            <i class="fa-solid fa-quote-right"></i>
                            <div class="product-rating">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                            </div>

                            <h3>Top Quality, Beautiful Location</h3>

                            <p>"I usually try to keep my sadness pent up inside where it can fester quietly as a
                                mental illness. There, now he's trapped in a book I wrote: a crummy world of plot
                                holes and spelling errors! As an interesting side note."</p>

                            <div class="reviewer-profile">
                                <div class="reviewer-image">
                                    <img src="{{asset('public/assets/images/inner-page/user/1.jpg')}}"
                                        class="blur-up lazyload" alt="">
                                </div>

                                <div class="reviewer-name">
                                    <h4>Betty J. Turner</h4>
                                    <h6>CTO, Company</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="reviewer-box">
                            <i class="fa-solid fa-quote-right"></i>
                            <div class="product-rating">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                            </div>

                            <h3>Top Quality, Beautiful Location</h3>

                            <p>"My busy schedule leaves little, if any, time for blogging and social media. The
                                Lorem Ipsum Company has been a huge part of helping me grow my business through
                                organic search and content marketing."</p>
                            <div class="reviewer-profile">
                                <div class="reviewer-image">
                                    <img src="{{asset('public/assets/images/inner-page/user/2.jpg')}}"
                                        class="blur-up lazyload" alt="">
                                </div>

                                <div class="reviewer-name">
                                    <h4>Alfredo S. Rocha</h4>
                                    <h6>Project Manager</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="reviewer-box">
                            <i class="fa-solid fa-quote-right"></i>
                            <div class="product-rating">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                            </div>

                            <h3>Top Quality, Beautiful Location</h3>

                            <p>"Professional, responsive, and able to keep up with ever-changing demand and tight
                                deadlines: That's how I would describe Jeramy and his team at The Lorem Ipsum
                                Company. When it comes to content marketing."</p>
                            <div class="reviewer-profile">
                                <div class="reviewer-image">
                                    <img src="{{asset('public/assets/images/inner-page/user/3.jpg')}}"
                                        class="blur-up lazyload" alt="">
                                </div>

                                <div class="reviewer-name">
                                    <h4>Donald C. Spurr</h4>
                                    <h6>Sale Agents</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="reviewer-box">
                            <i class="fa-solid fa-quote-right"></i>
                            <div class="product-rating">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                            </div>

                            <h3>Top Quality, Beautiful Location</h3>

                            <p>"After being forced to move twice within five years, our customers had a hard time
                                finding us and our sales plummeted. The Lorem Ipsum Co. not only revitalized our
                                brand."</p>
                            <div class="reviewer-profile">
                                <div class="reviewer-image">
                                    <img src="{{asset('public/assets/images/inner-page/user/4.jpg')}}"
                                        class="blur-up lazyload" alt="">
                                </div>

                                <div class="reviewer-name">
                                    <h4>Terry G. Fain</h4>
                                    <h6>Photographer</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="reviewer-box">
                            <i class="fa-solid fa-quote-right"></i>
                            <div class="product-rating">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                            </div>

                            <h3>Top Quality, Beautiful Location</h3>

                            <p>"I was skeptical of SEO and content marketing at first, but the Lorem Ipsum Company
                                not only proved itself financially speaking, but the response I have received from
                                customers is incredible."</p>
                            <div class="reviewer-profile">
                                <div class="reviewer-image">
                                    <img src="{{asset('public/assets/images/inner-page/user/1.jpg')}}"
                                        class="blur-up lazyload" alt="">
                                </div>

                                <div class="reviewer-name">
                                    <h4>Gwen J. Geiger</h4>
                                    <h6>Designer</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="reviewer-box">
                            <i class="fa-solid fa-quote-right"></i>
                            <div class="product-rating">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                            </div>

                            <h3>Top Quality, Beautiful Location</h3>

                            <p>"Jeramy and his team at the Lorem Ipsum Company whipped my website into shape just in
                                time for tax season. I was excited by the results and am proud to direct clients to
                                my website once again."</p>

                            <div class="reviewer-profile">
                                <div class="reviewer-image">
                                    <img src="{{asset('public/assets/images/inner-page/user/2.jpg')}}"
                                        class="blur-up lazyload" alt="">
                                </div>

                                <div class="reviewer-name">
                                    <h4>Constance K. Whang</h4>
                                    <h6>CEO, Company</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="reviewer-box">
                            <i class="fa-solid fa-quote-right"></i>
                            <div class="product-rating">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                            </div>

                            <h3>Top Quality, Beautiful Location</h3>

                            <p>"Yeah, and if you were the pope they'd be all, "Straighten your pope hat." And "Put
                                on your good vestments." What are their names? Yep, I remember. They came in last at
                                the Olympics!"</p>
                            <div class="reviewer-profile">
                                <div class="reviewer-image">
                                    <img src="{{asset('public/assets/images/inner-page/user/3.jpg')}}"
                                        class="blur-up lazyload" alt="">
                                </div>

                                <div class="reviewer-name">
                                    <h4>Christopher R. Lee</h4>
                                    <h6>Managing Director</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="reviewer-box">
                            <i class="fa-solid fa-quote-right"></i>
                            <div class="product-rating">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                            </div>

                            <h3>Top Quality, Beautiful Location</h3>

                            <p>"Good man. Nixon's pro-war and pro-family. Hey, tell me something. You've got all
                                this money. How come you always dress like you're doing your laundry? So, how 'bout
                                them Knicks? What kind of a father would I be if I said no?."</p>
                            <div class="reviewer-profile">
                                <div class="reviewer-image">
                                    <img src="{{asset('public/assets/images/inner-page/user/4.jpg')}}"
                                        class="blur-up lazyload" alt="">
                                </div>

                                <div class="reviewer-name">
                                    <h4>Eileen R. Chu</h4>
                                    <h6>Marketing Director</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-lg-space">
    <div class="container-fluid-lg">
        <div class="about-us-title text-center">
            <h4 class="text-content">Our Blog</h4>
            <h2 class="center">Our Latest Blog</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="slider-5 ratio_87">
                    <div>
                        <div class="blog-box">
                            <div class="blog-box-image">
                                <div class="blog-image">
                                    <a href="blog-detail.html" class="rounded-3">
                                        <img src="{{asset('public/assets/images/veg-2/blog/1.jpg')}}"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                            </div>

                            <a href="blog-detail.html" class="blog-detail d-block">
                                <h6>Farmart</h6>
                                <h5>Fresh Meat Saugage</h5>
                            </a>
                        </div>
                    </div>

                    <div>
                        <div class="blog-box">
                            <div class="blog-box-image">
                                <div class="blog-image">
                                    <a href="blog-detail.html" class="rounded-3">
                                        <img src="{{asset('public/assets/images/veg-2/blog/2.jpg')}}"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                            </div>

                            <a href="blog-detail.html" class="blog-detail d-block">
                                <h6>Soda Brand</h6>
                                <h5>Soda 500ml - 20% OFF</h5>
                            </a>
                        </div>
                    </div>

                    <div>
                        <div class="blog-box">
                            <div class="blog-box-image">
                                <div class="blog-image">
                                    <a href="blog-detail.html" class="rounded-3">
                                        <img src="{{asset('public/assets/images/veg-2/blog/3.jpg')}}"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                            </div>

                            <a href="blog-detail.html" class="blog-detail d-block">
                                <h6>Beer Brand</h6>
                                <h5>Soda 500ml - 20% OFF</h5>
                            </a>
                        </div>
                    </div>

                    <div>
                        <div class="blog-box">
                            <div class="blog-box-image">
                                <div class="blog-image">
                                    <a href="blog-detail.html" class="rounded-3">
                                        <img src="{{asset('public/assets/images/veg-2/blog/4.jpg')}}"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                            </div>

                            <a href="blog-detail.html" class="blog-detail d-block">
                                <h6>Beer Brand</h6>
                                <h5>Fresh Beer -30% OFF</h5>
                            </a>
                        </div>
                    </div>

                    <div>
                        <div class="blog-box">
                            <div class="blog-image">
                                <a href="blog-detail.html" class="rounded-3">
                                    <img src="{{asset('public/assets/images/veg-2/blog/5.jpg')}}"
                                        class="bg-img blur-up lazyload" alt="">
                                </a>
                            </div>

                            <a href="blog-detail.html" class="blog-detail d-block">
                                <h6>Milk Brand</h6>
                                <h5>Fresh Milk</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Blog Section End -->

@endsection