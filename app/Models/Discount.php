<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $table="discounts";
    protected $fillable=['discount_type','rate','rules','starting_date','ending_date','publication_status'];
    protected $hidden = ['created_at','updated_at'];

 }
