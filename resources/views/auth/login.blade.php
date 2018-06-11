@extends('layouts.default')

@section('content')
  <form method="POST" action="{{ route('login') }}" class="wrapper content-small content-body content-split content-home cfx">
    <h1 class="form-header">Meld je aan</h1>
    @csrf
    <div class="form-container">
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
          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
          <div class = "label-text">Wachtwoord</div>
        </label>

        @if ($errors->has('password'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
      </div>

      <div class = "register-checkbox">
        <label>Onthoud mij</label>
        <input class="checkbox" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
      </div>

      <div class = "register-login">
        <button type="submit" class="button-form">
            Login
        </button>

        <div class = "login-links">
          <a class="btn btn-link lost-pass" href="{{ route('password.request') }}">
              Wachtwoord vergeten?
          </a>

          <a class = "btn btn-link lost-pass" href="{{ route('register') }}">
              Nog geen account?
          </a>
        </div>
      </div>
    </div>
  </form>
@endsection
