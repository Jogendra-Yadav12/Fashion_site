<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    #upload function
    protected $table="size";
    
    protected $fillable = [
        'status',
        'size',
      ];
   
}
