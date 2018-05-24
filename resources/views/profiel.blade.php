@extends('layouts.default')

@section('content')
  <div class="wrapper content-small content-body">
    <div class="content-split content-home form-container cfx">
      <h1 class="form-header">Profiel</h1>
      @foreach($user as $profile)
        @if(Auth::user()->name == $profile->name)
          <h3>Naam: {{$profile->name}}</h3>
          <h3>Voornaam: {{$profile->firstname}}</h3>
          <h3>Geboortedatum: </h3>
          <h3>Gebruikersnaam: {{$profile->username}}</h3>
          <h3>E-mail: {{$profile->email}}</h3>
          <a class="button-profile" href='/profiel/wijzigen/{{$profile->id}}'>Profiel wijzigen</a>
        @endif
      @endforeach
    </div>
  </div>
@endsection
