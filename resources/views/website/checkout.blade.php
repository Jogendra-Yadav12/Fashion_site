@extends('layouts.app')

@section('content')

<!-- Breadcrumb Section Start -->
<section class="breadcrumb-section pt-0">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-contain">
                    <h2>Checkout</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{url('/')}}">
                                    <i class="bi bi-house-door"></i> <i class="bi bi-caret-right-fill"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Checkout section Start -->
<section class="checkout-section-2 section-b-space">
    <div class="container-fluid-lg">
        <div class="row g-sm-4 g-3">
            <div class="col-lg-6">
                <div class="left-sidebar-checkout">
                    <div class="checkout-detail-box">
                        <ul>
                            <li>
                                <div class="checkout-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                        class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                    </svg>
                                </div>
                                <div class="checkout-box">
                                    <div class="checkout-title">
                                        <h4>Delivery Address</h4>
                                    </div>

                                    <div class="checkout-detail">
                                        <div class="row g-4">
                                            @foreach ($address as $key=>$value)
                                            <div class="col-xxl-12 col-lg-12 col-md-6">
                                                <div class="delivery-address-box">
                                                    <div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="jack"
                                                                id="{{$value->id}}" value="{{$value->id}}">
                                                            <label style="display:none"
                                                                for="{{$value->id}}">{{$value->id}}</label>
                                                        </div>

                                                        <ul class="delivery-address-detail">
                                                            <li>
                                                                <h4 class="fw-500">{{$value->name}}</h4>
                                                            </li>

                                                            <li>
                                                                <p class="text-content"><span class="text-title">Address
                                                                        : </span>{{$value->street}}</p>
                                                            </li>

                                                            <li>
                                                                <h6 class="text-content"><span class="text-title">Number
                                                                        :</span> {{$value->phone}}</h6>
                                                            </li>

                                                            <li>
                                                                <h6 class="text-content mb-0"><span
                                                                        class="text-title">City
                                                                        :</span>{{$value->city}}</h6>
                                                            </li>
                                                            <li>
                                                                <h6 class="text-content mb-0"><span
                                                                        class="text-title">State
                                                                        :</span>{{$value->state}}</h6>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="right-side-summery-box">
                    <div class="summery-box-2">
                        <div class="summery-header">
                            <h3>Order Summery</h3>
                        </div>

                        <ul class="summery-contain">
                            @php $i = 0 @endphp
                            @foreach ($data as $key=>$value)
                            <li>
                                @foreach(json_decode($value['img']) as $key => $image)
                                @if($key !== 0)
                                <img src="{{asset('public/images/'.$image)}}" style="width:70px;height:70px" id="img-1"
                                    class="img-fluid image_zoom_cls-0 blur-up lazyload" alt="">
                                @endif
                                @endforeach
                                <h4>{{$value->name}} <span>X {{$quantityArray[$i]['value']}}</span></h4>
                                <h4 class="price">₹ {{$value->price}} </h4>
                            </li>
                            <input type="hidden" name="quantity[]" value="{{$quantityArray[$i]['value']}}">
                            <input type="hidden" name="price[]" value="{{$value->price}}">
                            <input type="hidden" name="user_id" value="{{session()->get('email')}}">
                            <input type="hidden" name="color[]" value="{{$value->color}}">
                            <input type="hidden" name="size[]" value="{{$value->size}}">
                            <input type="hidden" name="p_id[]" value="{{$value->p_id}}">
                            @php $i++; @endphp
                            @endforeach
                        </ul>

                        <ul class="summery-total">
                            <li class="list-total">
                                <h4>Total</h4>
                                <h4 class="price">₹ </i> {{$amount}}</h4>
                                <input type="hidden" value="{{$amount}}" name="amount">
                            </li>
                        </ul>
                    </div>
                    <div class="checkout-right-basket">
                        <a href="#" id="buy" class="btn theme-bg-color text-white btn-md w-20 mt-4 fw-bold">Place
                            Order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- Checkout section End -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    var SITEURL = '{{URL::to('')}}';
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('body').on('click', '#buy', function (e) {

        var totalAmount = $('input[name="amount"]').val();
        var product_id = $('input[name="p_id[]"]').serializeArray();
        var userData = $('input[name="user_id"]').val();
        var priceData = $('input[name="price[]"]').serializeArray();
        var quantityData = $('input[name="quantity[]"]').serializeArray();
        var color = $('input[name="color[]"]').serializeArray();
        var size = $('input[name="size[]"]').serializeArray();
        var address = $('input[name="jack"]:checked').next('label').text();

        if ($('input[name="jack"]').is(':checked')) {
            address = $('input[name="jack"]:checked').next('label').text();
        } else {
            Swal.fire({
            icon: 'warning',
            title: 'Warning!',
            text: 'Please Select Address !!',
            showConfirmButton: false,
            timer: 20000
        });
        return;
            return
        }

        var options = {
            "key": "rzp_test_nC5kxY1iKaQcLp",
            "amount": (totalAmount * 100),
            "name": "Tutsmake",
            "description": "Payment",
            "image": "//www.tutsmake.com/wp-content/uploads/2018/12/cropped-favicon-1024-1-180x180.png",
            "handler": function (response) {
                window.location.href = SITEURL + '/paysuccess?payment_id=' + response.razorpay_payment_id + '&product_id=' + JSON.stringify(product_id) + '&amount=' + totalAmount + '&add=' + address + '&user=' + JSON.stringify(userData) + '&price=' + JSON.stringify(priceData) + '&quantity=' + JSON.stringify(quantityData) + '&color=' + JSON.stringify(color) + '&size=' + JSON.stringify(size);
            },
            "prefill": {
                "contact": '9988665544',
                "email": 'tutsmake@gmail.com',
            },
            "theme": {
                "color": "#528FF0"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
        e.preventDefault();
    });
</script>
@endsection