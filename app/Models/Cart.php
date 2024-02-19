<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    #upload function
    protected $table="cart";
    
    protected $fillable = [
        'img',
        'name',
        'price',
        'user_id',
        'p_id',
        'quantity',
        'color',
        'size',
      ];
   
}