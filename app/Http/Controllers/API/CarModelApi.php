<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\MainController;
use Illuminate\Http\Request;
use App\Models\CarModel;
use Illuminate\Support\Facades\Validator;

class CarModelApi extends MainController
{
    public function index()
    {
        $carModels = CarModel::all();
        return response()->json($carModels, 200);
    }

    public function show($id)
    {
        $carModel = CarModel::find($id);
        if (!$carModel) {
            return response()->json(['message' => 'Modello di macchina non trovato'], 404);
        }
        return response()->json($carModel, 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'brand_id' => 'required|exists:brands,id',
            'name' => 'required|string|max:255',
            'production_year' => 'required|integer',
            'car_type' => 'required|string|max:64',
            'more_request' => 'boolean',
            'image' => 'image'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        try {
            $carModel = CarModel::create($request->all());
            return response()->json($carModel, 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Creazione del modello di macchina fallita', 'error' => $e->getMessage()], 500);
        }
    }

    public function update(Request $request, $id)
    {
        $carModel = CarModel::find($id);

        if (!$carModel) {
            return response()->json(['message' => 'Modello di macchina non trovato'], 404);
        }

        $validator = Validator::make($request->all(), [
            'brand_id' => 'sometimes|required|exists:brands,id',
            'name' => 'sometimes|required|string|max:255',
            'production_year' => 'sometimes|required|integer',
            'car_type' => 'sometimes|required|string|max:64',
            'image' => 'image'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        try {
            $carModel->update($request->all());
            return response()->json($carModel, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Aggiornamento del modello di macchina fallito', 'error' => $e->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        $carModel = CarModel::find($id);

        if (!$carModel) {
            return response()->json(['message' => 'Modello di macchina non trovato'], 404);
        }

        try {
            $carModel->delete();
            return response()->json(['message' => 'Modello di macchina eliminato con successo!'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Eliminazione del modello di macchina fallita', 'error' => $e->getMessage()], 500);
        }
    }
}