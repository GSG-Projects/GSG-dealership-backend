<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarApi extends MainController
{
    // Ottieni tutte le macchine
    public function index()
    {
        return response()->json(Car::all());
    }

    // Ottieni una macchina specifica
    public function show($id)
    {
        $car = Car::find($id);

        if (!$car) {
            return response()->json(['message' => 'Car not found'], 404);
        }

        return response()->json($car);
    }

    // Crea una nuova macchina
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'brand_id' => 'required|exists:brands,id',
            'car_model_id' => 'required|exists:car_models,id',
            'preventives' => 'exists:preventives,id',
            'base_price' => 'required|numeric',
            'warranty' => 'required|boolean',
            'environmental_class' => 'required|max:50',
            'availability' => 'required|boolean',
            'engine_capacity' => 'required|numeric',
            'fuel_type' => 'required|max:50',
            'power_kw' => 'required|numeric',
            'transmission' => 'required|max:50',
            'color' => 'required|max:50',
            'width' => 'required|numeric',
            'length' => 'required|numeric',
            'weight' => 'required|numeric',
            'seats_number' => 'required|numeric',
            'doors_number' => 'required|numeric',            
            'image' => 'nullable|url',
            'description' => 'required',
            'optionals' => 'exists:optionals,id',
        ]);

        $car = new Car();
        $car->brand_id = $data['brand_id'];
        $car->car_model_id = $data['car_model_id'];
        $car->base_price = $data['base_price'];
        $car->warranty = $data['warranty'];
        $car->environmental_class = $data['environmental_class'];
        $car->availability = $data['availability'];
        $car->engine_capacity = $data['engine_capacity'];
        $car->fuel_type = $data['fuel_type'];
        $car->power_kw = $data['power_kw'];
        $car->transmission = $data['transmission'];
        $car->color = $data['color'];
        $car->width = $data['width'];
        $car->length = $data['length'];
        $car->weight = $data['weight'];
        $car->seats_number = $data['seats_number'];
        $car->doors_number = $data['doors_number'];        
        $car->img = $data['img'];
        $car->description = $data['description'];
        $car->save();

        return response()->json($car, 201);
    }

    // Aggiorna una macchina
    public function update(Request $request, $id)
    {
        $car = Car::find($id);

        if (!$car) {
            return response()->json(['message' => 'Car not found'], 404);
        }

        $validated = $request->validate([
            'brand_id' => 'required|exists:brands,id',
            'car_model_id' => 'required|exists:car_models,id',
            'preventives' => 'exists:preventives,id',
            'base_price' => 'required|numeric',
            'warranty' => 'required|boolean',
            'environmental_class' => 'required|max:50',
            'availability' => 'required|boolean',
            'engine_capacity' => 'required|numeric',
            'fuel_type' => 'required|max:50',
            'power_kw' => 'required|numeric',
            'transmission' => 'required|max:50',
            'color' => 'required|max:50',
            'width' => 'required|numeric',
            'length' => 'required|numeric',
            'weight' => 'required|numeric',
            'seats_number' => 'required|numeric',
            'doors_number' => 'required|numeric',            
            'image' => 'nullable|url',
            'description' => 'required',
            'optionals' => 'exists:optionals,id',
        ]);

        $car->update($validated);
        return response()->json($car);
    }

    // Elimina una macchina
    public function destroy($id)
    {
        $car = Car::find($id);

        if (!$car) {
            return response()->json(['message' => 'Car not found'], 404);
        }

        $car->delete();
        return response()->json(['message' => 'Car deleted successfully']);
    }
}
