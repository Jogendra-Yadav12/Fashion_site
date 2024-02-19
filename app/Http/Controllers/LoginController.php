<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Login;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use App\Mail\EmailDemo;
use App\Mail\ResetPasswordMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\Checkout;


class LoginController extends Controller
{

    public function admin_login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
          ]);

          
          #admin
          $data = Login::where('email', $request->email)->where('user_type','admin')->first();
        
          if ($data) {
            
            if (Hash::check($request->password, $data->password)) {
                
              $request->session()->put('authadmin', $data);
               return redirect('profile')->with('succesfully logged in');
            }
          }
        return redirect()->back()->with(['error'=>'Oppes! You have entered invalid credentials']);
    }


    public function register()
    {
        return view('register');
    }
    public function profile()
    {
        $category = Category::count();
        $product = Product::count();
        $user = User::count();
        $order = Checkout::count();

        return view("admin.profile",compact('category','product','user','order'));
    }
    public function reg(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'number' => 'required',
            'pass' => 'required',
        ]);
        $email = $request->email;
        $name = $request->name;
        $number = $request->number;
        $pass = $request->pass;

        $otp = rand(9999, 99999);
        $regdata = [
            'email' => $email,
            'password' => $pass,
            'number' => $number,
            'name' => $name,
            'otp' => $otp,
        ];

        $request->session()->put('reg', $regdata);

        try {
            $users_email = Login::where('email', $request->input('email'))->exists();
            if ($users_email) {
                return redirect()->back()->with(['error' => 'Email already exist.']);
            } else {
                Mail::to($email)->send(new EmailDemo($email, $otp));

                return redirect(url('/otp'))->with(['success' => 'Otp has been successfully sent to your email.']);
            }
        } catch (\Exception $e) {
            return redirect(url('/register'))->with('error', 'Something went wrong');
        }
    }

    public function otpsubmit(Request $request)
    {

        $otp = $request->otp;


        try {
            if (session()->get('reg')) {
                
                $regdata = session()->get('reg');

                $otpvalue = $regdata['otp'];
                $name = $regdata['name'];
                $password = $regdata['password'];
                $number = $regdata['number'];
                $email = $regdata['email'];
                if ($otpvalue == $otp) {
                    $data = Login::create([
                        'email' => $email,
                        'password' => Hash::make($password),
                        'name' => $name,
                        'number' => $number,
                        'user_type' => 'user',
                    ]);
                    $request->session()->put('auth', $data);
                    return redirect(url('/index'))->with(['success' => 'Account successfully created.']);
                } else {
                    return redirect(url('/otp'))->with(['error' => 'Otp not matched']);
                }
            }
        } catch (\Exception $e) {
            //dd($e);
            return redirect(url('/otp'))->with('error', 'Something went wrong');
        }
    }


    public function log(Request $request)
    {
        try {
            $email = $request->email;
            $password = $request->password;
            $data = Login::where('email', $request->email)->first();
            $user_type = $data['user_type'];

            if ($data && Hash::check($request->password, $data->password)) {
                if ($data['status'] == '1') {
                    if ($user_type == 'user') {
                        $request->session()->put('auth', $data);
                        return redirect()->back()->with('success', 'Successfully logged in');
                    } else {
                        return redirect()->back()->with(['error' => 'Email not registered']);
                    }
                } else {
                    return redirect()->back()->with(['error' => 'login approval is pendending']);
                }
            } else {
                return redirect()->back()->with(['error' => 'Invalid credentials']);
            }
        } catch (\Exception $e) {
            \Log::error($e);
            return redirect()->back()->with(['error' => 'Something went wrong']);
        }
    }
    public function logout()
    {
    request()->session()->forget('authadmin');
      return redirect('login');
    }


    public function forgotPasswordForm()
    {
        return view('website.forgetpass');
    }

    // Send reset password link email

public function sendResetLinkEmail(Request $request)
{
    $email = $request->email;
    $user = User::where('email', $email)->first();

    if (!$user) {
        return redirect()->back()->with(['error' => 'Email not registered']);
    }

    // Generate reset token
    $token = Str::random(60);

    // Store token in session
    Session::put('reset_token', $token);
    Session::put('reset_email', $email);

    // Send email with reset link
    Mail::to($email)->send(new ResetPasswordMail($user, $token));

    return redirect()->back()->with('success', 'Password reset link sent to your email.');
}

public function showResetForm($token)
{
    // Retrieve email from session
    $email = Session::get('reset_email');

    // Ensure token matches session token
    if (!$email || $token !== Session::get('reset_token')) {
        return redirect()->back()->with(['error' => 'Invalid reset link']);
    }

    return view('website.reset_password', ['token' => $token]);
}


public function resetPassword(Request $request)
{
    try {
        
        $validatedData = $request->validate([
            'password' => 'required|confirmed',
        ]);
        $password = $validatedData['password'];

        // Retrieve email and token from session
        $email = Session::get('reset_email');
        $token = Session::get('reset_token');

        // Ensure email and token are present in session
        if (!$email || !$token) {
            dd($email);
            return redirect()->back()->with(['error' => 'Invalid reset link']);
        }

        // Clear session

        // Retrieve user using email
        $user = User::where('email', $email)->first();

        if (!$user) {
            dd($user);
            return redirect()->back()->with(['error' => 'Invalid reset link']);
        }

        // Update user's password
        $user->password = Hash::make($password);
        
        $user->save();
        Session::forget(['reset_email', 'reset_token']);

        return redirect('/')->with('success', 'Password has been reset successfully.');
    } catch (\Exception $e) {
        dd($e);
        return redirect()->back()->with(['error' => 'Something went wrong while resetting your password. Please try again later.']);
    }
}
}
