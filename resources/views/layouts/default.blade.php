<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SSIA</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>

  <body>
    <div id = 'wrapper'>
      @include('layouts.header')

      <div id="main">

        @yield('content')

      </div>

      <footer class="row">
        @include('layouts.footer')
      </footer>
    </div>
  </body>
</html>
