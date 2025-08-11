<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Role extends Model
{
    use HasFactory;
    protected $guarded=[];
    function users(){
    return $this->hasMany(User::class);
    }
    function permissions(){
        return $this->belongsToMany(Permission::class);
    }
}
