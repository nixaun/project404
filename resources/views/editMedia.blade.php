@extends('layouts.default')

@section('content')
  <div class="wrapper content-body">
    <div class="content-split content-home cfx">
      <a href = "/media" class="button-back"> ← Terug naar media</a>
      <form action = "{{$media->id}}" method = 'POST'>
        {{ csrf_field() }}

        <div class = 'register'>
          <label for = 'mediaTitle'>Titel (max. 255 tekens)</label>
          <input type = 'textarea' name = 'mediaTitle' id = 'mediaTitle'   value = "{{$media->title}}">
        </div>

        <div class = 'register'>
          <label for = 'mediaUrl'>Vertel hier je media:</label>
          <input type = 'textarea' name = 'mediaUrl' id = 'mediaUrl' value = "{{$media->url}}">
        </div>

        <div class = 'register'>
          <label>Plaats anoniem</label>
          <input class="checkbox" type="checkbox" name="mediaIsAnonymous" id = 'mediaIsAnonymous' @if($media->isAnonymous == 'on') checked @endif >
        </div>

        <div class = 'register'>
          <button class = 'button-form' type = 'submit'>
            Pas media aan
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection
