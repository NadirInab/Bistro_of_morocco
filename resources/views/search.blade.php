@extends('layouts.app')
@section('content')
<div>
 <div class="container border-3 text-center " >
        <a href="dashboard/addMeal" class="btn btn-success mx-4" style="float:right;"> <small class="fw-bold ">+</small> Add Meal</a>
    </div>
<div class="container text-dark">
    
    <div class="container text-center">
        <h2 class="text-secondary mx-4 border-bottom"><span class="text-info fw-bold">Our Meal</h2>
        <div class="input-group mx-4">
            <form action="search" method="GET" class="form-outline d-flex w-50 m-auto p-3">
                <input name="query" type="search" id="form1" class="form-control"  placeholder="Search for meal"/>
                <button type="submit" class="btn btn-primary mx-2">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </div>
<div class="container d-flex justify-content-around text-center" style="flex-wrap:wrap"> 
    @foreach ($meals as $meal)
    <div class="card card-body bg-light center-block text-left rounded mx-3 bg-muted m-3 text-dark" style="min-width:26%;max-width:30%" >
        <div class="w-50 m-auto text-center mb-3">
            <img class="shad m-auto" src="{{asset('images/'.$meal->image)}}"  style="width:100%;height:150; border-radius:10px"/>
        </div>
        <b class="border-bottom fw-bold text-danger p-1"> {{$meal->price}} <i class="fa-solid fa-money-bill-1-wave"></i></b>
        <h5 class="border-bottom text-secondary p-1 fw-bold">{{$meal->title}}</h5>
        <p class="border-bottom fw-bold p-1"> {{$meal->description}} Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis, expedita!</p>
        <div class="d-flex justify-content-around p-2 mt-2">
            <a class="w-25 text-decoration-none text-success fw-bold btn btn-muted" href="/meals/{{$meal->id}}"> <i class="fa-solid fa-eye"></i></a>
            <a class="w-25 text-decoration-none text-primary fw-bold btn btn-muted" href="/edit/{{$meal->id}}"> 
            <i class="fa-regular fa-pen-to-square"></i>
            </a>
            <a class="w-25 text-decoration-none text-danger fw-bold btn btn-muted" href="/delete/{{$meal->id}}">
                <i class="fa-regular fa-trash-can"></i>
            </a>
        </div>
    </div>
    @endforeach
{{-- </div>
    <span class="container d-flex align-items-center justify-content-center">{{$meal->links('pagination::bootstrap-4')}}</span>
</div> --}}
@endsection