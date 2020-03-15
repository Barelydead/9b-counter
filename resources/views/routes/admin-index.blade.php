
@extends('layouts.admin')

@section('title', 'Routes')

@section('main')
  @include('components/intro', ['title' => 'Routes', 'preamble' => ''])

  <div class="container">
    <div class="row">
      <div class="col-sm my-2">
        <a class="btn btn-primary" href="{{ route('routes.create')}}">Add new route</a>
      </div>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID #</th>
          <th scope="col">Name</th>
          <th scope="col">Actions</th>
          <th scope="col">Type</th>
          <th scope="col">Grade</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($routes as $route)
          <tr>
            <td>{{ $route->id }}</td>
            <td>{{ $route->name }}</td>
            <td>{{ $route->type }}</td>
            <td>{{ $route->grade }}</td>
            <td class="d-flex">
              <a href="{{ route('routes.edit', $route->id) }}" class="btn btn-warning">Edit</a>
              <form action="{{ route('routes.destroy', $route->id) }}" method="POST" class="ml-2">
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
