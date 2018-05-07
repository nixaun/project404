@extends('layouts.default')

@section('content')
  <div class="wrapper">
    <div class = 'content-verhalen'>
        @if (Auth::guard('admin')->check())
          @foreach ($verhalen as $verhaal)
            <div class="content-split">
              <h2>{{ $verhaal->user->firstname}}</h2>
              <h3>{{ $verhaal->title}}</h3>
              <p> {{$verhaal->body}} </p>

              @if (!($verhaal->isChecked))
                <form action="verhalen/goedkeuren/{{$verhaal->id}}" method="POST">
                    {{ csrf_field() }}
                  <button type="submit" name = "goedkeuren">
                    Goedkeuren
                  </button>
                </form>

                <form action="verhalen/verwijderen/{{$verhaal->id}}" method="POST">
                    {{ csrf_field() }}
                  <button type="submit" name = "delete">
                    Niet goedkeuren
                  </button>
                </form>
              @endif

              @if($verhaal->isChecked)
                <button type="submit" name = "goedkeuren" disabled>
                  Goedkeuren
                </button>

                <form action="verhalen/verwijderen/{{$verhaal->id}}" method="POST">
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
          @foreach ($verhalen as $verhaal)
            @if (($verhaal->isChecked))
              <div class="content-split">
                <h2>{{ $verhaal->user->firstname}}</h2>
                <h3>{{ $verhaal->title}}</h3>
                <p> {{$verhaal->body}} </p>

                @if(Auth::user()->id == $verhaal->user_id)
                  <a href = "verhalen/wijzigen/{{$verhaal->id}}">Wijzigen</a>
                  <form action="verhalen/verwijderen/{{$verhaal->id}}" method="POST">
                      {{ csrf_field() }}
                    <button type="submit" name = "delete">
                      Verwijderen
                    </button>
                  </form>
                @endif
              </div>
            @endif
          @endforeach
          <a href = "verhalen/toevoegen">Vertel hier je eigen verhaal</a>
        @endif

        @if(!(Auth::guard('web')->check()) && !(Auth::guard('admin')->check()))
          @foreach ($verhalen as $verhaal)
            @if (!($verhaal->isChecked))
              <div class="content-split">
                <h2>{{ $verhaal->user->firstname}}</h2>
                <h3>{{ $verhaal->title}}</h3>
                <p> {{$verhaal->body}} </p>
              </div>
            @endif
          @endforeach
        @endguest
    </div>
  </div>
@endsection
