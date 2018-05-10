@extends('layouts.default')

@section('content')
  <div class="wrapper">
    <div class = 'content-media'>
        @if (Auth::guard('admin')->check())
          @foreach ($media as $video)
            <div class="content-split">
              @if($video->isAnonymous == 'on')
                <h2>Anoniem</h2>    
              @else
                <h2>{{ $video->user->firstname}}</h2>
              @endif
              <h3>{{ $video->title}}</h3>
              <iframe width="720px" height="405px" src='{{$video->url}}' frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

              @if (!($video->isChecked))
                <form action="media/goedkeuren/{{$video->id}}" method="POST">
                    {{ csrf_field() }}
                  <button type="submit" name = "goedkeuren">
                    Goedkeuren
                  </button>
                </form>

                <form action="media/verwijderen/{{$video->id}}" method="POST">
                    {{ csrf_field() }}
                  <button type="submit" name = "delete">
                    Niet goedkeuren
                  </button>
                </form>
              @endif

              @if($video->isChecked)
                <button type="submit" name = "goedkeuren" disabled>
                  Goedkeuren
                </button>

                <form action="media/verwijderen/{{$video->id}}" method="POST">
                    {{ csrf_field() }}
                  <button type="submit" name = "delete">
                    Niet goedkeuren
                  </button>
                </form>
              @endif
            </div>
          @endforeach
        @endif

        @if (Auth::user())
          @foreach ($media as $video)
            @if (($video->isChecked))
              <div class="content-split">
                @if($video->isAnonymous == 'off')
                  <h2>{{ $video->user->firstname}}</h2>
                @else
                  <h2>Anoniem</h2>
                @endif
                <h3>{{ $video->title}}</h3>
                <iframe width="720px" height="405px" src='{{$video->url}}' frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

                @if(Auth::user()->id == $video->user_id)
                  <a href = "media/wijzigen/{{$video->id}}">Wijzigen</a>
                  <form action="media/verwijderen/{{$video->id}}" method="POST">
                      {{ csrf_field() }}
                    <button type="submit" name = "delete">
                      Verwijderen
                    </button>
                  </form>
                @endif
              </div>
            @endif
          @endforeach
          <a href = "media/toevoegen">Upload hier je eigen video</a>
        @endif

        @if(!(Auth::guard('web')->check()) && !(Auth::guard('admin')->check()))
          @foreach ($media as $video)
            @if (($video->isChecked))
              <div class="content-split">
                @if($video->isAnonymous == 'off')
                  <h2>{{ $video->user->firstname}}</h2>
                @else
                  <h2>Anoniem</h2>
                @endif
                <h3>{{ $video->title}}</h3>
                <iframe width="720px" height="405px" src='{{$video->url}}' frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
            @endif
          @endforeach
          <a href = "login">Log in om je eigen video toe te voegen</a>
        @endguest
    </div>
  </div>
@endsection
