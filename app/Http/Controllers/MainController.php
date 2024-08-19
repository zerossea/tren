<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use \App\Models\Program;

class MainController extends Controller
{
    public function index()
    {
        $table_program_s = Program::all();
        $table_programs = DB::table('exercises')
            ->join('programs', 'exercises.id', 'programs.title_id')
            ->select('exercises.*', 'programs.*')
            ->get();
            return view('Main', compact('table_programs'));
    }
}
