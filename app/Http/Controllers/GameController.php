<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;

class GameController extends Controller
{
    public function index()
    {
        return view('gamepage');
    }


};
