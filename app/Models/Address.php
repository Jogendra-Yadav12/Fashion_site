<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    #upload function
    protected $table="address";
    
    protected $fillable = [
        'id',
        'user_id',
        'name',
        'street',
        'city',
        'state',
        'phone',
        
      ];
   
}