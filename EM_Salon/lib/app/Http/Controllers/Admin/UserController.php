<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\User;
use App\Models\Brand;
use App\Http\Requests\AddUser;

class UserController extends Controller
{
    public function getUser()
    {
    	//$user['users'] = DB::table('users')->paginate(2);

    	//paginate(n) để phân trang 
    	$user['users'] = User::paginate(5);
        $brand['brands'] = Brand::all();
    	return view('admin.user',$user, $brand);
    }

    public function addUser()
    {
    	return view('admin/addUser');
    }

    public function postUser(AddUser $request)
    {
        //$filename= $request->avatar->getClientOriginalName();
        $prefixName = bcrypt('123');
        $oldFileName = $request->avatar->getClientOriginalName();
        $filename = $prefixName.$oldFileName;

    	$user= new User;
    	$user->user_name=$request->user_name;
    	$user->password=bcrypt($request->password);
    	$user->email=$request->email;
    	$user->address=$request->address;
    	$user->phone=$request->phone;
    	$user->user_level=$request->user_level;
    	$user->brand_id=$request->brand_id;
    	$user->avatar=$filename;
    	$user->save(); //lưu vào db
        $request->avatar->storeAs('avatar',$filename);
    	return redirect('admin/user');
    }

    public function getEditUser($id)
    {
    	$data['user']=User::find($id);// trong models bắt theo id

    	return view('admin.editUser',$data);
    	
    }

    public function postEditUser(Request $request,$id)
    {
        $user= new User;

        $arr['user_name']=$request->user_name;
        $arr['email']=$request->email;
        $arr['address']=$request->address;
        $arr['phone']=$request->phone;
        $arr['user_level']=$request->user_level;
        $arr['brand_id']=$request->brand_id;

        if ($request->hasFile('img')) {
            $newFileName = bcrypt('123');
            $fileExtendtion=$request->img->getClientOriginalName();
            $arr['avatar']=$newFileName.$fileExtendtion;
            $request->img->storeAs('avatar',$newFileName.$fileExtendtion);
        }
        
        $user::where('id',$id)->update($arr);

    	return redirect('admin/user');
    }


    public function getDeleteUser($id)
    {
    	$user = User::find($id);
    	$user->delete();

    	return back()->with('success', 'Bạn đã xóa thành công');
    }

}
