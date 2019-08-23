
@extends('layout')

@section('title', 'Climbers')

@section('main')

    <h1>Climbing daily</h1>
    <p>This is the climbing daliy toplist</p>
    @foreach ($climbers as $climber)
      <h2>{{ $climber->name }}</h2>
      <p>age: {{ $climber->age }}</p>
      <p>country: {{ $climber->country }}</p>
      <h4>routes</h4>
      <ul>
      @foreach ( $climber->routes as $route)
          <li>{{ $route->name }}</li>
      @endforeach
      </ul>
    @endforeach

@endsection
