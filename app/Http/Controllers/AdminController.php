<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Crypt;


class AdminController extends Controller
{


    public function registered(Request $request){
        $request->validate([
            'name' => ['required', 'regex:/^[a-zA-Z0-9\s,.\n-]+$/'],
            'email' => ['required', 'email'],
            'password' => ['required',password::min(8)->letters()->numbers()],

        ]);

        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = bcrypt($request->password);
        $admin->save();
        return redirect()->route('admin.viewLogin');
    }


    public function viewlogin(){
        return view('admin.adminLogin');
    }



    public function adminlogin(Request $request){ //the function has perform the admin is login
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required',password::min(6)->letters()->numbers()]
        ]);
        $credentials = ['email' => request('email'), 'password' => request('password')];

        if(auth()->guard('admin')->attempt($credentials)){
            $admin = auth()->guard('admin')->user();
            return redirect()->route('admin.profile',['admin' => $admin]);
        }
       else{
            return redirect()->route('admin.viewLogin')->with('message', 'Invalid admin');
        }
    }

    public function logout($id){
        $admin = Admin::find(Crypt::decrypt($id));
        return $admin->name;
    }

    public function profile(){
        return view('admin.profile');
    }
}
