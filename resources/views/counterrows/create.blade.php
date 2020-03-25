@extends('layouts.admin')

@section('title', 'Counter row')

@section('main')
  @include('components/intro', ['title' => 'Add new counter row', 'preamble' => ''])

  <div class="container">
    <div class="row">
      <div class="col-8">
        <form method="POST" action="{{ route('counterRows.store') }}">
          @csrf
          <div class="form-group">
            <label for="counter_id">Counter</label>
            <select name="counter_id" class="form-control" id="counter_id" required>
                @foreach ($counters as $counter)
                <option class="form__option" value="{{ $counter->id }}">{{$counter->title}} ({{ $counter->id }})</option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="climber_id">Climber</label>
            <select name="climber_id" class="form-control" id="climber_id" required>
                @foreach ($climbers as $climber)
                <option class="form__option" value="{{ $climber->id }}">{{$climber->name}} ({{ $climber->id }})</option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="route_id">Route</label>
            <select name="route_id" class="form-control" id="route_id" required>
                @foreach ($routes as $route)
                <option class="form__option" value="{{ $route->id }}">{{$route->name}} ({{ $route->id }})</option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="points">Points </label>
            <input type="text" name="points" placeholder="points" class="form-control" required>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Continue">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
