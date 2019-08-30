  @extends('layout')

  @section('main')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          @include('components/intro', ['title' => 'With great powers..', 'preamble' => ''])
        </div>
      </div>
    </div>
  @endsection
