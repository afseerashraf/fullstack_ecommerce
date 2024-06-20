@extends('users.header')

@section('title') Cart @endsection

@section('content')

<div class="col-3 align-items-start">
          <div class="card" style="width: 18rem;">
              <input type="hidden" name="id" value="encrypt('$items->id')">
            <img src="{{ asset('images/' . $items->productImage) }}" class="card-img-top" alt="...">
            <hr>
            <div class="card-body">
              <h5 class="card-title">{{$items->productName}}</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <h5>Rs: {{$items->productPrice}}</h5>
              <a href="{{ route('ProductBuy', encrypt('$items->id')) }}" class="btn btn-light">Buy</a>
              <a href="#" class="btn btn-light">remove cart</a>

            </div>
          </div>
        </div>


@endsection