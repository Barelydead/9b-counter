<ul class="nav flex-column text-white p-2">
  <li class="nav-item mt-2">
    <h3 class="nav-link text-white">Content</h3>
  <li class="nav-item mt-2">
    <a class="nav-link text-light" href="{{ route('climbers.admin-index') }}">Climbers</a>
  </li>
  <li class="nav-item mt-2">
    <a class="nav-link text-light" href="{{ route('routes.admin-index') }}">Routes</a>
  </li>
  <li class="nav-item mt-2">
    <a class="nav-link text-light"" href="{{ route('counters.admin-index') }}">Counters</a>
  </li>
  <li class="nav-item mt-2">
    <a class="nav-link text-light" href="{{ route('counterRows.admin-index') }}">Counter rows</a>
  </li>
  <li class="nav-item mt-2">
    <h3 class="nav-link text-white">Account</h3>
  <li class="nav-item mt-2">
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <input type="submit" class="btn nav-link text-white" value="logout"></input>
    </form>
  </li>
</ul>
