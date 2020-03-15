
@extends('layouts.admin')

@section('title', 'Climbers')

@section('main')
  @include('components/intro', ['title' => 'Climbers', 'preamble' => ''])

  <div class="container">
    <div class="row">
      <div class="col-sm my-2">
        <a class="btn btn-primary" href="{{ route('climbers.create')}}">Add new climber</a>
      </div>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID #</th>
          <th scope="col">Name</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($climbers as $climber)
          <tr>
            <td>{{ $climber->id }}</td>
            <td>{{ $climber->name }}</td>
            <td class="d-flex">
              <a href="{{ route('climbers.edit', $climber->id) }}" class="btn btn-warning">Edit</a>
              <form action="{{ route('climbers.destroy', $climber->id) }}" method="POST" class="ml-2">
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
