@extends('users.header')
@section('title') ecart @endsection
@section('style')
<link rel="stylesheet" href=" {{ asset('users/style.css') }} ">
@section('content')
<div class="conitiner-fluid">
  <header>
    <h1>Shopping</h1>
    <nav>
      <ul>
        <li> <a href="#">Home</a> </li>
        <li> <a href="#contact">Contact</a></li>
      </ul>

      <select id="product-select">
        <option value="" selected disabled hidden>Categories</option>
        <option value="mobile"><a href="#mobile">Mobile</a> </option>
        <option value="laptop"><a href="#laptops">Laptops</a></option>
      </select>
    </nav>
    <hr>
  </header>

  <section class="section_1"><!---laptops-->


    <div class="row justify-content-center" id="laptops">
      @foreach($laptops as $laptop)
      
      <div class="col-3 align-items-start">

        <div class="card" style="width: 18rem;">
          <img src="{{ asset('images/' . $laptop->productImage) }}" class="card-img-top" alt="...">
          <hr>
          <div class="card-body">
            <h5 class="card-title">{{$laptop->productName}}</h5>
            <h5>Rs:: {{$laptop->productPrice}}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-light">Buy</a>
            <a href="{{route('addtoCart', encrypt($laptop->id))}}" class="btn btn-light">Add to cart</a>
          </div>
        </div>
      </div>
      @endforeach


    </div>

    <!--Second row----------------------mobiles------->
    <div class="second_row">
      <div class="row justify-content-center" id="mobile">
        @foreach($mobiles as $mobile)
        <div class="col-3 align-items-start">
          <div class="card" style="width: 18rem;">
            <img src="{{ asset('/images/' . $mobile->productImage) }}" class="card-img-top" alt="...">
            <hr>
            <div class="card-body">
              <h5 class="card-title">{{$mobile->productName}}</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <h5>Rs: {{$mobile->productPrice}}</h5>
              <a href="#" class="btn btn-light">Buy</a>
              <a href="{{route('addtoCart', encrypt($mobile->id))}}" class="btn btn-light">Add to cart</a>

            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <!-----third row-------------vr--->

    <div class="third_row">
      <div class="row justify-content-center">
        @foreach($vr as $vr)
        <div class="col-3 align-items-start">
          <div class="card" style="width: 18rem;">
            <img src="{{ asset('images/' . $vr->productImage) }}" class="card-img-top" alt="...">
            <hr>
            <div class="card-body">
              <h5 class="card-title">{{$vr->productName}}</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <h5>Rs: {{$vr->productPrice}}</h5>
              <a href="#" class="btn btn-light">Buy</a>
              <a href="{{route('addtoCart', encrypt($vr->id))}}" class="btn btn-light">Add to cart</a>

            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>


  </section>



  <footer>
    <hr>
    <div class="row">
      <div class="col-4 align-items-start">
        <h3>INFORMATION</h3>
        <ul>
          <li><a href="#"></a>Pricing</li>
          <li><a href="#"></a>Abount us</li>
          <li><a href="#"></a>Jobs</li>
          <li><a href="#"></a>Sell your content</li>
        </ul>
      </div>

      <div class="col-4 align-items-centere">
        <h3>SUPPORT</h3>
        <ul>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">shipping</a></li>
          <li><a href="#">returns</a></li>
          <li><a href="#">order status</a></li>
          <li><a href="#">payment options</a></li>
        </ul>
      </div>
      <div class="img col-4 align-items-end" id="contact">
        <h3>Follow us</h3>
        <ul>
          <li><a href="#"><img src="{{ asset('users/images/instagrmme.jpg') }}" alt="instagramm"></a></li>
          <li><a href="#"><img src=" {{ asset('users/images/X.jpg') }}" alt="X"></a></li>
        </ul>
      </div>
    </div>

  </footer>


</div>

@endsection