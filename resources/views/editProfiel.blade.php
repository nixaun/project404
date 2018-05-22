@extends('layouts.default')

@section('content')
  <div class="wrapper content-body">
    <div class="content-split content-home">
      <h1>Profiel</h1>
      <form action = "{{$user->id}}" method = 'POST'>
        {{ csrf_field() }}

        <div>
          <label for = 'userUsername'>Gebruikersnaam</label>

          <div>
            <input type = 'textarea' name = 'userUsername' id = 'userUsername'   value = "{{$user->username}}">
          </div>
        </div>

        <div>
          <label for = 'userEmal'>E-mail:</label>

          <div>
            <input type = 'textarea' name = 'userEmail' id = 'userUrl' value = "{{$user->email}}">
          </div>
        </div>

        <div>
          <button type = 'submit'>
            Pas user aan
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection
