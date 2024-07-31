<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Exercise;;

class RecordController extends Controller
{
    public function index() 
    {
        return view('record');
    }
}
