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

    public function addVerhaal()
    {
      return view('addVerhaal');
    }

    public function insertVerhaal(Request $request)
    {
      $this->validate($request, [
        'verhaalBody' => 'required'
      ]);

      $verhaal = new Verhaal;

      $verhaal->user_id = auth()->user()->id;
      $verhaal->body = $request->verhaalBody;
      $verhaal->save();

      return redirect('/verhalen')->with('success', 'Jouw verhaal is met succes gepost');
    }

    public function editVerhaal($id)
    {
      $verhaal = Verhaal::find($id);

      if (!(Auth::user()->id == $verhaal->user_id)) {
        return redirect('/')->withErrors("Je kan geen artikel veranderen dat niet van jouw is!");
      }

      $verhaal = Verhaal::find($id);
      return view('editVerhaal', compact('verhaal'));
    }

    public function updateVerhaal(Request $request, $id)
    {
      $verhaal = Verhaal::find($id);

      $this->validate($request, [
        'verhaalBody' => 'required'
      ]);

      $verhaal->body = $request->verhaalBody;
      $verhaal->update($request->all());
      return redirect('/verhalen');
    }
}
