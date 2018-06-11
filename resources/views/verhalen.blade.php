@extends('layouts.default')

@section('content')
  <div class="wrapper content-body cfx">
    <div class = 'content-verhalen content-home'>
        @if (Auth::guard('admin')->check())
        <div class="form-filter cfx">
          <form action = "media" method = "POST">
            {{ csrf_field() }}

            <select name = "filters" class="form-list">
              <option value = "name">Titel</option>
              <option value = "date">Datum (nieuwste eerst)</option>
              <option value = "dateOld">Datum (oudste eerst)</option>
            </select>

            <button type = "submit" name = "filter" class="button-filter">
              Sorteren
            </button>
          </form>
        </div>

          @foreach ($verhalen as $verhaal)
            <div class="content-split cfx">
              @if($verhaal->isAnonymous == 'on')
                <h2>Anoniem (<?php $newDate = date("Y", strtotime($verhaal->user->birthdate))?><?php $age = date("Y") - $newDate ?>{{$age}})</h2>
              @else
                <h2>{{ $verhaal->user->firstname}} (<?php $newDate = date("Y", strtotime($verhaal->user->birthdate))?><?php $age = date("Y") - $newDate ?>{{$age}})</h2>
              @endif
              <h3>{{ $verhaal->title}}</h3>
              <p> {{$verhaal->body}} </p>

              @if (!($verhaal->isChecked))
                <form action="verhalen/goedkeuren/{{$verhaal->id}}" method="POST">
                    {{ csrf_field() }}
                  <button type="submit" name = "goedkeuren" class="button-all">
                    Goedkeuren
                  </button>
                </form>

                <form action="verhalen/verwijderen/{{$verhaal->id}}" method="GET">
                    {{ csrf_field() }}
                  <button type="submit" name = "delete" class="button-all">
                    Niet goedkeuren
                  </button>
                </form>
              @endif

              @if($verhaal->isChecked)
                <button type="submit" name = "goedkeuren" disabled class="button-all">
                  Goedkeuren
                </button>

                <form action="verhalen/verwijderen/{{$verhaal->id}}" method="GET">
                    {{ csrf_field() }}
                  <button type="submit" name = "delete" class="button-all">
                    Niet goedkeuren
                  </button>
                </form>
              @endif
            </div>
          @endforeach
        @endif

        @if (Auth::user())
        <div class="form-filter cfx">
          <form action = "media" method = "POST">
            {{ csrf_field() }}

            <select name = "filters" class="form-list">
              <option value = "name">Titel</option>
              <option value = "date">Datum (nieuwste eerst)</option>
              <option value = "dateOld">Datum (oudste eerst)</option>
            </select>

            <button type = "submit" name = "filter" class="button-filter">
              Sorteren
            </button>
          </form>
        </div>

          @foreach ($verhalen as $verhaal)
            @if (($verhaal->isChecked))
              <div class="content-split cfx">
                @if($verhaal->isAnonymous == 'on')
                  <h2>Anoniem (<?php $newDate = date("Y", strtotime($verhaal->user->birthdate))?><?php $age = date("Y") - $newDate ?>{{$age}})</h2>
                @else
                  <h2>{{ $verhaal->user->firstname}} (<?php $newDate = date("Y", strtotime($verhaal->user->birthdate))?><?php $age = date("Y") - $newDate ?>{{$age}})</h2>
                @endif
                <h3>{{ $verhaal->title}}</h3>
                <p> {{$verhaal->body}} </p>

                @if(Auth::user()->id == $verhaal->user_id)
                  <a href = "verhalen/wijzigen/{{$verhaal->id}}" class="button-edit">Wijzigen</a>
                  <form action="verhalen/verwijderen/{{$verhaal->id}}" method="GET">
                      {{ csrf_field() }}
                    <button type="submit" name = "delete" class="button-del">
                      Verwijderen
                    </button>
                  </form>
                @endif
              </div>
            @endif
          @endforeach
          <a href = "verhalen/toevoegen" class="button-add cfx">Vertel hier je eigen verhaal</a>
        @endif

        @if(!(Auth::guard('web')->check()) && !(Auth::guard('admin')->check()))
        <div class="form-filter cfx">
          <form action = "media" method = "POST">
            {{ csrf_field() }}

            <select name = "filters" class="form-list">
              <option value = "name">Titel</option>
              <option value = "date">Datum (nieuwste eerst)</option>
              <option value = "dateOld">Datum (oudste eerst)</option>
            </select>

            <button type = "submit" name = "filter" class="button-filter">
              Sorteren
            </button>
          </form>
        </div>

          @foreach ($verhalen as $verhaal)
            @if (($verhaal->isChecked))
              <div class="content-split">
                @if($verhaal->isAnonymous == 'on')
                  <h2>Anoniem (<?php $newDate = date("Y", strtotime($verhaal->user->birthdate))?><?php $age = date("Y") - $newDate ?>{{$age}})</h2>
                @else
                  <h2>{{ $verhaal->user->firstname}} (<?php $newDate = date("Y", strtotime($verhaal->user->birthdate))?><?php $age = date("Y") - $newDate ?>{{$age}})</h2>
                @endif
                <h3>{{ $verhaal->title}}</h3>
                <p> {{$verhaal->body}} </p>
              </div>
            @endif
          @endforeach
          <a href = "login" class="button-form cfx">Log in om je eigen verhaal te vertellen</a>
        @endguest
    </div>
  </div>
@endsection
