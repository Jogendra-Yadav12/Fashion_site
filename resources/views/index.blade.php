<x-layout>
     <!-- Main Content Wrapper Start -->
     <div class="main-content-wrapper">
        <!-- Slider area Start -->
        <section class="homepage-slider-wrapper mb--100">
            <div class="zakas-element-carousel homepage-slider nav-center-bottom"
            data-slick-options='{
                "arrows": true,
                "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-double-left" },
                "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-double-right" }
            }'>
                <div class="item">
                    <div class="single-slide slider-height-3 bg-style d-flex align-items-center" style="background-image: url(public/assets/img/slider/slider-14.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-content text-center">
                                        <h1 class="heading__primary heading-color mb--30">
                                            <span class="heading__primary--sub" data-animation="fadeInUp" data-duration=".4s" data-delay=".7s">Kid'z Collection</span>
                                            <span class="heading__primary--main" data-animation="fadeInUp" data-duration=".4s" data-delay="1s">Winter - 2023</span>
                                        </h1>
                                        <a href="{{url('/shop')}}" class="btn" data-animation="fadeInUp" data-duration=".4s" data-delay="1.2s">Shop Now <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                        
                </div>
                <div class="item">
                    <div class="single-slide slider-height-3 bg-style d-flex align-items-center" style="background-image: url(public/assets/img/slider/slider-15.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-content text-center">
                                        <h1 class="heading__primary heading-color mb--30">
                                            <span class="heading__primary--sub" data-animation="fadeInUp" data-duration=".4s" data-delay=".7s">Kid'z Collection</span>
                                            <span class="heading__primary--main" data-animation="fadeInUp" data-duration=".4s" data-delay="1s">Winter - 2023</span>
                                        </h1>
                                        <a href="{{url('/shop')}}" class="btn" data-animation="fadeInUp" data-duration=".4s" data-delay="1.2s">Shop Now <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                       
                </div>
            </div>
        </section>
        <!-- Slider area End -->

        <!-- Product Tab area Start -->
        <section class="product-tab-area mb--50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product-tab tab-style-1">
                            <div class="nav nav-tabs product-tab__head justify-content-center mb--50" id="new-arrival-tab" role="tablist">
                                <button type="button" class="nav-item nav-link product-tab__link active" id="new-all-tab" data-bs-toggle="tab" data-bs-target="#new-all" role="tab" aria-controls="new-all" aria-selected="true">
                                    <span>All</span>
                                </button>
                                <button type="button" class="nav-item nav-link product-tab__link" id="new-men-tab" data-bs-toggle="tab" data-bs-target="#new-men" role="tab" aria-controls="new-men" aria-selected="false">
                                    <span>men</span>
                                </button>
                                <button type="button" class="nav-item nav-link product-tab__link" id="new-women-tab" data-bs-toggle="tab" data-bs-target="#new-women" role="tab" aria-controls="new-women" aria-selected="false">
                                    <span>Women</span>
                                </button>
                                <button type="button" class="nav-item nav-link product-tab__link" id="new-kidz-tab" data-bs-toggle="tab" data-bs-target="#new-kidz" role="tab" aria-controls="new-kidz" aria-selected="false">
                                    <span>kidz</span>
                                </button>
                                <button type="button" class="nav-item nav-link product-tab__link" id="new-accessories-tab" data-bs-toggle="tab" data-bs-target="#new-accessories" role="tab" aria-controls="new-accessories" aria-selected="false">
                                    <span>accessories</span>
                                </button>
                            </div>
                            <div class="tab-content" id="new-arrival-tab-content">
                                <div class="tab-pane fade show active" id="new-all" role="tabpanel" aria-labelledby="new-all-tab">
                                    <div class="row">
                                        
				
                                        @if (empty($data))
                                        <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                            <div class="zakas-product">
                                                <div class="product-inner">
                                                   <h5>No Products Found</h5>
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                        @foreach ($data as $d)
                                        @php $check = false; @endphp
                                        @if(!empty($wish))
                                        @foreach($wish as $item)
                                            @if($item->p_id == $d->id)
                                                    @php $check = true; @endphp
                                            @endif
                                        @endforeach
                                        @endif
                                        <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                            <div class="zakas-product">
                                                <div class="product-inner">
                                                    <figure class="product-image">
                                                        <a href="#">
                                                            @if(!empty($d->image))
                                                            @php
                                                                $images = json_decode($d->image);
                                                            @endphp
                                                        
                                                            @if(count($images) > 0)
                                                                <img src="{{ asset('public/images/' . $images[0]) }}" style="height:300px;width:300px">
                                                            @endif
                                                        @endif
                                                        
                                                        </a>
                                                        <div class="zakas-product-action">
                                                            <div class="product-action d-flex">
                                                                @if(!(session()->get('auth')))
                                                                <a href="#miniCart" class="action-btn btn-primary mini-cart-btn header-toolbar__btn toolbar-btn ">
                                                                    <i class="flaticon flaticon-like btn-primary"></i>
                                                                </a>
                                                                
                                                                @elseif($count === 0)
                                                                <a href="wishlist/{{$d->id}}" class="action-btn btn-primary">
                                                                    <i class="flaticon flaticon-like btn-primary"></i>
                                                                </a>
                                                                @elseif($check == true)
                                                                <a href="wishlist/{{$d->id}}" class="action-btn btn-danger " >
                                                                    <i class="flaticon flaticon-like btn-primary" style="color:red;"></i>
                                                                </a>
                                                                @else
                                                                <a href="wishlist/{{$d->id}}" class="action-btn btn-primary">
                                                                    <i class="flaticon flaticon-like btn-primary"></i>
                                                                </a>
                                                                @endif
                                                                <a class="action-btn" href="{{ route('product_view', ['id' => $d->id]) }}">
                                                                    <i class="flaticon flaticon-eye"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <span class="product-badge">New</span>
                                                    </figure>
                                                    <div class="product-info">
                                                        <h3 class="product-title mb--15">
                                                            <a href="#">{{ $d->product_name}}</a>
                                                        </h3>
                                                        <div class="product-price-wrapper mb--30">
                                                            <span class="money">₹ {{ $d->price}} </span>
                                                            
                                                        </div>
                                                        <form>
                                                            <input type="hidden" name="product_name">
                                                            <input type="hidden" name="price">
                                                            <input type="hidden" name="">
                                                            <input type="hidden" name="">
                                                            <a href="{{ route('product_view', ['id' => $d->id]) }}" class="btn btn-small btn-bg-sand btn-color-dark">Buy Now</a>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       @endforeach
                                        @endif
                                        
                                       
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="new-men" role="tabpanel" aria-labelledby="new-all-tab">
                                    <div class="row">
                                        @if (empty($datamen))
                                        <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                            <div class="zakas-product">
                                                <div class="product-inner">
                                                   <h5>No Products Found</h5>
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                        @foreach ($datamen as $d)
               
                                        <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                            <div class="zakas-product">
                                                <div class="product-inner">
                                                    <figure class="product-image">
                                                        <a href="#">
                                                            @if(!empty($d->image))
                                                            @php
                                                                $images = json_decode($d->image);
                                                            @endphp
                                                        
                                                            @if(count($images) > 0)
                                                                <img src="{{ asset('public/images/' . $images[0]) }}" style="height:300px;width:300px">
                                                            @endif
                                                        @endif
                                                        
                                                        </a>
                                                        <div class="zakas-product-action">
                                                            <div class="product-action d-flex">
                                                              
                                                                @if(!(session()->get('auth')))
                                                                <a href="#miniCart" class="action-btn btn-primary mini-cart-btn header-toolbar__btn toolbar-btn ">
                                                                    <i class="flaticon flaticon-like btn-primary"></i>
                                                                </a>
                                                                
                                                                @elseif($count === 0)
                                                                <a href="wishlist/{{$d->id}}" class="action-btn btn-primary">
                                                                    <i class="flaticon flaticon-like btn-primary"></i>
                                                                </a>
                                                                @elseif($check == true)
                                                                <a href="wishlist/{{$d->id}}" class="action-btn btn-danger " >
                                                                    <i class="flaticon flaticon-like btn-primary" style="color:red;"></i>
                                                                </a>
                                                                @else
                                                                <a href="wishlist/{{$d->id}}" class="action-btn btn-primary">
                                                                    <i class="flaticon flaticon-like btn-primary"></i>
                                                                </a>
                                                                @endif
                                                                <a class="action-btn" href="{{ route('product_view', ['id' => $d->id]) }}">
                                                                    <i class="flaticon flaticon-eye"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <span class="product-badge">New</span>
                                                    </figure>
                                                    <div class="product-info">
                                                        <h3 class="product-title mb--15">
                                                            <a href="#">{{ $d->product_name}}</a>
                                                        </h3>
                                                        <div class="product-price-wrapper mb--30">
                                                            <span class="money">₹ {{ $d->price}} </span>
                                                            
                                                        </div>
                                                        <a href="{{ route('product_view', ['id' => $d->id]) }}" class="btn btn-small btn-bg-sand btn-color-dark">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       @endforeach
                                        @endif
                                        
                                       
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="new-women" role="tabpanel" aria-labelledby="new-all-tab">
                                    <div class="row">
                                        @if (empty($datawomen))
                                        <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                            <div class="zakas-product">
                                                <div class="product-inner">
                                                   <h5>No Products Found</h5>
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                        @foreach ($datawomen as $d)
               
                                        <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                            <div class="zakas-product">
                                                <div class="product-inner">
                                                    <figure class="product-image">
                                                        <a href="#">
                                                            @if(!empty($d->image))
                                                            @php
                                                                $images = json_decode($d->image);
                                                            @endphp
                                                        
                                                            @if(count($images) > 0)
                                                                <img src="{{ asset('public/images/' . $images[0]) }}" style="height:300px;width:300px">
                                                            @endif
                                                        @endif
                                                        
                                                        </a>
                                                        <div class="zakas-product-action">
                                                            <div class="product-action d-flex">
                                                              
                                                                @if(!(session()->get('auth')))
                                                                <a href="#miniCart" class="action-btn btn-primary mini-cart-btn header-toolbar__btn toolbar-btn ">
                                                                    <i class="flaticon flaticon-like btn-primary"></i>
                                                                </a>
                                                                
                                                                @elseif($count === 0)
                                                                <a href="wishlist/{{$d->id}}" class="action-btn btn-primary">
                                                                    <i class="flaticon flaticon-like btn-primary"></i>
                                                                </a>
                                                                @elseif($check == true)
                                                                <a href="wishlist/{{$d->id}}" class="action-btn btn-danger " >
                                                                    <i class="flaticon flaticon-like btn-primary" style="color:red;"></i>
                                                                </a>
                                                                @else
                                                                <a href="wishlist/{{$d->id}}" class="action-btn btn-primary">
                                                                    <i class="flaticon flaticon-like btn-primary"></i>
                                                                </a>
                                                                @endif
                                                                <a class="action-btn" href="{{ route('product_view', ['id' => $d->id]) }}">
                                                                    <i class="flaticon flaticon-eye"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <span class="product-badge">New</span>
                                                    </figure>
                                                    <div class="product-info">
                                                        <h3 class="product-title mb--15">
                                                            <a href="#">{{ $d->product_name}}</a>
                                                        </h3>
                                                        <div class="product-price-wrapper mb--30">
                                                            <span class="money">₹ {{ $d->price}} </span>
                                                            
                                                        </div>
                                                        <a href="{{ route('product_view', ['id' => $d->id]) }}" class="btn btn-small btn-bg-sand btn-color-dark">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       @endforeach
                                        @endif
                                        
                                       
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="new-kidz" role="tabpanel" aria-labelledby="new-all-tab">
                                    <div class="row">
                                        @if (empty($datakid))
                                        <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                            <div class="zakas-product">
                                                <div class="product-inner">
                                                   <h5>No Products Found</h5>
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                        @foreach ($datakid as $d)
               
                                        <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                            <div class="zakas-product">
                                                <div class="product-inner">
                                                    <figure class="product-image">
                                                        <a href="#">
                                                            @if(!empty($d->image))
                                                            @php
                                                                $images = json_decode($d->image);
                                                            @endphp
                                                        
                                                            @if(count($images) > 0)
                                                                <img src="{{ asset('public/images/' . $images[0]) }}" style="height:300px;width:300px">
                                                            @endif
                                                        @endif
                                                        
                                                        </a>
                                                        <div class="zakas-product-action">
                                                            <div class="product-action d-flex">
                                                              
                                                                @if(!(session()->get('auth')))
                                                                <a href="#miniCart" class="action-btn btn-primary mini-cart-btn header-toolbar__btn toolbar-btn ">
                                                                    <i class="flaticon flaticon-like btn-primary"></i>
                                                                </a>
                                                                
                                                                @elseif($count === 0)
                                                                <a href="wishlist/{{$d->id}}" class="action-btn btn-primary">
                                                                    <i class="flaticon flaticon-like btn-primary"></i>
                                                                </a>
                                                                @elseif($check == true)
                                                                <a href="wishlist/{{$d->id}}" class="action-btn btn-danger " >
                                                                    <i class="flaticon flaticon-like btn-primary" style="color:red;"></i>
                                                                </a>
                                                                @else
                                                                <a href="wishlist/{{$d->id}}" class="action-btn btn-primary">
                                                                    <i class="flaticon flaticon-like btn-primary"></i>
                                                                </a>
                                                                @endif
                                                                <a class="action-btn" href="{{ route('product_view', ['id' => $d->id]) }}">
                                                                    <i class="flaticon flaticon-eye"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <span class="product-badge">New</span>
                                                    </figure>
                                                    <div class="product-info">
                                                        <h3 class="product-title mb--15">
                                                            <a href="#">{{ $d->product_name}}</a>
                                                        </h3>
                                                        <div class="product-price-wrapper mb--30">
                                                            <span class="money">₹ {{ $d->price}} </span>
                                                            
                                                        </div>
                                                        <a href="{{ route('product_view', ['id' => $d->id]) }}" class="btn btn-small btn-bg-sand btn-color-dark">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       @endforeach
                                        @endif
                                        
                                       
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="new-accessories" role="tabpanel" aria-labelledby="new-all-tab">
                                    <div class="row">
                                        @if (empty($dataacc))
                                        <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                            <div class="zakas-product">
                                                <div class="product-inner">
                                                   <h5>No Products Found</h5>
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                        @foreach ($dataacc as $d)
               
                                        <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                            <div class="zakas-product">
                                                <div class="product-inner">
                                                    <figure class="product-image">
                                                        <a href="#">
                                                            @if(!empty($d->image))
                                                            @php
                                                                $images = json_decode($d->image);
                                                            @endphp
                                                        
                                                            @if(count($images) > 0)
                                                                <img src="{{ asset('public/images/' . $images[0]) }}" style="height:300px;width:300px">
                                                            @endif
                                                        @endif
                                                        
                                                        </a>
                                                        <div class="zakas-product-action">
                                                            <div class="product-action d-flex">
                                                              
                                                                @if(!(session()->get('auth')))
                                                                <a href="#miniCart" class="action-btn btn-primary mini-cart-btn header-toolbar__btn toolbar-btn ">
                                                                    <i class="flaticon flaticon-like btn-primary"></i>
                                                                </a>
                                                                
                                                                @elseif($count === 0)
                                                                <a href="wishlist/{{$d->id}}" class="action-btn btn-primary">
                                                                    <i class="flaticon flaticon-like btn-primary"></i>
                                                                </a>
                                                                @elseif($check == true)
                                                                <a href="wishlist/{{$d->id}}" class="action-btn btn-danger " >
                                                                    <i class="flaticon flaticon-like btn-primary" style="color:red;"></i>
                                                                </a>
                                                                @else
                                                                <a href="wishlist/{{$d->id}}" class="action-btn btn-primary">
                                                                    <i class="flaticon flaticon-like btn-primary"></i>
                                                                </a>
                                                                @endif
                                                                <a class="action-btn" href="{{ route('product_view', ['id' => $d->id]) }}">
                                                                    <i class="flaticon flaticon-eye"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <span class="product-badge">New</span>
                                                    </figure>
                                                    <div class="product-info">
                                                        <h3 class="product-title mb--15">
                                                            <a href="#">{{ $d->product_name}} </a>
                                                        </h3>
                                                        <div class="product-price-wrapper mb--30">
                                                            <span class="money">₹ {{ $d->price}} </span>
                                                            
                                                        </div>
                                                        <a href="{{ route('product_view', ['id' => $d->id]) }}" class="btn btn-small btn-bg-sand btn-color-dark">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       @endforeach
                                        @endif
                                        
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Tab area End -->

        <!-- Banner Area Start -->
        <div class="banner-area mb--95">
            <div class="zakas-element-carousel home-08-banner-01 nav-vertical-center nav-hover-2 nav-space-100"             
            data-slick-options='{
                "slidesToShow": 1,
                "slidesToScroll": 1,
                "centerMode": true,
                "centerPadding": "20%",
                "arrows": true,
                "infinite": true,
                "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-double-left" },
                "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-double-right" }
            }'
            data-slick-responsive= '[
                {"breakpoint":575, "settings": {
                    "centerMode": false,
                    "centerPadding": "0%"
                }}
            ]'>
                <div class="item">
                    <div class="banner-item">
                        <figure>
                            <img src="{{asset('public/assets/img/banner/banner-20.jpg')}}" alt="Banner">
                        </figure>
                        <div class="banner-overlay">
                            <a href="https://www.youtube.com/watch?v=Rp19QD2XIGM" class="video-popup">
                                <img src="{{asset('public/assets/img/icons/play.png')}}" alt="Play Button">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="banner-item">
                        <figure>
                            <img src="{{asset('public/assets/img/banner/banner-21.jpg')}}" alt="Banner">
                        </figure>
                        <div class="banner-overlay">
                            <a href="https://www.youtube.com/watch?v=Rp19QD2XIGM" class="video-popup">
                                <img src="{{asset('public/assets/img/icons/play.png')}}" alt="Play Button">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="banner-item">
                        <figure>
                            <img src="{{asset('public/assets/img/banner/banner-28.jpg')}}" alt="Banner">
                        </figure>
                        <div class="banner-overlay">
                            <a href="https://www.youtube.com/watch?v=Rp19QD2XIGM" class="video-popup">
                                <img src="{{asset('public/assets/img/icons/play.png')}}" alt="Play Button">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End -->

        <!-- Newsletter Area Start -->
        <section class="newsletter-area mb--100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        

                        <h2 class="heading__secondary mb--5">Subscribe To Our Newsletter</h2>
                        <p class="max-w-60 max-w-sm-95 mx-auto">e the first to know about the latest trends, exclusive offers, and new arrivals at IDA 
                            Fashion. Join our newsletter to unlock a world of style inspiration, fashion updates, 
                            and special promotions delivered straight to your inbox. Don't miss out – subscribe 
                            now and elevate your fashion game with IDA Fashion!</p>
                        <form class="newsletter-form mt--40">
                            <input type="email" name="newsletter_email" id="newsletter_email" class="newsletter-form__input" placeholder="Enter Your E-mail Address">
                            <input type="submit" value="Subscribe Now" class="newsletter-form__submit">
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Newsletter Area End -->
<!--popup-->

        <!-- Qicuk View Modal Start -->
        <div class="modal fade product-modal" id="productModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="flaticon flaticon-cross"></i></span>
                  </button>
                  <div class="row">
                      <div class="col-lg-6">
                          <div class="zakas-element-carousel nav-vertical-center"
                          data-slick-options='{
                              "slidesToShow": 1,
                              "slidesToScroll": 1,
                              "arrows": true,
                              "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-double-left" },
                              "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-double-right" }
                          }'
                          >
                              <div class="product-image">
                                  <div class="product-image--holder">
                                      <a href="">
                                          <img src="{{asset('public/assets/img/products/prod-9-1.jpg')}}" alt="Product Image" class="primary-image">
                                      </a>
                                  </div>
                                  <span class="product-badge sale">sale</span>
                              </div>
                              <div class="product-image">
                                  <div class="product-image--holder">
                                      <a href="#">
                                          <img src="{{asset('public/assets/img/products/prod-9-1.jpg')}}" alt="Product Image" class="primary-image">
                                      </a>
                                  </div>
                                  <span class="product-badge sale">sale</span>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="modal-box product-summary">
                              <!--<div class="product-navigation text-end mb--20">
                                  <a href="#" class="prev"><i class="fa fa-angle-double-left"></i></a>
                                  <a href="#" class="next"><i class="fa fa-angle-double-right"></i></a>
                              </div>-->
                              <div class="product-rating d-flex mb--20">
                                  <div class="star-rating star-three">
                                      <span>Rated <strong class="rating">5.00</strong> out of 5</span>
                                  </div>
                              </div>
                              <h3 class="product-title mb--20">Black Blazer</h3>
                              <p class="product-short-description mb--25">Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                              <div class="product-price-wrapper mb--25">
                                  <span class="money">₹  200.00</span>
                                  <span class="price-separator">-</span>
                                  <span class="money">₹  400.00</span>
                              </div>
                              <form action="#" class="variation-form mb--30">
                                  <div class="product-color-variations d-flex align-items-center mb--20">
                                      <p class="variation-label">Color:</p>
                                      <div class="product-color-variation variation-wrapper">
                                          <div class="variation">
                                              <a class="product-color-variation-btn red " data-bs-toggle="tooltip" data-bs-placement="top" title="Red">
                                                  <span class="product-color-variation-label">Red</span>
                                              </a>
                                          </div>
                                          <div class="variation">
                                              <a class="product-color-variation-btn black" data-bs-toggle="tooltip" data-bs-placement="top" title="Black">
                                                  <span class="product-color-variation-label">Black</span>
                                              </a>
                                          </div>
                                          <div class="variation">
                                              <a class="product-color-variation-btn pink" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink">
                                                  <span class="product-color-variation-label">Pink</span>
                                              </a>
                                          </div>
                                          <div class="variation">
                                              <a class="product-color-variation-btn blue" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue">
                                                  <span class="product-color-variation-label">Blue</span>
                                              </a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="product-size-variations d-flex align-items-center mb--15">
                                      <p class="variation-label">Size:</p>   
                                      <div class="product-size-variation variation-wrapper">
                                          <div class="variation">
                                              <a class="product-size-variation-btn selected" data-bs-toggle="tooltip" data-bs-placement="top" title="S">
                                                  <span class="product-size-variation-label">S</span>
                                              </a>
                                          </div>
                                          <div class="variation">
                                              <a class="product-size-variation-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="M">
                                                  <span class="product-size-variation-label">M</span>
                                              </a>
                                          </div>
                                          <div class="variation">
                                              <a class="product-size-variation-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="L">
                                                  <span class="product-size-variation-label">L</span>
                                              </a>
                                          </div>
                                          <div class="variation">
                                              <a class="product-size-variation-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="XL">
                                                  <span class="product-size-variation-label">XL</span>
                                              </a>
                                          </div>
                                      </div>                                 
                                  </div>
                                 <!-- <a href="#" class="reset_variations">Clear</a>-->
                              </form>
                              <div class="product-action d-flex flex-sm-row flex-column align-items-sm-center align-items-start mb--30">
                                  <!--<div class="quantity-wrapper d-flex align-items-center mr--30 mr-xs--0 mb-xs--30">
                                      <label class="quantity-label" for="quick-qty">Quantity:</label>
                                      <div class="quantity">
                                          <input type="number" class="quantity-input" name="qty" id="quick-qty" value="1" min="1">
                                      </div>
                                  </div>-->
                                  
                              </div>  
                              <div class="product-footer-meta">
                                  <p><span>Category:</span>
                                      <a href="#">Full Sweater</a>
                                      
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Qicuk View Modal End -->
<!--popup-->
        <!-- Instagram Area Start -->
        <section class="instagram-area mb--100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="instagram-feed">
                            <div class="instagram-feed-heading">
                                <h4>Follow Us On</h4>
                                <a href="#">@instagram</a>
                            </div>
                            <div class="row g-0">
                                <div class="col-md-2 col-4">
                                    <div class="instagram-item">
                                        <a class="instagram-image" href="#">
                                            <img src="{{asset('public/assets/img/instagram/1.jpg')}}" alt="Instagram Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-2 col-4">
                                    <div class="instagram-item">
                                        <a class="instagram-image" href="#">
                                            <img src="{{asset('public/assets/img/instagram/2.jpg')}}" alt="Instagram Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-2 col-4">
                                    <div class="instagram-item">
                                        <a class="instagram-image" href="#">
                                            <img src="{{asset('public/assets/img/instagram/3.jpg')}}" alt="Instagram Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-2 col-4">
                                    <div class="instagram-item">
                                        <a class="instagram-image" href="#">
                                            <img src="{{asset('public/assets/img/instagram/4.jpg')}}" alt="Instagram Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-2 col-4">
                                    <div class="instagram-item">
                                        <a class="instagram-image" href="#">
                                            <img src="{{asset('public/assets/img/instagram/5.jpg')}}" alt="Instagram Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-2 col-4">
                                    <div class="instagram-item">
                                        <a class="instagram-image" href="#">
                                            <img src="{{asset('public/assets/img/instagram/6.jpg')}}" alt="Instagram Image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Instagram Area End -->
    </div>
    <!-- Main Content Wrapper End -->
    
</x-layout>