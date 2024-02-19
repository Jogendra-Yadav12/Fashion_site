<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\WebsiteController::class,'index']);

Route::get('/faq', [App\Http\Controllers\websiteController::class,'faq']);

Route::get('/shop', [App\Http\Controllers\WebsiteController::class,'shop']);
Route::get('/products/{category}', [App\Http\Controllers\WebsiteController::class,'getProductsByCategory']);

Route::get('/product-details/{id}', [App\Http\Controllers\WebsiteController::class,'product_details']);
Route::get('/details/{id}', [App\Http\Controllers\WebsiteController::class,'details']);

Route::get('/aboutus', [App\Http\Controllers\WebsiteController::class,'aboutus']);

Route::get('/contactus', [App\Http\Controllers\WebsiteController::class,'contactus']);
Route::post('/submit',[App\Http\Controllers\WebsiteController::class,'submit'])->name('contact.submit');

Route::get('/signup', [App\Http\Controllers\WebsiteController::class,'signup']);
Route::post('/signup', [App\Http\Controllers\WebsiteController::class,'register']);
Route::get('/otp', [App\Http\Controllers\WebsiteController::class, 'otp'])->name('otp');
Route::post('/otpsubmit', [App\Http\Controllers\WebsiteController::class, 'otpsubmit'])->name('otpsubmit');
Route::get('/product_view/{id}',[App\Http\Controllers\WebsiteController::class,'productview']);

Route::get('/logi', [App\Http\Controllers\WebsiteController::class,'login']);
Route::post('/logi', [App\Http\Controllers\WebsiteController::class,'logi']);

Route::get('/google',  [App\Http\Controllers\WebsiteController::class,'redirectToGoogle']);
Route::get('/google/callback', [App\Http\Controllers\WebsiteController::class,'handleGoogleCallback']);

Route::get('/facebook-login', [App\Http\Controllers\WebsiteController::class, 'redirectFacebook']);
Route::get('/callback', [App\Http\Controllers\WebsiteController::class, 'facebookCallback']);

Route::get('usercart', [App\Http\Controllers\WebsiteController::class,'show']);
Route::get('/usercart/{id}', [App\Http\Controllers\WebsiteController::class,'cart']);
Route::post('/usercart/{id}',[App\Http\Controllers\WebsiteController::class,'cart']);
Route::get('/userremove/{id}',[App\Http\Controllers\WebsiteController::class,'Removeuser']);
Route::post('/upduser',[App\Http\Controllers\WebsiteController::class,'UpdateUser']);
Route::get('/paysuccess', [App\Http\Controllers\WebsiteController::class, 'razorPaySuccess']);

Route::get('/checkout', [App\Http\Controllers\WebsiteController::class,'checkout']);

Route::get('/wishlist', [App\Http\Controllers\WebsiteController::class,'wishlist']);

Route::get('/forget', [App\Http\Controllers\WebsiteController::class,'forget']);

Route::get('/userprofile', [App\Http\Controllers\WebsiteController::class,'profile']);
Route::get('/removeadd/{id}', [App\Http\Controllers\WebsiteController::class,'removeAdd']);
Route::post('/addAddress',[App\Http\Controllers\WebsiteController::class,'Addaddress']);
Route::post('/addAddress/{id}',[App\Http\Controllers\WebsiteController::class,'Updateaddress']);


Route::get('/order', [App\Http\Controllers\WebsiteController::class,'order']);

Route::get('signout',[App\Http\Controllers\WebsiteController::class,'signout']);



Route::get('/forgot-password', [App\Http\Controllers\LoginController::class, 'forgotPasswordForm'])->name('forgot.password.form');
// Route for handling the form submission
Route::post('/forgot-password', [App\Http\Controllers\LoginController::class, 'sendResetLinkEmail'])->name('forgot.password.email');
// Route for the reset password page
Route::get('/reset-password/{token}', [App\Http\Controllers\LoginController::class, 'showResetForm'])->name('password.reset.form');
// Route for handling the password reset
Route::post('/reset_password', [App\Http\Controllers\LoginController::class, 'resetPassword'])->name('password.update');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/log', [App\Http\Controllers\LoginController::class, 'log'])->name('log');
// Route::get('/register', [App\Http\Controllers\LoginController::class, 'register'])->name('register');
Route::post('/reg', [App\Http\Controllers\LoginController::class, 'reg'])->name('reg');
// Route::get('/otp', [App\Http\Controllers\FrontendController::class, 'otp'])->name('otp');
// Route::post('/otpsubmit', [App\Http\Controllers\LoginController::class, 'otpsubmit'])->name('otpsubmit');
Route::get('/wishlist/{id}',[App\Http\Controllers\FrontendController::class,'wishlist']);
Route::post('/addtocart',[App\Http\Controllers\FrontendController::class,'addtocart']);
Route::get('/removecart/{id}',[App\Http\Controllers\FrontendController::class,'removecart']);
Route::get('/clearcart/{id}',[App\Http\Controllers\FrontendController::class,'clearcart']);
Route::get('/wishremove/{id}',[App\Http\Controllers\FrontendController::class,'wishremove']);

Route::get('/admin-logout',[App\Http\Controllers\LoginController::class,'logout']);
Route::post('admin-login',[App\Http\Controllers\LoginController::class,'admin_login']);


  Route::group(['middleware' => 'loginverify'], function () {
  Route::controller(App\Http\Controllers\ProductController::class)->group(function () {
   
    Route::get('add_category', 'add_category');
    Route::post('uploadcategory', 'uploadcategory')->name('uploadcategory');
    Route::get('/deletecategory/{id}', 'deletecategory')->name('deletecategory');

    Route::get('add_subcategory', 'add_subcategory');
    Route::post('uploadsubcategory', 'uploadsubcategory')->name('uploadsubcategory');
    Route::get('/deletesubcategory/{id}', 'deletesubcategory')->name('deletesubcategory');

    Route::get('add_size', 'add_size');
    Route::post('uploadsize', 'uploadsize')->name('uploadsize');
    Route::get('/deletesize/{id}', 'deletesize')->name('deletesize');

    Route::get('add_color', 'add_color');
    Route::post('uploadcolor', 'uploadcolor')->name('uploadcolor');
    Route::get('/deletecolor/{id}', 'deletecolor')->name('deletecolor');
    
    Route::get('/add_product', 'add_product')->name('add_product');
    Route::post('uploadproduct', 'uploadproduct')->name('uploadproduct');
    Route::get('/updateproduct/{id}', 'updateproduct')->name('updateproduct');
    Route::get('/deleteproduct/{id}', 'deleteproduct')->name('deleteproduct');
    Route::post('/up_product/{id}', 'up_product')->name('up_product');

    Route::get('/adminorder', 'adminorder')->name('adminorder');
    Route::get('/view_user', 'view_user')->name('view_user');
    Route::get('/approveorder/{id}', 'approveorder')->name('approveorder');
    Route::get('/pendingorder/{id}', 'pendingorder')->name('pendingorder');
   
  });

  #User Managemnt
  Route::get('add-admin/{id?}', [App\Http\Controllers\AdminController::class, 'adminPage']);
  Route::Post('add-admin', [App\Http\Controllers\AdminController::class, 'adminsave']);
  Route::Post('update-admin/{id?}', [App\Http\Controllers\AdminController::class, 'adminupdate']);

  Route::controller(App\Http\Controllers\LoginController::class)->group(function () {
   
   
    Route::get('/profile', 'profile');

   
  
  });
 

});
Route::group(['middleware' => 'userauth'], function () {
Route::controller(App\Http\Controllers\UserController::class)->group(function () {
   
  Route::get('/my_account', 'my_account');
  Route::get('/userorder', 'userorder');
  Route::get('/wishlistuser', 'wishlistuser');
  Route::get('/cart', 'cart');
  
  Route::post('/updatepassword', 'updatepassword');
  Route::get('/invoice/{id}', 'invoice')->name('invoice');
  Route::get('/logout',  'logout');
});
});
