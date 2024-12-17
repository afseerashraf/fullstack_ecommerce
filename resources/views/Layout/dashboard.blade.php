<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('sidebar/sidebar.css') }}">
    <script src="{{ asset('sidebar/sidebar.js') }}"></script>

    <title>@yield('title')</title>
    @yield('style')

</head>

<body>

    <div class="continer">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <h2> Admin Panel </h2>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- ////////////////// -->
    <!-- The sidebar -->
    <div class="row">
        <div class="col-md-3">
            <div class="sidebar">
                <a href="">Home</a>

                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Products</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('product.createproduct') }}">Create Product</a></li>
                        <li><a class="dropdown-item" href="{{ route('product.list') }}">List</a></li>
                        <li><a class="dropdown-item" href="{{ route('product.mobiles') }}">Mobiles</a></li>
                        <li><a class="dropdown-item" href="{{ route('product.laptops') }}">Lptops</a></li>
                        <li><a class="dropdown-item" href="">Vr's</a></li>



                    </ul>
                </div>
              
                <a href="">#</a>


                <a href="#">Payment</a>


            </div>


        </div>
        <div class="col-md-9">



            @yield('content')

        </div>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>