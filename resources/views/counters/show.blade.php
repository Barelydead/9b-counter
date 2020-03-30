@extends('layouts.public')

@section('title', $counter->title)

@section('main')
  @include('components/intro', ['title' => $counter->title, 'preamble' => $counter->description])

  <div class="container">
    <div class="mb-2">Last updated: {{ $counter->updated_at->diffForHumans() }}</div>
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">Climber</th>
          <th scope="col">Routes and awarded points</th>
          <th scope="col">Total points</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($rows as $group)
          <tr>
            <td>{{ $group->first()->climber->name }}</td>
            <td>
              @foreach ($group as $row)
                {{ $row->route->name }} ({{ $row->points }}) <br>
              @endforeach
            </td>
            <td>{{ $group->sum->points }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <div class="related-counters mt-5 mb-2">
      <div class="row">
        <div class="col">
          <h2>Other Counters from {{ $counter->year }}</h2>
        </div>
      </div>
      @foreach ($relatedCounters as $key => $counter)
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
  </div>
@endsection
