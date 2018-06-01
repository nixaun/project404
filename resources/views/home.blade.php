@extends('layouts.default')

@section('content')
  <div class="wrapper content-body">
    <div class="content-split content-home cfx"> 
      <h1 class="header-home">Media</h1>
      @foreach ($media as $video)
        @if ($video->id == $randomArray1[$random1])
          @if($video->isAnonymous == 'on')
            <h2>Anoniem</h2>
          @else
            <h2>{{ $video->user->firstname}}</h2>
          @endif
          <h3>{{ $video->title}}</h3>
          <iframe width="720px" height="405px" src='{{$video->url}}' frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="media-iframe"></iframe>
        @endif
      @endforeach
    </div>

    <div class="content-split content-home">
      <h1 class="header-home">Verhaal</h1>
      @foreach ($verhalen as $verhaal)
        @if ($verhaal->id == $randomArray[$random])
          @if($verhaal->isAnonymous == 'on')
            <h2>Anoniem</h2>
          @else
            <h2>{{ $verhaal->user->firstname}}</h2>
          @endif
          <h3>{{ $verhaal->title}}</h3>
          <p>{{$verhaal->body}}</p>
        @endif
      @endforeach
    </div>
    <div class="content-split content-home">
      <h1 class="header-home">Onze Awesome Game</h1>
      <h3>[Game Naam]</h3>
        <a href="{{route('Game')}}"><img src="{{asset('images/logo_game_on.png')}}" /></a>
    </div>
  </div>
@endsection
