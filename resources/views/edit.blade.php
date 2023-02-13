@extends('layouts.app')

@section('content')
    <div class="form container w-50 fw-bold">
      
        <h2 class="text-center text-secondary border-bottom p-2"> <i class="fa-solid fa-pen-to-square"></i> Edit Meal </h2>
        <form action="update/{{$meal->id}}" method="POST">
            @csrf
            <div class="form-group p-1">
              <label>Name</label>
              <input name="title" type="text" value="{{$meal->title}}" class="form-control" >
              <span class="text-danger border-bottom" > @error('name'){{$message}} @enderror</span>
            </div>
            <div class="form-group p-1">
              <label>Price</label>
              <input name="price" type="number" value="{{$meal->price}}"  class="form-control" >
              <span class="text-danger border-bottom"> @error('role'){{$message}} @enderror</span>

            </div>
            <div class="form-group p-1">
              <label>Description</label>
              <input name="description" type="text" value="{{$meal->description}}" class="form-control">
              <span class="text-danger border-bottom"> @error('city'){{$message}} @enderror</span>

            </div>
            <div class="form-group p-1">
              <label>Image</label>
              <input name="image" type="text" value="{{$meal->image}}" class="form-control" >

            </div>
            <button type="submit" class="btn btn-success p-2 m-auto d-block mt-2 w-25">Edit</button>
          </form>
    </div>
@endsection