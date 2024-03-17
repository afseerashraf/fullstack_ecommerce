<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;



class ProductController extends Controller
{
    public function addproduct(Request $request){
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

    public function productdelete($id){
        $productId = Crypt::decrypt($id);
        $product = Product::find($productId);

        $product->delete();

        return redirect()->route('product.list');

    }
}
