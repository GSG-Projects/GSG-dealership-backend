<?php

namespace App\Http\Controllers;

use App\Models\Preventive;
use Illuminate\Http\Request;

class PreventiveController extends MainController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $preventives = Preventive::all();
        return view('admin.preventives.index', compact('preventives'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.preventives.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'user_id' => 'required|integer',
            'card_id' => 'required|integer',
            'total_price' => 'required|numeric',
            'creation_date' => 'required|date|date_format:d-m-y',
        ]);

        $preventive = new Preventive();
        $preventive->name = $data['name'];
        $preventive->description = $data['description'];
        $preventive->period = $data['period'];
        $preventive->save();

        return redirect()->route('preventives.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Preventive $preventive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Preventive $preventive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Preventive $preventive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Preventive $preventive)
    {
        //
    }
}
