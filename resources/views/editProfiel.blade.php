@extends('layouts.default')

@section('content')
  <div class="wrapper">
    <div class="content-split content-home">
      <h1>Profiel</h1>
      <form class = 'form-horizontal' action = "{{$user->id}}" method = 'POST'>
        {{ csrf_field() }}

        <div class = 'form-group'>
          <label class = 'col-sm-3 control-label' for = 'userUsername'>Gebruikersnaam</label>

          <div class = 'col-sm-6'>
            <input class = 'form-control' type = 'textarea' name = 'userUsername' id = 'userUsername'   value = "{{$user->username}}">
          </div>
        </div>

        <div class = 'form-group'>
          <label class = 'col-sm-3 control-label' for = 'userEmal'>E-mail:</label>

          <div class = 'col-sm-6'>
            <input class = 'form-control' type = 'textarea' name = 'userEmail' id = 'userUrl' value = "{{$user->email}}">
          </div>
        </div>

        <div class = 'form-group'>
          <button class = 'btn btn-default' type = 'submit'>
            Pas user aan
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection
