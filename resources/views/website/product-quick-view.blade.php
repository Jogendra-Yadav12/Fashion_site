@extends('layouts.app')
@section('content')
    <!-- Product Left Sidebar Start 1656-->
    <section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="modal-body">
                        <div class="row g-sm-4 g-2">
                            <div class="col-lg-6">
                                <div class="slider-image">
                                    @if (!empty($product->image))
                                    @php
                                        $images2 = json_decode($product->image);
                                    @endphp
                                     @if (count($images2) > 0)
                                    <img src="{{ asset('public/images/' . $images2[0]) }}"
                                        class="img-fluid blur-up lazyload" alt="">
                                        @endif
                                        @endif
                                </div>
                            </div>

                            <div class="col-lg-6 d-flex align-items-center">
                                <div class="right-sidebar-modal">
                                    <h2 class="title-name fw-bold">{{ucfirst($product->product_name ?? '')}}</h2>
                                    <h4 class="price mt-2">Rs. {{$product->price ?? ''}}</h4>
                                    <div class="product-rating mt-4">
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
                                        <span class="ms-2">8 Reviews</span>
                                        {{-- <span class="ms-2 text-danger">6 sold in last 16 hours</span> --}}
                                    </div>

                                    <div class="product-detail mt-4">
                                        <h4 class="fw-bold">Product Details :</h4>
                                        <p>{!! $product->description !!}</p>
                                    </div>

                                   <table class="table">
                                       <tr>
                                           <th style="width:20%;">Category:</th>
                                           <td style="width:80%;">{{ucfirst($product->category ?? '')}}</td>
                                       </tr>
                                   </table>


                                    <ul class="brand-list">
                                        <!--<li>-->
                                        <!--    <div class="brand-box">-->
                                        <!--        <h5>Brand Name:</h5>-->
                                        <!--        <h6>{{ucfirst($product->brand ?? '')}}</h6>-->
                                        <!--    </div>-->
                                        <!--</li>-->

                                        
                                    </ul>

                                   

                                    <div >
                                        <div class="row col-12 mx-auto">
                                             <div class="col-lg-5 col-md-6 col-sm-12 mt-3">
                                                 <button onclick="location.href = 'cart.html';"
                                            class="btn btn-md add-cart-button icon w-100 bg-dark text-white">Add
                                            To Cart</button>
                                             </div>
                                             <div class="col-lg-7 col-md-6 col-sm-12 mt-3">
                                                                    <a href="{{url('product-details').'/'.$product->id ?? ''}}"
                                            class="btn theme-bg-color view-button icon text-white fw-bold btn-md">
                                            View More Details</a>
                                             </div>
                                        </div>
                                        
                                        

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Left Sidebar End -->
@endsection
