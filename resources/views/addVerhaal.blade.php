@extends('layouts.default')

@section('content')
  <div class="wrapper content-body">
    <div class="content-split content-home cfx">
      <a href = "/verhalen" class="button-back"> ← Terug naar verhalen</a>
      <form action = "{{route('insertVerhaal')}}" method = 'POST'>
        {{ csrf_field() }}
        <div class = 'register-login'>
          <label>
            <input type = 'textarea' name = 'verhaalTitle' id = 'verhaalTitle' required autofocus>
            <div class = "label-text">Titel (max. 255 tekens)</div>
          </label>
        </div>

        <div class = 'register-login'>
          <label>
            <textarea type = 'textarea' name = 'verhaalBody' id = 'verhaalBody' required autofocus></textarea>
            <div class = "label-text">Vertel hier je verhaal: </div>
          </label>
        </div>

        <div class = 'register-checkbox'>
          <label> Plaats anoniem</label>
          <input class="checkbox" type="checkbox" name="verhaalIsAnonymous" id = 'verhaalIsAnonymous'>
        </div>

        <div class = 'register'>
          <button class = 'button-form' type = 'submit'>
            Voeg toe
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection
