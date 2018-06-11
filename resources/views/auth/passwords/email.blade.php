@extends('layouts.app')

@section('content')
<div class="wrapper content-small content-body content-split content-home cfx">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="form-header">Reset Password</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}" class="form-container">
                        @csrf

                        <div class="register-login">
                            <label for="email">
                              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                              <div class = "label-text">E-mail adres</div>
                            </label>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="register-login">
                                <button type="submit" class="button-form">
                                    Stuur wachtwoordlink
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
