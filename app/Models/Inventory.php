<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table="inventories";
    protected $fillable=['product_id','quantity','purchase_price','purchasedate'];
   protected $hidden = ['created_at','updated_at'];

    
    public function product(){
    	return $this->hasOne('\App\Models\Product','product_id','product_id');
    }
}
