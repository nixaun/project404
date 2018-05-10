@extends('layouts.default')

@section('content')
  <div class="wrapper">
    <div class="content-split content-home">
      <form class = 'form-horizontal' action = "{{$verhaal->id}}" method = 'POST'>
        {{ csrf_field() }}

        <div class = 'form-group'>
          <label class = 'col-sm-3 control-label' for = 'verhaalTitle'>Titel (max. 255 tekens)</label>

          <div class = 'col-sm-6'>
            <input class = 'form-control' type = 'textarea' name = 'verhaalTitle' id = 'verhaalTitle'   value = "{{$verhaal->title}}">
          </div>
        </div>

        <div class = 'form-group'>
          <label class = 'col-sm-3 control-label' for = 'verhaalBody'>Vertel hier je verhaal:</label>

          <div class = 'col-sm-6'>
            <input class = 'form-control' type = 'textarea' name = 'verhaalBody' id = 'verhaalBody' value = "{{$verhaal->body}}">
          </div>
        </div>

        <div class = 'form-group'>
          <div class="checkbox">
              <label>
                  <input type="checkbox" name="verhalenIsAnonymous" id = 'verhalenIsAnonymous' @if($verhaal->isAnonymous == 'on') checked @endif > Plaats anoniem
              </label>
          </div>
        </div>

        <div class = 'form-group'>
          <button class = 'btn btn-default' type = 'submit'>
            Pas verhaal aan
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection
