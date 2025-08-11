<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Order extends Model
{
    use HasFactory;
    protected $guarded=[];
     function user(){
        return $this->belongsTo(User::class)->withDefault();
    }
     function orders_details(){
            return $this->hasMany(OrderDetail::class);
        }
         function payment(){
            return $this->hasOne(Payment::class);
        }
}
