@extends('layout')

@section('title', 'Edit Route')

@section('main')
  @include('components/intro', ['title' => 'Edit Route', 'preamble' => ''])

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <form action="/routes/{{ $route->id }}" method="POST" class="form">
          @csrf
          <input type="hidden" name="_method" value="PUT">
          <div class="form-group">
            <label for="name">Name </label>
            <input type="text" value="{{ $route->name }}" name="name" placeholder="name" class="form-control">
          </div>
          <div class="form-group">
            <label for="difficulty">Difficulty </label>
            <input type="text" value="{{ $route->difficulty }}" name="difficulty" placeholder="difficulty" class="form-control">
          </div>
          <div class="form-group">
            <label for="country">Country</label>
            <select name="country" class="form-control" id="country">
              @foreach (app(Country::class)->getCountries() as $country)
                <option class="form__option" {{ $country == strtolower($route->country) ? 'selected' : ''}}>{{ $country }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="crag">Crag </label>
            <input type="text" name="crag" value="{{ $route->crag }}" placeholder="crag" class="form-control">
          </div>
          <fieldset class="form-group">
            <legend class="col-form-label">Type of climb</legend>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="type" value="sport" id="type" {{ 'sport' == $route->type ? 'checked' : ''}}>
              <label class="form-check-label" for="type">
                Sport
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="type" value="boulder" id="type2" {{ 'boulder' == $route->type ? 'checked' : ''}}>
              <label class="form-check-label" for="type2">
                Boulder
              </label>
            </div>
          </fieldset>
          <div class="form-group">
            <input type="submit" class="button" value="Update">
          </div>
        </form>
      </div>
      <div class="col-8">
        <form action="/routes/{{ $route->id }}" method="POST" class="form">
          @csrf
          <input type="hidden" name="_method" value="PUT">
          <p>Register route ascent</p>
          <div class="form-group">
            <label for="climber">Climbers</label>
            <select name="climber-ascent-add" class="form-control" id="climber">
              @foreach ($climbers as $climber)
                <option class="form__option" value="{{ $climber->id }}">{{ $climber->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <input type="submit" class="button" value="Register">
          </div>
        </form>
        <form action="/routes/{{ $route->id }}" method="POST" class="form">
          @csrf
          <input type="hidden" name="_method" value="PUT">
          <p>Remove route ascent</p>
          <div class="form-group">
            <label for="climber">Climbers</label>
            <select name="climber-ascent-del" class="form-control" id="climber">
              @foreach ($route->climbers as $climber)
                <option class="form__option" value="{{ $climber->id }}">{{ $climber->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <input type="submit" class="button button--danger" value="Remove">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
