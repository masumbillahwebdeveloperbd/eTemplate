<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table="suppliers";
    protected $fillable=['company_name','phone','email','password','address','country_id','city_id','postal_code','status'];
   protected $hidden = ['created_at','updated_at','remember_token'];
    protected $casts = ['email_verified_at' => 'datetime'];
}
			

