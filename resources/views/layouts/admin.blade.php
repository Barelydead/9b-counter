<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>9B Counter | @yield('title')</title>
  <link rel="shortcut icon" href="/favicon.ico">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

  @include('partials.header')

  <body>
    <main class="main-content">
      <div class="row no-gutters">
        <div class="col-md-12 col-lg-3 col-xl-2 bg-secondary">
          @include('partials.aside')
        </div>
        <div class="col-md-12 col-lg-9 col-xl-10 main-aside">
          @if (Session::has('success'))
          <div class="alert alert-success">{{ Session::get('success') }}</div>
          @endif
          @if (Session::has('error'))
          <div class="alert alert-error">{{ Session::get('error') }}</div>
          @endif
          @yield('main')
        </div>
      </div>
    </main>
  </body>

  @include('partials.footer')

  <script src="{{asset('js/app.js')}}"></script>
</html>
