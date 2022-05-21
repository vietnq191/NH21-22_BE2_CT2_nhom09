<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Protype extends Model
{
    use HasFactory;
    function product(){
        return $this->hasMany(Product::class,'id');
    }
}
