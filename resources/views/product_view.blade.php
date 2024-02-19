<x-layout>
    
     <!-- Main Content Wrapper Start -->
     <div class="main-content-wrapper">
        <div class="page-content-inner ptb--80">
            <div class="container">
              
               
                
              
            
                <div class="row g-0 mb--80">
                    <div class="col-lg-7 product-main-image">
                        <div class="product-image">
                            <div class="product-gallery vertical-slide-nav flex-row-reverse">
                                <div class="product-gallery__large-image mb-md--30">
                                    <div class="product-gallery__wrapper">
                                        <div class="zakas-element-carousel main-slider image-popup"
                                        data-slick-options='{
                                            "slidesToShow": 1,
                                            "slidesToScroll": 1,
                                            "infinite": true,
                                            "arrows": false, 
                                            "asNavFor": ".nav-slider"
                                        }'>
                                        @foreach(json_decode($products->image) as $image)
                                            <figure class="product-gallery__image zoom">
                                                <img src="{{ asset('public/images/' . $image) }}" alt="Product">
                                                <div class="product-gallery__actions">
                                                    <button class="action-btn btn-zoom-popup"><i class="fa fa-eye"></i></button>
                                                    <a href="#" class="action-btn video-popup"><i class="fa fa-play"></i></a>
                                                </div>
                                            </figure>
                                            @endforeach
                                            <!--<figure class="product-gallery__image zoom">
                                                <img src="{{asset('public/assets/img/products/prod-32.jpg')}}" alt="Product">
                                                <div class="product-gallery__actions">
                                                    <button class="action-btn btn-zoom-popup"><i class="fa fa-eye"></i></button>
                                                    <a href="https://www.youtube.com/watch?v=Rp19QD2XIGM" class="action-btn video-popup"><i class="fa fa-play"></i></a>
                                                </div>
                                            </figure>
                                            <figure class="product-gallery__image zoom">
                                                <img src="{{asset('public/assets/img/products/prod-33.jpg')}}" alt="Product">
                                                <div class="product-gallery__actions">
                                                    <button class="action-btn btn-zoom-popup"><i class="fa fa-eye"></i></button>
                                                    <a href="https://www.youtube.com/watch?v=Rp19QD2XIGM" class="action-btn video-popup"><i class="fa fa-play"></i></a>
                                                </div>
                                            </figure>
                                            <figure class="product-gallery__image zoom">
                                                <img src="{{asset('public/assets/img/products/prod-34.jpg')}}" alt="Product">
                                                <div class="product-gallery__actions">
                                                    <button class="action-btn btn-zoom-popup"><i class="fa fa-eye"></i></button>
                                                    <a href="https://www.youtube.com/watch?v=Rp19QD2XIGM" class="action-btn video-popup"><i class="fa fa-play"></i></a>
                                                </div>
                                            </figure>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="product-gallery__nav-image">
                                    <div class="zakas-element-carousel nav-slider slick-vertical product-slide-nav" 
                                    data-slick-options='{
                                        "spaceBetween": "30px",
                                        "slidesToShow": 3,
                                        "slidesToScroll": 1,
                                        "vertical": true,
                                        "swipe": true,
                                        "verticalSwiping": true,
                                        "infinite": true,
                                        "focusOnSelect": true,
                                        "asNavFor": ".main-slider",
                                        "arrows": true, 
                                        "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-up" },
                                        "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-down" }
                                    }'
                                    data-slick-responsive='[
                                        {
                                            "breakpoint":767, 
                                            "settings": {
                                                "slidesToShow": 4,
                                                "vertical": false
                                            } 
                                        },
                                        {
                                            "breakpoint":575, 
                                            "settings": {
                                                "slidesToShow": 3,
                                                "vertical": false
                                            } 
                                        },
                                        {
                                            "breakpoint":480, 
                                            "settings": {
                                                "slidesToShow": 2,
                                                "vertical": false
                                            } 
                                        }
                                    ]'>
                                    @foreach(json_decode($products->image) as $image)
                                    
                                        <figure class="product-gallery__nav-image--single">
                                            <img src="{{ asset('public/images/' . $image) }}" alt="Products">
                                        </figure>
                                        @endforeach
                                       <!-- <figure class="product-gallery__nav-image--single">
                                            <img src="{{asset('public/assets/img/products/prod-32-170x195.jpg')}}" alt="Products">
                                        </figure>
                                        <figure class="product-gallery__nav-image--single">
                                            <img src="{{asset('public/assets/img/products/prod-33-170x195.jpg')}}" alt="Products">
                                        </figure>
                                        <figure class="product-gallery__nav-image--single">
                                            <img src="{{asset('public/assets/img/products/prod-34-170x195.jpg')}}" alt="Products">
                                        </figure>-->
                                    </div>
                                </div>
                            </div>
                            <span class="product-badge sale">Sale</span>
                        </div>
                    </div>
                    <div class="col-xl-4 offset-xl-1 col-lg-5 product-main-details mt-md--50">
                        <div class="product-summary pl-lg--30 pl-md--0">
                            <!--<div class="product-navigation text-end mb--20">
                                <a href="#" class="prev"><i class="fa fa-angle-double-left"></i></a>
                                <a href="#" class="next"><i class="fa fa-angle-double-right"></i></a>
                            </div>-->
                            
                            <h3 class="product-title mb--20">{{ $products->product_name}}</h3>
                            <p class="product-short-description mb--20">{{$products->description}}</p>
                            <div class="product-price-wrapper mb--25">
                                <span class="money">₹ {{ $products->price}}</span>
                                
                            </div>
                            <form method="POST" action="{{ url('addtocart') }}" enctype="multipart/form-data" class="variation-form mb--20">
                                @csrf
                                <input type="hidden" value="{{$products->id}}" name="id">
                                <div class="product-size-variations d-flex align-items-center mb--15">
                                    <p class="variation-label">Color:</p>  
                                    
                                    <div class="product-size-variation variation-wrapper">
                                        @foreach(json_decode($products->color) as $color)
                                        <div class="variation">
                                            <a class="product-size-variation-btn color-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-color="{{ $color }}" title="{{ $color}}">
                                                <span class="product-size-variation-label">    
                                                   {{ $color}}
                                                   
                                               
                                                </span>
                                            </a>
                                        </div>
                                   
                                  @endforeach
                                    </div>
                                    
                                    <p class="variation-label">Size:</p>  
                                    
                                    <div class="product-size-variation variation-wrapper">
                                        @foreach(json_decode($products->size) as $size)
                                        <div class="variation">
                                            <a class="product-size-variation-btn size-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-size="{{ $size }}" title="{{ $size}}">
                                                <span class="product-size-variation-label">    
                                                   {{ $size}}
                                                   
                                               
                                                </span>
                                            </a>
                                        </div>
                                  @endforeach
                                  
                                       
                                    </div>                                 
                                </div>
                               <!-- <a href="#" class="reset_variations">Clear</a>-->
                           
                            <div class="product-action d-flex flex-sm-row align-items-sm-center flex-column align-items-start mb--30">
                               
                                @if(!(session()->get('auth')))
                                <a href="#miniCart" class="action-btn btn-primary mini-cart-btn header-toolbar__btn toolbar-btn ">
                                    <button type="button" class="btn btn-small btn-bg-red btn-color-white btn-hover-2" onclick="window.location.href='#'">
                                        Buy Now
                                    </button>
                                  </a>
                                  @else
                                  <input type="hidden" name="selectedColor" required id="selectedColor">
                                  <input type="hidden" name="selectedSize" required id="selectedSize">
                                   <!-- <a href="{{ url('addtocart', ['id' => $products->id]) }}" class="btn btn-small btn-bg-red btn-color-white btn-hover-2">
                                       
                                      Add To Cart</a>-->
                                      <button type="submit" id="proceedButton" class="btn btn-small btn-bg-red btn-color-white btn-hover-2" >
                                        Buy Now
                                    </button>
                               
                                @endif
                            </form> 
                            </div>  
                            <div class="product-footer-meta">
                                <p><span>Category:</span> 
                                    {{ $products->category}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb--80">
                    <div class="col-12">
                        <div class="product-data-tab tab-style-3">
                            <div class="nav nav-tabs product-data-tab__head mb--35 mb-sm--25" id="product-tab" role="tablist">
                                <button type="button" class="product-data-tab__link nav-link active" id="nav-description-tab" data-bs-toggle="tab" data-bs-target="#nav-description" role="tab" aria-selected="true"> 
                                    <span>Description</span>
                                </button>
                                <button type="button" class="product-data-tab__link nav-link" id="nav-info-tab" data-bs-toggle="tab" data-bs-target="#nav-info" role="tab" aria-selected="true">
                                    <span>Additional Information</span>
                                </button>
                               <!-- <button type="button" class="product-data-tab__link nav-link" id="nav-reviews-tab" data-bs-toggle="tab" data-bs-target="#nav-reviews" role="tab" aria-selected="true">
                                    <span>Reviews(1)</span>
                                </button>-->
                            </div>
                            <div class="tab-content product-data-tab__content" id="product-tabContent">
                                <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab">
                                    <div class="product-description">
                                        <p>{{$products->description}}</p>
                                        
                                    </div>
                                </div>
                                <div class="tab-pane" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
                                    <div class="table-content table-responsive">
                                        <table class="table shop_attributes">
                                            <tbody>
                                                <tr>
                                                    <th>Weight</th>
                                                    <td>57 kg</td>
                                                </tr>
                                                <tr>
                                                    <th>Dimensions</th>
                                                    <td>160 × 152 × 110 cm</td>
                                                </tr>
                                                <tr>
                                                    <th>Color</th>
                                                    <td>
                                                        @foreach(json_decode($products->color) as $color)
                                                        <a href="#">{{$color}}</a>,
                                                        @endforeach
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-reviews" role="tabpanel" aria-labelledby="nav-reviews-tab">
                                    <div class="product-reviews">
                                        <h3 class="review__title">1 review for Black Blazer</h3>
                                        <ul class="review__list">
                                            <li class="review__item">
                                                <div class="review__container">
                                                    <img src="assets/img/others/comment-1.jpg" alt="Review Avatar" class="review__avatar">
                                                    <div class="review__text">
                                                        <div class="d-flex flex-sm-row flex-column justify-content-between">
                                                            <div class="review__meta">
                                                                <strong class="review__author">John Snow </strong>
                                                                <span class="review__dash">-</span>
                                                                <span class="review__published-date">November 20, 2023</span>
                                                            </div>
                                                            <div class="product-rating">
                                                                <div class="star-rating star-five">
                                                                    <span>Rated <strong class="rating">5.00</strong> out of 5</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="review__description">Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="review-form-wrapper">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <span class="reply-title">Add a review</span>
                                                    <form action="#" class="form pr--30">
                                                        <div class="form-notes mb--20">
                                                            <p>Your email address will not be published. Required fields are marked <span class="required">*</span></p>
                                                        </div>
                                                        <div class="form__group mb--10 pb--1">
                                                            <label class="form__label d-block" >Your Ratings</label>
                                                            <div class="rating">
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="form__group mb--10">
                                                            <label class="form__label d-block" for="email">Your Review<span class="required">*</span></label>
                                                            <textarea name="review" id="review" class="form__input form__input--textarea"></textarea>
                                                        </div>
                                                        <div class="form__group mb--20">
                                                            <label class="form__label d-block" for="name">Name<span class="required">*</span></label>
                                                            <input type="text" name="name" id="name" class="form__input">
                                                        </div>
                                                        <div class="form__group mb--20">
                                                            <label class="form__label d-block" for="email">Email<span class="required">*</span></label>
                                                            <input type="email" name="email" id="email" class="form__input">
                                                        </div>
                                                        <div class="form__group">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <input type="submit" value="Submit Now" class="btn-submit">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <div class="zakas-element-carousel nav-vertical-center" data-slick-options='{
                            "spaceBetween": 30,
                            "slidesToShow": 4,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-double-left" },
                            "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-double-right" }
                        }'
                        data-slick-responsive= '[
                            {"breakpoint":1199, "settings": {
                                "slidesToShow": 3
                            }},
                            {"breakpoint":991, "settings": {
                                "slidesToShow": 2
                            }},
                            {"breakpoint":575, "settings": {
                                "slidesToShow": 1
                            }}
                        ]'>
                           
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Wrapper End -->
    <!-- Modal for the popup -->
<div class="modal" id="selectionModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">Select Color and Size</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Please select both color and size before proceeding.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('proceedButton').addEventListener('click', function (e) {
        // Check if color and size are selected
        var selectedColor = document.getElementById('selectedColor').value;
        var selectedSize = document.getElementById('selectedSize').value;

        if (!selectedColor || !selectedSize) {
            // Show the modal if either color or size is not selected
            var modal = new bootstrap.Modal(document.getElementById('selectionModal'));
            modal.show();
            e.preventDefault();

        } else {
            
        }
    });
});
</script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
            // Color buttons
            document.querySelectorAll('.color-btn').forEach(function(colorBtn) {
                colorBtn.addEventListener('click', function () {
                    // Set selected color to the hidden input field
                    document.getElementById('selectedColor').value = colorBtn.getAttribute('data-color');
                });
            });
        
            // Size buttons
            document.querySelectorAll('.size-btn').forEach(function(sizeBtn) {
                sizeBtn.addEventListener('click', function () {
                    // Set selected size to the hidden input field
                    document.getElementById('selectedSize').value = sizeBtn.getAttribute('data-size');
                });
            });
        });
        </script>
      
    
      
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Color buttons
            document.querySelectorAll('.color-btn').forEach(function(colorBtn) {
                colorBtn.addEventListener('click', function () {
                    // Remove 'selected' class from all color buttons
                    document.querySelectorAll('.color-btn').forEach(function(btn) {
                        btn.classList.remove('selected');
                    });
    
                    // Add 'selected' class to the clicked color button
                    colorBtn.classList.add('selected');
    
                    // Set selected color to the hidden input field
                    document.getElementById('selectedColor').value = colorBtn.getAttribute('data-color');
                });
            });
    
            // Size buttons
            document.querySelectorAll('.size-btn').forEach(function(sizeBtn) {
                sizeBtn.addEventListener('click', function () {
                    // Remove 'selected' class from all size buttons
                    document.querySelectorAll('.size-btn').forEach(function(btn) {
                        btn.classList.remove('selected');
                    });
    
                    // Add 'selected' class to the clicked size button
                    sizeBtn.classList.add('selected');
    
                    // Set selected size to the hidden input field
                    document.getElementById('selectedSize').value = sizeBtn.getAttribute('data-size');
                });
            });
        });
    </script>
    
    
</x-layout>