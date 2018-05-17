<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>STOP_SEKSUELE_INTIMIDATIE</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  </head>

  <body>
    <div id = 'header'>
        <a href="{{route('home')}}"><img src="{{ asset('images/BORD3.png')}}" alt="BORD2"></a>

    <nav>
      <div class="P1">
      <div class="label-ham">
        <label for="toggle">☰</label>
      </div>
      <input type="checkbox" id="toggle"/>
      <div class="hamburger">
        <a href="{{route('WatIsSeksueleIntimidatie')}}"><i class="fas fa-venus-mars"></i> Seksuele Intimidatie</a>
        <a href="{{route('Verhalen')}}"><i class="fas fa-book-open "></i> Verhalen</a>
        <a href="{{route('WatKanUZelfDoen')}}"><i class="fas fa-meh "></i> SOS</a>
        <a href="{{route('Media')}}"><i class="fas fa-play-circle"></i> Media</a>
        <a href="#"><i class="fas fa-user"></i> Profiel</a>
      </div>
      <ul>
            <li><a href="{{route('WatIsSeksueleIntimidatie')}}"><i class="fas fa-venus-mars"></i> Intimidatie</a></li>
            <li><a href="{{route('Verhalen')}}"><i class="fas fa-book-open "></i> Verhalen</a></li>
      </ul>
      </div>

      <div class="P2">
        <ul>
              <li><a href="#"><i class="fas fa-user fa-lg"></i></a></li>
              <li><a href="#"><i class="fas fa-play-circle"></i> Media</a></li>
              <li><a href="{{route('WatKanUZelfDoen')}}"><i class="fas fa-meh"></i> SOS</a></li>
        </ul>
      </div>
    </nav>

      </div>

      <nav>
        @if(Auth::guard('web')->check() || Auth::guard('admin')->check())
          <a href="{{ route('logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();" class="button-logout">
              Afmelden
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>

        @else
            <a href = "{{route ('login')}}" class="button-login">Aanmelden</a>
        @endif
      </nav>

    </div>
  </body>
</html>
