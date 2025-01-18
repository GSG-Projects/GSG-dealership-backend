<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\MainController;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CarApi extends MainController
{
    // Ottieni tutte le macchine
    public function index()
    {
        return response()->json(Car::all(), 200);
    }

    // Ottieni una macchina specifica
    public function show($id)
    {
        $car = Car::find($id);

        if (!$car) {
            return response()->json(['message' => 'Car not found'], 404);
        }

        return response()->json($car, 200);
    }

    // Crea una nuova macchina
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($request->all(), [
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

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        try {
            $car = Car::create($request->all());
            return response()->json($car, 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Errore nella creazione della macchina', 'error' => $e->getMessage()], 500);
        }
    }

    // Aggiorna una macchina
    public function update(Request $request, $id)
    {
        $car = Car::find($id);

        if (!$car) {
            return response()->json(['message' => 'Macchina non trovata'], 404);
        }

        $validator = Validator::make($request->all(), [
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

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        try {
            $car->update($request->all());
            return response()->json($car, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Car update failed', 'error' => $e->getMessage()], 500);
        }
    }

    // Elimina una macchina
    public function destroy($id)
    {
        $car = Car::find($id);

        if (!$car) {
            return response()->json(['message' => 'Macchina non trovata'], 404);
        }

        try {
            $car->delete();
            return response()->json(['message' => 'Macchina eliminata con successo!'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Eliminazione della macchina fallita', 'error' => $e->getMessage()], 500);
        }
    }
}
