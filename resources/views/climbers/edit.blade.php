@extends('layout')

@section('title', 'Update Climbers')

@section('main')
  @include('components/intro', ['title' => 'Update Climber', 'preamble' => ''])

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <form action="/climbers/{{ $climber->id }}" method="post" class="form">
          @csrf
          <div class="form-group">
            <label for="name">Name </label>
            <input type="text" value="{{ $climber->name }}" name="name" placeholder="name" class="form-control">
          </div>
          <div class="form-group">
            <label for="age">Age </label>
            <input type="number" value="{{ $climber->age }}" name="age" placeholder="age" class="form-control">
          </div>
          <div class="form-group">
              <label for="country">Country</label>
              <select name="country" class="form-control" id="country">
                @foreach (app(Country::class)->getCountries() as $country)
                  <option class="form__option" {{ $country == strtolower($climber->country) ? 'selected' : ''}}>{{ $country }}</option>
                @endforeach
              </select>
            </div>
          <div class="form-group">
            <input type="submit" class="button" value="Update">
          </div>
        </form>
      </div>
      <div class="col-8">
        <form action="/climbers/{{ $climber->id }}" method="post" class="form">
          @csrf
          <p>Add route to ascents</p>
          <div class="form-group">
            <label for="route">Route</label>
            <select name="route-ascent" class="form-control" id="route">
              @foreach ($routes as $route)
                <option class="form__option" value="{{ $route->id }}">{{ $route->name }} - {{ $route->difficulty }}</option>
              @endforeach
            </select>
          </div>
          <p>Route not available in list? add new route <a href="/routes/create">here</a></p>
          <div class="form-group">
            <input type="submit" class="button" value="Register">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
