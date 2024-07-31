<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Customer;
use \App\Models\Trener;
use \App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index() 
    {
        $contacts = Customer::all();
        return view('contact.index', compact('contacts'));
    }
    
    public function create()
    {
        $treners = Trener::all();
        return view('contact.create', compact('treners'));
    }

    public function store(ContactRequest $request)
    {
        $data = $request->validated();
        Customer::create($data);
        return redirect()->route('contact.index');    
    }
}
