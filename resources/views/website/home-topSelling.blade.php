 <!-- Top Selling Section Start -->
 <section class="top-selling-section">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-xxl-3 col-lg-4 d-lg-block d-none">
                    <div class="ratio_156">
                        <div class="banner-contain-2 hover-effect">
                            <img src="{{asset('public/assets/images/fashion/banner/3.jpg')}}" class="bg-img blur-up lazyload" alt="">
                            <div class="banner-detail-2 p-bottom-center text-center home-p-medium">
                                <div>
                                    <h2 class="text-qwitcher">Passion Meet</h2>
                                    <h3>PERFECTION</h3>
                                    <a href="{{url('shop')}}" style="width:60%" class="btn theme-bg-color btn-md text-white fw-bold mt-md-4 mt-2 mend-auto">
                                    Shop Now <i class="bi bi-arrow-right icon"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-9 col-lg-8">
                    <div class="slider-3_3 product-wrapper">
                        <div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="top-selling-box">
                                        <div class="top-selling-title">
                                            <h3>Top Selling</h3>
                                        </div>
                                        @foreach ($top as $key=>$value)
                                        <div class="top-selling-contain wow fadeInUp">
                                            <a href="{{url('product-details/'.$value['id'])}}" class="top-selling-image">
                                            @foreach(json_decode($value['image']) as $key => $image)
                                                @if($key === 0)
                                                <img src="{{asset('public/images/'.$image)}}"
                                                class="img-fluid blur-up lazyload" style="height:100%;width:100%;object:conatin" alt="">  
                                                @endif
                                            @endforeach
                                            </a>

                                            <div class="top-selling-detail">
                                                <a href="{{url('product-details/'.$value['id'])}}">
                                                    <h5>{{$value->product_name}}</h5>
                                                </a>
                                                <h6><i class="bi bi-currency-rupee"></i> {{$value->price}}</h6>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="top-selling-box">
                                        <div class="top-selling-title">
                                            <h3>Recently added</h3>
                                        </div>
                                        @foreach ($latest as $key=>$value)
                                        <div class="top-selling-contain wow fadeInUp">
                                            <a href="{{url('product-details/'.$value['id'])}}" class="top-selling-image">
                                            @foreach(json_decode($value['image']) as $key => $image)
                                                @if($key === 0)
                                                <img src="{{asset('public/images/'.$image)}}"
                                                class="img-fluid blur-up lazyload" style="height:100%;width:100%;object:conatin" alt="">  
                                                @endif
                                            @endforeach
                                            </a>

                                            <div class="top-selling-detail">
                                                <a href="{{url('product-details/'.$value['id'])}}">
                                                    <h5>{{$value->product_name}}</h5>
                                                </a>
                                                <h6><i class="bi bi-currency-rupee"></i> {{$value->price}}</h6>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Selling Section End -->