@extends('layouts.app')

@section('content')
    <div class="wrapper pizza-details">
       <h1>Order by {{$pizza -> name}}</h1>
       <p>Type - {{$pizza -> type}}</p>
       <p>Base - {{$pizza -> base}}</p>
       <ul>
        @foreach ($pizza -> toppings as $topping)
            <li>{{$topping}}</li>
        @endforeach
       </ul>
       <form action="/pizzas/{{$pizza -> id}}" method="POST">
        @csrf
        @method('DELETE')
        <button>Complete Order</button>
       </form>
    </div>
    <a href="/pizzas" class="back"><- Back to all pizzas</a>
@endsection