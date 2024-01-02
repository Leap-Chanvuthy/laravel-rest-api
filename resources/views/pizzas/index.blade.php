@extends('layouts.app')

@section('content')
<div class="wrapper pizza-index">
  <h1>Pizza Orders</h1>
  @foreach($pizzas as $pizza)
    <a href="/pizzas/{{$pizza -> id}}">
      <div class="pizza-item">
        <img src="/images/pizza.png" alt="pizza icon">
        <h4><a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }}</a></h4>
      </div>
    </a>
  @endforeach

</div>

@endsection