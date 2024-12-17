@extends('users.header')

@section('title') productupdate @endsection
@section('style')
<link rel="stylesheet" href="{{ asset('product/edit.css') }}">
@endsection

@section('content')

<div class="container mt-5">
  <h2 class="mb-4">Update Product</h2>

  <!-- Insert Product Form -->
  <div class="card mb-4">
    <div class="card-header">
      Insert Product
    </div>
    <div class="card-body">
      <form action=" {{ route('product.updated') }} " method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name='product_id' value="{{encrypt($product->id)}}">
        <div class="form-group">
          <label for="productName">Product Name:</label>
          <input type="text" class="form-control" name="productName" value="{{$product->productName}}" required>
        </div>
        <div class="form-group">
          <label for="productPrice">Product Price:</label>
          <input type="number" class="form-control" name="productPrice" value="{{$product->productPrice}}" required>
        </div>
        <div class="form-group">
          <label for="productCategory">Product Category:</label>
          <select class="form-control" name="productCategory" value="{{$product->productCategory}}" required>
            <option value="">Select Category</option>
            <option value="Laptop">Laptop</option>
            <option value="Mobile">Mobile</option>
            <option value="Other">Other</option>
            <!-- Add more options as needed -->
          </select>
        </div>
        <div class="form-group">
          <label for="productImage">Product Image:</label>
          <input type="file" class="form-control-file" name="productImage" accept="image/*" value="{{$product->productImage}}" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>



</div>
@endsection