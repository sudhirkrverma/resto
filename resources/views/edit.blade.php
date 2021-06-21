@extends('layout')
@section('content')
<div class="container mt-4">
    <h2 class="text-info text-center">Edit Your Restaurant details</h2>
 
    
    <form action="/updateData" method="post">
      

        @csrf
        @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Please fix the following errors
                    </div>
                @endif
            <input type="hidden" name="id" value="{{$data->id}}">   
  <div class="form-group ">
      <label for="email">Email</label>
      <input type="text" class="form-control" name="email" id="email"  value="{{$data->email}}" placeholder="Enter your email" />
  @error('email')
  <div class="text-danger">{{ $message }}</div>
                    @enderror
  </div>
  <div class="form-group">
    <label for="name"> Name</label>
    <input type="text" class="form-control" name="name" id="name" value="{{$data->name}}" placeholder="Enter your Restautant Name" />
@error('name')
<div class="text-danger">{{ $message }}</div>
                    @enderror
</div>
<div class="form-group">
    <label for="address"> Address</label>
    <input type="text" class="form-control" name="address" id="address" value="{{$data->address}}" placeholder="Enter your Restaurant Address" />
@error('address')
<div class="text-danger">{{ $message }}</div>
                    @enderror
</div>
<button type="submit" class="btn btn-primary text-light mt-2" style="margin-left: auto; margin-right:auto; width:  100%;">Submit</button>


    </form>

</div>
@endsection