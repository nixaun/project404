@extends('layouts.default')

@section('content')
  <form method="POST" action="{{ route('login') }}">
    @csrf
    <div class = "login">
      <label for = "username">Gebruikersnaam</label>
      <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

      @if ($errors->has('username'))
          <span class="invalid-feedback">
              <strong>{{ $errors->first('username') }}</strong>
          </span>
      @endif
    </div>

    <div class = "login">
      <label for = "password">Paswoord</label>
      <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

      @if ($errors->has('password'))
          <span class="invalid-feedback">
              <strong>{{ $errors->first('password') }}</strong>
          </span>
      @endif
    </div>

    <div class = "login">
      <div class="checkbox">
          <label>
              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Onthoud mij
          </label>
      </div>
    </div>

    <div class = "login">
      <button type="submit">
          Login
      </button>

      <a class="btn btn-link" href="{{ route('password.request') }}">
          Paswoord vergeten?
      </a>
    </div>
  </form>
@endsection
