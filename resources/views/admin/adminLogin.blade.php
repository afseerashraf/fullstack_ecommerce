@extends('users.header')
@section('title') adminlogin @endsection
@section('style')
<link rel="stylesheet" href="{{ asset('admin/style.css') }}">
@endsection

@section('content')


<div class="continer">
   <div class="col-md-9">
      <div class="box">


         <form action=" {{ route('adminLogin') }} " method="post" class="frm">

            <h3>Admin Login</h3>


            @csrf

            @if(session()->has('message'))
            <span class="text-danger"> {{ session()->get('message') }} </span>
            @endif <br>
            <label for="email">Email</label><br>
            <input type="email" name="email"><br>

            <label for="password">Password</label><br>
            <input type="password" name="password">

            <button class="btn">Login</button>

         </form>
      </div>
   </div>



</div>

@endsection