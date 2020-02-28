@extends('layouts.admin')

@section('title', 'Climbers')

@section('main')
  @include('components/intro', ['title' => $climber->name, 'preamble' => 'bio'])

  <div class="container">
    <div class="row">
      <div class="col-3">
        <div class="climber__stats">
          <h5 class="climber-card__routes-title">Info</h6>
          <ul>
            <li>Name: {{ $climber->name }}</li>
            <li>Age: {{ $climber->age }}</li>
            <li>9b acents: {{ $climber->nines() }}</li>
            <li>8c acents: {{ $climber->eights() }}</li>
            <li>Country: {{ $climber->country }}</li>
          </ul>
        </div>
      </div>
      <div class="col">
        <div class="climber__bio">
          Sed magna purus, fermentum eu, tincidunt eu, varius ut, felis.. Pellentesque dapibus hendrerit tortor. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis.
        </div>
      </div>
    </div>
    <div class="row climber-card__routes mt-5">
      <div class="col p-6">
        <h5 class="climber-card__routes-title">Registered ascents</h6>
      </div>
    </div>
    @foreach ($climber->routes as $route)
    <div class="row">
      <div class="col-12">
        <div class="climber-card__route">
          <a href="/routes/{{ $route->id }}">{{$route->name}} - {{$route->difficulty}}</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
@endsection


