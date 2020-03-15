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
            <label for="climber">Counter </label>
            <input type="text" name="counter_id" placeholder="counter" class="form-control">
          </div>
          <div class="form-group">
            <label for="climber">Climber</label>
            <input type="text" name="climber_id" placeholder="climber" class="form-control">
          </div>
          <div class="form-group">
            <label for="route">Route </label>
            <input type="text" name="route_id" placeholder="route" class="form-control">
          </div>
          <div class="form-group">
            <label for="points">Points </label>
            <input type="text" name="points" placeholder="points" class="form-control">
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Continue">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
