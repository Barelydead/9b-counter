<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Climbing daily</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  </head>

  <body>
    <h1>Climbing daily</h1>
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


  </body>

</html>
