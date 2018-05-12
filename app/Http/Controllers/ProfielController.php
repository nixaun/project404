<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;

class ProfielController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('Profiel', compact('user'));
    }

    public function editProfiel($id)
    {
      $user = User::find($id);
      return view('editProfiel', compact('user'));
    }

    public function updateProfiel(Request $request, $id)
    {
      $user = User::find($id);

      $this->validate($request, [
        'userUsername' => 'required',
        'userEmail' => 'required|email',
      ]);

      $user->username = $request->userUsername;
      $user->email = $request->userEmail;
      $user->update($request->all());
      return redirect('/profiel');
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
}
