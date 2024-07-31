<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Exercise;
use \App\Models\Program;
use \App\Models\Formula;
use \App\Models\TrainingNumber;
use \App\Http\Requests\ProgramRequest;

class ProgramController extends Controller
{
    public function index() 
    {
        $training_numbers = TrainingNumber::all();
        $formulas = Formula::all();
        $programs = Exercise::all();
        return view('program', compact('programs', 'formulas', 'training_numbers'));
    }

    public function store(ProgramRequest $request)
    {
        $data = $request->validated();
        Program::create($data);
        return redirect()->route('program.index');    
    }
}
