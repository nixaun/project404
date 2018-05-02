<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerhalenController extends Controller
{
    public function index()
    {
        return view('Verhalen');
    }
}
