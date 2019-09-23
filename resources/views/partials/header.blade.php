<header class="header">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="header__primary">
          <a href="/" class="header__logo-link">
            <img src="{{ asset('images/carabiner.svg') }}" alt="carabiner-logo" class="header__logo"></img>
            <span class="header__site-name">9B counter</span>
          </a>
        </div>
      </div>
      <div class="col-3">
        <div class="header__secondary d-flex justify-content-end align-item-center">
          <ul class="nav nav--main">
            <li class="nav__item">
              <a class="nav__links" href="/">Home</a>
            </li>
            <li class="nav__item">
              <a class="nav__links" href="/routes">Routes</a>
            </li>
            <li class="nav__item">
              <a class="nav__links" href="/climbers">Climbers</a>
            </li>
          </ul>
          @if (Auth::check())
          <button class="button button--primary button--small ml-2">
            <a href="/admin">admin</a>
          </button>
          <form method="post" action="{{ route('logout') }}" class="ml-2">
            @csrf
            <input type="submit" class="button button--danger button--small" value="logout">
          </form>
          @else
            <a href="/login" class="button button--small ml-2">login</a>
          @endif
        </div>
      </div>
    </div>
  </div>
</header>
