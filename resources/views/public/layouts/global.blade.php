<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'EMU Today')</title>
  <link rel="stylesheet" href="/css/foundation.css" />
  <link rel="stylesheet" href="/css/app.css" />
  <script src="/js/vendor/modernizr.js"></script>
</head>
<body>
  @include('public.layouts.connection-bar')
  @yield('content')
  @include('public.layouts.base-bar')
  <script src="/js/vendor/jquery.js"></script>
  <script src="/js/foundation.min.js"></script>
  <script>
  $(document).foundation();
  </script>
</body>
</html>
