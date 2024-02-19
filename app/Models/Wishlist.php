<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    #upload function
    protected $table="wishlist";
    
    protected $fillable = [
        'img',
        'name',
        'price',
        'user_id',
        'p_id',
      ];
   
}
