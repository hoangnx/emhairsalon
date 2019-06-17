<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';
    protected $primaryKey = 'brand_id';
    protected $quared =[];

    // public function comments()
    // 	return $this->hasMany('App\Comment', 'foreign_key', 'local_key');
    // }
}
