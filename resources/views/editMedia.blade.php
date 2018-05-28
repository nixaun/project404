@extends('layouts.default')

@section('content')
  <div class="wrapper content-body">
    <div class="content-split content-home cfx">
      <a href = "/media" class="button-back"> ← Terug naar media</a>
      <form action = "{{$media->id}}" method = 'POST'>
        {{ csrf_field() }}

        <div class = 'register-login'>
          <label>
            <input type = 'textarea' name = 'mediaTitle' id = 'mediaTitle' required autofocus value = "{{$media->title}}">
            <div class = "label-text">Titel (max. 255 tekens)</div>
          </label>
        </div>

        <div class = 'register-login'>
          <label>
            <input type = 'textarea' name = 'mediaUrl' id = 'mediaUrl' required autofocus value = "{{$media->url}}">
            <div class = "label-text">Url</div>
          </label>
        </div>

        <div class = 'register-checkbox'>
          <label> Plaats anoniem</label>
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
