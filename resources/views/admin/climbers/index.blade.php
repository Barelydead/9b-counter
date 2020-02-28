@extends('layouts.admin')

@section('title', 'Climbers')

@section('main')
  @include('components/intro', ['title' => 'Climbers', 'preamble' => 'Browse all the climbers that are lucky and strong enough to be placed on the 9b counter.'])

    <div class="my-4">
      <a href="/admin/climbers/create" class="button">Add new climber</a>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col"><a href="?order=id">ID</a></th>
          <th scope="col"><a href="?order=name">Name</a></th>
          <th scope="col"><a href="?order=age">Age</a></th>
          <th scope="col">Country</th>
          <th scope="col-4">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($climbers as $climber)
          <tr>
            <th scope="row">{{ $climber->id }}</th>
            <td>{{ $climber->name }}</td>
            <td>{{ $climber->age }}</td>
            <td>{{ $climber->country }}</td>
            <td>
              <a class="button button--small" href="/admin/climbers/{{ $climber->id }}/edit">Edit</a>
              <form method="POST" action="/admin/climbers/{{ $climber->id }}">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <input class="button button--small button--danger" type="submit" value="Delete">
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <div class="pager">{{ $climbers->links()}}</div>
@endsection
