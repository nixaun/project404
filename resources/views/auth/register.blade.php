@extends('layouts.default')

@section('content')
<form method = "POST" action="{{ route('register') }}">
  @csrf

  <div class = "register">
    <label for="name" class="col-md-4 col-form-label text-md-right">Naam</label>
    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

    @if ($errors->has('name'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
  </div>

  <div class = "register">
    <label for="firstname" class="col-md-4 col-form-label text-md-right">Voornaam</label>
    <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" required autofocus>

    @if ($errors->has('firstname'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('firstname') }}</strong>
        </span>
    @endif
  </div>

  <div class = "register">
    <label for="birthdate" class="col-md-4 col-form-label text-md-right">Geboortedatum</label>
    <input type="date" name="birthdate">

    @if ($errors->has('birthdate'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('birthdate') }}</strong>
        </span>
    @endif
  </div>

  <div class = "register">
    <label for="username" class="col-md-4 col-form-label text-md-right">Gebruikersnaam</label>

    <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required>

    @if ($errors->has('username'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('username') }}</strong>
        </span>
    @endif
  </div>

  <div class = "register">
    <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail adres</label>
    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

    @if ($errors->has('email'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
  </div>

  <div class = "register">
    <label for="password" class="col-md-4 col-form-label text-md-right">Paswoord</label>
    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

    @if ($errors->has('password'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
  </div>

  <div class = "register">
    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Bevestig wachtwoord</label>
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
  </div>

  <div class = "register">
    <button type="submit" class="btn btn-primary">
        Registreer
    </button>
  </div>

</form>

@endsection
