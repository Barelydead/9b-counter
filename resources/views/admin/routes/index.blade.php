@extends('layouts.admin')

@section('title', 'routes')

@section('main')
  @include('components/intro', ['title' => 'routes', 'preamble' => 'Browse all the routes that are lucky and strong enough to be placed on the 9b counter.'])

  <div class="my-4">
    <a href="/admin/routes/create" class="button">Add new route</a>
  </div>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">difficulty</th>
        <th scope="col">type</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($routes as $route)
        <tr>
          <th scope="row">{{ $route->id }}</th>
          <td>{{ $route->name }}</td>
          <td>{{ $route->difficulty }}</td>
          <td>{{ $route->type }}</td>
          <td>
            <a class="button button--small" href="/admin/routes/{{ $route->id }}/edit">Edit</a>
            <form method="POST" action="/admin/routes/{{ $route->id }}">
              @csrf
              <input type="hidden" name="_method" value="DELETE">
              <input class="button button--small button--danger" type="submit" value="Delete">
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <div class="pager">
    {{ $routes->links() }}
  </div>
@endsection
