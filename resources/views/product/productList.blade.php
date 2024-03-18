@extends('users.header')

@section('title') products @endsection
@section('style')
<link rel="stylesheet" href=" {{ asset('product/style.css') }} ">

@endsection

@section('content')

<div class="container mt-5">

@if(session()->has('success')) <p class='text-primary'> {{ session()->get('success') }} </p> @endif
@if(session()->has('update')) <p> {{session()->get('update')}} </p> @endif
@if(session()->has('delete')) <p> {{session()->get('delete')}} </p> @endif

    <h2>Product List</h2>
    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>Name</th>
          <th>Price</th>
          <th>Category</th>
          <th>Image</th>
          <th>Actions</th>

        </tr>
      </thead>
      <tbody>
        <!-- Loop through products here -->
        @foreach($products as $product)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $product->productName }}</td>
          <td>{{ $product->productPrice }}</td>
          <td>{{ $product->productCategory }}</td>
          <td>
            @if($product->productImage)
            <img src="{{ asset($product->productImage) }}" alt="{{ $product->productName }}" style="max-width: 100px;">
            @else
            No Image
            @endif
          </td>

          <td> <button class="btn btn-outline-success"> <a href=" {{route('update', encrypt($product->id))}} ">Update</a> </button> </td>
          <td> <button class="btn btn-outline-danger"> <a href=" {{route('delete', encrypt($product->id))}} "></a>Delete </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <!-- Pagination links -->
    {{ $products->links() }}
  </div>


@endsection