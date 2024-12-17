
@extends('Layout.layout')
@section('title')Admin Login @endsection
<style>
   .continer{
      width:300px;
      height:300px;
      margin-left:200px;
      margin-top:100px;
   }
</style>
@section('content')
<div class="continer">

<form action=" {{ route('admin.Login') }} " method="post" class="form-control">


            <h3>Admin Login</h3>
<a href="{{ route('admin.register') }}">Do not have Account</a>

            @csrf

            @if(session()->has('message'))
            <span class="text-danger"> {{ session()->get('message') }} </span>
            @endif <br>
            <label for="email">Email</label><br>
            <input class="form-control" type="email" name="email" placeholder="Email"><br>
            @error('email') <div class="alert alert-danger">{{ $message }}</div> @enderror
            <label for="password">Password</label><br>
            <input class="form-control" type="password" name="password" placeholder="password"><br>
            @error('password') <div class="alert alert-danger">{{ $message }}</div> @enderror
            <button class="btn btn-outline-primary">Login</button>

         </form>
         
</div>
@endsection