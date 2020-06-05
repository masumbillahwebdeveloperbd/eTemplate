<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    
    protected $table='countries';
    protected $fillabale=['name'];
    protected $hidden=['created_at','updated_at'];
}
