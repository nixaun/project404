@extends('layouts.default')

@section('content')
  <div class="wrapper">
    <div class = 'content-verhalen'>
        @guest
          @foreach ($verhalen as $verhaal)
            @if (!($verhaal->isChecked))
              <div class="content-split">
                <h2>{{ $verhaal->user->firstname}}</h2>
                <h3>{{ $verhaal->title}}</h3>
                <p> {{$verhaal->body}} </p>
              </div>
            @endif
          @endforeach
        @else
          @foreach ($verhalen as $verhaal)
            @if (!($verhaal->isChecked))
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
                @endif
              </div>
            @endif
          @endforeach
          <a href = "verhalen/toevoegen">Vertel hier je eigen verhaal</a>
        @endguest
    </div>
  </div>
@endsection
