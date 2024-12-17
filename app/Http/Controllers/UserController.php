<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Support\Facades\Crypt;





class UserController extends Controller
{

    public function login(){
        return view('users.login');
    }

    public function userlogin(){ //user login method
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

    public function userProduct(){  // user can read the product 
        $laptops = DB::table('products')->where('productCategory', '=', 'laptop')->take(4)->get();
        $mobiles = DB::table('products')->where('productCategory', '=', 'mobile')->take(4)->get();
        $vr = DB::table('products')->where('productCategory', '=', 'vr')->get();
        
        return view('users.home', compact('laptops', 'mobiles', 'vr'));
    }

    public function addtoCart($id){
        $product = Crypt::decrypt($id);

        
        $items = Product::find($product);

        return view('product.addtocart', compact('items'));

    }
}
