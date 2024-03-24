<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;




class UserController extends Controller
{

    public function login(){
        return view('users.login');
    }

    public function userlogin(){
         $user = ['email' => request('email'), 'password' => request('password')];

         if(auth()->attempt($user)){
          return redirect()->route('home');

         }else{
          return redirect()->route('login')->with('message', 'Invalid user');
         }

    
    }


    public function home(){
        return view('users.home');
    }

    public function userProduct(){
        $laptops = DB::table('products')->where('productCategory', '=', 'laptop')->get();
        $mobiles = DB::table('products')->where('productCategory', '=', 'mobile')->get();
        $vr = DB::table('products')->where('productCategory', '=', 'vr')->get();
        
        return view('users.home', compact('laptops', 'mobiles', 'vr'));
    }
}
