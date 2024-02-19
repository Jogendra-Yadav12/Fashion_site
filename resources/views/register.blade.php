@extends('layouts.app')

@section('content')
     <!-- Breadcrumb area Start -->
    <!-- <div class="breadcrumb-area bg-color ptb--90" data-bg-color="#f6f6f6">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                        <h1 class="page-title">Register</h1>
                        <ul class="breadcrumb">
                            <li><a href="3">Home</a></li>
                            <li class="current"><span>&amp; Register</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Breadcrumb area End -->

    <!-- Main Content Wrapper Start -->
    <div class="main-content-wrapper">
        <div class="page-content-inner pt--75 pb--80 pl--190 pr--190">
            <div class="container">
                
                <div class="row">
                    
                    <div class="col-md-6 mb-sm--50">
                      <!--  <div class="login-box">
                            <h3 class="heading__tertiary mb--30">Login</h3>
                            <form class="form form--login" method="POST" action="{{ route('log') }}">
                                @csrf
                                <div class="form__group mb--20">
                                    <label class="form__label form__label--2" for="username_email">Username or email address <span class="required">*</span></label>
                                    <input type="email" class="form__input form__input--2" id="username_email" name="email">
                                </div>
                                <div class="form__group mb--20">
                                   <label class="form__label form__label--2" for="login_password">Password <span class="required">*</span></label>
                                    <input type="password" class="form__input form__input--2" id="login_password" name="password">
                                </div>
                                <div class="d-flex align-items-center mb--20">
                                    <div class="form__group mr--30">
                                        <input type="submit" value="Log in" class="btn-submit">
                                    </div>
                                    
                                </div>
                                <a class="forgot-pass" href="#">Lost your password?</a>
                            </form>
                        </div>-->
                    </div>
                    <div class="col-md-12">
                        <div class="register-box">
                            <h4 class="heading__tertiary mb--30">Register</h4>
                            <form method="POST" action="{{ route('reg') }}" class="form form--login">
                                @csrf
                                <div class="form__group mb--20">
                                    <label class="form__label form__label--2" for="register_password">Name <span class="required">*</span></label>
                                     <input type="text" required class="form__input form__input--2"  name="name">
                                 </div>
                                 <div class="form__group mb--20">
                                    <label class="form__label form__label--2" for="register_password">Number <span class="required">*</span></label>
                                    <input type="number" required class="form__input form__input--2" id="register_password" name="number">
                                    <div id="phoneValidationMessage" class="validation-message"  style="color:red"></div>
                                </div>
                                <div class="form__group mb--20">
                                    <label class="form__label form__label--2" for="email">Email address <span class="required">*</span></label>
                                    <input type="email" required class="form__input form__input--2" id="email" name="email">
                                </div>
                                <div class="form__group mb--20">
                                    <label class="form__label form__label--2" for="password">Password <span class="required">*</span></label>
                                    <input type="password" required class="form__input form__input--2" id="password" name="pass">
                                   <div id="passwordValidationMessage" class="validation-message" style="color:red"></div>
                                  </div>
                                
                               <p class="privacy-text mb--20">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy.</p>
                                <div class="form__group">
                                    <input type="submit" value="Register" class="btn btn-submit btn-style-1">
                                </div>
                            </form>
                            already have an account <a href="#miniCart" class="action-btn btn-primary mini-cart-btn header-toolbar__btn toolbar-btn ">
                                Login
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Wrapper Start -->
    <script>
    /*    document.addEventListener('DOMContentLoaded', function () {
            var phoneNumberInput = document.getElementById('register_password');
    
            phoneNumberInput.addEventListener('keyup', function () {
                validatePhoneNumber(this);
            });
    
            function validatePhoneNumber(input) {
                var phoneNumber = input.value.replace(/\D/g, ''); // Remove non-numeric characters
    
                if (phoneNumber.length === 10) {
                    // Valid 10-digit phone number
                    input.setCustomValidity('');
                } else {
                    // Invalid phone number
                    input.setCustomValidity('Please enter a valid 10-digit phone number.');
                }
            }
        });*/
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var phoneNumberInput = document.getElementById('register_password');
            var phoneValidationMessage = document.getElementById('phoneValidationMessage');
    
            phoneNumberInput.addEventListener('keyup', function () {
                validatePhoneNumber(this);
            });
    
            function validatePhoneNumber(input) {
                var phoneNumber = input.value.replace(/\D/g, ''); // Remove non-numeric characters
    
                if (phoneNumber.length === 10) {
                    // Valid 10-digit phone number
                    input.setCustomValidity('');
                    phoneValidationMessage.innerHTML = ''; // Clear the validation message
                } else {
                    // Invalid phone number
                    input.setCustomValidity('Please enter a valid 10-digit phone number.');
                    phoneValidationMessage.innerHTML = 'Please enter a valid 10-digit phone number.';
                }
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var passwordInput = document.getElementById('password');
            var passwordValidationMessage = document.getElementById('passwordValidationMessage');
    
            passwordInput.addEventListener('keyup', function () {
                validatePassword(this);
            });
    
            function validatePassword(input) {
                var password = input.value;
    
                if (password.length === 8) {
                    // Valid 8-digit password
                    input.setCustomValidity('');
                    passwordValidationMessage.innerHTML = ''; // Clear the validation message
                } else {
                    // Invalid password
                    input.setCustomValidity('Password must be 8 digits long.');
                    passwordValidationMessage.innerHTML = 'Password must be 8 digits long.';
                }
            }
        });
    </script>
    
    @endsection