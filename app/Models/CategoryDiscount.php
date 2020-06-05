<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryDiscount extends Model
{
    protected $table="category_discounts";
    protected $fillable=['discount_id','category_id'];
    protected $hidden = ['created_at','updated_at'];
}
