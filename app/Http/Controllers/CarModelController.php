<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use Illuminate\Http\Request;

class CarModelController extends MainController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carModels = CarModel::all();
        return view('car_models.index', compact('carModels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('car_models.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'name' => 'required|max:50',
            'brand_id' => 'required|exists:brands,id',
            'year' => 'required|numeric',
            'car_type' => 'required|max:50',
        ]);

        $carModel = new CarModel();
        $carModel->name = $data['name'];
        $carModel->year = $data['year'];
        $carModel->car_type = $data['car_type'];
        $carModel->brand_id = $data['brand_id'];
        $carModel->save();

        return redirect()->route('car_models.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(CarModel $carModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarModel $carModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CarModel $carModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarModel $carModel)
    {
        //
    }
}
