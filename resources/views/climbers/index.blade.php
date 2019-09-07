
@extends('layout')

@section('title', 'Climbers')

@section('main')
  @include('components/intro', ['title' => 'Climbers', 'preamble' => 'Browse all the climbers that are lucky and strong enough to be placed on the 9b counter.'])

  <div class="container">
    <div class="row">
      <div class="col-4 activity pt-4">
        <div class="activity__header">
          <h2>Latest activity</h2>
          @foreach ($activity as $activity)
          <ul>
            <li>{{ $activity->climber->name }} logged ascent of {{ $activity->route->name }} on {{ $activity->updated_at }}</li>
          </ul>
          @endforeach
        </div>
      </div>
      <div class="col pt-4">
        <h2>Standings</h2>
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
        @foreach ($climbers as $climber)
        <div class="row mb-2">
          <div class="col">
            @include('components/climber-card', ['climber' => $climber])
          </div>
        </div>
      @endforeach
      </div>
    </div>

  </div>
@endsection


