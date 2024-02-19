<x-layout>
       <!-- Main Content Wrapper Start -->
       <div class="main-content-wrapper">
        <div class="page-content-inner ptb--80">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="user-dashboard-tab flex-column flex-md-row">
                            <div class="user-dashboard-tab__head nav flex-md-column" role="tablist" aria-orientation="vertical">
                                <button type="button" class="nav-link active" data-bs-toggle="tab" role="tab" data-bs-target="#dashboard" aria-controls="dashboard" aria-selected="true">Dashboard</button>
                                <button type="button" class="nav-link" data-bs-toggle="tab" role="tab" data-bs-target="#orders" aria-controls="orders" aria-selected="true">Orders</button>
                                <!--<button type="button" class="nav-link" data-bs-toggle="tab" role="tab" data-bs-target="#downloads" aria-controls="downloads" aria-selected="true">Downloads</button>-->
                                <!--<button type="button" class="nav-link" data-bs-toggle="tab" role="tab" data-bs-target="#addresses" aria-controls="addresses" aria-selected="true">Addresses</button>-->
                                <button type="button" class="nav-link" data-bs-toggle="tab" role="tab" data-bs-target="#accountdetails" aria-controls="accountdetails" aria-selected="true">Account Details</button>
                                <a class="nav-link" href="{{url('/logout')}}">Logout</a>
                            </div>
                            <div class="user-dashboard-tab__content tab-content">
                                <div class="tab-pane fade show active" id="dashboard">
                                    <p>Hello <strong>{{ $userdata->name}}</strong> </p>
                                    <p>From your account dashboard. you can easily check &amp; view your <a href="#orders">recent orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a href="#accountdetails">edit your password and account details</a>.</p>
                                </div>
                                <div class="tab-pane fade" id="orders">
                                    <div class="message-box mb--30 d-none">
                                        <p><i class="fa fa-check-circle"></i>No order has been made yet.</p>
                                        <a href="{{url('/shop')}}">Go Shop</a>
                                    </div>
                                    <div class="table-content table-responsive">
                                        <table class="table text-center">
                                            <thead>
                                                <tr>
                                                    <th>Order</th>
                                                    <th>Date</th>
                                                    <th>Product Name</th>
                                                    <th>Product Image</th>
                                                    <th>Color</th>
                                                    <th>Size</th>
                                                    <th>Status</th>
                                                    <th>Total</th>
                                                    <th>Actions</th>
                                                    <th>Invoice</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($dataorder->isEmpty())
                                                <tr>
                                                  <td colspan="5">Your cart is empty.</td>
                                                </tr>
                                              @else
                                                @foreach ($dataorder as $d)
                                                <tr>
                                                    <td>{{ $loop->index + 1 }}</td>
                                                    <td class="wide-column">{{ $d->created_at}}</td>
                                                    
                                                    <td class="wide-column">{{ $d->product_name}}</td>
                                                    <td>
                                                    @if(!empty($d->image))
                                                    @php
                                                        $images = json_decode($d->image);
                                                    @endphp
                                                
                                                    @if(count($images) > 0)
                                                        <img src="{{ asset('public/images/' . $images[0]) }}" >
                                                    @endif
                                                    @endif
                                                </td>
                                                <td class="wide-column">{{ $d->color}}</td>
                                                    <td class="wide-column">{{ $d->size}}</td>
                                                    <td>Paid</td>
                                                    <td class="wide-column">₹ {{ $d->price}}for 1 item</td>
                                                    <td><a href="{{ route('product_view', ['id' => $d->p_id]) }}" class="btn btn-small btn-bg-red btn-color-white btn-hover-2">View</a></td>
                                                    <td><a href="{{ route('invoice', ['id' => $d->id]) }}" class="btn btn-small  btn-color-black btn-hover-2">Download</a></td>
                                                </tr>
                                                @endforeach
                                                @endif
                                                <!--<tr>
                                                    <td>2</td>
                                                    <td class="wide-column">September 19, 2023</td>
                                                    <td>Processing</td>
                                                    <td class="wide-column">$49.00 for 1 item</td>
                                                    <td><a href="product-details.html" class="btn btn-small btn-bg-red btn-color-white btn-hover-2">View</a></td>
                                                </tr>-->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                               <!-- <div class="tab-pane fade" id="downloads">
                                    <div class="message-box mb--30 d-none">
                                        <p><i class="fa fa-exclamation-circle"></i>No downloads available yet.</p>
                                        <a href="shop.html">Go Shop</a>
                                    </div>
                                    <div class="table-content table-responsive">
                                        <table class="table text-center">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Downloads</th>
                                                    <th>Expires</th>
                                                    <th>Download</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="wide-column">zakas - Ecommerce Bootstrap Template</td>
                                                    <td>August 10, 2023 </td>
                                                    <td class="wide-column">Never</td>
                                                    <td><a href="#" class="btn btn-small btn-bg-red btn-color-white btn-hover-2">Download File</a></td>
                                                </tr>
                                                <tr>
                                                    <td class="wide-column">zakas - Ecommerce Bootstrap Template</td>
                                                    <td>August 10, 2023 </td>
                                                    <td class="wide-column">Never</td>
                                                    <td><a href="#" class="btn btn-small btn-bg-red btn-color-white btn-hover-2">Download File</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>-->
                                <div class="tab-pane fade" id="addresses">
                                    <p class="mb--20">The following addresses will be used on the checkout page by default.</p>
                                    <div class="row">
                                        <div class="col-md-6 mb-sm--20">
                                            <div class="text-block">
                                                <h4 class="mb--20">Billing address</h4>
                                                <a href="#">Edit</a>
                                                <p>You have not set up this type of address yet.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="text-block">
                                                <h4 class="mb--20">Shopping address</h4>
                                                <a href="#">Edit</a>
                                                <p>You have not set up this type of address yet.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="accountdetails">
                                    <form action="{{ url('updatepassword') }}" class="form form--account" method="POST">
                                        @csrf
                                        <div class="row grid-space-30 mb--20">
                                            <div class="col-md-12 mb-sm--20">
                                                <div class="form__group">
                                                    <label class="form__label form__label--2" for="f_name">Name <span class="required">*</span></label>
                                                    <input type="text" name="f_name" value="{{$userdata->name}}" readonly id="f_name" class="form__input">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="row mb--20">
                                            <div class="col-12">
                                                <div class="form__group">
                                                    <label class="form__label form__label--2" for="email">Email Address <span class="required">*</span></label>
                                                    <input type="email" name="email" id="email" value="{{$userdata->email}}" readonly class="form__input">
                                                    <span class="suggestion"><em>This field is not editable</em></span>
                                                </div>
                                            </div>
                                        </div>
                                        
        
                                    <a onclick="togglePasswordFieldset()" style="color:red;font-weight:500">Change Password</a>
                                        <fieldset class="form__fieldset mb--20" id="passwordChangeFieldset">
                                            <legend class="form__legend">Password change</legend>
                                            <div class="row mb--20">
                                                <div class="col-12">
                                                    <div class="form__group">
                                                        <label class="form__label form__label--2" for="cur_pass">Current password </label>
                                                        <input type="password" name="oldpass" id="cur_pass" class="form__input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb--20">
                                                <div class="col-12">
                                                    <div class="form__group">
                                                        <label class="form__label form__label--2" for="new_pass">New password </label>
                                                        <input type="password" name="newpass" id="new_pass" class="form__input" onkeyup="validatePassword()">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form__group">
                                                        <label class="form__label form__label--2" for="conf_new_pass">Confirm new password</label>
                                                        <input type="password" name="conf_new_pass" id="conf_new_pass" class="form__input" onkeyup="validatePassword()">
                                                        <p id="password-match-message" style="color: red;"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form__group">
                                                    <input type="submit" value="Save Changes" class="btn btn-style-1 btn-submit">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Wrapper Start -->
    

 
        <!-- ... Your existing HTML code ... -->
    
        <script>
             // Ensure the password fieldset is initially displayed
             document.getElementById ('passwordChangeFieldset').style.display = 'none'; 
            // Merged validation function
            function validatePassword() {
                var newPassword = document.getElementById("new_pass").value;
                var confirmNewPassword = document.getElementById("conf_new_pass").value;
                var message = document.getElementById("password-match-message");
    
                if (newPassword === confirmNewPassword) {
                    message.innerHTML = "Passwords match!";
                    message.style.color = "green";
                } else {
                    message.innerHTML = "Passwords do not match!";
                    message.style.color = "red";
                }
            }
    
            // Function to toggle the display of the password fieldset
            function togglePasswordFieldset() {
                var passwordChangeFieldset = document.getElementById("passwordChangeFieldset");
    
                // Toggle the display of the password fieldset
                if (passwordChangeFieldset.style.display == "block") {
                    passwordChangeFieldset.style.display = "none";
                } else {
                    passwordChangeFieldset.style.display = "block";
                }
            }
        </script>
    
        <!-- ... Rest of your HTML code ... -->
    
 
</x-layout>