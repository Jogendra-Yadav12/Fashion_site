<!-- Category Section Start -->
    <section>
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="slider-9">
                        @foreach ($category as $key=>$value)
                        <div>
                            <div class="category-box category-dark wow fadeInUp">
                                <div>
                                    <img src="{{ asset('public/images/' . $value['image']) }}" class="blur-up lazyload" alt="">
                                    <h5>{{$value['subcategory']}}</h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category Section End -->