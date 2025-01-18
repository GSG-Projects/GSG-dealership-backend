<?php

namespace App\Http\Controllers;

use App\Models\WishList;
use Illuminate\Http\Request;

class WishListController extends MainController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wishLists = WishList::all();
        return view('admin.wishLists.index', compact('wishLists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.wishLists.create');
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
        ]);

        $wishList = new WishList();
        $wishList->user_id = $data['user_id'];
        $wishList->card_id = $data['card_id'];
        $wishList->save();

        return redirect()->route('wishLists.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(WishList $wishList)
    {
        return view('admin.wishLists.show', compact('wishList'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WishList $wishList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WishList $wishList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WishList $wishList)
    {
        $wishList->delete();
        return redirect()->route('wishLists.index');
    }
}
