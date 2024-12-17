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
      <div class="serch">
      <form action="" method="get">
        <input type="search" name="items"><button>Search</button>
      </form>
      </div>
    </nav>
    <hr>
  </header>

  <section class="section_1"><!---laptops-->


    <div class="row justify-content-center" id="laptops">
      @foreach($laptops as $laptop)
      
      <div class="col-3 align-items-start">

        <div class="card" style="width: 18rem;">
        <img src="{{ asset('storage/' . $laptop->productImage) }}" alt="Product Image">
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
          <img src="{{ asset('storage/' . $mobile->productImage) }}" alt="Product Image">
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
          <img src="{{ asset('storage/' . $vr->productImage) }}" alt="Product Image">
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
  <div class="footer-content">
    <div class="footer-section">
      <h3>INFORMATION</h3>
      <ul>
        <li><a href="#">Pricing</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Jobs</a></li>
        <li><a href="#">Sell Your Content</a></li>
      </ul>
    </div>

    <div class="footer-section">
      <h3>SUPPORT</h3>
      <ul>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Shipping</a></li>
        <li><a href="#">Returns</a></li>
        <li><a href="#">Order Status</a></li>
        <li><a href="#">Payment Options</a></li>
      </ul>
    </div>

    <div class="footer-section">
      <h3>Follow Us</h3>
      <ul class="social-icons">
        <li><a href="#"><img src="{{ asset('users/images/instagrmme.jpg') }}" alt="Instagram"></a></li>
        <li><a href="#"><img src="{{ asset('users/images/X.jpg') }}" alt="Twitter"></a></li>
      </ul>
    </div>
  </div>
</footer>



</div>

@endsection