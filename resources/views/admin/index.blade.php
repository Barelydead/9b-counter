  @extends('layouts.admin')

  @section('main')
    @include('components/intro', ['title' => 'Admin dashboard', 'preamble' => 'Create, read, update and delete'])
  @endsection
