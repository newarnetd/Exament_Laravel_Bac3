<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreselectorController extends Controller
{

    public function create()
    {
        return view('preselector.add');
    }
}
