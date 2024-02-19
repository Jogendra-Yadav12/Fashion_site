<x-layout>
     <!-- Main Content Wrapper Start -->
     <div  class="main-content-wrapper">
        <div class="shop-page-wrapper shop-fullwidth ptb--80">
            <div class="container">
                <div class="row mb--50">
                    <div class="col-12">
                        <div class="shop-toolbar">
                            <div class="row align-items-center">
                                <div class="col-lg-6 mb-md--50 mb-xs--10">
                                    <div class="shop-toolbar__left d-flex align-items-sm-center align-items-start flex-sm-row flex-column">
                                        <div class="product-view-mode mr--50 mr-xs--0">
                                            <!--<a class="active" href="#" data-target="grid">
                                                <img src="{{asset('public/assets/img/icons/grid.png')}}" alt="Grid">
                                            </a>-->
                                           <!-- <a href="#" data-target="list">
                                                <img src="{{asset('public/assets/img/icons/list.png')}}" alt="Grid">
                                            </a>-->
                                        </div>
                                        <!--<p class="product-pages">Showing 1–20 of 42 results</p>-->
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="shop-toolbar__right d-flex justify-content-lg-end justify-content-start flex-sm-row flex-column">
                                        <div class="product-categories mb-xs--15 mr--50 mr-xs--0">
                                            <select class="product-categories__select nice-select">
                                               <!-- <option value="nav-all">All</option>
                                                <option value="nav-men">Men</option>
                                                <option value="nav-women">Women</option>
                                                <option value="nav-kidz">Kidz</option>
                                                <option value="nav-accessories">Accessories</option>-->
                                                @if(!empty($category))
                                                @foreach($category as $cate)
                                                <option value="nav-{{ $cate->category }}">{{ ucfirst($cate->category) }}</option>
                                                  @endforeach
                                                  @endif
                                            </select>
                                           
                                        </div>
                                       <!-- <div class="product-ordering">
                                            <select class="product-ordering__select nice-select">
                                                <option value="0">Default Sorting</option>
                                                <option value="1">Relevance</option>
                                                <option value="2">Name, A to Z</option>
                                                <option value="3">Name, Z to A</option>
                                                <option value="4">Price, low to high</option>
                                                <option value="5">Price, high to low</option>
                                            </select>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          

            <div class="container-fluid shop-products">
                <div class="row">
                    <div class="col-12">
                        
                        <div class="tab-content" id="product-tab-content">
                          @foreach($category as $c)
                               
                                <div class="tab-pane fade show active" id="nav-{{ $c->category }}">

                                <div class="row xxl-block-grid-6 grid-space-20">
                                   

                                    @foreach ($data as $d)
                                    @php $check = false; @endphp
                                    @if(!empty($wish))
                                    @foreach($wish as $item)
                                        @if($item->p_id == $d->id)
                                                @php $check = true; @endphp
                                        @endif
                                    @endforeach
                                    @endif
                                    @if($c->category==$d->category)
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
                                                    <a href="{{ route('product_view', ['id' => $d->id]) }}" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                    @endif
                                    @endforeach
                                    
                                </div>
                            </div>
                           
                            @endforeach
                        </div>
                      
                       <!-- <nav class="pagination-wrap mt--35 mt-md--25">
                            <ul class="pagination">
                                <li><a href="#" class="prev page-number"><i class="fa fa-angle-double-left"></i></a></li>
                                <li><span class="current page-number">1</span></li>
                                <li><a href="#" class="page-number">2</a></li>
                                <li><a href="#" class="page-number">3</a></li>
                                <li><a href="#" class="next page-number"><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </nav>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Wrapper Start -->
</x-layout>