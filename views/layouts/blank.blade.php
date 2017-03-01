<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ session()->token() }}"/>
    <link rel="stylesheet" href="/css/backend.css">
    @yield('meta')
  </head>
  <body>

    @yield('content')

    <script src="/js/app.js"></script>
  </body>
</html>
