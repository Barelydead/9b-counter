
@extends('layout')

@section('title', 'Climbers')

@section('main')
  @include('components/intro', ['title' => $climber->name, 'preamble' => 'bio'])

  <div class="container">
    <div class="row">
      <div class="col-3">
        <div class="climber__stats">
          <ul>
            <li>name: {{ $climber->name }}</li>
            <li>age: {{ $climber->age }}</li>
            <li>9b acents: {{ $climber->nines() }}</li>
            <li>8c acents: {{ $climber->eights() }}</li>
            <li>Country: {{ $climber->country }}</li>
          </ul>
        </div>
      </div>
      <div class="col">
        <div class="climber__bio">
            Adam Ondra (born February 5, 1993) is a Czech professional rock climber, specialising in lead climbing and bouldering. Described in 2013 as a prodigy and the leading climber of his generation,[1] Ondra is at present the only male athlete to have won World Championship titles in both disciplines in the same year (2014). He holds an analogous record in the World Cup, being the only male athlete to have won the World Cup series in both disciplines (lead climbing in 2009 and 2015, and bouldering in 2010).

            Ondra started climbing at the age of 6. At age 13, he climbed his first route graded 9a (5.14d). Rock and Ice magazine states that by 2011, Ondra was "onsighting 5.14c’s by the handful", and by 2013 had "more or less repeated every hard route in the world—easily".[1] As of November 2018, Ondra had climbed 1550 routes between grades 8a (5.13b) and 9c (5.15d), one of which was a 9c (5.15d), three were 9b+ (5.15c), and three were onsights of 9a (5.14d).[2]

            Ondra is famously the only climber to have redpointed a route with a proposed grade of 9c (5.15d) (Silence, September 3, 2017),[3] the first climber to have redpointed a route with a proposed grade of 9b+ (5.15c) (Change, October 4, 2012),[4] the first to flash a 9a+ (5.15a) route (Supercrackinette, February 10, 2018), and the second to onsight a 9a (5.14d) route (Cabane au Canada, July 9, 2013).[5] According to The Economist Ondra is "regarded as possibly the best climber ever to fondle rock".[6]
        </div>
      </div>
    </div>
  </div>
@endsection


