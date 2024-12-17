@extends('layout.dashboard')

@section('title') Create Product @endsection
@section('style')
<link rel="stylesheet" href="{{ asset('admin/dashboard.css') }}">
@endsection

@section('content')

<form action=" {{ route('product.addproduct') }} " method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="productName">Product Name:</label>
          <input type="text" class="form-control" name="productName" required>
        </div>
        <div class="form-group">
          <label for="productPrice">Product Price:</label>
          <input type="number" class="form-control" name="productPrice" required>
        </div>
        <div class="form-group">
          <label for="productCategory">Product Category:</label>
          <select class="form-control" name="productCategory" required>
            <option value="">Select Category</option>
            <option value="Laptop">Laptop</option>
            <option value="Mobile">Mobile</option>
            <option value="vr">vr</option>
            <!-- Add more options as needed -->
          </select>
        </div>
        <div class="form-group">
          <label for="productImage">Product Image:</label>
          <input type="file" class="form-control-file" name="productImage" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      @endsection
