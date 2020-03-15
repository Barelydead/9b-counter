@extends('layouts.admin')

@section('title', 'Climbers')

@section('main')
  @include('components/intro', ['title' => 'Add new climber', 'preamble' => ''])

  <div class="container">
    <div class="row">
      <div class="col-8">
        <form action="/climbers" method="POST" class="form">
          @csrf
          <div class="form-group">
            <label for="name">Name </label>
            <input type="text" name="name" placeholder="name" class="form-control">
          </div>
          <div class="form-group">
            <label for="age">Age </label>
            <input type="number" name="age" placeholder="age" class="form-control">
          </div>
          <div class="form-group">
              <label for="country">Country</label>
              <select name="country" class="form-control" id="country">
                @foreach (app(Country::class)->getCountries() as $country)
                  <option class="form__option">{{ $country }}</option>
                @endforeach
              </select>
            </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Add climber">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
