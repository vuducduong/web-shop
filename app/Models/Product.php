<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'quantityInStock',
        'buyPrice',
        'MSRP'
    ];

    function productImages() {
        return $this -> hasMany(ProductImage::class);
    }

    function orders() {
        return $this -> belongsToMany(Order::class);
    }
}
