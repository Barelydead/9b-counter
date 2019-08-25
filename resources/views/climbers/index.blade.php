
@extends('layout')

@section('title', 'Climbers')

@section('main')
  <div class="intro">
    <h1 class="intro__title">Climbers</h1>
    <p class="intro__preamble">Browse all the climbers that are lucky and strong enough to be placed on the 9b counter.</p>
  </div>

  @foreach ($climbers as $climber)
  <div class="climber-card">
    <a href="{{ $climber->path() }}" class="climber-card__link">
      <div class="climber-card__inner">
        <div class="climber-card__section climber-card__section--small">
            <svg class="climber-card__flag-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 88.2770004272461 512 335.4495544433594" style="enable-background:new 0 0 512.001 512.001;" xml:space="default">      <path style="fill:#4173CD;" d="M503.172,423.725H8.828c-4.875,0-8.828-3.953-8.828-8.828V97.104c0-4.875,3.953-8.828,8.828-8.828  h494.345c4.875,0,8.828,3.953,8.828,8.828v317.793C512,419.773,508.047,423.725,503.172,423.725z"></path>      <polygon style="fill:#FFE15A;" points="512,229.518 211.862,229.518 211.862,88.277 158.897,88.277 158.897,229.518 0,229.518   0,282.484 158.897,282.484 158.897,423.725 211.862,423.725 211.862,282.484 512,282.484 "></polygon>      <g>      </g>      <g>      </g>      <g>      </g>      <g>      </g>      <g>      </g>      <g>      </g>      <g>      </g>      <g>      </g>      <g>      </g>      <g>      </g>      <g>      </g>      <g>      </g>      <g>      </g>      <g>      </g>      <g>      </g>      </svg>
        </div>
        <div class="climber-card__section">
          <h4 class="climber-card__name">{{ $climber->name }}</h4>
        </div>
        <div class="climber-card__section climber-card__section--medium">
          <span class="climber-card__score climber-card__score--9b">2</span>
          <span class="climber-card__score climber-card__score--8c">2</span>
        </div>
      </div>
    </a>
  </div>

  @endforeach
@endsection
