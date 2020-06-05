<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{

	   protected $table="options";
    protected $fillable=['weight','color','width','height','size','product_id'];
   protected $hidden = ['created_at','updated_at'];

    
    public function product(){
    	return $this->hasOne('\App\Models\Product','product_id','product_id');
    }
   
}
