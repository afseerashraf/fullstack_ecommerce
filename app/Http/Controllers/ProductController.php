<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;




class ProductController extends Controller
{
    public function addproduct(Request $request){  //admin can only add the product to the database
        $product = new Product();

        $product->productName = request('productName');
        $product->productPrice = request('productPrice');
        $product->productCategory = request('productCategory');
        
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

        return redirect()->route('product.list')->with('success', 'Product added successfully.');


    }


    public function products(){
        $products = Product::latest()->paginate(10);

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
//////////////////////////////////////////
    public function productdelete($id){
        $productId = Crypt::decrypt($id);
        $product = Product::find($productId);

        $product->delete();

        return redirect()->route('product.list')->with('delete', 'succsefully deleted');

    }


   
}
