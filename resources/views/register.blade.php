@extends('layout')
@section('content')
<div class="container mt-4">
    <h2 class="text-info text-center">Register Your Restaurant</h2>
    <form action="/registerData" method="post">
        @csrf
        @if ( session('error'))
      <div class="alert alert-danger">
        {{ session('error') }}
      </div>
    @endif
        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            Please fix the following errors
        </div>
        @endif
        <div class="form-group">
            <label for="name"> Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}" placeholder="Enter your Restautant Name" />
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group ">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email" value="{{old('email')}}" placeholder="Enter your email" />
            @error('email')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="address"> Password</label>
            <input type="password" class="form-control" name="password" value="{{old('password')}}" id="password"
                placeholder="Enter your Restaurant Address" />
            @error('password')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="address">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" value="{{old('password_confirmation')}}" id="password"
                placeholder="Enter your Restaurant Address" />
            @error('confirmPassword')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success text-light mt-2"
            style="margin-left: auto; margin-right:auto; width:  100%;">Register</button>

    </form>

</div>
@endsection