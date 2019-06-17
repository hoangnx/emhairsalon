<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Brand;
use App\Models\ServiceType;
use App\Models\Service;
use App\Models\ServiceCategory;

class FrontendController extends Controller
{
    public function getIndex()
    {
    	$brand['brands'] = Brand::all();
    	$service_category['service_categories'] = ServiceCategory::all();
    	return view('customer.index', $brand, $service_category);
    }

    //test Route test
    public static function printPriceRange($cate_id)
    {
    	//$cate_id = 1;
        $data = DB::table('service_types')
        ->join('services', 'service_types.service_id', 'services.id')
        ->join('service_categories', 'services.cate_id', 'service_categories.cate_id')
        ->select('service_types.type_id', 'service_types.type_price', 'service_categories.cate_id', 'service_categories.cate_name')
        ->where('service_categories.cate_id', $cate_id)
        ->orderBy('service_types.type_price', 'ASC')
        ->get();
        $minPrice = $data[0]->type_price;
        $maxPrice = $data[count($data)-1]->type_price;

        return number_format($minPrice,0,',','.').' - '.number_format($maxPrice,0,',','.');
    }

    public function getService()
    {	
    	$data = DB::table('service_types')
        ->join('services', 'service_types.service_id', 'services.id')
        ->join('service_categories', 'services.cate_id', 'service_categories.cate_id')
        ->select('service_types.type_id', 'service_types.type_price', 'service_categories.cate_id', 'service_categories.cate_name')
        ->get();

        $service_category['service_categories'] = ServiceCategory::all();

    	return view('customer.service', $service_category);
    }

    public static function getAllService($cate_id=1)
    {
    	$data = DB::table('services')
        ->join('service_categories', 'services.cate_id', 'service_categories.cate_id')
        ->select('service_categories.cate_id', 'service_categories.cate_name', 'services.id', 'services.name', 'services.description', 'services.duration', 'services.status',)
        ->where('service_categories.cate_id', $cate_id)
        ->get();
        return $data;
    }

    public static function getAllServiceType($service_id=1)
    {
    	$arr_service_type = DB::table('service_types')
    	->where('service_types.service_id', $service_id)
    	->get();

    	return $arr_service_type;
    }
}
