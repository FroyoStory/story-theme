<!DOCTYPE html>
<html>
<head>
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ session()->token() }}"/>
  @yield('meta')
</head>
<body>
  <div class="menu-wrapper"></div>
  <div class="page-wrapper">
    @yield('content')
  </div>
  <div class="admin__menu-overlay"></div>
  <div class="modal-wrapper"></div>
</body>
</html>
