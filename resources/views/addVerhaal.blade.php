@extends('layouts.default')

@section('content')
  <div class="wrapper">
    <div class="content-split content-home">
      <form class = 'form-horizontal' action = "{{route('insertVerhaal')}}" method = 'POST'>
        {{ csrf_field() }}

        <div class = 'form-group'>
          <label class = 'col-sm-3 control-label' for = 'verhaalTitle'>Titel (max. 255 tekens)</label>

          <div class = 'col-sm-6'>
            <input class = 'form-control' type = 'textarea' name = 'verhaalTitle' id = 'verhaalTitleT'>
          </div>
        </div>

        <div class = 'form-group'>
          <label class = 'col-sm-3 control-label' for = 'verhaalBody'>Vertel hier je verhaal: </label>

          <div class = 'col-sm-6'>
            <input class = 'form-control' type = 'textarea' name = 'verhaalBody' id = 'verhaalBody'>
          </div>
        </div>

        <div class = 'form-group'>
          <button class = 'btn btn-default' type = 'submit'>
            Add article
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection