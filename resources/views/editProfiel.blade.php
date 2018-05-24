@extends('layouts.default')

@section('content')
  <div class="wrapper content-body">
    <div class="content-split content-home cfx">
      <h1 class="form-header">Profiel</h1>
      <form action = "{{$user->id}}" method = 'POST'>
        {{ csrf_field() }}

        <div class="register">
          <label for = 'userUsername'>Gebruikersnaam</label>
          <input type = 'textarea' name = 'userUsername' id = 'userUsername'   value = "{{$user->username}}">
        </div>

        <div class="register">
          <label for = 'userEmal'>E-mail:</label>
          <input type = 'textarea' name = 'userEmail' id = 'userUrl' value = "{{$user->email}}">
        </div>

        <div class="register">
          <button type = 'submit' class="button-form">
            Pas aan
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection
