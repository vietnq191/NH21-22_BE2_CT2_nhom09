<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    function protype()
    {
        return $this->belongsTo(Protype::class, 'type_id');
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
