<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  </head>

  @include('partials.header')

  <body>
    <main class="container">
      @yield('main')
    </main>
  </body>

  @include('partials.footer')

  <script src="{{asset('js/app.js')}}"></script>
</html>
