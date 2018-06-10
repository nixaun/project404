@extends('layouts.default')

@section('content')
  <div class="wrapper content-body">
    <div class="content-split content-home cfx">
      <a href = "/media" class="button-back"> ← Terug naar media</a>
      <form action = "{{route('insertMedia')}}" method = 'POST'>
        {{ csrf_field() }}

        <div class = 'register-login'>
          <label>
            <input type = 'textarea' name = 'mediaTitle' id = 'mediaTitle' value="{{ old('mediaTitle') }}" required autofocus>
            <div class = "label-text">Titel (max. 255 tekens)</div>
          </label>

          @if ($errors->has('mediaTitle'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('mediaTitle') }}</strong>
              </span>
          @endif
        </div>

        <div class = 'register-login'>
          <label>
            <input type = 'textarea' name = 'mediaUrl' id = 'mediaUrl' value="{{ old('mediaUrl') }}" required autofocus>
            <div class = "label-text">Url</div>
          </label>

          @if ($errors->has('mediaUrl'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('mediaUrl') }}</strong>
              </span>
          @endif
        </div>

        <div class = 'register-checkbox'>
          <label> Plaats anoniem</label>
          <input class="checkbox" type="checkbox" name="mediaIsAnonymous" id = 'mediaIsAnonymous'>
        </div>

        <div class = 'register'>
          <button class = 'button-form' type = 'submit'>
            Voeg video toe
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection
