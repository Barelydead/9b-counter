
@extends('layouts.public')

@section('title', 'Routes')

@section('main')
  @include('components/intro', ['title' => $route->name, 'preamble' => ''])

  <div class="container">
    <div class="row">
      <div class="col-12">

      </div>
    </div>
    <div class="row route__climbers mt-5">
      <div class="col p-6">
        <h5 class="route__climbers-title">Climbers that have ascents on this route</h6>
      </div>
    </div>
    @foreach ($route->climbers as $climber)
    <div class="row">
      <div class="col-12">
        <div class="route__climber">
          <a href="/climbers/{{ $climber->id }}">{{$climber->name}}</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
@endsection


