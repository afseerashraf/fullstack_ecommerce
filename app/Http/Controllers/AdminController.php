<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;


class AdminController extends Controller
{

    public function viewlogin(){
        return view('admin.adminLogin');
    }
    public function adminlogin(){ //the function has perform the admin is login
        $admin = ['email' => request('email'), 'password' => request('password')];

        if(auth()->guard('admin')->attempt($admin)){
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('viewlogin')->with('message', 'Invalid admin');
        }
    }

    public function dashboard(){
        return view('admin.dashboard');
    }
}
