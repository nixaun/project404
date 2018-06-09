@extends('layouts.default')

@section('content')
<form method = "POST" action="{{ route('register') }}" class="content-body content-split content-home cfx">
  <h1 class="form-header">Registreer hier</h1>
  @csrf

    <div class = "register-login">
      <label>
        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
        <div class = "label-text">Naam</div>
      </label>

      @if ($errors->has('name'))
          <span class="invalid-feedback">
              <strong>{{ $errors->first('name') }}</strong>
          </span>
      @endif
    </div>

    <div class = "register-login">
      <label>
        <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" required autofocus>
        <div class = "label-text">Voornaam</div>
      </label>

      @if ($errors->has('firstname'))
          <span class="invalid-feedback">
              <strong>{{ $errors->first('firstname') }}</strong>
          </span>
      @endif
    </div>

    <div class = "register-login">
      <label>
        <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>
        <div class = "label-text">Gebruikersnaam</div>
      </label>

      @if ($errors->has('username'))
          <span class="invalid-feedback">
              <strong>{{ $errors->first('username') }}</strong>
          </span>
      @endif
    </div>

    <div class = "register-login">
      <label>
        <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
        <div class = "label-text">E-mail adres</div>
      </label>

      @if ($errors->has('email'))
          <span class="invalid-feedback">
              <strong>{{ $errors->first('email') }}</strong>
          </span>
      @endif
    </div>

    <div class = "register-login register-date">
      <label>
        <input id="birthdate" type="date" class="form-control{{ $errors->has('birthdate') ? ' is-invalid' : '' }}" name="birthdate" value="{{ old('birthdate') }}" required autofocus>
        <div class = "label-text">Geboortedatum</div>
      </label>

      @if ($errors->has('birthdate'))
          <span class="invalid-feedback">
              <strong>{{ $errors->first('birthdate') }}</strong>
          </span>
      @endif
    </div>

    <div class = "register-login">
      <label>
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
        <div class = "label-text">Wachtwoord</div>
      </label>

      @if ($errors->has('password'))
          <span class="invalid-feedback">
              <strong>{{ $errors->first('password') }}</strong>
          </span>
      @endif
    </div>

    <div class = "register-login">
      <label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        <div class = "label-text">Bevestig wachtwoord</div>
      </label>
    </div>

    <div>
      <button type="submit" class="button-form">
          Registreer
      </button>
    </div>
  </div>
</form>

@endsection
