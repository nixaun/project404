@extends('layouts.default')

@section('content')
      <form action = "{{$user->id}}" method = 'POST' class="content-body content-split content-home cfx">
        <h1 class="form-header">Profiel</h1>
        {{ csrf_field() }}
        <div class="form-container">

        <div class = "register-login">
          <label>
            <input type = 'textarea' name = 'userUsername' id = 'userUsername'   value = "{{$user->username}}" required autofocus>
            <div class = "label-text">Gebruikersnaam</div>
          </label>
        </div>

        <div class = "register-login">
          <label>
            <input type = 'textarea' name = 'userEmail' id = 'userUrl' value = "{{$user->email}}" required autofocus>
            <div class = "label-text">E-mail adres</div>
          </label>
        </div>

          <div class="register">
            <button type = 'submit' class="button-form">
              Pas aan
            </button>
          </div>
        </div>
      </form>
@endsection
