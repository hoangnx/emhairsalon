<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    protected $table = 'service_categories';
    protected $primaryKey = 'cate_id';
    protected $quared =[];

    public function service(){
    	return $this->hasMany('App\Models\Service','cate_id','cate_id');
    }
}
