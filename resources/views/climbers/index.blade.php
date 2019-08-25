
@extends('layout')

@section('title', 'Climbers')

@section('main')
  <div class="container">
    <div class="row">
      <div class="intro">
        <h1 class="intro__title">Climbers</h1>
        <p class="intro__preamble">Browse all the climbers that are lucky and strong enough to be placed on the 9b counter.</p>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="climber-card__list-header">
      <div class="row">
        <div class="col-1">
          <span><a href="?sort=default">Climber</a></span>
        </div>
        <div class="col">

        </div>
        <div class="col-1">
          <span><a href="?sort=sport">9b</a></span>
        </div>
        <div class="col-1">
          <span><a href="?sort=boulder">8c</a></span>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
  @foreach ($climbers as $climber)
    <a href="{{ $climber->path() }}" class="climber-card p-3">
      <div class="row">
        <div class="col-1 d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
              <path style="fill:#4173CD;" d="M512,200.093H0V97.104c0-4.875,3.953-8.828,8.828-8.828h494.345c4.875,0,8.828,3.953,8.828,8.828  L512,200.093L512,200.093z"/>
              <path style="fill:#F5F5F5;" d="M503.172,423.725H8.828c-4.875,0-8.828-3.953-8.828-8.828V311.909h512v102.988  C512,419.773,508.047,423.725,503.172,423.725z"/>
              <rect y="200.091" style="fill:#464655;" width="512" height="111.81"/>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              </svg>

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
  @endforeach
  </div>

  <div class="show-more">
    <button class="button">Load more</button>
  </div>


@endsection


