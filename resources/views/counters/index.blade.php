
@extends('layouts.public')

@section('title', 'Climbers')

@section('main')
  @include('components/intro', ['title' => '9b Counter digital', 'preamble' => 'Browse all the climbers that are lucky and strong enough to be placed on the 9b counter (and all the other counters).'])

  <div class="container mb-5">
    @foreach ($counterGroups as $key => $counters)
      <div class="row mt-5 mb-2">
        <h2 class="col-12 text-md-center">{{ $counters->first()->year }}</h2>
      </div>
      <div class="row">
        @foreach ($counters as $key => $counter)
          <a class="blurb__link col-sm-12 col-md-6 col-lg-3" href="{{ route('counters.show', $counter->slug) }}">
            <article class="blurb blurb--palette{{ $key % 4 + 1 }}">
              <div class="blurb__inner">
              <small class="blurb__category text-uppercase">{{ $counter->counter_type }}</small>
                <h2 class="blurb__header">{{ $counter->minimum_grade }}</h2>
              </div>
            </article>
          </a>
        @endforeach
      </div>
    @endforeach
  </div>
@endsection
