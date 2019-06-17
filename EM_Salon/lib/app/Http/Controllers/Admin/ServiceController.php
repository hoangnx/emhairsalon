<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;

class ServiceController extends Controller
{
    public function getService(){
    	$service['services'] = Service::paginate(5);
        $service['service_cate'] = ServiceCategory::all();
    	return view('admin.service', $service);
    }

    public function getAddService()
    {
        $service_cate['service_cates'] = ServiceCategory::all();
    	return view('admin.addService', $service_cate );
    }

    public function postAddService(Request $request)
    {
    	//$request['name', 'descrtiption', 'duration', 'cate_id']
    	$request->validate(
    		[
    			'name'=>'required|max:255',
	    		'duration'=>'required|integer',
	    		'cate_id'=>'required|integer'
    		],
    		[
    			'name.required'=>'Tên dịch vụ không được để trống',
    			'name.max'=>'Tên dịch vụ cho nhập tối đa 255 kí tự',
    			'duration.required'=>'Thời gian thực hiện không được để trống',
    		]	
    	);
    	$service = new Service;
    	$service->name = $request->name;
    	$service->description = $request->description;
    	$service->duration = $request->duration;
    	$service->cate_id = $request->cate_id;
    	$service->status = $request->status;
    	$service->save();
    	return redirect('admin/service')->with('success', 'Bạn đã thêm thành công');
    }

    public function getEditService($id)
    {
    	$data['service'] = Service::find($id);
        $service_cate['service_cates'] = ServiceCategory::all();
    	return view('admin.editService', $data, $service_cate);
    }

    public function postEditService(Request $request,$id)
    {
    	$service= new Service;

        $arr['name']=$request->name;
        $arr['description']=$request->description;
        $arr['duration']=$request->duration;
        $arr['cate_id']=$request->cate_id;
        $arr['status']=$request->status;
        
        $service::where('id',$id)->update($arr);

    	return redirect('admin/service')->with('success', 'Bạn đã sửa thành công');
    }

    public function getDeleteService($id)
    {
    	$service = Service::find($id);
    	$service->delete();

    	return back()->with('success', 'Bạn đã xóa thành công');
    }
}
