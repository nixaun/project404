@extends('layouts.default')

@section('content')
  <div class="wrapper content-body">
    <div class="content-split content-home cfx">
      <a href = "/media" class="button-back"> ← Terug naar media</a>
      <form action = "{{route('insertMedia')}}" method = 'POST'>
        {{ csrf_field() }}

        <div class = 'register'>
          <label for = 'mediaTitle'>Titel (max. 255 tekens)</label>
          <input type = 'textarea' name = 'mediaTitle' id = 'mediaTitle'>
        </div>

        <div class = 'register'>
          <label for = 'mediaUrl'>Url </label>
          <input type = 'textarea' name = 'mediaUrl' id = 'mediaUrl'>
        </div>

        <div class = 'register'>
          <label> Plaats anoniem</label>
          <input class="checkbox" type="checkbox" name="mediaIsAnonymous" id = 'mediaIsAnonymous'>
        </div>

        <div class = 'register'>
          <button class = 'button-form' type = 'submit'>
            Add article
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection
