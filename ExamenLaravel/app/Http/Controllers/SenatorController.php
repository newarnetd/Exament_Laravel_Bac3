<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SenatorController extends Controller
{
    public function create()
    {
        return view('preselector.add');
    }
}
