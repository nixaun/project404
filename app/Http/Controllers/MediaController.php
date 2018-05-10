<?php

namespace App\Http\Controllers;

use App\Media;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;

class MediaController extends Controller
{
    public function index()
    {
        $media = Media::all();
        return view('Media', compact('media'));
    }

    public function addMedia()
    {
      return view('addMedia');
    }

    public function insertMedia(Request $request)
    {
      $this->validate($request, [
        'mediaTitle' => 'required|max:255',
        'mediaUrl' => 'required|url',
        'mediaIsAnonymous'
      ]);

      $media = new Media;

      $media->user_id = auth()->user()->id;
      $media->title = $request->mediaTitle;
      $media->url = $request->mediaUrl;
      $media->isAnonymous = $request->mediaIsAnonymous;
      $media->save();

      return redirect('/media')->with('success', 'Jouw media is met succes gepost');
    }

    public function editMedia($id)
    {
      $media = Media::find($id);

      if(!(Auth::user()->id == $media->user_id)) {
        return redirect('/media')->withErrors('Je kan geen media veranderen dat niet van jouw is!');
      }

      $media = Media::find($id);
      return view('editMedia', compact('media'));
    }

    public function updateMedia(Request $request, $id)
    {
      $media = Media::find($id);

      $this->validate($request, [
        'mediaTitle' => 'required|max:255',
        'mediaUrl' => 'required|url',
        'mediaIsAnonymous'
      ]);

      $media->title = $request->mediaTitle;
      $media->url = $request->mediaUrl;
      $media->isAnonymous = $request->mediaIsAnonymous;
      $media->isChecked = 0;
      $media->update($request->all());
      return redirect('/media');
    }

    public function delete($id)
    {
      $media = Media::find($id);
      $media->delete();

      return redirect('/media')->with('success', 'Jouw media is met succes verwijder');
    }

    public function goedkeuren(Request $request, $id)
    {
      $media = Media::find($id);
      $media->isChecked = 1;
      $media->update($request->all());
      return redirect('/media');
    }
}
