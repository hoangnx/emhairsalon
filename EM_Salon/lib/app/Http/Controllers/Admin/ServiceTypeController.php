<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ServiceType;
use App\Models\Service;

class ServiceTypeController extends Controller
{
    public function getServiceType()
    {
    	$service_type['service_types'] = ServiceType::paginate(10);
    	$service['services'] = Service::all();
    	return view('admin.service-type',$service_type,$service);
    }

    public function getAddServiceType()
    {
        $service['services'] = Service::all();
    	return view('admin.addServiceType', $service);
    }

    public function postAddServiceType(Request $request)
    {
    	//$request['name', 'descrtiption', 'duration', 'cate_id']
    	$request->validate(
    		[
    			'service_id'=>'required',
	    		'type_name'=>'required',
	    		'type_price'=>'required|integer'
    		],
    		[
    			'service_id.required'=>'Dịch vụ cha không được để trống',
    			'type_name.required'=>'Tùy chọn không được để trống',
    			'type_price.required'=>'Giá bán không được để trống',
                'type_price.integer'=>'Giá bán phải điền là số',
    		]	
    	);
    	$service_type = new ServiceType;
    	$service_type->service_id = $request->service_id;
    	$service_type->type_name = $request->type_name;
    	$service_type->type_price = $request->type_price;
    	$service_type->unit = $request->unit;
    	$service_type->save();
    	return redirect('admin/service-type')->with('success', 'Bạn đã thêm thành công');
    }

    public function getEditServiceType($id)
    {
    	$data['service_type'] = ServiceType::find($id);
        $service['services'] = Service::all();
    	return view('admin.editServiceType', $data, $service);
    }

    public function postEditServiceType(Request $request,$id)
    {
    	$service_type= new ServiceType;

        $arr['service_id']=$request->service_id;
        $arr['type_name']=$request->type_name;
        $arr['type_price']=$request->type_price;
        $arr['unit']=$request->unit;
        
        $service_type::where('type_id',$id)->update($arr);

    	return redirect('admin/service-type')->with('success', 'Bạn đã sửa thành công');
    }

    public function getDeleteServiceType($id)
    {
    	$service_type = ServiceType::find($id);
    	$service_type->delete();

    	return back()->with('success', 'Bạn đã xóa thành công');
    }

}
