<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Utilities\JavaScript\JavaScriptFacade as Javascript;
use Request as ajaxCall;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (ajaxCall::ajax()) {return response()->json($this -> dashboard);}
        //return response()->json($this -> dashboard);
        JavaScript::put($this -> dashboard);
        return view('app')-> with('header' , $this -> dashboard['header']);
        //return view('home');
    }
}
