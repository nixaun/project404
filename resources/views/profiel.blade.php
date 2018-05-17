@extends('layouts.default')

@section('content')
  <div class="wrapper">
    <div class="content-split content-home">
      <h1>Profiel</h1>
      @foreach($user as $profile)
        @if(Auth::user()->name == $profile->name)
          <p>Naam: {{$profile->name}}</p>
          <p>Voornaam: {{$profile->firstname}}</p>
          <p>Geboortedatum: </p>
          <p>Gebruikersnaam: {{$profile->username}}</p>
          <p>E-mail: {{$profile->email}}</p>
          <a href = '/profiel/wijzigen/{{$profile->id}}'>Profiel wijzigen</p>
        @endif
      @endforeach
    </div>
  </div>
@endsection
