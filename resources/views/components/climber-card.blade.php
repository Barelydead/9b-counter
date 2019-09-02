<div class="climber-card p-3 js-routes-toggle">
  <div class="row">
    <div class="col-1 d-flex align-items-center">
      <img src="{{ $climber->flag() }}" alt="{{ $climber->country }}">
    </div>
    <div class="col d-flex align-items-center">
      <h4 class="climber-card__name">{{ $climber->name }}</h4>
    </div>
    <div class="col-1 d-flex align-items-center">
      <span class="climber-card__score climber-card__score--9b">{{ $climber->nines() }}</span>
    </div>
    <div class="col-1 d-flex align-items-center">
      <span class="climber-card__score climber-card__score--8c">{{ $climber->eights() }}</span>
    </div>
  </div>
  <div class="row climber-card__routes">
    <div class="col p-6">
      <h6 class="climber-card__routes-title">Registered ascents</h6>
    </div>
    @foreach ($climber->routes as $route)
    <div class="col-12">
      <div class="climber-card__route">
        <p>{{$route->name}} - {{$route->difficulty}}</p>
      </div>
    </div>
    @endforeach
    <div class="col">
      <a href="/climbers/{{$climber->id}}" class="button button--secondary">Read more</a>
    </div>
  </div>
</div>
