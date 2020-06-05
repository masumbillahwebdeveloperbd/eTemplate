<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageModel extends Model
{
     protected $table="images";
 protected $fillable=['product_id','general_image','thumbnail_image','featured_image','slider_image','back_image'];
   protected $hidden = ['created_at','updated_at'];


    public function product(){
    	return $this->hasOne('\App\Models\Product','product_id','product_id');
    }
}
