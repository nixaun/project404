@extends('layouts.default')

@section('content')
  <div class="wrapper">
    <div class="content-split content-home cfx">
      <form class = 'form-horizontal' action = "{{$verhaal->id}}" method = 'POST'>
        {{ csrf_field() }}

        <div class = 'register'>
          <label class = 'col-sm-3 control-label' for = 'verhaalTitle'>Titel (max. 255 tekens)</label>
          <input class = 'form-control' type = 'textarea' name = 'verhaalTitle' id = 'verhaalTitle'   value = "{{$verhaal->title}}">
        </div>

        <div class = 'register-text'>
          <label class = 'col-sm-3 control-label' for = 'verhaalBody'>Vertel hier je verhaal:</label>
          <textarea class = 'form-control' type = 'textarea' name = 'verhaalBody' id = 'verhaalBody' value = "{{$verhaal->body}}"></textarea>
        </div>

        <div class = 'register'>
          <label> Plaats anoniem</label>
          <input  class="checkbox" type="checkbox" name="verhalenIsAnonymous" id = 'verhalenIsAnonymous' @if($verhaal->isAnonymous == 'on') checked @endif >
        </div>

        <div class = 'register'>
          <button class = 'button-form' type = 'submit'>
            Pas verhaal aan
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection
