<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use \App\Models\Exercise;
use \App\Models\Weight;
use \App\Http\Requests\WeightRequest;

class RecordController extends Controller
{
    public function index()
    {
        $list_s = Weight::all();
        $lists = DB::table('exercises')
                 ->join('weights', 'exercises.id', 'weights.title_id')
                 ->select('exercises.*', 'weights.weight_max')
                 ->get();
        return view('record.index', compact('lists'));
    }

    public function show(Weight $list_s)
    {
        return view('record.show', compact("list_s"));
    }

    public function edit(Weight $list_s)
    {
        return view('record.edit', compact('list_s'));
    }

    public function update(WeightRequest $request, Weight $list_s)
    {
       $data = $request->validated();
       $list_s->update($data);
       return redirect()->route('record.show', $list_s->id);  
    }
}
