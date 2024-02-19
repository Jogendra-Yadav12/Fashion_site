<x-layout>
     <!-- Main Content Wrapper Start -->
     <div class="main-content-wrapper">
        <div class="page-content-inner">
            <div class="container">
                <div class="row pt--50 pt-md--40 pt-sm--20">
                    <div class="col-12">
                        <!-- User Action Start -->
                        <!--<div class="user-actions user-actions__coupon">
                            <div class="message-box mb--30">
                                <p><i class="fa fa-exclamation-circle"></i> Have A Coupon? <a class="expand-btn" href="#coupon_info">Click Here To Enter Your Code.</a></p>
                            </div>
                            <div id="coupon_info" class="user-actions__form hide-in-default">
                                <form action="#" class="form">
                                    <p>If you have a coupon code, please apply it below.</p>
                                    <div class="form__group d-sm-flex">
                                        <input type="text" name="coupon" id="coupon" class="form__input form__input--2 mr--20 mr-xs--0" placeholder="Coupon Code">
                                        <button type="submit" class="btn btn-small btn-bg-red btn-color-white btn-hover-2">Apply Coupon</button>
                                    </div>
                                </form>
                            </div>
                        </div>-->
                        <!-- User Action End -->
                    </div>
                </div> 
                <div class="row pb--80 pb-md--60 pb-sm--40">
                    <!-- Checkout Area Start -->  
                    <div class="col-lg-6">
                        <div class="checkout-title mt--10">
                            <h2>Billing Details</h2>
                        </div>
                       
                                <form method="POST" action="" class="form form--checkout">
                                    @csrf
                                <div class="row mb--20">
                                    <div class="form__group col-md-6 mb-sm--30">
                                        <label for="billing_fname" class="form__label form__label--2">First Name  <span class="required">*</span></label>
                                        <input type="text" name="fname"  required value="{{$address->fname ?? ''}}" id="billing_fname" class="form__input form__input--2">
                                    </div>
                                    <div class="form__group col-md-6">
                                        <label for="billing_lname" class="form__label form__label--2">Last Name  <span class="required">*</span></label>
                                        <input type="text" name="lname" required value="{{$address->lname ?? ''}}" id="billing_lname" class="form__input form__input--2">
                                    </div>
                                </div>
                               <!-- <div class="row mb--20">
                                    <div class="form__group col-12">
                                        <label for="billing_company" class="form__label form__label--2">Company Name (Optional)</label>
                                        <input type="text" name="billing_company" id="billing_company" class="form__input form__input--2">
                                    </div>
                                </div>-->
                            <!--    <div class="row mb--20">
                                    <div class="form__group col-12">
                                        <label for="billing_country" class="form__label form__label--2">Country <span class="required">*</span></label>
                                        <select id="billing_country" name="billing_country" class="form__input form__input--2 nice-select">
                                            <option value="">Select a country…</option>
                                            <option value="AF">Afghanistan</option>
                                            <option value="AL">Albania</option>
                                            <option value="DZ">Algeria</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AM">Armenia</option>
                                            <option value="AU">Australia</option>
                                            <option value="AT">Austria</option>
                                            <option value="AZ">Azerbaijan</option>
                                            <option value="BH">Bahrain</option>
                                            <option value="BD" selected="selected">Bangladesh</option>
                                            <option value="BD">Brazil</option>
                                            <option value="CN">China</option>
                                            <option value="EG">Egypt</option>
                                            <option value="FR">France</option>
                                            <option value="DE">Germany</option>
                                            <option value="HK">Hong Kong</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IR">Iran</option>
                                            <option value="IQ">Iraq</option>
                                            <option value="IE">Ireland</option>
                                            <option value="IT">Italy</option>
                                            <option value="JP">Japan</option>
                                            <option value="KW">Kuwait</option>
                                            <option value="MY">Malaysia</option>
                                            <option value="MV">Maldives</option>
                                            <option value="MX">Mexico</option>
                                            <option value="MC">Monaco</option>
                                            <option value="NP">Nepal</option>
                                            <option value="RU">Russia</option>
                                            <option value="KR">South Korea</option>
                                            <option value="SS">South Sudan</option>
                                            <option value="ES">Spain</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SD">Sudan</option>
                                            <option value="SZ">Swaziland</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="TN">Tunisia</option>
                                            <option value="TR">Turkey</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="AE">United Arab Emirates</option>
                                            <option value="GB">United Kingdom (UK)</option>
                                            <option value="US">United States (US)</option>
                                        </select>
                                    </div>
                                </div>-->
                                <div class="row mb--20">
                                    <div class="form__group col-12">
                                        <label for="billing_streetAddress" class="form__label form__label--2">Street Address <span class="required">*</span></label>

                                        <input type="text" required name="street" value="{{$address->street ?? ''}}" id="billing_street" class="form__input form__input--2 mb--30" placeholder="House number and street name">

                                         </div>
                                </div>
                                <div class="row mb--20">
                                    <div class="form__group col-12">
                                        <label for="billing_city" class="form__label form__label--2">Town / City <span class="required">*</span></label>
                                        <input type="text" required name="city" id="billing_city" value="{{$address->city ?? ''}}" class="form__input form__input--2">
                                    </div>
                                </div>
                                <div class="row mb--20">
                                    <div class="form__group col-12">
                                        <label for="billing_state" class="form__label form__label--2">State / County <span class="required">*</span></label>
                                        <input type="text" required name="state" id="billing_state" value="{{$address->state ?? ''}}" class="form__input form__input--2">
                                    </div>
                                </div>
                                <div class="row mb--20">
                                    <div class="form__group col-12">
                                        <label for="billing_phone" class="form__label form__label--2">Phone <span class="required">*</span></label>
                                        <input type="text" required name="phone" id="billing_phone" readonly value="{{$basic->number ?? ''}}" class="form__input form__input--2">
                                    </div>
                                </div>
                                <div class="row mb--20">
                                    <div class="form__group col-12">
                                        <label for="billing_email" class="form__label form__label--2">Email Address  <span class="required">*</span></label>
                                        <input type="email" required name="email" id="billing_email" readonly value="{{$basic->email ?? ''}}" class="form__input form__input--2">
                                    </div>
                                </div>
                              <!--  <div class="row">
                                    <div class="form__group col-12">
                                        <div class="custom-checkbox mb--20">
                                            <input type="checkbox" name="shipdifferetads" id="shipdifferetads" class="form__checkbox">
                                            
                                            <label for="shipdifferetads" class="form__label form__label--2 shipping-label">Ship To A Different Address?</label>
                                        </div>
                                        <div class="ship-box-info hide-in-default mt--30">
                                            <div class="row mb--20">
                                                <div class="form__group col-md-6 mb-sm--30">
                                                    <label for="shipping_fname" class="form__label form__label--2">First Name  <span class="required">*</span></label>
                                                    <input type="text" name="shipping_fname" id="shipping_fname" class="form__input form__input--2">
                                                </div>
                                                <div class="form__group col-md-6">
                                                    <label for="shipping_lname" class="form__label form__label--2">Last Name  <span class="required">*</span></label>
                                                    <input type="text" name="shipping_lname" id="shipping_lname" class="form__input form__input--2">
                                                </div>
                                            </div>
                                            <div class="row mb--20">
                                                <div class="form__group col-12">
                                                    <label for="shipping_company" class="form__label form__label--2">Company Name (Optional)</label>
                                                    <input type="text" name="shipping_company" id="shipping_company" class="form__input form__input--2">
                                                </div>
                                            </div>
                                            <div class="row mb--20">
                                                <div class="form__group col-12">
                                                    <label for="shipping_country" class="form__label form__label--2">Country <span class="required">*</span></label>
                                                    <select id="shipping_country" name="shipping_country" class="form__input form__input--2 nice-select">
                                                        <option value="">Select a country…</option>
                                                        <option value="AF">Afghanistan</option>
                                                        <option value="AL">Albania</option>
                                                        <option value="DZ">Algeria</option>
                                                        <option value="AR">Argentina</option>
                                                        <option value="AM">Armenia</option>
                                                        <option value="AU">Australia</option>
                                                        <option value="AT">Austria</option>
                                                        <option value="AZ">Azerbaijan</option>
                                                        <option value="BH">Bahrain</option>
                                                        <option value="BD" selected="selected">Bangladesh</option>
                                                        <option value="BD">Brazil</option>
                                                        <option value="CN">China</option>
                                                        <option value="EG">Egypt</option>
                                                        <option value="FR">France</option>
                                                        <option value="DE">Germany</option>
                                                        <option value="HK">Hong Kong</option>
                                                        <option value="HU">Hungary</option>
                                                        <option value="IS">Iceland</option>
                                                        <option value="IN">India</option>
                                                        <option value="ID">Indonesia</option>
                                                        <option value="IR">Iran</option>
                                                        <option value="IQ">Iraq</option>
                                                        <option value="IE">Ireland</option>
                                                        <option value="IT">Italy</option>
                                                        <option value="JP">Japan</option>
                                                        <option value="KW">Kuwait</option>
                                                        <option value="MY">Malaysia</option>
                                                        <option value="MV">Maldives</option>
                                                        <option value="MX">Mexico</option>
                                                        <option value="MC">Monaco</option>
                                                        <option value="NP">Nepal</option>
                                                        <option value="RU">Russia</option>
                                                        <option value="KR">South Korea</option>
                                                        <option value="SS">South Sudan</option>
                                                        <option value="ES">Spain</option>
                                                        <option value="LK">Sri Lanka</option>
                                                        <option value="SD">Sudan</option>
                                                        <option value="SZ">Swaziland</option>
                                                        <option value="SE">Sweden</option>
                                                        <option value="CH">Switzerland</option>
                                                        <option value="TN">Tunisia</option>
                                                        <option value="TR">Turkey</option>
                                                        <option value="UA">Ukraine</option>
                                                        <option value="AE">United Arab Emirates</option>
                                                        <option value="GB">United Kingdom (UK)</option>
                                                        <option value="US">United States (US)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb--20">
                                                <div class="form__group col-12">
                                                    <label for="shipping_streetAddress" class="form__label form__label--2">Street Address <span class="required">*</span></label>

                                                    <input type="text" name="shipping_streetAddress" id="shipping_streetAddress" class="form__input form__input--2 mb--30" placeholder="House number and street name">

                                                    <input type="text" name="shipping_apartment" id="shipping_apartment" class="form__input form__input--2" placeholder="Apartment, suite, unit etc. (optional)">
                                                </div>
                                            </div>
                                            <div class="row mb--20">
                                                <div class="form__group col-12">
                                                    <label for="shipping_city" class="form__label form__label--2">Town / City <span class="required">*</span></label>
                                                    <input type="text" name="shipping_city" id="shipping_city" class="form__input form__input--2">
                                                </div>
                                            </div>
                                            <div class="row mb--20">
                                                <div class="form__group col-12">
                                                    <label for="shipping_state" class="form__label form__label--2">State / County <span class="required">*</span></label>
                                                    <input type="text" name="shipping_state" id="shipping_state" class="form__input form__input--2">
                                                </div>
                                            </div>
                                            <div class="row mb--20">
                                                <div class="form__group col-12">
                                                    <label for="shipping_phone" class="form__label form__label--2">Phone <span class="required">*</span></label>
                                                    <input type="text" name="shipping_phone" id="shipping_phone" class="form__input form__input--2">
                                                </div>
                                            </div>
                                            <div class="row mb--20">
                                                <div class="form__group col-12">
                                                    <label for="shipping_email" class="form__label form__label--2">Email Address  <span class="required">*</span></label>
                                                    <input type="email" name="shipping_email" id="shipping_email" class="form__input form__input--2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                               <!-- <div class="row">
                                    <div class="form__group col-12">
                                        <label for="orderNotes" class="form__label form__label--2">Order Notes</label>
                                        <textarea class="form__input form__input--2 form__input--textarea" id="orderNotes" name="orderNotes" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                </div>-->
                           
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6 mt-md--40">
                        <div class="order-details">
                            <div class="checkout-title mt--10">
                                <h2>Your Order</h2>
                            </div>
                            <div class="table-content table-responsive mb--30">
                                <table class="table order-table order-table-2">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th class="text-end">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $totalPrice = 0; // Initialize total price variable
                                          @endphp
                                        @if(!empty(Session::get('cart')))
                                        @foreach(Session::get('cart') as $cartItem)
                                            <tr>
                                                <th>{{ $cartItem['name'] }} <strong><span>&#10005;</span>{{ $cartItem['quantity'] }}</strong></th>
                                                <td class="text-end"> ₹ {{ $cartItem['price'] }}</td>
                                                @php
                                                $totalPrice += $cartItem['price'] * $cartItem['quantity']; // Add the price to the total
                                                 @endphp
                                            </tr>
                                        @endforeach
                                    @endif
                                    
                                       <!-- <tr>
                                            <th>Auctor gravida enim 
                                                <strong><span>&#10005;</span>1</strong>
                                            </th>
                                            <td class="text-end">$60.00</td>
                                        </tr>-->
                                    </tbody>
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td class="text-end">₹ {{ $totalPrice }}</td>
                                        </tr>
                                       <!-- <tr class="shipping">
                                            <th>Shipping</th>
                                            <td class="text-end">
                                                <span>Flat Rate; ₹ 20.00</span>
                                            </td>
                                        </tr>-->
                                        <tr class="order-total">
                                            <th>Order Total</th>
                                            <td class="text-end"><span class="order-total-ammount"> ₹ {{ $totalPrice }}</span></td>
                                            <input type="hidden" value="{{ $totalPrice }}" name="totalprice" id="totalamount">
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="checkout-payment">
                                
                                   <!-- <div class="payment-group mb--10">
                                        <div class="payment-radio">
                                            <input type="radio" value="bank" name="payment-method" id="bank" checked>
                                            <label class="payment-label" for="cheque">Direct Bank Transfer</label>
                                        </div>
                                        <div class="payment-info" data-method="bank">
                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                                        </div>
                                    </div>-->
                                   <!-- <div class="payment-info ">
                                        <button type="submit" class="btn btn-fullwidth btn-bg-red btn-color-white btn-hover-2">Place Order</button>
                                   </div>-->
                                <a href="javascript:void(0)" class="btn btn-fullwidth btn-bg-red btn-color-white btn-hover-2 buy_now" >Place Order</a>
                                   <!-- <div class="payment-group mb--10">
                                        <div class="payment-radio">
                                            <input type="radio" value="cheque" name="payment-method" id="cheque">
                                            <label class="payment-label" for="cheque">
                                                PAY ONLINE
                                            </label>
                                        </div>
                                        <div class="payment-info cheque hide-in-default" data-method="cheque">
                                            <button type="submit" class="btn btn-fullwidth btn-bg-red btn-color-white btn-hover-2">Place Order</button>
                                    </div>
                                    </div>
                                    <div class="payment-group mb--10">
                                        <div class="payment-radio">
                                            <input type="radio" value="cash" name="payment-method" id="cash">
                                            
                                            <label class="payment-label" for="cash">
                                                CASH ON DELIVERY
                                            </label>
                                        </div>
                                        <div class="payment-info cash hide-in-default" data-method="cash">
                                            <button type="submit" class="btn btn-fullwidth btn-bg-red btn-color-white btn-hover-2">Place Order</button>
                                    
                                        </div>
                                    </div>-->
                                    <div class="payment-group mt--20">
                                        <p class="mb--15">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                                       </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Checkout Area End -->
                </div>
            </div>
        </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
    var SITEURL = '{{URL::to('')}}';
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    }); 
    $('body').on('click', '.buy_now', function(e){
      var totalAmount = $("#totalamount").val();
      var billing_fname = $("#billing_fname").val();
      var billing_lname = $("#billing_lname").val();
      var billing_street = $("#billing_street").val();
      var billing_city = $("#billing_city").val();
      var billing_state = $("#billing_state").val();
      var billing_email = $("#billing_email").val();
      var billing_phone = $("#billing_phone").val();
     
      var options = {
      "key": "rzp_test_nC5kxY1iKaQcLp",
      "amount": (totalAmount*100), // 2000 paise = INR 20
      "name": "Tutsmake",
      "description": "Payment",
      "image": "//www.tutsmake.com/wp-content/uploads/2018/12/cropped-favicon-1024-1-180x180.png",
        "handler": function (response){
            window.location.href = SITEURL +'/'+ 'order?payment_id='+response.razorpay_payment_id+'&billing_fname='+billing_fname+'&billing_lname='+billing_lname+'&billing_street='+billing_street+'&billing_city='+billing_city+'&billing_state='+billing_state+'&billing_email='+billing_email+'&billing_phone='+billing_phone+'&amount='+totalAmount;
            },
           
         
     "prefill": {
          "contact": '9988665544',
          "email":   'tutsmake@gmail.com',
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


  
</x-layout>