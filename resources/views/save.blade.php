@extends('layouts.app')

@section('content')
    <div class="form container w-50 fw-bold">
      
        <h1 class="text-center text-secondary border-bottom p-2"> <i class="fa-sharp fa-regular fa-user-chef"></i>Add Meal </h1>
        <form action="store" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="form-group p-1">
              <label>Name</label>
              <input name="title" type="text" class="form-control" placeholder="Enter Meal's Name">
              <span class="text-danger border-bottom" > @error('title'){{$message}} @enderror</span>
            </div>
            <div class="form-group p-1">
              <label>Price</label>
              <input name="price" type="number" class="form-control" placeholder="Add price">
              <span class="text-danger border-bottom"> @error('price'){{$message}} @enderror</span>
            </div>
            <div class="form-group p-1">
              <label>Description</label>
              <input name="description" type="text" class="form-control" placeholder="Add Description">
              <span class="text-danger border-bottom"> @error('description'){{$message}} @enderror</span>

            </div>
            <div class="form-group p-1">
              <label>Image</label>
              <input name="image" type="file" class="form-control" placeholder="Upload Image">
              <span class="text-danger border-bottom"> @error('image'){{$message}} @enderror</span>
            </div>
            <button type="submit" class="btn btn-success p-2 m-auto d-block mt-2 w-25"><small class="fw-bold "> + </small>Add</button>
          </form>
    </div>
@endsection