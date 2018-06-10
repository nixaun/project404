@extends('layouts.default')

@section('content')

    <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <link rel="stylesheet" href="TemplateData/style.css">
    <script src="{{ asset('TemplateData/UnityProgress.js') }}"></script>
    <script src="{{ asset('Build/UnityLoader.js') }}"></script>
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "Build/build-10juni-14u.json", {onProgress: UnityProgress});
    </script>

    <div class="webgl-content">
      <div id="gameContainer" style="width: 1280px; height: 720px"></div>
      <div class="footer">
        <div class="webgl-logo"></div>
        <div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
        <div class="title">Game Project Antwerpen</div>
      </div>
    </div>

@endsection
