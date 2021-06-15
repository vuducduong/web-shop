<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'orderDate',
        'user_id',
    ];

    function user() {
        return $this -> belongsTo(User::class);
    }

    function products() {
        return $this -> belongsToMany(Product::class);
    }
}
