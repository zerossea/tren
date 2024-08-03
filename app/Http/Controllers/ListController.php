<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Exercise;
use \App\Http\Requests\ListRequest;

class ListController extends Controller
{
    public function index() 
    {
        $list = Exercise::all();
        return view('list.index', compact('list'));
    }

    public function create()
    {
        return view('list.create');
    }

    public function store(ListRequest $request)
    {
        $data = $request->validated();
        Exercise::create($data);
        return redirect()->route('list.index');    
    }

    public function show(Exercise $list)
    {
        return view('list.show', compact("list"));
    }

    public function edit(Exercise $list)
    {
        return view('list.edit', compact('list'));
    }

    public function update(ListRequest $request, Exercise $list)
    {
       $data = $request->validated();
       $list->update($data);
       return redirect() ->route('list.show', $list->id);  
    }

    public function destroy(Exercise $list)
    {
        $list->delete();
        return redirect()->route('list.index');
    }
}
