<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   
    protected $table="products";
    protected $fillable=['name','slug','quantity','purchase_price','sell_price','short_description','long_description','re_order_level','category_id','menufacture_id','supplier_id'];
   protected $hidden = ['created_at','updated_at'];


    public function category(){
    	return $this->hasOne('\App\Models\Category','category_id','category_id');
    }
    public function menufacture(){
    	return $this->hasOne('\App\Models\Menufacture','menufacture_id','menufacture_id');
    }
    public function supplierName(){
    	return $this->hasOne('\App\Models\Supplier','supplier_id','supplier_id');
    }
    
}
