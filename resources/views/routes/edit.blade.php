@extends('layouts.admin')

@section('title', 'Edit Route')

@section('main')
  @include('components/intro', ['title' => 'Edit Route', 'preamble' => ''])

  <div class="container">
    <div class="row">
      <div class="col-8">
        <form action="/routes/{{ $route->id }}" method="POST" class="form">
          @csrf
          <input type="hidden" name="_method" value="PUT">
          <div class="form-group">
            <label for="name">Name </label>
            <input type="text" value="{{ $route->name }}" name="name" placeholder="name" class="form-control">
          </div>
          <div class="form-group">
            <label for="grade">grade </label>
            <input type="text" value="{{ $route->grade }}" name="grade" placeholder="grade" class="form-control">
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
            <div class="form-check">
              <input class="form-check-input" type="radio" name="type" value="trad" id="type3" {{ 'trad' == $route->type ? 'checked' : ''}}>
              <label class="form-check-label" for="type3">
                Traditional
              </label>
            </div>
          </fieldset>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Update">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
