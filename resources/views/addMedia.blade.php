@extends('layouts.default')

@section('content')
  <div class="wrapper">
    <div class="content-split content-home">
      <a href = "/verhalen"> ← Terug naar media</a>
      <form class = 'form-horizontal' action = "{{route('insertMedia')}}" method = 'POST'>
        {{ csrf_field() }}

        <div class = 'form-group'>
          <label class = 'col-sm-3 control-label' for = 'mediaTitle'>Titel (max. 255 tekens)</label>

          <div class = 'col-sm-6'>
            <input class = 'form-control' type = 'textarea' name = 'mediaTitle' id = 'mediaTitle'>
          </div>
        </div>

        <div class = 'form-group'>
          <label class = 'col-sm-3 control-label' for = 'mediaUrl'>Url </label>

          <div class = 'col-sm-6'>
            <input class = 'form-control' type = 'textarea' name = 'mediaUrl' id = 'mediaUrl'>
          </div>
        </div>

        <div class = 'form-group'>
          <div class="checkbox">
              <label>
                  <input type="checkbox" name="mediaIsAnonymous" id = 'mediaIsAnonymous'> Plaats anoniem
              </label>
          </div>
        </div>

        <div class = 'form-group'>
          <button class = 'btn btn-default' type = 'submit'>
            Add article
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection
