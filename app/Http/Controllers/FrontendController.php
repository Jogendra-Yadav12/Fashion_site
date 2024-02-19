<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Color;
use App\Models\Size;
use App\Models\Wishlist;
use App\Models\Cart;
use App\Models\Address;
use App\Models\Checkout;
use App\Models\Login;
use Session;

class FrontendController extends Controller
{
    public function index()
    {
        if(session()->get('auth')){
        $user_id= session()->get('auth');
        $email=$user_id['email'];
        $data = Product::all();
        $datamen = Product::where('category', 'men')->get();
        $datawomen = Product::where('category', 'women')->get();
        $datakid = Product::where('category', 'kid')->get();
        $dataacc = Product::where('category', 'accessories')->get();
        $count = Wishlist::where('user_id',$email)->get()->count();
        $wish = Wishlist::where('user_id',$email)->get();
        
    return view("index", [
        'data' => $data,
        'datamen' => $datamen,
        'datawomen' => $datawomen,
        'datakid' => $datakid,
        'dataacc' => $dataacc,
        'wish'=>$wish,
        'count'=>$count
    ]);}
    else{
        
        $data = Product::all();
        $datamen = Product::where('category', 'men')->get();
        $datawomen = Product::where('category', 'women')->get();
        $datakid = Product::where('category', 'kid')->get();
        $dataacc = Product::where('category', 'accessories')->get();
        //$count = Wishlist::where('user_id',$email)->get()->count();
        //$wish = Wishlist::where('user_id',$email)->get();
        
    return view("index", [
        'data' => $data,
        'datamen' => $datamen,
        'datawomen' => $datawomen,
        'datakid' => $datakid,
        'dataacc' => $dataacc,
        
    ]);
    }
        
    }

    public function shop()
    {
        $cateory = Category::get();
     if(session()->get('auth')){
        $user_id= session()->get('auth');
        $email=$user_id['email'];
        $data = Product::all();
        
        $count = Wishlist::where('user_id',$email)->get()->count();
        $wish = Wishlist::where('user_id',$email)->get();
        
    return view("shop", [
        'data' => $data,
        'wish'=>$wish,
        'count'=>$count,
        'category' => $cateory,
    ]);
   }
    else{
    $data = Product::all();
    return view("shop", [ 'data' => $data, 'category' => $cateory,]);
    }
        
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
   
    public function checkout()
    {
        try{
               $user_id= session()->get('auth');
               $email=$user_id['email'];
               $address = Address::where('user_id',$email)->first();
               $basic = Login::where('email',$email)->first();
            return view('user.checkout',compact('address','basic'));
            
        } catch (QueryException $e) {
            //dd($e);
            return redirect()->back()->with('error', 'Database error: ' . $e->getMessage());
        } catch (\Exception $e) {
           // dd($e);
            return redirect('index')->with('error', 'An error occurred: ' . $e->getMessage());
        }
       
    }
    public function cart()
    {
        return view('cart');
    }
    public function product_view($id)
    {
        try {
            $product_data = Product::find($id); 
           
            return view("product_view", [
                'products' => $product_data
            ]);

        
        }
        catch (\Throwable $th) {
            
            return redirect(url('/index'))->with('error', 'Something Went Wrong');
        }
    }
    public function wishremove($id)
    {
        try{
            $item = Wishlist::where('id',$id)->delete();
            return redirect('wishlistuser')->with('success',' product removed from wishlist successfully!!');
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Database error: ' . $e->getMessage());
        } catch (\Exception $e) {
            return redirect('/index')->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
    public function wishlist($id)
    {
        try{
            
            if(session()->get('auth')){
               $item = Product::find($id);
              
               $userdata= session()->get('auth');
               $user_id=$userdata['email'];
               
                $double = Wishlist::where('p_id',$id)->exists();
                if($double){
            
                    $item = Wishlist::where('p_id',$id)->delete();
                    return redirect()->back()->with('success','Product removed successfully');;
                }
                $wish = new Wishlist;
               
                $wish->name = $item['product_name'];
                $wish->img = $item['image'];
                $wish->price = $item['price'];
                $wish->user_id = $user_id;
                $wish->p_id = $item['id'];
                $wish->save();
                return redirect()->back()->with('success','Product added to wishlist');
        
            }else{
                return redirect('index')->with('error','Login to continue');
            }
        } catch (QueryException $e) {
            dd($e);
            return redirect()->back()->with('error', 'Database error: ' . $e->getMessage());
        } catch (\Exception $e) {
            dd($e);
            return redirect('index')->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function addtocart(Request $request)
    
        {
            $id = $request->id;
            $color = $request->selectedColor;
            $size = $request->selectedSize;
        try{
           
            if(session()->get('auth')){
               $item = Product::find($id);
              
               $userdata= session()->get('auth');
               $user_id=$userdata['email'];
               
               $cartRecord = Cart::where('p_id', $id)
               ->where('user_id', $user_id)
               ->where('color', $color)
               ->where('size', $size)
               ->first();
              
               if ($cartRecord) {
                
                $quantity = $cartRecord->quantity;
                $newquantity=$quantity+1;
                //dd($newquantity);
                $cart = new Cart;
               
                $cartRecord->name = $item['product_name'];
                $cartRecord->img = $item['image'];
                $cartRecord->price = $item['price'];
                $cartRecord->user_id = $user_id;
                $cartRecord->p_id = $item['id'];
                $cartRecord->quantity = $newquantity;

                $cartRecord->save();
                return redirect('cart')->with('success','Product added to cart');
            } 
            
                $cart = new Cart;
               
                $cart->name = $item['product_name'];
                $cart->img = $item['image'];
                $cart->price = $item['price'];
                $cart->user_id = $user_id;
                $cart->p_id = $item['id'];
                $cart->quantity = '1';
                $cart->color = $color;
                $cart->size = $size;
                $cart->save();
                return redirect('cart')->with('success','Product added to cart');
        
            }else{
                return redirect('index')->with('success','Login to Continue');
            }
        } catch (QueryException $e) {
           // dd($e);
            return redirect()->back()->with('error', 'Database error: ' . $e->getMessage());
        } catch (\Exception $e) {
           // dd($e);
            return redirect('index')->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
    
    public function removecart($id)
    {
        try{
            $item = Cart::where('id',$id)->delete();
            return redirect('cart')->with('success','Remove product successfully!!');
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Database error: ' . $e->getMessage());
        } catch (\Exception $e) {
            return redirect('/index')->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
    public function clearcart($id)
    {
        try{
            $item = Cart::where('user_id',$id)->delete();
            return redirect('cart')->with('success','Remove product successfully!!');
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Database error: ' . $e->getMessage());
        } catch (\Exception $e) {
            return redirect('/index')->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    
    
    public function checkoutcart(Request $request) {
        try{
           
        $productIds = $request->input('p_id');
        if(!empty($productIds))
        {
        $user_id= $request->input('id');
        $quantities = $request->input('quantity');
        $colors = $request->input('color');
        $sizes = $request->input('size');
        $prices = $request->input('price');
        $name = $request->input('name');
        $cartid = $request->input('cartid');
        // Example: Storing in the session
       

        $cartItems = [];
        foreach ($productIds as $index => $productId) {
            $cartItems[] = [
                'product_id' => $productId,
                'quantity' => $quantities[$index],
                'color' => $colors[$index],
                'size' => $sizes[$index],
                'price' => $prices[$index],
                'user_id' => $user_id[$index],
                'name' =>$name[$index],
                'cartid' =>$cartid[$index],
            ];
        }
    
        Session::put('cart', $cartItems);
        return redirect('checkout');
    }
    else
    {
        return redirect('/cart')->with('error', 'Your cart is empty ,add items to proceed');
    }
    } catch (\Exception $e) {
        return redirect('/cart')->with('error', 'An error occurred: ' . $e->getMessage());
    }
    }

    public function order(Request $request)
    {
        //dd($request);
        $totalprice= $request->amount;
        $paymentid=$request->payment_id;
        $cartid=$request->cartid;
        $email=$request->id;
       
        $data = Address::create([
            'fname' => $request->billing_fname,
            'lname' => $request->billing_lname,
            'street' => $request->billing_street,
            'city' => $request->billing_city,
            'state' => $request->billing_state,
            'phone' => $request->billing_phone,
            'user_id' => $request->billing_email,
            'payment_id'=>$paymentid,
            
        ]);  

        $cartItems= session()->get('cart');
       foreach ($cartItems as $item) {
        $checkoutEntry = new Checkout([
        'p_id' => $item['product_id'],
        'price' => $item['price'],
        'quantity' => $item['quantity'],
        'user_id' => $item['user_id'],
        'color' => $item['color'],
        'size' => $item['size'],
        
        'payment_id' => $paymentid, 
    ]);
    $checkoutEntry->save();
    foreach ($cartItems as $item) {
        $dltdata = Cart::where('p_id', $item['product_id'])
                       ->where('user_id', $item['user_id'])
                       ->delete();
    }
    
    
    return redirect('thankyou');
}


    }

    public function thankyou()
    {
        return view("thankyou");
    }

  public function otp()
  {
   
    return view("otp");
  }
}
