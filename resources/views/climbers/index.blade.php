
@extends('layout')

@section('title', 'Climbers')

@section('main')
  @include('components/intro', ['title' => 'Climbers', 'preamble' => 'Browse all the climbers that are lucky and strong enough to be placed on the 9b counter.'])

  <div class="container">
    <div class="row">

      <div class="col-12 pt-4">
        <div class="list">
          <div class="list__title">
            <h2>Standings</h2>
          </div>
          <div class="list__header">
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
          <div class="list__body">
            @foreach ($climbers as $climber)
            <div class="list__item">
                @include('components/climber-card', ['climber' => $climber])
              </div>
              @endforeach
            </div>
        </div>
      </div>

      <div class="col-12 pt-4">
        <div class="list">
          <div class="list__title">
            <h2>Latest activity</h2>
          </div>
          <div class="list__body">
            @foreach ($activity as $activity)
              <div class="list__item">
                @include('components/activity', ['activity' => $activity])
              </div>
            @endforeach
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection
