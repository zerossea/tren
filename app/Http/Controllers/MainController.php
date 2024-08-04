<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Program;

class MainController extends Controller
{
    public function index()
    {
        $table_programs = Program::all();
        return view('Main', compact('table_programs'));
    }
}
