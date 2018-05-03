@extends('layouts.default')

@section('content')
  <div class="wrapper">
    <div class = 'content-verhalen'>
      @foreach ($verhalen as $verhaal)
        <div class="content-split">
          <h2>{{ $verhaal->user->firstname}}</h2>
          <p> {{$verhaal->body}} </p>
        </div>
      @endforeach
    </div>
  </div>
@endsection
