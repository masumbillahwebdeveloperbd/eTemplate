<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menufacture extends Model
{
     protected $table='menufactures';
   protected $fillable=['name','menufacture_description','publication_status'];
    protected $hidden=['created_at','updated_at'];
}
