
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
    <a href="{{ $climber->path() }}" class="climber-card p-3">
      <div class="row">
        <div class="col-1 d-flex align-items-center">
          <img src="{{ $climber->flag() }}" alt="{{ $climber->country }}">
        </div>
        <div class="col d-flex align-items-center">
          <h4 class="climber-card__name">{{ $climber->name }}</h4>
        </div>
        <div class="col-1 d-flex align-items-center">
          <span class="climber-card__score climber-card__score--9b">{{ $climber->nines() }}</span>
        </div>
        <div class="col-1 d-flex align-items-center">
          <span class="climber-card__score climber-card__score--8c">{{ $climber->eights() }}</span>
        </div>
      </div>
    </a>
  @endforeach
  </div>

@endsection


