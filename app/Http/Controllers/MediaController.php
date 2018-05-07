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
}
