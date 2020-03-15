@extends('layouts.public')

@section('title', 'Climbers')

@section('main')
  @include('components/intro', ['title' => $counter->title, 'preamble' => $counter->description])

  <div class="container">
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">Climber</th>
          <th scope="col">Routes</th>
          <th scope="col">Total</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($rows as $group)
          <tr>
            <td>{{ $group->first()->climber->name }}</td>
            <td>
              @foreach ($group as $row)
                {{ $row->route->name }} ({{ $row->points }}) <br>
              @endforeach
            </td>
            <td>{{ $group->sum->points }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
