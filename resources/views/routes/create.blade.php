@extends('layout')

@section('title', 'Add new route');

@section('main')
  @include('components/intro', ['title' => 'Add new route', 'preamble' => ''])

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <form action="/routes" method="post" class="form">
          @csrf
          <div class="form-group">
            <label for="name">Name </label>
            <input type="text" name="name" placeholder="name" class="form-control">
          </div>
          <div class="form-group">
            <label for="difficulty">Difficulty</label>
            <input type="text" name="difficulty" placeholder="difficulty" class="form-control">
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
            <label for="crag">Crag </label>
            <input type="text" name="crag" placeholder="crag" class="form-control">
          </div>
          <fieldset class="form-group">
            <legend class="col-form-label">Type of climb</legend>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="type" value="sport" id="type" checked>
              <label class="form-check-label" for="type">
                Sport
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="type" value="boulder" id="type2">
              <label class="form-check-label" for="type2">
                Boulder
              </label>
            </div>
          </fieldset>
          <div class="form-group">
            <input type="submit" class="button" value="Add climber">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
