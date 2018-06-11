@extends('layouts.default')

@section('content')

    <link rel="shortcut icon" href="{{ asset('TemplateData/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('TemplateData/style.css') }}">
    <script src="{{ asset('TemplateData/UnityProgress.js') }}"></script>
    <script src="{{ asset('Build/UnityLoader.js') }}"></script>
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "Build/build-10juni-14u.json", {onProgress: UnityProgress});
    </script>

    <div class="webgl-content">
      <div id="gameContainer"></div>
      <div class="footer">
        <div class="webgl-logo"></div>
        <div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
        <div class="title">Game Project Antwerpen</div>
      </div>
    </div>

@endsection
