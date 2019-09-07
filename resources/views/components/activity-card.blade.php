<div class="activity">
  <div class="activity__header">
    <span>{{ $activity->updated_at->diffForHumans() }}</span>
  </div>
  <div class="activity__body">
      {{ $activity->climber->name }} got a point  for climbing {{ $activity->route->name }}
  </div>
</div>
