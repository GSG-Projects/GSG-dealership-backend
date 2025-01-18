<?php

namespace App\Http\Controllers;

use App\Models\Optional;
use Illuminate\Http\Request;

class OptionalController extends MainController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $optionals = Optional::all();
        return view('admin.optionals.index', compact('optionals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'category' => 'required|max:64',
            'name' => 'required|max:128',
            'price' => 'required|numeric',
        ]);

        $optional = new Optional();
        $optional->category = $data['category'];
        $optional->name = $data['name'];
        $optional->price = $data['price'];
        $optional->save();

        return redirect()->route('optionals.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Optional $optional)
    {
        return view('admin.optionals.show', compact('optional'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Optional $optional)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Optional $optional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Optional $optional)
    {
        //
    }
}
