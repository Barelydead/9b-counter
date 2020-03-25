
@extends('layouts.admin')

@section('title', 'Counters')

@section('main')
  @include('components/intro', ['title' => 'Counters', 'preamble' => ''])

  <div class="container">
    <div class="row">
      <div class="col-sm my-2">
        <a class="btn btn-primary" href="{{ route('counters.create')}}">Add new counter</a>
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
        @foreach ($counters as $counter)
          <tr>
            <td>{{ $counter->id }}</td>
            <td>{{ $counter->title }}</td>
            <td class="d-flex">
              <a href="{{ route('counters.edit', $counter->slug) }}" class="btn btn-warning">Edit</a>
              <form action="{{ route('counters.destroy', $counter->slug) }}" method="POST" class="ml-2">
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
