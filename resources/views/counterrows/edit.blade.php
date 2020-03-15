@extends('layouts.admin')

@section('title', 'Counter row')

@section('main')
  @include('components/intro', ['title' => 'Edit counter row', 'preamble' => ''])

  <div class="container">
    <form method="POST" action="{{ route('counterRows.update', $counterRow->id) }}">
      @csrf
      @method('patch')
      <div class="form-group">
        <label for="climber">Counter </label>
        <input type="text" value="{{ $counterRow->counter_id }}" name="counter_id" placeholder="counter" class="form-control">
      </div>
      <div class="form-group">
        <label for="climber">Climber</label>
        <input type="text" value="{{ $counterRow->climber_id }}" name="climber_id" placeholder="climber" class="form-control">
      </div>
      <div class="form-group">
        <label for="route">Route </label>
        <input type="text" value="{{ $counterRow->route_id }}" name="route_id" placeholder="route" class="form-control">
      </div>
      <div class="form-group">
        <label for="points">Points </label>
        <input type="text" value="{{ $counterRow->points }}" name="points" placeholder="points" class="form-control">
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Continue">
      </div>
    </form>
  </div>
@endsection
