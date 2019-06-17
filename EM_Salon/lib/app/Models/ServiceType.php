<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    protected $table = 'service_types';
    protected $primaryKey = 'type_id';
    protected $quared =[];

    public function service(){
    	return $this->belongsTo('App\Models\Service','service_id','type_id');
    }
}
