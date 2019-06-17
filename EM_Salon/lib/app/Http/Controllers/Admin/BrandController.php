<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Http\Requests\AddBrand;

class BrandController extends Controller
{
    public function getBrand()
    {
    	$brand['brands'] = Brand::paginate(5);
    	return view('admin.brand', $brand);
    }

    public function getAddBrand()
    {
    	return view('admin.addBrand');
    }

    public function postAddBrand(AddBrand $request)
    {
    	$brand= new brand;
    	$brand->brand_name=$request->brand_name;
    	$brand->brand_address=$request->brand_address;
    	$brand->brand_email=$request->brand_email;
    	$brand->brand_phone=$request->brand_phone;
    	$brand->save(); //lưu vào db
    	return redirect('admin/brand');
    }

    public function getEditBrand($brand_id)
    {
    	$data['brand'] = Brand::find($brand_id);
    	return view('admin.editBrand', $data);
    }

    public function postEditBrand(Request $request,$brand_id)
    {
    	$brand = Brand::find($brand_id);
    	$brand->brand_name=$request->brand_name;
    	$brand->brand_address=$request->brand_address;
    	$brand->brand_email=$request->brand_email;
    	$brand->brand_phone=$request->brand_phone;
    	$brand->save(); //lưu vào db
    	return redirect('admin/brand')->with('success', 'Bạn đã sửa thành công');
    }

    public function getDeleteBrand($brand_id)
    {
    	$brand = Brand::find($brand_id);
    	$brand->delete();
    	return back()->with('success', 'Bạn đã xóa thành công');
    }


}
