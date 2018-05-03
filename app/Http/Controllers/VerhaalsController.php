<?php

namespace App\Http\Controllers;

use App\Verhaal;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;

class VerhaalsController extends Controller
{
    public function index()
    {
        $verhalen = Verhaal::all();
        return view('Verhalen', compact('verhalen'));
    }

    public function create(Request $request, $id)
    {
      $this->validate($request, [
        'verhaalBody' => 'required'
      ]);

      $user = User::all();
      $verhaal = new Verhaal;
      $verhaal->user_id = auth()->user()->id;
      $verhaal->body = $request->verhaalBody;
      $verhaal->save();
      return redirect()->back()->with('succes', 'Je verhaal is met succes toegevoegd!');
    }
}
