@extends('layout')

@section('title', 'Update Climbers')

@section('main')
  @include('components/intro', ['title' => 'Update Climber', 'preamble' => ''])

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <form action="/climbers/{{ $climber->id }}" method="POST" class="form">
          @csrf
          <input type="hidden" name="_method" value="PUT">
          <h4>Edit climber info</h4>
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
        <form action="/climbers/{{ $climber->id }}" method="POST" class="form mt-5">
          @csrf
          <input type="hidden" name="_method" value="PUT">
          <h4>Add route to ascents</h4>
          <div class="form-group">
            <select name="route-ascent-add" class="form-control" id="route">
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
        <form action="/climbers/{{ $climber->id }}" method="POST" class="form mt-5">
          @csrf
          <input type="hidden" name="_method" value="PUT">
          <h4>Delete route ascent</h4>
          <div class="form-group">
            <select name="route-ascent-del" class="form-control" id="route">
              @foreach ($climber->routes as $route)
                <option class="form__option" value="{{ $route->id }}">{{ $route->name }} - {{ $route->difficulty }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <input type="submit" class="button button--danger" value="Delete">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
