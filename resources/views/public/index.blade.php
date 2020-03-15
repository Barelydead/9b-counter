
@extends('layouts.public')

@section('title', 'Climbers')

@section('main')
  @include('components/intro', ['title' => '9b Counter digital', 'preamble' => 'Browse all the climbers that are lucky and strong enough to be placed on the 9b counter (and all the other counters).'])

  <div class="container">
    <main class="row">
      @foreach ($counters as $key => $counter)
      <a class="blurb__link btn col-sm-12 col-md-6 col-lg-3" href="{{ route('counters.show', $counter->id) }}">
        <article class="blurb blurb--palette{{ $key % 4 + 1 }}">
          <div class="blurb__inner">
          <small class="blurb__category">{{ $counter->counter_type }}</small>
            <h2 class="blurb__header">{{ $counter->minimum_grade }}</h2>
          </div>
        </article>
      </a>
      @endforeach
    </main>
  </div>
@endsection
