
@extends('layout')

@section('title', 'Routes')

@section('main')
@include('components/intro', ['title' => 'Featured Routes', 'preamble' => 'All routes that have seen ascents'])

<div class="container">
  <div class="row">
    <div class="col-12 pt-4">
      <div class="list">
        <div class="list__header">
          <div class="row">
            <div class="col-4">
              <span>Route name</span>
            </div>
            <div class="col-3">
              <span>Country</span>
            </div>
            <div class="col-3">
              <span>Crag</span>
            </div>
            <div class="col-2 d-flex justify-content-end">
              <span>Diffculty</span>
            </div>
          </div>
        </div>
        <div class="list__body">
          @foreach ($routes as $route)
          <div class="list__item">
            @include('components/route-list-item', ['route' => $route])
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
