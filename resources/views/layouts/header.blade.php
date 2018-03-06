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
      <header>
        <div class = 'headerImage'>
          <img src= "{{ asset('images/header.jpg')}}">
        </div>

        <div class = 'logo cfx'>
          <img src= "{{ asset('images/logo.jpg')}}">
        </div>

        <div class = 'headerTitle'>
          <h1>SSIA</h1>
        </div>
      </header>

      <nav>
        <ul class = 'cfx'>
          <a href = '#'><li>Home</li></a>
          <a href = '#'><li>Seksuele intimidatie</li></a>
          <a href = '#'><li>Getuigenissen</li></a>
          <a href = '#'><li>Media</li></a>
          <a href = '#'><li>Profiel</li></a>
        </ul>
      </nav>
    </div>
  </body>
</html>
