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
        if(isset($_POST['filter']))
        {
          $selectedVal = $_POST['filters'];

          if($selectedVal == 'name')
          {
            $verhalen = Verhaal::orderBy('title', 'asc')->get();
            return view('verhalen', compact('verhalen'));
          }

          if ($selectedVal == 'date')
          {
            $verhalen = Verhaal::orderBy('updated_at', 'asc')->get();
            return view('verhalen', compact('verhalen'));
          }

          if ($selectedVal == 'dateOld')
          {
            $verhalen = Verhaal::orderBy('updated_at', 'desc')->get();
            return view('verhalen', compact('verhalen'));
          }
        }
        else
        {
          $verhalen = Verhaal::all();
          return view('verhalen', compact('verhalen'));
        }

    }

    public function addVerhaal()
    {
      return view('addVerhaal');
    }

    public function insertVerhaal(Request $request)
    {
      $this->validate($request, [
        'verhaalTitle' => 'required|max:255',
        'verhaalBody' => 'required',
        'verhaalIsAnonymous'
      ]);

      $verhaal = new Verhaal;

      $verhaal->user_id = auth()->user()->id;
      $verhaal->title = $request->verhaalTitle;
      $verhaal->body = $request->verhaalBody;
      $verhaal->isAnonymous = $request->verhaalIsAnonymous;
      $verhaal->save();

      return redirect('/verhalen')->with('success', 'Jouw verhaal is met succes gepost');
    }

    public function editVerhaal($id)
    {
      $verhaal = Verhaal::find($id);

      if (!(Auth::user()->id == $verhaal->user_id)) {
        return redirect('/verhaal')->withErrors("Je kan geen verhaal veranderen dat niet van jouw is!");
      }

      $verhaal = Verhaal::find($id);
      return view('editVerhaal', compact('verhaal'));
    }

    public function updateVerhaal(Request $request, $id)
    {
      $verhaal = Verhaal::find($id);

      $this->validate($request, [
        'verhaalTitle' => 'required|max:255',
        'verhaalBody' => 'required',
        'verhaalIsAnonymous'
      ]);

      $verhaal->body = $request->verhaalBody;
      $verhaal->title = $request->verhaalTitle;
      $verhaal->isAnonymous = $request->verhaalIsAnonymous;
      $verhaal->isChecked = 0;
      $verhaal->update($request->all());
      return redirect('/verhalen');
    }

    public function showConfirm()
    {
      return back()->with('danger', 'Ben je zeker dat je dit verhaal wil verwijderen?');
    }

    public function delete($id)
    {
      $verhaal = Verhaal::find($id);

      if (isset($_POST['delete']))
      {
        $verhaal->delete();
        return redirect('/verhalen')->with('success', 'Jouw verhaal is met succes verwijdert');
      }
      elseif(isset($_POST['cancel']))
      {
        return back();
      }
    }

    public function goedkeuren(Request $request, $id)
    {
      $verhaal = Verhaal::find($id);
      $verhaal->isChecked = 1;
      $verhaal->update($request->all());
      return redirect('/verhalen');
    }
}
