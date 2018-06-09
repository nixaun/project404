@extends('layouts.default')

@section('content')
  <form method="POST" action="{{ route('login') }}" class="wrapper content-small content-body content-split content-home cfx">
    <h1 class="form-header">Meld je aan</h1>
    @csrf
    <div class="form-container">
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

        <a class="btn btn-link lost-pass" href="{{ route('password.request') }}">
            Paswoord vergeten?
        </a>
      </div>
    </div>
  </form>
@endsection
