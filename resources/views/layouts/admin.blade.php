<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Admin | 9B Counter | @yield('title')</title>
  <link rel="shortcut icon" href="/favicon.ico">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

@include('partials.header')


<body>
  <main class="container-fluid">
    <div class="row">
      @if (Session::has('success'))
       <div class="alert alert--success">{{ Session::get('success') }}</div>
      @endif
      @if (Session::has('error'))
       <div class="alert alert--error">{{ Session::get('error') }}</div>
      @endif

      <div class="main-admin">
        <aside>
          @include('partials.admin-sidebar')
        </aside>
        <main>
          @yield('main')
        </main>
      </div>
    </div>
  </main>
</body>

@include('partials.footer')

<script src="{{asset('js/app.js')}}"></script>
</html>
