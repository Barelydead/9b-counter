<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>9B Counter | @yield('title')</title>
  <link rel="shortcut icon" href="/favicon.ico">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-161819591-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-161819591-1');
  </script>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

  @include('partials.header')

  <body>
    <div id="app">
      <main class="container main">
        @if (Session::has('success'))
        <div class="alert alert--success">{{ Session::get('success') }}</div>
        @endif
        @if (Session::has('error'))
        <div class="alert alert--error">{{ Session::get('error') }}</div>
        @endif
      </main>
      <main class="main-content">
        @yield('main')
      </main>
    </div>
  </body>

  @include('partials.footer')

  <script src="{{asset('js/app.js')}}"></script>
</html>
