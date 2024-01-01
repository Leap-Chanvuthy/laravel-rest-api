@extends('layouts.layout')

@section('content')
    <div class="wrapper pizza-details">
       <h1>Order by {{$pizza -> name}}</h1>
       <p>Type - {{$pizza -> type}}</p>
       <p>Base - {{$pizza -> base}}</p>
    </div>
    <a href="/pizzas" class="back"><- Back to all pizzas</a>
@endsection