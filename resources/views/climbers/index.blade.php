
@extends('layout')

@section('title', 'Climbers')

@section('main')
  @include('components/intro', ['title' => 'Climbers', 'preamble' => 'Browse all the climbers that are lucky and strong enough to be placed on the 9b counter.'])

  <div class="container">
    <div class="climber-card__list-header">
      <div class="row">
        <div class="col-1">
          <span><a href="?sort=default">Climber</a></span>
        </div>
        <div class="col">

        </div>
        <div class="col-1">
          <span><a href="?sort=sport">9b</a></span>
        </div>
        <div class="col-1">
          <span><a href="?sort=boulder">8c</a></span>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    @foreach ($climbers as $climber)
      @include('components/climber-card', ['climber' => $climber])
    @endforeach
  </div>

@endsection


