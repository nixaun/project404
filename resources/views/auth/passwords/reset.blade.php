@extends('layouts.app')

@section('content')

<div class="wrapper content-small content-body content-split content-home cfx">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="form-header">Reset Password</div>


                <div class="card-body">
                    <form method="POST" action="{{ route('password.request') }}" class="form-container">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="register-login">
                            <label for="email">
                              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email or old('email') }}" required autofocus>
                              <div class = "label-text">E-mail adres</div>
                            </label>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="register-login">
                            <label for="password">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                <div class = "label-text">Wachtwoord</div>
                            </label>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="register-login">
                            <label for="password-confirm">
                                <input id="password-confirm" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" required>
                                <div class = "label-text">Bevestig wachtwoord</div>
                            </label>
                                @if ($errors->has('password_confirmation'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="register-login">
                            <button type="submit" class="button-form">
                                Pas wachtwoord aan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
