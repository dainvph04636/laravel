<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\ClassRoom;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{


    public function index()
    {
    	$admin = Admin::find(1);
    	//lay ra admin kem theo classroom
    	$admin = $admin->load('classRoom');
    	// dd($admin);
    	// $class = $admin->classRoom;
    	// $class = $admin->classRoom() -> get();
    	// dd($admin);
       	

    }

    public function indexClass()
    {
       	$class = ClassRoom::find(5);
    	$admins = $class->admins->toArray();

    	$class = $class -> load('admins');
    	dd($admins);
    }

    public function logout()
    {
    	Auth::logout();

    	return redirect()->route('admins.getLogin');
    }

    public function getLogin()
    {	
    	if (Auth::check()) {
    		return redirect()->route('classes.list');
    	}
        return view('admin.login');
    }
    public function postLogin(Request $request)
    {

    	$this->validate($request, [
    		'email' => 'required|email|exists:admins|min:6',
    		'password' => 'required|min:6|max:32',
    	]);
    	// 1.check validate va lay du lieu gom email va pass
    	$data = $request->only(['email', 'password']);
    	//2. Kiem tra 
    	$checkLogin = Auth::attempt($data);
    	//3. Kiem tra neu tra ve true la dang nhap thanh cong
    	if ($checkLogin) {
    		return redirect()->route('classes.list');
    	}else{
    		return redirect()->route('admins.getLogin');
    	}
    }

    public function getRegister()
    {
    	return view('admin.register');
    }
}
