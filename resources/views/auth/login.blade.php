@extends('layouts.default')

@section('content')
  <form method="POST" action="{{ route('login') }}" class="wrapper content-body content-split content-home cfx">
    <h1 class="form-header">Meld je aan</h1>
    @csrf
    <div class="form-container">
      <div class = "register-login">
        <label for = "username">Gebruikersnaam</label>
        <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

        @if ($errors->has('username'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('username') }}</strong>
            </span>
        @endif
      </div>

      <div class = "register-login">
        <label for = "password">Paswoord</label>
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

        @if ($errors->has('password'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
      </div>

      <div class = "register-login">
        <label>Onthoud mij</label>
        <input class="checkbox" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
      </div>

      <div class = "register-login">
        <button type="submit" class="button-form">
            Login
        </button>

        <a class="btn btn-link lost-pass" href="{{ route('password.request') }}">
            Paswoord vergeten?
        </a>
      </div>
    </div>
  </form>
@endsection
