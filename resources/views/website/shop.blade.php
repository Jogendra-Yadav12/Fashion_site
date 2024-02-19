@extends('layouts.app')
@section('content')

<!-- Breadcrumb Section Start -->
<section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2>Shop</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                    <i class="bi bi-house-door"></i> <i class="bi bi-caret-right-fill"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Shop</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Shop Section Start -->
    <section class="section-b-space shop-section">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="show-button">
                        <div class="top-filter-menu-2">
                            <div class="sidebar-filter-menu" data-bs-toggle="collapse"
                                data-bs-target="#collapseExample">
                                <a href="javascript:void(0)"><i class="bi bi-funnel"></i> Filter Menu</a>
                            </div>

                            <div class="ms-auto d-flex align-items-center">
                                <div class="category-dropdown me-md-3">
                                    <h5 class="text-content">Sort By :</h5>
                                    <div class="dropdown">
                                        <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                                            <span>Most Popular</span> <i class="bi bi-caret-down-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" id="low" href="javascript:void(0)">Low - High Price</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" id="high" href="javascript:void(0)">High - Low Price</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="grid-option grid-option-2">
                                    <ul>
                                        <li class="three-grid">
                                            <a href="javascript:void(0)">
                                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/grid-3.svg" class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                        <!-- <li class="grid-btn four-grid d-xxl-inline-block d-none">
                                            <a href="javascript:void(0)">
                                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/grid-4.svg"
                                                    class="blur-up lazyload d-lg-inline-block d-none" alt="">
                                            </a>
                                        </li> -->
                                        <li class="five-grid d-xxl-inline-block d-none active">
                                            <a href="javascript:void(0)">
                                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/grid-5.svg"
                                                    class="blur-up lazyload d-lg-inline-block d-none" alt="">
                                            </a>
                                        </li>
                                        <li class="list-btn">
                                            <a href="javascript:void(0)">
                                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/list.svg" class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="top-filter-category" id="collapseExample">
                        <div class="row g-sm-4">
                            <div class="col-xl-3 col-md-6">
                                <div class="category-title">
                                    <h3>Category</h3>
                                </div>
                                <ul class="category-list custom-padding custom-height">
                                    @foreach ($category as $key=>$value)
                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="{{$value->category}}">
                                            <label class="form-check-label" for="{{$value->category}}">
                                                <span class="name">{{$value->category}}</span>
                                            </label>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div id="products-container" class="row g-sm-4 g-3 row-cols-xxl-5 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2 product-list-section">
                        @foreach ($data as $key=>$value)
                        <div class="product-box-1" data-category="{{$value['category']}}" data-price="{{$value['price']}}">
                            <div class="product-box-3 h-100 wow fadeInUp">
                                <div class="product-header">
                                    <div class="product-image">
                                        <a href="{{url('product-details/'.$value['id'])}}">
                                            @foreach(json_decode($value['image']) as $key => $image)
                                                @if($key === 0)
                                                <img src="{{asset('public/images/'.$image)}}"
                                                class="img-fluid blur-up lazyload" alt="">  
                                                @endif
                                            @endforeach
                                            
                                        </a>

                                        <!-- <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a class="action-btn" href="">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                        </ul> -->
                                    </div>
                                </div>
                                <div class="product-footer">
                                    <div class="product-detail">
                                        <span class="span-name">{{$value['category']}}</span>
                                        <a href="{{url('product-details/'.$value['id'])}}">
                                            <h5 class="name">{{$value['product_name']}}</h5>
                                        </a>
                                        <p class="text-content mt-1 mb-2 product-content">{{$value['description']}}</p>
                                        <h5 class="price"><span class="theme-color"><i class="bi bi-currency-rupee"></i>{{$value['price']}}</span>
                                        </h5>
                                        <div class="add-to-cart-box bg-white">
                                            <a href="{{url('product-details/'.$value['id'])}}" class="btn btn-add-cart addcart-button">Buy Now
                                                <span class="add-icon bg-light-gray">
                                                <i class="bi bi-bag"></i>
                                                </span>
                                            </a>
                                            <div class="cart_qty qty-box">
                                                <div class="input-group bg-white">
                                                    <button type="button" class="qty-left-minus bg-gray"
                                                        data-type="minus" data-field="">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                        name="quantity" value="0">
                                                    <button type="button" class="qty-right-plus bg-gray"
                                                        data-type="plus" data-field="">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Quick View Modal Box Start -->
    
                    @endforeach

                        <div>
                        
                    </div>
                </div>
                <nav class="custom-pagination">
                    <ul class="pagination justify-content-center">
                        @if ($data->onFirstPage())
                            <li class="page-item disabled">
                                <span class="page-link" tabindex="-1">
                                    <i class="bi bi-caret-left-fill"></i>
                                </span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $data->previousPageUrl() }}" tabindex="-1">
                                    <i class="bi bi-caret-left-fill"></i>
                                </a>
                            </li>
                        @endif

                        @foreach ($data->getUrlRange(1, $data->lastPage()) as $page => $url)
                            <li class="page-item {{ $page == $data->currentPage() ? 'active' : '' }}">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endforeach

                        @if ($data->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $data->nextPageUrl() }}">
                                    <i class="bi bi-caret-right-fill"></i>
                                </a>
                            </li>
                        @else
                            <li class="page-item disabled">
                                <span class="page-link">
                                    <i class="bi bi-caret-right-fill"></i>
                                </span>
                            </li>
                        @endif

                    </ul>
                </nav>

                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
   $(document).ready(function() {
      $('.checkbox_animated').change(function() {
         filterProducts();
      });
      filterProducts();

      function filterProducts() {
         var checkedCategories = $('.checkbox_animated:checked').map(function() {
            return $(this).attr('id');
         }).get();

         $('.product-box-1').each(function() {
            var productCategory = $(this).data('category');
            if (checkedCategories.length === 0 || checkedCategories.includes(productCategory)) {
                $(this).css('display', 'block');
            } else {
                $(this).css('display', 'none');
            }
         });
      }
   });



   $(document).ready(function () {
    var products = [];
        $('.product-box-1').each(function() {
            var price = parseFloat($(this).data('price'));
            products.push({
                element : this,
                price: price 
            });
        });

        function sortByLowToHigh() {
            products.sort(function (a, b) {
                return a.price - b.price;
            });
            updateProductList(products);
        }

        function sortByHighToLow() {
            products.sort(function (a, b) {
                return b.price - a.price;
            });
            updateProductList(products);
        }

        function updateProductList(products) {
            var container = $('#products-container');

            container.empty();

            for (var i = 0; i < products.length; i++) {
                container.append(products[i].element);
            }
        }
      
        $('#low').on('click', function () {
            sortByLowToHigh();
        });

        $('#high').on('click', function () {
            sortByHighToLow();
        });
    });
</script>


@endsection