<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Category;
use App\Models\User;
use App\Models\Wishlist;
use App\Models\Address;
use App\Models\Checkout;
use App\Models\Contact;
use App\Mail\EmailDemo;
use Illuminate\Support\Facades\Storage;
class WebsiteController extends Controller
{

    #Facebook
    public function redirectFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookCallback()
    {
            $user = Socialite::driver('facebook')->user();
         
            $finduser = User::where('facebook_id', $user->id)->first();
        
            if($finduser){
                session()->put('id', $finduser->id);
                session()->put('name',$finduser->name);
                session()->put('email',$finduser->email);
                session()->put('user_type','user');
                return redirect()->intended('userprofile');
         
            }else{
                User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'facebook_id'=> $user->id,
                    'password' => bcrypt(Str::random(8)),
                    'user_type'=>'user',
                    'status'=>1,
                ]);

                session()->put('name',$user->name);
                session()->put('email',$user->email);
                session()->put('user_type','user');

                return redirect()->intended('userprofile');
            }
            
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    
    public function handleGoogleCallback(Request $request)
    {
        $googleUser = Socialite::driver('google')->user();

        // Check if the user already exists
        $user = User::where('email', $googleUser->email)->first();
        if($user){
            session()->put('id', $user->id);
            session()->put('name',$user->name);
            session()->put('email',$user->email);
            session()->put('user_type','user');
            return redirect("/userprofile")->with('success', 'Logged in successfully.');
        } else {
            // User doesn't exist, create a new user
            $newUser = new User();
            $newUser->name = $googleUser->name;
            $newUser->email = $googleUser->email;
            $newUser->user_type = "user";
            $newUser->status = 1;
            $newUser->password = bcrypt(Str::random(8));
            $newUser->save();

            session()->put('name',$googleUser->name);
            session()->put('email',$googleUser->email);
            session()->put('user_type','user');

            return redirect('/')->with('success', 'Account created and logged in successfully.');
        }}
    public function index(){
        $data = Product::all();
        $email = session()->get('email');
        $cart = Cart::where('user_id',$email)->count();
        $category = SubCategory::all();
        $men = Product::where('category','men')->get();
        $women = Product::where('category','women')->get();
        $latest = Product::latest()->paginate(4);
        $top = Product::paginate(4);
        return view('website.index',compact('cart','data','category','men','women','latest','top'));
    }

    public function shop(){
        $email = session()->get('email');
        $cart = Cart::where('user_id',$email)->count();
        $data = Product::paginate(15);
       $category = Category::all();
        return view('website.shop',compact('cart','data','category'));
    }

    public function getProductsByCategory($category)
    {
        $products = Product::where('category', $category)->get();
        return response()->json(['products' => $products]);
    }

    public function product_details($id){
        $data = Product::find($id);
        $email = session()->get('email');
        $cart = Cart::where('user_id',$email)->count();
        return view('website.product-details',compact('cart','data'));
    }

    public function details($id){
        $data = Product::find($id);
        $email = session()->get('email');
        $cart = Cart::where('user_id',$email)->count();
        return view('website.product-quick-view',compact('cart','data'));
    }

    public function register(Request $request){
            $request->validate([
                'email' => 'required',
                'name' => 'required',
                'password' => 'required',
                'phone' =>'required',
            ]);
            $email = $request->email;
            $name = $request->name;
            $password = $request->password;
            $phone = $request->phone;
    
            $otp = rand(9999, 99999);
            $regdata = [
                'email' => $email,
                'password' => $password,
                'name' => $name,
                'phone'=> $phone,
                'otp' => $otp,
            ];
    
            session()->put('reg', $regdata);

            try {
                $users_email = User::where('email', $request->input('email'))->exists();
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

    public function otp()
  {
    return view("website.otp");
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
                $email = $regdata['email'];
                $phone = $regdata['phone'];
                if($otpvalue == $otp) {
                    User::create([
                        'email' => $email,
                        'password' => Hash::make($password),
                        'name' => $name,
                        'phone'=>$phone,
                        'user_type' => 'user',
                        'status'=>1,
                    ]);
                    return redirect(url('/logi'))->with(['success' => 'Account successfully created.']);
                } else {
                    return redirect(url('/otp'))->with(['error' => 'Otp not matched']);
                }
            }
        } catch (\Exception $e) {
            //dd($e);
            return redirect(url('/otp'))->with('error', 'Something went wrong');
        }
    }
    public function signup(){
        $email = session()->get('email');
        $cart = Cart::where('user_id',$email)->count();
        return view('website.signup',compact('cart'));
    }

    public function logi(Request $request)
    {
        try {
            $email = $request->email;
            $password = $request->password;
            $data = User::where('email', $request->email)->first();
            $user_type = $data['user_type'];

            if ($data && Hash::check($request->password, $data->password)) {
                if ($data['status'] == '1') {
                    if ($user_type == 'user') {
                        session()->put('id',$data['id']);
                        session()->put('name',$data['name']);
                        session()->put('email',$data['email']);
                        session()->put('phone',$data['phone']);
                        session()->put('user_type','user');
                        return redirect('/userprofile')->with('success', 'Successfully logged in');
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
    public function login(){
        $email = session()->get('email');
        $cart = Cart::where('user_id',$email)->count();
        return view('website.login',compact('cart'));
    }

    public function show(){
        $email = session()->get('email');
        $cart = Cart::where('user_id',$email)->count();
        $data = Cart::where('user_id',$email)->get();
        return view('website.cart',compact('cart','data'));
    }
    public function cart(Request $request,$id){
        $email = session()->get('email');
        $cart = Cart::where('user_id',$email)->count();
        $data = Cart::where('user_id',$email)->get();
        $product = Product::where('id',$id)->first();
        if(session()->get('email')){
        Cart::create([
            'img'=>$product->image,
            'name'=>$product->product_name,
            'user_id'=>session()->get('email'),
            'p_id'=>$product->id,
            'price'=>$product->price,
            'quantity'=>$request->quantity,
            'size'=>$request->size,
            'color'=>$request->color,
        ]);

        return redirect('usercart')->with(['cart'=>$cart,'data'=>$data]);
        }else{
            return redirect()->back()->with('warning','Please login !!');
        }
    }

    public function Removeuser($id){
        Cart::where('id',$id)->delete();
        return redirect()->back()->with('success','Remove Product Successfully !!');
    }

    public function productview($id){
        $email = session()->get('email');
        $cart = Cart::where('user_id',$email)->count();
        $product = Product::where('id',$id)->first();
        return view('website.product-quick-view',compact('product','cart'));
    }

    public function checkout(Request $request){
        $email = session()->get('email');

        $cart = Cart::where('user_id',$email)->count();
        $address = Address::where('user_id',$email)->get();
        $count = Address::where('user_id',$email)->count();
        if(!$count){
            return redirect('userprofile')->with('warning','Please Add Address!!');
        }
        $data = Cart::where('user_id',$email)->get();
        $quantityData = $request->input('quantity');
        $quantityArray = json_decode($quantityData, true);
        $amount = $request->amount;
        return view('website.checkout',compact('cart','address','data','amount','quantityArray'));
    }

    public function razorPaySuccess(Request $request){
            $priceData = $request->input('price');
            $quantityData = $request->input('quantity');
            $product_id = $request->input('product_id');
            $color = $request->input('color');
            $size =$request->input('size');
            $priceArray = json_decode($priceData, true);
            $pidArray = json_decode($product_id, true);
            $quantityArray = json_decode($quantityData, true);
            $colorArray = json_decode($color, true);
            $sizeArray = json_decode($size, true);

            $payment = $request->payment_id;
            $user = session()->get('email');

            if((is_array($priceArray))){
                for($i=0;$i<count($priceArray);$i++){
                    checkout::create([
                        'payment_id'=>$request->payment_id,
                        'p_id'=>$pidArray[$i]['value'],
                        'user_id'=>$user,
                        'price'=>$priceArray[$i]['value'],
                        'quantity'=>$quantityArray[$i]['value'],
                        'color'=>$colorArray[$i]['value'],
                        'size'=>$sizeArray[$i]['value'],
                        'address_id'=>$request->add,
                    ]);
                }
            }
        Cart::where('user_id',$user)->delete();
        return redirect('order')->with(['payment'=>$payment]);
    }
    public function contactus(){
        $email = session()->get('email');
        $cart = Cart::where('user_id',$email)->count();
        return view('website.contactus',compact('cart'));
    }

    public function submit(Request $request)
{
    try {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'message' => 'required',
        ]);

        // Create a new contact record
        Contact::create($validatedData);

        return redirect()->back()->with('success', 'Message sent successfully!');
    } catch (\Exception $e) {
        return redirect()->back()->withInput()->withErrors(['error' => 'Failed to send message. Please try again later.']);
    }
}

    public function aboutus(){
        $email = session()->get('email');
        $cart = Cart::where('user_id',$email)->count();
        return view('website.aboutus',compact('cart'));
    }

    public function forget(){
        $email = session()->get('email');
        $cart = Cart::where('user_id',$email)->count();
        return view('website.forgetpass',compact('cart'));
    }

    public function profile(){
        $email = session()->get('email');
        if($email){
        $address = Address::where('user_id',$email)->get();
        $wishlist = Wishlist::where('user_id',$email)->count();
        $cart = Cart::where('user_id',$email)->count();
        $order = Checkout::where('user_id',$email)->count();
        $pending = Checkout::where('status',0)->count();
        $user = User::where('id',$email)->first();
        $count = Address::where('user_id',$email)->count();
        $profile = User::where('email',$email)->first();
        
            $data = Checkout::join('product', 'checkout.p_id', '=', 'product.id')
                ->where('checkout.user_id', $email)
                ->select('checkout.*', 'product.product_name', 'product.image', 'product.description')
                ->get();

        
        return view('website.profile',compact('cart','wishlist','order','address','data','count','pending','profile'));
        }else{
            return redirect('/')->with('warning','Please login !!');
        }
    }

    public function UpdateUser(Request $request){
        $id = session()->get('id');
        User::where('id',$id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
        ]);
        session()->put('name',$request->name);
        session()->put('email',$request->email);
        session()->put('phone',$request->phone);
        return redirect()->back()->with('success','Update User Data Successfully !!');
    }

    public function Addaddress(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $street = $request->input('street');
        $city = $request->input('city');
        $state = $request->input('state');
        $phone = $request->input('phone');
        Address::create([
            'name'=> $name,
            'user_id'=> $email,
            'street'=> $street,
            'city'=> $city,
            'state'=> $state,
            'phone'=> $phone,
        ]);
        return redirect()->back()->with('success','Add Address Successfully !!');
    }

    public function Updateaddress(Request $request,$id){
        $name = $request->input('name');
        $email = $request->input('email');
        $street = $request->input('street');
        $city = $request->input('city');
        $state = $request->input('state');
        $phone = $request->input('phone');
        Address::where('id',$id)->update([
            'name'=> $name,
            'user_id'=> $email,
            'street'=> $street,
            'city'=> $city,
            'state'=> $state,
            'phone'=> $phone,
        ]);
        return redirect()->back()->with('success','Update Address Successfully !!');
    }

    public function order(){
        $email = session()->get('email');
        $cart = Cart::where('user_id',$email)->count();
        return view('website.order-success',compact('cart'));
    }


    public function signout(){
        Session::flush();
        return redirect('/')->with(['success' => 'Logout Successfully.']);
    }

    public function removeAdd($id){
        Address::where('id',$id)->delete();
        return redirect()->back()->with('success','Remove Address Successfully !!');
    }

    public function faq(){
        $email = session()->get('email');
        $cart = Cart::where('user_id',$email)->count();
        return view('website.faq',compact('cart'));
    }

}