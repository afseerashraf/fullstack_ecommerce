
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
       

       
            <section class="section_1" ><!---laptops-->
            

                <div class="row justify-content-center" id="laptops">

                    <div class="col-3 align-items-start">
                <div class="card" style="width: 18rem;">
                <img src="{{ asset('users/images/laptop1.jpg') }}" class="card-img-top" alt="...">
                    <hr>
                    <div class="card-body">
                      <h5 class="card-title">Dell</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <h5>Rs:  32000</h5>
                      <a href="#" class="btn btn-light">Buy</a>
                      <a href="#" class="btn btn-light">Add to cart</a>

                    </div>
                  </div>
                  
             </div>

            <div class="col-3 align-items-centere">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('users/images/laptop1.jpg') }}" class="card-img-top" alt="...">
                    <hr>
                    <div class="card-body">
                      <h5 class="card-title">Lenovo</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <h5>Rs: 110000</h5>
                      <a href="#" class="btn btn-light">Buy</a>
                      <a href="#" class="btn btn-light">Add to cart</a>

                    </div>
                  </div>
             </div>


             <div class="col-3 align-items-end">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('users/images/laptop1.jpg') }}" class="card-img-top" alt="...">
                    <hr>
                    <div class="card-body">
                      <h5 class="card-title">Thoshiba</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <h5>Rs: 120000</h5>
                      <a href="#" class="btn btn-light">Buy</a>
                      <a href="#" class="btn btn-light">Add to cart</a>

                    </div>
                  </div>
             </div>
             </div>
           
          

             <!--Second row----------------------mobiles------->
             <div class="second_row" id="mobile">
             <div class="row justify-content-center">
                <div class="col-3 align-items-start">
            <div class="card" style="width: 18rem;">
                <img src=" {{ asset('users/images/mobile.jpg') }}" class="card-img-top" alt="...">
                <hr>
                <div class="card-body">
                  <h5 class="card-title">SAMSUNG</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <h5>Rs: 50000</h5>
                  <a href="#" class="btn btn-light">Buy</a>
                  <a href="#" class="btn btn-light">Add to cart</a>

                </div>
              </div>
         </div>

         <div class="col-3 align-items-centere">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('users/images/mobile.jpg') }}" class="card-img-top" alt="...">
                <hr>
                <div class="card-body">
                  <h5 class="card-title">Apple</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <h5>Rs: 70000</h5>
                  <a href="#" class="btn btn-light">Buy</a>
                  <a href="#" class="btn btn-light">Add to cart</a>

                </div>
              </div>
         </div>


         <div class="col-3 align-items-end">
            <div class="card" style="width: 18rem;">
                <img src=" {{ asset('users/images/mobile.jpg') }}" class="card-img-top" alt="...">
                <hr>
                <div class="card-body">
                  <h5 class="card-title">NOTHING</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <h5>Rs: 30000</h5>
                  <a href="#" class="btn btn-light">Buy</a>
                  <a href="#" class="btn btn-light">Add to cart</a>

                </div>
              </div>
         </div>

         
         </div>
        </div>

        <!-----third row-------------vr--->

        <div class="third_row">
            <div class="row justify-content-center">
               <div class="col-3 align-items-start">
           <div class="card" style="width: 18rem;">
               <img src=" {{ asset('users/images/vr.jpg') }}" class="card-img-top" alt="...">
               <hr>
               <div class="card-body">
                 <h5 class="card-title">SAMSUNG</h5>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 <h5>Rs: 890000</h5>
                 <a href="#" class="btn btn-light">Buy</a>
                 <a href="#" class="btn btn-light">Add to cart</a>

               </div>
             </div>
        </div>

        <div class="col-3 align-items-centere">
           <div class="card" style="width: 18rem;">
               <img src="  {{ asset('users/images/vr.jpg') }}" class="card-img-top" alt="...">
               <hr>
               <div class="card-body">
                 <h5 class="card-title">APPLE</h5>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 <h5>Rs: 400000</h5>
                 <a href="#" class="btn btn-light">Buy</a>
                 <a href="#" class="btn btn-light">Add to cart</a>

               </div>
             </div>
        </div>


        <div class="col-3 align-items-end">
           <div class="card" style="width: 18rem;">
               <img src=" {{ asset('users/images/vr.jpg') }}" class="card-img-top" alt="...">
               <hr>
               <div class="card-body">
                 <h5 class="card-title">META</h5>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 <h5>Rs: 100000</h5>
                 <a href="#" class="btn btn-light">Buy</a>
                 <a href="#" class="btn btn-light">Add to cart</a>

               </div>
             </div>
        </div>

        
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
        
    






   