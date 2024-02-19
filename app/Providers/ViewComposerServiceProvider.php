<?php

// app/Providers/ViewComposerServiceProvider.php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Wishlist; 
use App\Models\Cart; 
class ViewComposerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        view()->composer('*', function ($view) {
            //$wishlist = Wishlist::all();
            if(session()->get('auth')){
            $user_id= session()->get('auth');
            $email=$user_id['email'];
            $count = Wishlist::where('user_id',$email)->get()->count();
            $cartcount = Cart::where('user_id',$email)->get()->count();
            $view->with('wishlistcount', $count);
            
            $view->with('cartcount', $cartcount);
            }
            else 
            {
                $count = '0';
                $cartcount= '0';
                $view->with('wishlistcount', $count);
                $view->with('cartcount', $cartcount);
            }
        });
    }

    public function register()
    {
        
    }
}
