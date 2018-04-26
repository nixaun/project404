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
          <img src= "{{ asset('images/hero-banner-1.jpg')}}">
        </div>

        <div class = 'logo cfx'>
          <img src= "{{ asset('images/logo.jpg')}}">
        </div>

        <div class = 'headerTitle'>
          <h1>Filler</h1>
        </div>
      </header>

      <div id='navbar-line'>

      <div class="CRNT_TAB">
        <a href="{{route('home')}}"><img src="{{ asset('images/HOME2.png')}}" alt="HOME"></a>
        <a href="{{route('WatIsSeksueleIntimidatie')}}"><img src="{{ asset('images/SI.png')}}" alt="SI"></a>
        <a href="#"><img src="{{ asset('images/VERHALEN.png')}}" alt="VERHALEN"></a>
        <a href="{{route('WatKanUZelfDoen')}}"><img src="{{ asset('images/WAT.png')}}" alt="WAT KAN U ZELF DOEN?"></a>
        <a href="#"><img src="{{ asset('images/MEDIA.png')}}" alt="MEDIA"></a>
        <a href="#"><img src="{{ asset('images/PROFIEL.png')}}" alt="PROFIEL"></a>
      </div>

      </div>
<!--
      <nav>
        <ul class = 'cfx wrapper'>
          <li><a href = "{{route('home')}}">Home</a></li>
          <li><a href = "{{route('WatIsSeksueleIntimidatie')}}">Seksuele intimidatie</a></li>
          <li><a href = '#'>Verhalen</a></li>
          <li><a href = "{{route('WatKanUZelfDoen')}}">Wat kan u zelf doen?</a></li>
          <li><a href = '#'>Media</a></li>
          <li><a href = '#'>Profiel</a></li>
        </ul>
      </nav>
-->
      <nav>
        <ul class = 'cfx wrapper'>
          <li><a href = "{{route('home')}}"></a></li>
          <li><a href = "{{route('WatIsSeksueleIntimidatie')}}"></a></li>
          <li><a href = '#'></a></li>
          <li><a href = "{{route('WatKanUZelfDoen')}}"></a></li>
          <li><a href = '#'></a></li>
          <li><a href = '#'></a></li>
        </ul>
      </nav>

    </div>
  </body>
</html>
