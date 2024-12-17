@extends('layout.dashboard')

@section('title') products @endsection
@section('style')
<link rel="stylesheet" href=" {{ asset('product/style.css') }} ">

@endsection

@section('content')

<div class="container mt-5">

  @if(session()->has('success')) <p class='text-primary'> {{ session()->get('success') }} </p> @endif
  @if(session()->has('update')) <p> {{session()->get('update')}} </p> @endif
  @if(session()->has('delete')) <p> {{session()->get('delete')}} </p> @endif

  <h2>Mobiles</h2>
  <a href="{{ route('product.createproduct') }}" class="btn btn-outline-success">add new</a>
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
      @foreach($mobiles as $mobile)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $mobile->productName }}</td>
        <td>{{ $mobile->productPrice }}</td>
        <td>{{ $mobile->productCategory }}</td>
        <td>
          @if($mobile->productImage)
          <img src="{{ asset($mobile->productImage) }}" alt="{{ $mobile->productName }}" style="max-width: 100px;">
          @else
          No Image
          @endif
        </td>

        <td> <button class="btn btn-outline-success"> <a href=" {{route('product.update', encrypt($mobile->id))}} ">Update</a> </button> </td>
        <td> <button class="btn btn-outline-success"> <a href=" {{route('product.delete', encrypt($mobile->id))}} ">Delete</a> </button> </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <!-- Pagination links -->
  {{ $mobiles->links() }}
</div>


@endsection