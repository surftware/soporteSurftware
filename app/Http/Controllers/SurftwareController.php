<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurftwareController extends Controller
{
    //
    public function index()
    {
        return view('surftware.index');
    }

    public function registro()
    {
        return view('surftware.registro');
    }
}
