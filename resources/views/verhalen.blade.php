@extends('layouts.default')

@section('content')
  <div class="wrapper">
    <div class = 'content-verhalen'>
        @guest
          @foreach ($verhalen as $verhaal)
            @if (!($verhaal->isChecked))
              <div class="content-split">
                <h2>{{ $verhaal->user->firstname}}</h2>
                <p> {{$verhaal->body}} </p>
              </div>
            @endif
          @endforeach
        @else
          @foreach ($verhalen as $verhaal)
            @if (!($verhaal->isChecked))
              <div class="content-split">
                <h2>{{ $verhaal->user->firstname}}</h2>
                <p> {{$verhaal->body}} </p>

                @if(Auth::user()->id == $verhaal->user_id)
                  <a href = "verhalen/wijzigen/{{$verhaal->id}}">Wijzigen</a>
                @endif
              </div>
            @endif
          @endforeach
        @endguest
    </div>
  </div>
@endsection
