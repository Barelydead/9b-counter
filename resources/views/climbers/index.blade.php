
@extends('layouts.public')

@section('title', 'Climbers')

@section('main')
  @include('components/intro', ['title' => 'Climbers', 'preamble' => 'Browse all the climbers that are lucky and strong enough to be placed on the 9b counter.'])

  <div class="container">
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Country</th>
          <th scope="col">age</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($climbers as $climber)
          <tr>
            <td>{{ $climber->name }}</td>
            <td>{{ $climber->country }}</td>
            <td>{{ $climber->age }}</td>
          <tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
