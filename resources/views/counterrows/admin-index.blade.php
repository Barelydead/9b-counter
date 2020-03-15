
@extends('layouts.admin')

@section('title', 'Counters rows')

@section('main')
  @include('components/intro', ['title' => 'Counters rows', 'preamble' => ''])

  <div class="container">
    <div class="row">
      <div class="col-sm my-2">
        <a class="btn btn-primary" href="{{ route('counterRows.create')}}">Add new counter</a>
      </div>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Counter</th>
          <th scope="col">Climber</th>
          <th scope="col">Route</th>
          <th scope="col">Points</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($counterRows as $row)
          <tr>
            <td>{{ $row->counter->title }}</td>
            <td>{{ $row->climber->name }}</td>
            <td>{{ $row->route->name }}</td>
            <td>{{ $row->points }}</td>
            <td class="d-flex">
              <a href="{{ route('counterRows.edit', $row->id) }}" class="btn btn-warning">Edit</a>
              <form action="{{ route('counterRows.destroy', $row->id) }}" method="POST" class="ml-2">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            <td>
          <tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
