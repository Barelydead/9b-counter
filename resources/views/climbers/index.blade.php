
@extends('layouts.public')

@section('title', 'Climbers')

@section('main')
  @include('components/intro', ['title' => 'Climbers', 'preamble' => 'All the climbers that have featured on any counter so far.'])

  <div class="container">
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Country</th>
          <th scope="col">On counters</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($climbers as $climber)
          @if ($climber->hasCounters())
            <tr>
              <td><img src="{{ $climber->flag() }}" class="mr-2" style="width:46px"> {{ $climber->name }}</td>
              <td class="text-capitalize align-middle">{{ $climber->country }}</td>
              <td>
                @foreach ($climber->counters->groupBy('title') as $counter)
                  <a href="{{route('counters.show', $counter->first()->slug)}}" class="btn btn-primary m-1">
                    {{$counter->first()->year}} {{$counter->first()->minimum_grade}}
                  </a>
                @endforeach
              </td>
            <tr>
          @endif
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
