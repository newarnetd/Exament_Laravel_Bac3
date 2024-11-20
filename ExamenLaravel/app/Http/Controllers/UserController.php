<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $incommingField = $request->validate([
            // Demo de verification avce le Prof  'password' => ['required','min:10','max:15'],
            'password' => ['required'],
            'email' => ['required']
        ]);
        return "Salut Luc";
    }
}
