@extends('layouts.default')

@section('content')
  <div class="wrapper content-small content-body">
    <div class="content-split content-home form-container cfx">
      <h1 class="form-header">Profiel</h1>
      @if (Auth::guard('admin')->check()))
        @foreach($admins as $profile)
          <div class="form-container">
            <h3>Naam: {{$profile->name}}</h3>
            <h3>Voornaam: {{$profile->firstname}}</h3>
            <h3>Gebruikersnaam: {{$profile->username}}</h3>
            <h3>E-mail: {{$profile->email}}</h3>
            <a class="button-profile" href='/profiel/wijzigen/{{$profile->id}}'>Profiel wijzigen</a>
          </div>
        @endforeach
      @endif

      @if (Auth::user())
        @foreach($user as $profile)
          @if(Auth::user()->username == $profile->username)
          <div class="form-container">
            <h3>Naam: {{$profile->name}}</h3>
            <h3>Voornaam: {{$profile->firstname}}</h3>
            <h3>Gebruikersnaam: {{$profile->username}}</h3>
            <h3>E-mail: {{$profile->email}}</h3>
            <h3>Geboortedatum: <?php $newDate = date("d-m-Y", strtotime($profile->birthdate))?>{{$newDate}}</h3>
            <a class="button-profile" href='/profiel/wijzigen/{{$profile->id}}'>Profiel wijzigen</a>
          </div>
          @endif
        @endforeach
      @endif
    </div>
  </div>
@endsection
