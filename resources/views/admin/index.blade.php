  @extends('layout')

  @section('main')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          @include('components/intro', ['title' => 'With great powers..', 'preamble' => ''])
        </div>
        <div class="row">
          <div class="col-12">
            <ul class="d-flex">
              <li class="mr-3"><a href="/climbers/create">Add new climber</a></li>
              <li class="mr-3"><a href="/routes/create">Add new route</a></li>
            </ul>
          </div>

          <div class="col-6">
            <h4 class="mt-5">Edit climbers</h4>
            <table class="mt-2">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Climber</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($climbers as $climber)
                  <tr>
                    <td>{{ $climber->id }}</td>
                    <td>{{ $climber->name }}</td>
                    <td><a href="/climbers/{{ $climber->id }}/edit" class="button button--primary button--small">edit</a></td>
                    <td>
                      <form method="POST" action="/climbers/{{ $climber->id }}">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <input class="button button--danger button--small" type="submit" value="Delete">
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>

          <div class="col-6">
            <h4 class="mt-5">Edit Routes</h4>
            <table class="mt-2">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Route</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($routes as $route)
                  <tr>
                    <td>{{ $route->id }}</td>
                    <td>{{ $route->name }}</td>
                    <td><a href="/routes/{{ $route->id }}/edit" class="button button--primary button--small">edit</a></td>
                    <td>
                      <form method="POST" action="/routes/{{ $route->id }}">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <input class="button button--danger button--small" type="submit" value="Delete">
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
  @endsection
