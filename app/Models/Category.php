<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   protected $table='categories';
   protected $fillable=['name','category_description','parent_id','publication_status'];
    protected $hidden=['created_at','updated_at'];
   

   public function children()
  {
    return $this->hasMany('App\Models\Category','parent_id','category_id');
  }
}
