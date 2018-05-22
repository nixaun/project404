@extends('layouts.default')

@section('content')
  <div class="wrapper content-body">
    <div class="content-split content-home cfx">
      <a href = "/verhalen" class="button-back"> ← Terug naar verhalen</a>
      <form action = "{{route('insertVerhaal')}}" method = 'POST'>
        {{ csrf_field() }}

        <div class = 'register'>
          <label for = 'verhaalTitle'>Titel (max. 255 tekens)</label>
          <input type = 'textarea' name = 'verhaalTitle' id = 'verhaalTitleT'>
        </div>

        <div class = 'register-text'>
          <label for = 'verhaalBody'>Vertel hier je verhaal: </label>
          <textarea type = 'textarea' name = 'verhaalBody' id = 'verhaalBody'></textarea>
        </div>

        <div class = 'register'>
          <label>Plaats anoniem</label>
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
