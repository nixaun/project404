@extends('layouts.default')

@section('content')
  <div class="wrapper">
    <div class="content-split content-home">
      <form class = 'form-horizontal' action = "{{$media->id}}" method = 'POST'>
        {{ csrf_field() }}

        <div class = 'form-group'>
          <label class = 'col-sm-3 control-label' for = 'mediaTitle'>Titel (max. 255 tekens)</label>

          <div class = 'col-sm-6'>
            <input class = 'form-control' type = 'textarea' name = 'mediaTitle' id = 'mediaTitle'   value = "{{$media->title}}">
          </div>
        </div>

        <div class = 'form-group'>
          <label class = 'col-sm-3 control-label' for = 'mediaUrl'>Vertel hier je media:</label>

          <div class = 'col-sm-6'>
            <input class = 'form-control' type = 'textarea' name = 'mediaUrl' id = 'mediaUrl' value = "{{$media->url}}">
          </div>
        </div>

        <div class = 'form-group'>
          <div class="checkbox">
              <label>
                  <input type="checkbox" name="mediaIsAnonymous" id = 'mediaIsAnonymous' @if($media->isAnonymous == 'on') checked @endif > Plaats anoniem
              </label>
          </div>
        </div>

        <div class = 'form-group'>
          <button class = 'btn btn-default' type = 'submit'>
            Pas media aan
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection
