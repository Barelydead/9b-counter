@extends('layouts.admin')

@section('title', 'Climbers')

@section('main')
  @include('components/intro', ['title' => 'Add new counter', 'preamble' => ''])

  <div class="container">
    <form method="POST" action="{{ route('counters.store') }}">
      @csrf
      <div class="form-group">
        <label for="title">Title </label>
        <input type="text" name="title" placeholder="title" class="form-control">
      </div>
      <div class="form-group">
        <label for="year">Year </label>
        <input type="number" name="year" placeholder="year" class="form-control">
      </div>
      <div class="form-group">
        <label for="minimum_grade">Minimum grade</label>
        <input type="text" name="minimum_grade" placeholder="minimum grade" class="form-control">
      </div>
      <div class="form-group">
        <label for="counter_type">Type of counter</label>
        <select name="counter_type" class="form-control" id="counter_type">
            <option class="form__option">Trad</option>
            <option class="form__option">Sport</option>
            <option class="form__option">Boulder</option>
        </select>
      </div>
      <div class="form-group">
        <label for="gender">Gender</label>
        <select name="gender" class="form-control" id="gender">
            <option class="form__option">male</option>
            <option class="form__option">female</option>
            <option class="form__option">mixed</option>
        </select>
      </div>

      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Continue">
      </div>
    </form>
  </div>
@endsection
