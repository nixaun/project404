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
    <div id = 'header'>
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

      <div id='navbar-line'>

      <div class="CRNT_TAB">
        <img src="{{ asset('images/CRNT12.png')}}" alt="CT12">
      </div>
      </div>

      <nav>
        <ul class = 'cfx wrapper'>
          <li><a href = '#'>Home</a></li>
          <li><a href = "{{route('WatIsSeksueleIntimidatie')}}">Seksuele intimidatie</a></li>
          <!--<img src="{{ asset('images/CURRENT.png')}}" class="tbl">-->
          <li><a href = '#'>Verhalen</a></li>
          <li><a href = "{{route('WatKanUZelfDoen')}}">Wat kan u zelf doen?</a></li>
          <li><a href = '#'>Media</a></li>
          <li><a href = '#'>Profiel</a></li>
        </ul>
      </nav>
    </div>
  </body>
</html>
