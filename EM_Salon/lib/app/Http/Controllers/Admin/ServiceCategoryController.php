<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;

class ServiceCategoryController extends Controller
{
    public function getServiceCategory()
    {
    	$service_category['service_categories'] = ServiceCategory::paginate(5);
    	return view('admin.service-category', $service_category);
    }

    public function getAddServiceCategory()
    {
    	return view('admin.addServiceCategory');
    }

    public function postAddServiceCategory(Request $request)
    {
    	//code to add New Ser Cate
    	//validate input data when submit form
    	$request->validate([
    		//rules
    		[
    			'cate_name'=>'required|max:255',
    		],
    		//messages
    		[
    			'cate_name.required'=>'Tên nhóm danh mục không được để trống',
    			'cate_name.max'=>'Độ dài tối đa 255 kí tự',
    		]
    	]);
    	$prefixName = bcrypt('123');
        $oldFileName = $request->avatar->getClientOriginalName();
        $filename = $prefixName.$oldFileName;

    	$cate = new ServiceCategory;
    	$cate->cate_name = $request->cate_name;
    	$cate->status = $request->status;
    	$cate->cate_image = $filename;
    	$cate->save(); //lưu vào db
    	$request->avatar->storeAs('avatar',$filename);
    	return redirect('admin/service-category');
    }

    public function getEditServiceCategory($id)
    {
    	$data['cate']=ServiceCategory::find($id);
    	return view('admin.editServiceCategory', $data);
    }

    public function postEditServiceCategory(Request $request,$id)
    {
    	$cate= new ServiceCategory;

        $arr['cate_name']=$request->cate_name;
        $arr['status']=$request->status;

        if ($request->hasFile('avatar')) {
            $newFileName = bcrypt('123');
            $fileExtendtion=$request->avatar->getClientOriginalName();
            $arr['cate_image']=$newFileName.$fileExtendtion;
            $request->avatar->storeAs('avatar',$newFileName.$fileExtendtion);
        }
        
        $cate::where('cate_id',$id)->update($arr);

    	return redirect('admin/service-category');
    }

    public function getDeleteServiceCategory($id)
    {
    	$cate = ServiceCategory::find($id);
    	$cate->delete();

    	return back()->with('success', 'Bạn đã xóa thành công');
    }

}
