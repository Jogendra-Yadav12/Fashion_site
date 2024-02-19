<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    #upload function
    protected $table="subcategory";
    protected $fillable = [
        'status',
        'image',
        'subcategory',
      ];
   
}
