<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    #upload function
    protected $table="product";
    
    protected $fillable = [
        'product_name',
        'category',
        'price',
        'description',
        'image',
        'color',
        'size',
        'subcategory',
        
        
      ];
   
}
