<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable =[
        
            'user_id',
            'username',
            'content',
            
            'total',
            'address',
            'phone_numbers',
            'payment',
            'status',
            
    ];
}
