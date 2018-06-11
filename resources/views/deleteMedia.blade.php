@extends('layouts.default')

@section('content')
  <div class="wrapper content-body content-media">
    <div class = 'content-home cfx'>
      <div>
        {{ session('danger') }}

      <div class="content-split cfx">
        <form action = "bevestigen/{{$video->id}}" method = "POST">
          {{ csrf_field() }}

          <p>Ben je zeker dat je deze video wilt verwijderen?</p>
          <button type = "submit" name = "delete" class="button-all">Verwijderen</button>

          <button type = "submit" name = "cancel" class="button-all">Cancel</button>
        </form>
        </div>
      </div>

        @if (Auth::guard('admin')->check())
          <form action = "media" method = "POST">
            {{ csrf_field() }}

            <select name = "filters">
              <option value = "name">Naam</option>
              <option value = "date">Datum (nieuwste eerst)</option>
              <option value = "dateOld">Datum (oudste eerst)</option>
            </select>

            <button type = "submit" name = "filter">
              Sorteren
            </button>
          </form>

          @foreach ($media as $video)
            <div class="content-split cfx">
              @if($video->isAnonymous == 'on')
                <h2>Anoniem</h2>
              @else
                <h2>{{ $video->user->firstname}}</h2>
              @endif
              <h3>{{ $video->title}}</h3>
              <iframe width="720px" height="405px" src='{{$video->url}}' frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="media-iframe"></iframe>

              @if (!($video->isChecked))
                <form action="media/goedkeuren/{{$video->id}}" method="POST">
                    {{ csrf_field() }}
                  <button type="submit" name = "goedkeuren" class="button-all">
                    Goedkeuren
                  </button>
                </form>


                <form action="media/verwijderen/{{$video->id}}" method="POST">
                    {{ csrf_field() }}
                  <button type="submit" name = "delete" class="button-all">
                    Niet goedkeuren
                  </button>
                </form>
              @endif

              @if($video->isChecked)
                <button type="submit" name = "goedkeuren" class="button-all" disabled>
                  Goedkeuren
                </button>

                <form action="media/verwijderen/{{$video->id}}" method="GET">
                    {{ csrf_field() }}
                  <button type="submit" name = "delete" class="button-all">
                    Niet goedkeuren
                  </button>
                </form>
              @endif
            </div>
          @endforeach
        @endif

        @if (Auth::user())
          <form action = "media" method = "POST">
            {{ csrf_field() }}

            <select name = "filters">
              <option value = "name">Naam</option>
              <option value = "date">Datum (nieuwste eerst)</option>
              <option value = "dateOld">Datum (oudste eerst)</option>
            </select>

            <button type = "submit" name = "filter">
              Sorteren
            </button>
          </form>

          @foreach ($media as $video)
            @if (($video->isChecked))
              <div class="content-split cfx">
                @if($video->isAnonymous == 'off')
                  <h2>{{ $video->user->firstname}}</h2>
                @else
                  <h2>Anoniem</h2>
                @endif
                <h3>{{ $video->title}}</h3>
                <iframe width="720px" height="405px" src='{{$video->url}}' frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="media-iframe"></iframe>

                @if(Auth::user()->id == $video->user_id)
                  <a href = "media/wijzigen/{{$video->id}}" class="button-edit">Wijzigen</a>
                  <form action="media/verwijderen/{{$video->id}}" method="GET">
                      {{ csrf_field() }}
                    <button type="submit" name = "delete" class="button-del">
                      Verwijderen
                    </button>
                  </form>
                @endif
              </div>
            @endif
          @endforeach
          <a href = "media/toevoegen" class="button-add">Upload hier je eigen video</a>
        @endif

        @if(!(Auth::guard('web')->check()) && !(Auth::guard('admin')->check()))
          <form action = "media" method = "POST">
            {{ csrf_field() }}

            <select name = "filters">
              <option value = "name">Naam</option>
              <option value = "date">Datum (nieuwste eerst)</option>
              <option value = "dateOld">Datum (oudste eerst)</option>
            </select>

            <button type = "submit" name = "filter">
              Sorteren
            </button>
          </form>

          @foreach ($media as $video)
            @if (($video->isChecked))
              <div class="content-split cfx">
                @if($video->isAnonymous == 'off')
                  <h2>{{ $video->user->firstname}}</h2>
                @else
                  <h2>Anoniem</h2>
                @endif
                <h3>{{ $video->title}}</h3>
                <iframe width="720px" height="405px" src='{{$video->url}}' frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="media-iframe"></iframe>
              </div>
            @endif
          @endforeach
          <a href = "login" class="button-form cfx">Log in om je eigen video toe te voegen</a>
        @endguest
    </div>
  </div>
@endsection
