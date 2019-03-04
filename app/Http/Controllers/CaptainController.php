<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Captain;
use App\Assignment;

class CaptainController extends Controller
{
    //
    public function show($captain_slug)
    {
        
        $captain = \App\Captain::where('slug', $captain_slug)->first();
        if (!$captain) {
            abort(404, 'Captain not found');
        }

        $view = view('captain/show');
        $view->captain = $captain;
        return $view;
    }

    public function index()
    {
        $captains = Captain::orderBy('name')->get();
        return view('captain.index', compact('captains'));
    }

    // public function create()
    // {
    //     return view('captain.show');
    // }

    public function store(Request $request)
    {
        Assignment::create($request->all());
        return redirect('/captains');
    }
}
