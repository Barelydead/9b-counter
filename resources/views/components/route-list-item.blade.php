<a href="/routes/{{ $route->id }}" class="route route--list-item mt-3">
  <div class="row">
    <div class="col-4 d-flex align-items-center">
      <h4 class="route__name">{{ $route->name }}</h4>
    </div>
    <div class="col-3 d-flex align-items-center">
      <span class="route__country">{{ $route->country }}</span>
    </div>
    <div class="col-3 d-flex align-items-center">
      <span class="route__crag">{{ $route->crag }}</span>
    </div>
    <div class="col-2 d-flex align-items-center justify-content-end">
      <span class="route__difficulty">{{ $route->difficulty }}</span>
    </div>
  </div>
</a>
