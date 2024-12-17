<?php

namespace App\Http\Controllers;

use App\Mail\userCreateMail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Jobs\CrateProductMail;


class ProductController extends Controller
{

    public function createproduct(){
        return view('product.create');
    }
    public function addproduct(Request $request){  //admin can only add the product to the database
        $product = new Product();

        $product->productName = request('productName');
        $product->productPrice = request('productPrice');
        $product->productCategory = request('productCategory');
        
        if ($request->hasFile('productImage')) {
            $image = $request->file('productImage');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('public/images/products', $imageName);

            // Save the image path to the database
            $product->productImage = $product->productName . $imageName;
        }

        $product->save();
        CrateProductMail::dispatch($product);

        return redirect()->route('product.list')->with('success', 'Product added successfully.');


    }


    public function products(){
        $products = Product::latest()->paginate(5);

        return view('product.productList', compact('products'));
    }

    public function productupdate($id){ //product update view page
        $product = Crypt::decrypt($id);
        $product = Product::find($product);
        

       

        return view('product.edit', compact('product'));
    }

    public function updated(Request $request){ // this function save the updated items in the database
        $product = Crypt::decrypt(request('product_id'));
        $product = Product::find($product);

        $product->productName = $request->input('productName');
        $product->productPrice = $request->input('productPrice');
        $product->productCategory = $request->input('productCategory');
        if ($request->hasFile('productImage')) {
            // Get the uploaded file
            $image = $request->file('productImage');

            // Set a unique name for the image
            $imageName = time() . '_' . $image->getClientOriginalName();

            // Move the uploaded file to the storage directory
            $image->move(public_path('images'), $imageName);

            // Save the image path to the database
            $product->productImage = 'images/' . $imageName;
        }

        $product->save();

        return redirect()->route('product.list')->with('update', 'succesfully updated');
    }
    public function productdelete($id){
        $productId = Crypt::decrypt($id);
        $product = Product::find($productId);

        $product->delete();

        return redirect()->route('product.list')->with('delete', 'succsefully deleted');

    }
    public function ProductBuy(Request $request, $id){
        $itmID = Crypt::decrypt($id);
        $item = Product::find($itmID);

        return $item;

        
    }

    public function mobiles(){
        $mobiles = Product::where('productCategory', '=', 'mobile')->paginate(5);
        return view('product.mobiles', compact('mobiles'));
    }

    public function laptops(){
        $laptops = Product::where('productCategory', '=', 'laptop')->paginate(5);
        return view('product.laptops', compact('laptops'));
    }


   
}
