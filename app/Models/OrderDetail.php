<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class OrderDetail extends Model
{
    use HasFactory;
    protected $guarded=[];
    //
     function user(){
        return $this->belongsTo(User::class)->withDefault();
    }
    function products(){
        return $this->belongsTo(Product::class)->withDefault();
    }
    function order(){
        return $this->belongsTo(Order::class)->withDefault();
    }
    
}
