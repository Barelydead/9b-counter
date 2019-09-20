
@extends('layout')

@section('title', 'Routes')

@section('main')
  @include('components/intro', ['title' => $route->name, 'preamble' => ''])

  <div class="container">
    <div class="row">
      <div class="col-12">

      </div>
    </div>
  </div>
@endsection


