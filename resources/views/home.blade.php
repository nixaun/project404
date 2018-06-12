@extends('layouts.default')

@section('content')
<div class="wrapper content-body">
  <div class="content-split content-home cfx">
    <h1 class="header-home">Welkom op onze site</h1>
        <p>Wil je meer te weten komen over de problemen rond seksuele intimidatie op school, je steun uiten voor anderen met dit probleem of jezelf informeren?
        Dan ben je op het juiste adres.</p>
        <p class="cfx">Wil je meer informatie over seksuele intimidatie op school? </br><a href="{{route('WatIsSeksueleIntimidatie')}}" class="link-welkom">Klik dan hier</a></p>
        <p class="cfx">Heb je zelf hulp nodig of ken je iemand die hulp kan gebruiken? </br><a href="{{route('WatKanUZelfDoen')}}" class="link-welkom">Klik dan hier</a></p>
        <p class="cfx">Wil je je hart luchten en je verhaal online zetten of lezen welke ervaringen anderen hebben gehad? </br><a href="{{route('Verhalen')}}" class="link-welkom">Klik dan hier</a></p>
        <p class="cfx">Heb je een interessant filmpje dat kan helpen of wil je zelf zoeken naar filmpjes? </br><a href="{{route('Media')}}" class="link-welkom">Klik dan hier</a></p>
  </div>

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
      <h1 class="header-home">Test je kennis</h1>
      <h3>Speel hier onze quiz!</h3>
        <a href="{{route('Game')}}"><img src="{{asset('images/logo_game_on.png')}}" /></a>
    </div>
  </div>
@endsection
