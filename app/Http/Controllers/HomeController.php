<?php

namespace App\Http\Controllers;

use App\Verhaal;
use App\Media;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     public function __construct()
     {

     }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $media= Media::all();
      $randomArray1 = array();

      foreach ($media as $video)
        array_push($randomArray1, $video->id);

        do
        {
          $random1 = array_rand($randomArray1);
        }
        while($video->id == $random1 && $video->deleted_at == null);
        $video = Verhaal::all();

      $verhalen = Verhaal::all();
      $randomArray = array();

      foreach ($verhalen as $verhaal)
        array_push($randomArray, $verhaal->id);

        do
        {
          $random = array_rand($randomArray);
        }
        while($verhaal->id == $random && $verhaal->deleted_at == null);

      return view('home', compact('media', 'random1', 'randomArray1', 'verhalen', 'random', 'randomArray'));
    }
}
