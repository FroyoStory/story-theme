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
    <div class="menu-wrapper fixed">
      @include('story-theme::layouts.partials.nav-sidebar')
    </div>
    <div class="page-wrapper">
      @include('story-theme::layouts.partials.flash-message')
      @yield('content')
    </div>
    <div class="admin__menu-overlay"></div>
    <div class="modal-wrapper"></div>

    <script src="/js/backend.js"></script>
    <script src="/vendor/ckeditor/ckeditor.js"></script>
    <script>
     $(document).ready(function() {
      CKEDITOR.replace('body')
     })
    </script>
  </body>
</html>
