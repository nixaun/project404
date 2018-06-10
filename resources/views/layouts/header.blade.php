<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>STOP_SEKSUELE_INTIMIDATIE</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mobile.css') }}" rel="stylesheet">

  </head>

  <body>
    <div id = 'header'>

        
        <div class="banner"><img src="{{ asset('images/bnr.png')}}" alt=""></div>
        <a href="{{route('home')}}"><img src="{{ asset('images/BORD4.png')}}" alt="BORD2"></a>
        <div class="logo"><a href="https://www.antwerpen.be/nl/home"><img src="{{ asset('images/witlogo.png')}}" alt="LOGO"></a></div>
      

    <nav>
      <div class="P1">
      <div class="label-ham">
        <label for="toggle">☰</label>
      </div>
      <input type="checkbox" id="toggle"/>
      <div class="hamburger">
        <a href="{{route('home')}}"><i class="fas fa-home"></i> Home</a>
        <a href="{{route('WatIsSeksueleIntimidatie')}}"><i class="fas fa-venus-mars"></i> Seksuele Intimidatie</a>
        <a href="{{route('Verhalen')}}"><i class="fas fa-book-open "></i> Verhalen</a>
        <a href="{{route('WatKanUZelfDoen')}}"><i class="fas fa-meh "></i> SOS</a>
        <a href="{{route('Media')}}"><i class="fas fa-play-circle"></i> Media</a>

        @if ((Auth::guard('web')->check() || Auth::guard('admin')->check()))
          <a href="/profiel"><i class="fas fa-user"></i> Profiel</a>
        @endif
      </div>
      <ul>
            <li><a href="{{route('WatIsSeksueleIntimidatie')}}"><i class="fas fa-venus-mars"></i> Intimidatie</a></li>
            <li><a href="{{route('Verhalen')}}"><i class="fas fa-book-open "></i> Verhalen</a></li>
      </ul>
      </div>

      <div class="P2">
        <ul>
              @if (!(Auth::guard('web')->check() || Auth::guard('admin')->check()))
                <li><a href="/register"><i class="fas fa-user"></i>
                  <!--<ul>
                    <li>Aanmelden</li>
                    <li>Regisreren</li>
                  </ul>-->
              </a></li>
              @else
                <li><a href="{{route('Profiel')}}"><i class="fas fa-user"></i></a></li>
              @endif
              <li><a href={{route('Media')}}><i class="fas fa-play-circle"></i> Media</a></li>
              <li><a href="{{route('WatKanUZelfDoen')}}"><i class="fas fa-meh"></i> SOS</a></li>
        </ul>
      </div>
    </nav>

      </div>

      <nav>
        <div class="melden">
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
        </div>
      </nav>

    </div>
  </body>
</html>
