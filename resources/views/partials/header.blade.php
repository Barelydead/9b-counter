<header class="header">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="header__primary">
          <span class="header__logo">9B counter</span>
        </div>
      </div>
      <div class="col-3">
        <div class="header__secondary d-flex justify-content-end">
          <ul class="nav nav--main">
            <li class="nav__item">
              <a class="nav__links" href="/">Home</a>
            </li>
            <li class="nav__item">
              <a class="nav__links" href="/climbers">Climbers</a>
            </li>
            <li class="nav__item">
              <a class="nav__links" href="/routes">Routes</a>
            </li>
          </ul>
          @if (Auth::check())
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
