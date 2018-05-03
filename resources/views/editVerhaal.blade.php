@extends('layouts.default')

@section('content')
  <div class="wrapper">
    <div class="content-split content-home">
      <form class = 'form-horizontal' action = "{{$verhaal->id}}" method = 'POST'>
        {{ csrf_field() }}

        <div class = 'form-group'>
          <label class = 'col-sm-3 control-label' for = 'verhaalBody'>Vertel hier je verhaal:</label>

          <div class = 'col-sm-6'>
            <input class = 'form-control' type = 'text' name = 'verhaalBody' id = 'verhaalBody' value = "{{$verhaal->body}}">
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
