<header class="header">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="header__primary">
          <a href="/" class="header__logo-link text-dark">
            <img src="{{ asset('images/carabiner.svg') }}" alt="carabiner-logo" class="header__logo"></img>
            <span class="header__site-name">9B counter</span>
          </a>
        </div>
      </div>
      <div class="col-3">
        <div class="header__secondary d-flex justify-content-end align-item-center">
          <ul class="nav nav--main">
            <li class="nav__item">
              <a class="nav__links text-dark" href="/">Counters</a>
            </li>
            <li class="nav__item">
              <a class="nav__links text-dark" href="/climbers">Climbers</a>
            </li>
            @if (Auth::check())
              <li class="nav__item">
                <a class="nav__links text-primary" href="/admin">Admin</a>
              </li>
            @endif
          </ul>
        </div>
      </div>
    </div>
  </div>
</header>
