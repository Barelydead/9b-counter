<div class="activity">
  <div class="row">
    <div class="activity__left col-1">
      <span class="activity__grade">{{ $activity->route->grade }}</span>
    </div>
    <div class="activity__center col-8">
      <h4 class="activity__title">{{ $activity->climber->name }}</h4>
      <p class="activity__body">Climbed {{ $activity->route->name }}</p>
    </div>
    <div class="activity__right col d-flex justify-content-end">
      <span>{{ $activity->updated_at->diffForHumans() }}</span>
    </div>
  </div>
</div>
