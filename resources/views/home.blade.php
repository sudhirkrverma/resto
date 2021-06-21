@extends('layout')
@section('content')
<div class="container">
    @if ( session('error'))
      <div class="alert alert-danger">
        {{ session('error') }}
      </div>
    @endif
<h1 class="text-dark text-center mt-4">Welcome to the online Restaurant System</h1>
@endsection