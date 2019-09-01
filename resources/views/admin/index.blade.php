  @extends('layout')

  @section('main')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          @include('components/intro', ['title' => 'With great powers..', 'preamble' => ''])
        </div>
        <div class="col-md-8">
          <ul>
            <li><a href="/climbers/create">Add new climber</a></li>
            <li><a href="/routes/create">Add new route</a></li>
          </ul>
        </div>
      </div>
    </div>
  @endsection
