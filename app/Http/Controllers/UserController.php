<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use App\Models\Wishlist;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Checkout;
use App\Models\Address;
use Illuminate\Support\Facades\Hash;

use Session;
class UserController extends Controller
{
    public function my_account()
    {
        
        try{
            if(session()->get('auth')){
                $user_id= session()->get('auth');
                $email=$user_id['email'];
                /*$userdata = Login::where('email',$email)->first();
                $dataorder = Checkout::where('user_id',$email)->get();

                return view('user.my_account',compact('userdata','dataorder'));*/
                $userdata = Login::where('email',$email)->first();
                $dataorder = Checkout::join('product', 'checkout.p_id', '=', 'product.id')
                ->where('checkout.user_id', $email)
                ->select('checkout.*', 'product.product_name', 'product.image')
                ->get();
                //dd($dataorder);
               return view('user.my_account', compact('userdata', 'dataorder'));
                }
            else{
                return redirect('register')->with('error','Unauthorised Access');
                }
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Database error: ' . $e->getMessage());
        } catch (\Exception $e) {
            return redirect('index')->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function wishlistuser()
    {
        try{
            $user_id= session()->get('auth');
               $email=$user_id['email'];
               $datawishlist = Wishlist::where('user_id',$email)->get();
               $count = Wishlist::where('user_id',$email)->get()->count();
            return view('user.wishlist',compact('datawishlist','count'));
        } catch (QueryException $e) {
            //dd($e);
            return redirect()->back()->with('status', 'Database error: ' . $e->getMessage());
        } catch (\Exception $e) {
           // dd($e);
            return redirect('/')->with('status', 'An error occurred: ' . $e->getMessage());
        }
    }
    public function logout()
    {
       if (session()->has('auth')) 
       {
           session()->forget('auth');
           return redirect("index")->withSuccess('logged out');
       }
       elseif(session()->has('authadmin'))
       {
        session()->forget('authadmin');
        return redirect("index")->withSuccess('logged out');
       }
       else{
           return redirect("index")->witherror('session not found');
       }
    }
    public function cart()
    {
        try{
            $user_id= session()->get('auth');
               $email=$user_id['email'];
               $datacart = Cart::where('user_id',$email)->get();
               
            return view('user.cart',compact('datacart'));
        } catch (QueryException $e) {
            //dd($e);
            return redirect()->back()->with('error', 'Database error: ' . $e->getMessage());
        } catch (\Exception $e) {
           // dd($e);
            return redirect('/')->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
    public function userorder()
    {
        try{
            $user_id= session()->get('auth');
               $email=$user_id['email'];
               $dataorder = Checkout::where('user_id',$email)->get();
               
            return view('user.userorder',compact('dataorder'));
        } catch (QueryException $e) {
            //dd($e);
            return redirect()->back()->with('error', 'Database error: ' . $e->getMessage());
        } catch (\Exception $e) {
           // dd($e);
            return redirect('/')->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

   public function  invoice($id)
    {
             try {
                $invoice_order = Checkout::find($id); 
               $payment_id=$invoice_order['payment_id'];
               $p_id=$invoice_order['p_id'];
                $invoiceproduct_data = Product::where('id',$p_id)->first(); 
              
               $invoiceaddress = Address::where('payment_id',$payment_id)->first(); 
               
                return view("user.invoice", [
                    'invoice_order' => $invoice_order,
                    'invoiceaddress' => $invoiceaddress,
                    'invoiceproduct_data'=>$invoiceproduct_data,
                ]);
    
           }
            catch (\Throwable $th) {
                dd($th);
                return redirect(url('/index'))->with('error', 'Something Went Wrong');
            }
    }

    public function updatepassword(Request $request)
    {
        try {
            
            $userdata= session()->get('auth');
            $email=$userdata->email;
            
            $user = Login::where('email',$email)->first(); 
          if($request->oldpass==$request->newpass)
          {
            
            if ($user && Hash::check($request->oldpass, $user->password))
            {
            //if($request->oldpass === $user->password){
                $user->password = Hash::make($request->newpass);
                $user->save();
            }
            else{
                return redirect()->back()->with('error','Old password is incorrect!');
            }
            Session()->flush();
            return redirect('index')->with('success','Password Update Successfully !!');  
        }
        else{
            return redirect()->back()->with('error','Password and Confirm do not match!');
        }
        } catch (QueryException $e) {
            dd($e);
            return redirect()->back()->with('error', 'Database error: ' . $e->getMessage());
        } catch (\Exception $e) {
            dd($e);
            return redirect('index')->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}
