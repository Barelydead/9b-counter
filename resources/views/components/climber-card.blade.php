<a href="{{ $climber->path() }}" class="climber-card p-3">
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
</a>
