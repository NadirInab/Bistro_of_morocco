@extends('layouts.app')
@section('content')
<h1>Meals</h1>

<div class="container">
    <ul class="list-group">
@foreach ($meals as $meal)
            <li class="list-group-item">
                {{$meal['strMeal']}}
            </li>
@endforeach
</ul>
</div>
@endsection
