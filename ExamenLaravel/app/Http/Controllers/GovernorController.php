<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GovernorController extends Controller
{

    public function create()
    {
        return view('governor.add');
    }
}
