<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDiscount extends Model
{
    protected $table="product_discounts";
    protected $fillable=['discount_id','product_id'];
    protected $hidden = ['created_at','updated_at'];
}
