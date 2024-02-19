@extends('layouts.app')
@section('content')


<!-- Breadcrumb Section Start -->
<section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2>Cart</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/')}}">
                                    <i class="bi bi-house-door"></i> <i class="bi bi-caret-right-fill"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Cart</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Cart Section Start -->

    <section class="cart-section section-b-space">
    @php $amount=0; @endphp
        <div class="container-fluid-lg">
            <div class="row g-sm-5 g-3">
                <div class="col-xxl-9">
                    <div class="cart-table">
                        <div class="table-responsive-xl">
                            <table class="table">
                                <tbody>
                                    @if($cart <= 0)
                                    <tr>
                                        <td> <h1>No data in a list !!</h1> </td>
                                    </tr>
                                    @else
                                    @foreach ($data as $key=>$value)
                                    <tr class="product-box-contain">
                                        <td class="product-detail">
                                            <div class="product border-0">
                                                <a href="product-left-thumbnail.html" class="product-image">
                                                @foreach(json_decode($value['img']) as $key => $image)
                                                @if($key === 0)
                                                <img src="{{asset('public/images/'.$image)}}"
                                                class="img-fluid blur-up lazyload" style="height:50px;width:50px;object:conatin" alt="">  
                                                @endif
                                                @endforeach
                                                </a>
                                            </div>
                                        </td>
                                        <td class="name">
                                            <h4 class="table-title text-content">Name</h4>
                                            <h5>{{$value->name}}</h5>
                                        </td>
                                        <td class="price">
                                            <h4 class="table-title text-content">Price</h4>
                                            <h5 data-price="{{$value->price}}">₹ </i> {{$value->price}}</h5>
                                        </td>

                                        <td class="quantity">
                                            <h4 class="table-title text-content">Qty</h4>
                                            <div class="quantity-price">
                                                <div class="cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                            <i class="bi bi-dash"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text" name="quantity[]" value="{{$value->quantity}}" id="quantity-input-{{$value->product_id}}">
                                                        <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                            <i class="fa fa-plus ms-0"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>


                                        <td class="subtotal">
                                            <h4 class="table-title text-content">Total</h4>
                                            <h5>₹ {{$value->price * $value->quantity}}</h5>
                                        </td>

                                        <td class="save-remove">
                                            <h4 class="table-title text-content">Action</h4>
                                            <a class="remove close_button" href="{{url('userremove/'.$value->id)}}">Remove</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @if($cart > 0)
                <div class="col-xxl-3">
                    <div class="summery-box p-sticky">
                        <div class="summery-header">
                            <h3>Cart Total</h3>
                        </div>

                        <div class="summery-contain">
                            <ul>
                                <li>
                                    <h4>Subtotal</h4>
                                    <h4 class="price" id="subtotal"> ₹ {{$amount}}</h4>
                                </li>
                            </ul>
                        </div>

                        <ul class="summery-total">
                            <li class="list-total border-top-0">
                                <h4>Grand Total</h4>
                                <h4 id="grand-total" class="price theme-color">₹ {{$amount}}</h4>
                                <input type="hidden" id="grand" name="amount" value="{{$amount}}">
                            </li>
                        </ul>

                        <div class="button-group cart-button">
                            
                            <ul>
                                <li>
                                    <button id="checkout"
                                        class="btn btn-animation proceed-btn fw-bold">Process To Checkout</button>
                                </li>
                               
                                <li>
                                    <a href="{{url('/')}}"
                                        class="btn btn-light shopping-button text-dark">
                                        <i class="bi bi-cart4 me-2"></i>Return To Shopping</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @else

                @endif
            </div>
        </div>
    </section>
    <!-- Cart Section End -->

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        $('.qty-right-plus').on('click', function () {
            incrementQuantity($(this));
        });

        $('.qty-left-minus').on('click', function () {
            decrementQuantity($(this));
        });

        function incrementQuantity(clickedButton) {
            var quantityInput = clickedButton.siblings('.qty-input');
            var currentQuantity = parseInt(quantityInput.val(), 10);

            if (currentQuantity < 10) {
                quantityInput.val(currentQuantity + 1);
            }
            updateTotal();
        }

        function decrementQuantity(clickedButton) {
            var quantityInput = clickedButton.siblings('.qty-input');
            var currentQuantity = parseInt(quantityInput.val(), 10);

            if (currentQuantity > 1) {
                quantityInput.val(currentQuantity - 1);
            }
            updateTotal();
        }

        function updateTotal() {
            var grandTotal = 0;

            $('.product-box-contain').each(function(index, element) {
                var quantity = parseInt($(element).find('.qty-input').val(), 10);
                var price = parseFloat($(element).find('.price h5').data('price'));
                var total = quantity * price;
                $(element).find('.subtotal h5').text('₹' + total.toFixed(2));
                grandTotal += total;
            });

            $('#subtotal').text('₹ ' + grandTotal.toFixed(2));
            $('#grand-total').text('₹ ' + (grandTotal).toFixed(2));
            $('#grand').val(grandTotal);
        }

        updateTotal();

        $('.qty-input').on('change', function() {
            updateTotal();
        });

        $('#checkout').click(function (e) {
            e.preventDefault();
            var quantityData = $('input[name="quantity[]"]').serializeArray();
            var amount = $('input[name="amount"]').val();
            var addToCartUrl = "{{ url('checkout')}}?amount=" + amount+'&quantity='+JSON.stringify(quantityData);
            window.location.href = addToCartUrl;
            
        });
    });
</script>

@endsection