<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Product extends Model
{
    use HasFactory;
    protected $guarded=[];

    function category(){
        return $this->belongsTo(Category::class)->withDefault();
    }
     function image(){
            return $this->morphOne(Image::class,'imageable')->where('type','main');
        }
         function gallery(){
            return $this->morphMany(Image::class,'imageable')->where('type','gallery');
        }
        function reviews(){
            return $this->hasMany(Review::class);
        }
         function orders_details(){
            return $this->hasMany(OrderDetail::class);
        }

        // function cart(){
        //     return $this->belongsTo(Cart::class);
        // }
}
