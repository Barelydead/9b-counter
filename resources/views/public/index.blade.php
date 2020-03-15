
@extends('layouts.public')

@section('title', 'Climbers')

@section('main')
  @include('components/intro', ['title' => '9b Counter digital', 'preamble' => 'Browse all the climbers that are lucky and strong enough to be placed on the 9b counter (and all the other counters).'])

  <div class="container">
    <main class="row">
      <a class="blurb__link btn col-sm" href="{{ route('sport-9b') }}">
        <article class="blurb blurb--palette1">
          <div class="blurb__inner">
            <small class="blurb__category">Sport</small>
            <h2 class="blurb__header">9B</h2>
          </div>
        </article>
      </a>
      <a class="blurb__link btn col-sm" href="{{ route('sport-9a') }}">
        <article class="blurb blurb--palette2">
          <div class="blurb__inner">
            <small class="blurb__category">Sport</small>
            <h2 class="blurb__header">9A</h2>
          </div>
        </article>
      </a>
      <a class="blurb__link btn col-sm" href="{{ route('boulder') }}">
        <article class="blurb blurb--palette3">
          <div class="blurb__inner">
            <small class="blurb__category">Boulder</small>
            <h2 class="blurb__header">8C+</h2>
          </div>
        </article>
      </a>
      <a class="blurb__link btn col-sm" href="{{ route('trad') }}">
        <article class="blurb blurb--palette4">
          <div class="blurb__inner">
            <small class="blurb__category">Trad</small>
            <h2 class="blurb__header">E10</h2>
          </div>
        </article>
      </a>
    </main>
  </div>
@endsection
