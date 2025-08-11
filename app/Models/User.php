<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
     function role(){
            return $this->belongsTo(Role::class)->withDefault();
        }
        function image(){
            return $this->morphOne(Image::class,'imageable');
        }
         function reviews(){
            return $this->hasMany(Review::class);
        }
        // function cart(){
        //     return $this->belongsTo(Cart::class);
        // }
        function orders(){
            return $this->hasMany(Order::class);
        }
         function orders_details(){
            return $this->hasMany(OrderDetail::class);
        }
        function payment(){
            return $this->hasMany(Payment::class);
        }
         function testimonial(){
            return $this->hasMany(Testimonial::class);
        }

}
