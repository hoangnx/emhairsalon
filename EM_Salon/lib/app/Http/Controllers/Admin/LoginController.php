<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\User;

class LoginController extends Controller
{
    public function getLogin()
    {
    	return view('admin.login');
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
        	//$user = User::where('email', $request->email)->get();
        	return redirect('admin/home');
           	//->with('user_name', $user->name );
        	//dd('Thành công');
        }
        else {
        	return back()->with('error','Tài khoản hoặc mật khẩu không đúng');
        }
    }

    public function getLogout()
    {
        Auth::logout();
        
        return redirect('/login')->with('success','Bạn đã đăng xuất');
    	
    }

}
