@extends('layout')
@section('content')
<div class="container mt-4">
    <h2 class="text-info text-center">Add Your Restaurant</h2>
    <form action="/add" method="post">
        @csrf
        @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Please fix the following errors
                    </div>
                @endif

  <div class="form-group ">
      <label for="email">Email</label>
      <input type="text" class="form-control" name="email" id="email" placeholder="Enter your email" />
  @error('email')
  <div class="text-danger">{{ $message }}</div>
                    @enderror
  </div>
  <div class="form-group">
    <label for="name"> Name</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Enter your Restautant Name" />
@error('name')
<div class="text-danger">{{ $message }}</div>
                    @enderror
</div>
<div class="form-group">
    <label for="address"> Address</label>
    <input type="text" class="form-control" name="address" id="address" placeholder="Enter your Restaurant Address" />
@error('address')
<div class="text-danger">{{ $message }}</div>
                    @enderror
</div>
<button type="submit" class="btn btn-primary text-light mt-2" style="margin-left: auto; margin-right:auto; width:  100%;">Submit</button>

    </form>

</div>
@endsection