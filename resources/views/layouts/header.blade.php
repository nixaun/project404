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

        <img src="{{ asset('images/BORD2.png')}}" alt="BORD2">

    <nav>
      <div class="P1">
      <ul>
            <li><a href="{{route('WatIsSeksueleIntimidatie')}}"></a>Seksuele Intimidatie</li>
            <li><a href="{{route('Verhalen')}}"></a>Verhalen</li>
      </ul>
      </div>

      <div class="P2">
        <ul>
              <li><a href="#"></a><i class="fas fa-user fa-2x"></i></li>
              <li><a href="#"></a>Media</li>
              <li><a href="{{route('WatKanUZelfDoen')}}"></a>SOS</li>
        </ul>
      </div>
    </nav>

      </div>

      <nav>
        @if(Auth::guard('web')->check() || Auth::guard('admin')->check())
          <a href="{{ route('logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
              Logout
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>

        @else
          <a href = "{{route ('login')}}">Login</a>
          <a href = "{{route ('register')}}">Registreer</a>
        @endif
      </nav>

    </div>
  </body>
</html>
