@extends('layouts.admin')

@section('title', 'Counter row')

@section('main')
  @include('components/intro', ['title' => 'Edit counter row', 'preamble' => ''])

  <div class="container">
    <form method="POST" action="{{ route('counterRows.update', $counterRow->id) }}">
      @csrf
      @method('patch')
      <div class="form-group">
        <label for="counter_id">Counter</label>
        <select name="counter_id" class="form-control" id="counter_id" required>
            @foreach ($counters as $counter)
            <option class="form__option" value="{{ $counter->id }}" {{ $counterRow->counter->id == $counter->id ? 'selected' : ''}}>{{$counter->title}} ({{ $counter->id }})</option>
            @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="climber_id">Climber</label>
        <select name="climber_id" class="form-control" id="climber_id" required>
            @foreach ($climbers as $climber)
            <option class="form__option" value="{{ $climber->id }}" {{ $counterRow->climber->id == $climber->id ? 'selected' : ''}}>{{$climber->name}} ({{ $climber->id }})</option>
            @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="route_id">Route</label>
        <select name="route_id" class="form-control" id="route_id" required>
            @foreach ($routes as $route)
            <option class="form__option" value="{{ $route->id }} {{ $counterRow->route->id == $route->id ? 'selected' : ''}}">{{$route->name}} ({{ $route->id }})</option>
            @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="points">Points </label>
        <input type="text" name="points" value="{{ $counterRow->points }}" placeholder="points" class="form-control" required>
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Continue">
      </div>
    </form>
  </div>
@endsection
