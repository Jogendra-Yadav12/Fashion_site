<x-layout>
    <!-- Main Content Wrapper Start -->
    <div class="main-content-wrapper">
        <div class="page-content-inner ptb--80">
            <div class="container">
                
                <div class="row">
                    <div class="col-lg-9 mb-md--50">
                        <form method="POST" action="{{ url('checkoutcart') }}">
                            @csrf
                            <div class="row g-0">
                                <div class="col-12">
                                    <div class="table-content table-responsive">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                   <th></th>
                                                    <th class="text-start">Product</th>
                                                    <th>Product Name</th>
                                                    <th>Color</th>
                                                    <th>Size</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                static $x = 1;
                                                $amount = 0;
                                                $i = [];
                                                @endphp
                                                @if ($datacart->isEmpty())
                                                <tr>
                                                  <td colspan="5">Your cart is empty.</td>
                                                </tr>
                                              @else
                                                @foreach ($datacart as $d)
                                                <tr>
                                                    <td class="product-remove text-start"><a href="removecart/{{$d->id}}"><i class="flaticon flaticon-cross"></i></a></td>
                                                    <td class="product-thumbnail text-start">
                                                        @if(!empty($d->img))
                                                        @php
                                                            $images = json_decode($d->img);
                                                        @endphp
                                                    
                                                        @if(count($images) > 0)
                                                            <img src="{{ asset('public/images/' . $images[0]) }}" >
                                                        @endif
                                                    @endif
                                                    </td>
                                                    <td class="product-name text-start wide-column">
                                                        <h3>
                                                            <span class="product-price-wrapper">
                                                                <span class="money">{{ $d->name}}</span>
                                                                <input type="hidden" name="id[]"  value="{{ $d->user_id}}">
                                                                <input type="hidden" name="p_id[]"  value="{{ $d->p_id}}">
                                                                <input type="hidden" name="name[]"  value="{{ $d->name}}">
                                                                <input type="hidden" name="cartid[]"  value="{{ $d->id}}">  
                                                        </span>
                                                        </h3>
                                                    </td>
                                                    <td class="product-name text-start wide-column">
                                                        <span class="product-price-wrapper">
                                                            <span class="money">{{ $d->color}}</span>
                                                            <input type="hidden" name="color[]"  value="{{ $d->color}}">
                                                        </span>
                                                    </td>
                                                    <td class="product-name text-start wide-column">
                                                        
                                                         <span class="product-price-wrapper">
                                                            <span class="money">{{ $d->size}}</span>
                                                            <input type="hidden" name="size[]"  value="{{ $d->size}}">
                                                        </span>
                                                    </td>
                                                    
                                                    <td class="product-price">
                                                        ₹   <span class="product-price-wrapper">
                                                            <span class="money">{{ $d->price}}</span>
                                                        </span>
                                                    </td>
                                                    
                                                    <td class="cart-product-quantity" width="130px">
                                                        <div class="input-group quantity2">
                                                       <input type="hidden" name="price[]" class="xyz" value="{{ $d->price}}">
                                                       <input type="hidden" name="quantity[]" class="abc" value="{{ $d->quantity}}">
                                                            <div class="input-group-prepend decrement-btn" style="cursor: pointer">
                                                                <span class="input-group-text">-</span>
                                                            </div>
                                                            <input type="text" class="qty-input form-control" maxlength="2" max="10" value="{{ $d->quantity}}" readonly>
                                                            <div class="input-group-append increment-btn" style="cursor: pointer">
                                                                <span class="input-group-text" data-id="{{ $x }}">+</span>
                                                            </div>
                                                        </div>
                                                    </td>  
                                                    <td class="product-total-price">
                                                        ₹   <span class="product-price-wrapper">
                                                            <span class="money">{{ $d->price}}</span>
                                                        </span>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>  
                                </div>
                            </div>
                           
                        
                    </div>
                    <div class="col-lg-3">
                        <div class="cart-collaterals">
                            <div class="cart-totals">
                                <h3 class="font-size-14 font-bold mb--15">Cart totals</h3>
                                <div class="cart-calculator">
                                    <div class="cart-calculator__item">
                                        <div class="cart-calculator__item--head">
                                            <span>Subtotal  </span>
                                          
                                        </div>
                                        <div class="cart-calculator__item--value"> 
                                            <span>  00</span>Rs
                                        </div>
                                    </div>
                                    <!--<div class="cart-calculator__item">
                                        <div class="cart-calculator__item--head">
                                            <span>Shipping</span>
                                        </div>
                                        <div class="cart-calculator__item--value">
                                            <span>Flat rate: 20.00</span>
                                            <div class="shipping-calculator-wrap">
                                                <a href="#shipping_calculator" class="expand-btn">Calculate Shipping</a>
                                               
                                            </div>
                                        </div>
                                    </div>-->
                                    <!--<div class="cart-calculator__item order-total">
                                        <div class="cart-calculator__item--head">
                                            <span>Total</span>
                                        </div>
                                        <div class="cart-calculator__item--value">
                                            <span class="product-price-wrapper">
                                                <span class="money">00</span>
                                            </span>
                                        </div>
                                    </div>-->
                                </div>
                            </div>
                            
                            
                        </div>
                        <button type="submit" class="btn btn-large w-100 btn-bg-red btn-color-white btn-hover-2">
                            Proceed to Checkout
                         </button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Wrapper Start -->
    <!-- Add this script in your HTML -->




<!-- Add this script in your HTML -->
<!-- Add this script in your HTML -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>




<script>
    $(document).ready(function () {
        // Function to update total price when quantity changes
        function updateTotalPrice(row) {
            var price = parseFloat(row.find('.product-price span.money').text());
            var quantity = parseInt(row.find('.qty-input').val());

            var totalPrice = price * quantity;
            row.find('.product-total-price span.money').text(totalPrice.toFixed(2));
            row.find('.abc').val(quantity);
            row.find('.xyz').val(price);
            updateSubtotal();
            
        }

        // Function to update subtotal and total price
        function updateSubtotal() {
            var subtotal = 0;

            $('.product-total-price span.money').each(function () {
                subtotal += parseFloat($(this).text());
            });

            // Update subtotal
            $('.cart-calculator__item--value span').eq(0).text(subtotal.toFixed(2));

            // Update total (subtotal + shipping)
            var total = subtotal; // Assuming flat rate shipping is $20.00
            $('.cart-calculator__item--value span').eq(2).text(total.toFixed(2));
        }

        // Increment quantity
        $('.increment-btn').on('click', function () {
            var row = $(this).closest('tr');
            var quantityInput = row.find('.qty-input');
            var currentQuantity = parseInt(quantityInput.val());
            quantityInput.val(currentQuantity + 1);
            updateTotalPrice(row);
        });

        // Decrement quantity
        $('.decrement-btn').on('click', function () {
            var row = $(this).closest('tr');
            var quantityInput = row.find('.qty-input');
            var currentQuantity = parseInt(quantityInput.val());
            if (currentQuantity > 1) {
                quantityInput.val(currentQuantity - 1);
                updateTotalPrice(row);
            }
        });

        // Initial calculation
        $('.qty-input').each(function () {
            var row = $(this).closest('tr');
            updateTotalPrice(row);
        });
    });
</script>


</x-layout>