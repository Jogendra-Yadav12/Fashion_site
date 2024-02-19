    <!-- Deal Section Start -->
    <section class="product-section product-section-3">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Womens</h2>
            </div>
            <div class="row g-sm-4 g-3 section-b-space">
                <div class="col-xxl-12 ratio_110">
                    <div class="slider-6 img-slider">
                        @foreach ($women as $key=>$value)
                        <div>
                            <div class="product-box-5 wow fadeInUp">
                                <div class="product-image">
                                    <a href="{{url('product-details/'.$value['id'])}}">
                                            @foreach(json_decode($value['image']) as $key => $image)
                                                @if($key === 0)
                                                <img src="{{asset('public/images/'.$image)}}"
                                                class="img-fluid blur-up lazyload" style="height:300px;width:330;object:conatin" alt="">  
                                                @endif
                                            @endforeach
                                    </a>
                                </div>

                                <div class="product-detail">
                                    <a href="{{url('product-details/'.$value['id'])}}">
                                        <h5 class="name">{{$value->product_name}}</h5>
                                    </a>

                                    <h5 class="sold text-content">
                                        <span class="theme-color price"><i class="bi bi-currency-rupee"></i> {{$value->price}}</span>
                                    </h5>
                                </div>
                            </div>
                        </div>  
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Deal Section End -->