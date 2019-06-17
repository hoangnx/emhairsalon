<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    //protected $primaryKey = 'id';
    protected $quared =[];

    public function serviceCategory(){
    	return $this->belongsTo('App\Models\ServiceCategory','cate_id','cate_id');
    }

    public function serviceType(){
    	return $this->hasMany('App\Models\ServiceType','service_id','type_id');
    }
}
