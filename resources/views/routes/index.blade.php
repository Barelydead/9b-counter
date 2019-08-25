
@extends('layout')

@section('title', 'Climbers')

@section('main')

    <h1>Routes</h1>
    <p>This is the climbing daliy toplist</p>
    @foreach ($routes as $route)
      <h2>{{ $route->name }}</h2>
      <p>age: {{ $route->difficulty }}</p>
      <p>country: {{ $route->location }}</p>
      <h4>climbers</h4>
      <ul>
      @foreach ( $route->climbers as $climber)
          <li>{{ $climber->name }}</li>
      @endforeach
      </ul>
    @endforeach

@endsection
