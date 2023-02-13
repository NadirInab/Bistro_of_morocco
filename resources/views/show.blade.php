@extends('layouts.app')
@section('content')
<div>
<div class="container text-dark">
<div class="container d-flex justify-content-around text-center" style="flex-wrap:wrap"> 
    {{-- @foreach ($meals as $meal) --}}
    <div class="card card-body bg-light center-block text-left rounded mx-3 bg-muted m-3 text-dark" style="min-width:26%;max-width:30%" >
        <div class="w-50 m-auto text-center mb-3">
            <img class="shad m-auto rounded-50" src="{{asset('images/'.$meal->image).'.jfif'}}"  style="width:100px; border-radius:50px"/>
        </div>
        <h5 class="border-bottom p-1 fw-bold">{{$meal->title}}</h5>
        <small class="border-bottom fw-bold p-1"> {{$meal->price}} <i class="fa-solid fa-money-bill-1-wave"></i></small>
        <p class="border-bottom fw-bold p-1"> {{$meal->description}}</p>
    <a class="btn btn-light border-2 text-secondary fw-bold w-25" href="/dashboard"> <i class="fa-solid fa-backward"></i> back</a>

        {{-- <div class="d-flex justify-content-around p-2 mt-2">
            <a class="w-25 text-decoration-none text-success fw-bold btn btn-muted" href="/meals/{{$meal->id}}"> <i class="fa-solid fa-eye"></i></a>
            <a class="w-25 text-decoration-none text-primary fw-bold btn btn-muted" href="/edit/{{$meal->id}}"> 
            <i class="fa-regular fa-pen-to-square"></i>
            </a>
            <a class="w-25 text-decoration-none text-danger fw-bold btn btn-muted" href="/delete/{{$meal->id}}">
                <i class="fa-regular fa-trash-can"></i>
            </a>
        </div> --}}
    </div>
    {{-- @endforeach --}}
{{-- </div>
    <span class="container d-flex align-items-center justify-content-center">{{$meal->links('pagination::bootstrap-4')}}</span>
</div> --}}
@endsection