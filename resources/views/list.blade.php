@extends('layout')
@section('content')
<div class="container">
    @if(Session::has('status'))
    <p class="text-danger">{{ Session::get('status') }}</p>
    
    @endif
    @foreach($lists as $list)
    <div class="card m-4" style="width: 25;">

        <div class="card-header ">
            {{$list->name}}
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">{{$list->email}}</li>
                    <li class="list-group-item">{{$list->address}}</li>
                </ul>
                <form action="/delete/{{$list->id}}" method="get">
                @csrf
                <input type="hidden" name="id" value="{{$list->id}}">
       <button type="submit" class="btn btn-sm btn-outline-danger mt-2">Delete</button>
       <a href="edit/{{$list->id}}" class="btn btn-sm btn-outline-info mt-2">Edit</a>
       </form> 
        </div>
        </div>


        
    </div>
    @endforeach

</div>


@endsection