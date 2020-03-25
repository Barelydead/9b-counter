@extends('layouts.public')

@section('title', 'Climbers')

@section('main')
  @include('components/intro', ['title' => $counter->title, 'preamble' => $counter->description])

  <div class="container">
    <div class="mb-2">Last updated: {{ $counter->updated_at->diffForHumans() }}</div>
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">Climber</th>
          <th scope="col">Routes and awarded points</th>
          <th scope="col">Total points</th>
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
