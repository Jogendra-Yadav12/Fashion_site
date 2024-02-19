<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    #upload function
    protected $table="checkout";
    
    protected $fillable = [
        
        'p_id',
        'price',
        'quantity',
        'payment_id',
        'user_id',
        'address_id',
        'color',
        'size',
        'status',
      ];
   
}