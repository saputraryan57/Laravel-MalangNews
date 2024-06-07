<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/das.css') }}">
</head>
<body>
@include ('partials.nav')

<section class="content">
    @yield('content')
</section>

</body>
</html>
