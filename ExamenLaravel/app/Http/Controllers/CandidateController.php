<?php
namespace App\Http\Controllers;

use App\Models\Governor;
use App\Models\Senator;
use App\Models\Preselector;

class CandidateController extends Controller
{
    public function add()
    {

        $governors = Governor::with(['party', 'state'])->get();
        $senators = Senator::with(['party', 'state'])->get();
        $preselectors = Preselector::with(['party', 'state'])->get();

        // Passer les données à la vue 'home.add'
        return view('home.add', compact('governors', 'senators', 'preselectors'));
    }
}
