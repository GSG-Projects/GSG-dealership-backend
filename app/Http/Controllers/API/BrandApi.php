<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\MainController;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BrandApi extends MainController
{
    public function index()
    {
        $data = Brand::all();
        return response()->json($data);
    }

    public function show($id)
    {
        $brand = Brand::find($id);

        if (!$brand) {
            return response()->json(['message' => 'Brand non trovato'], 404);
        }

        return response()->json($brand, 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:64',
            'image' => 'required|image',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        try {
            $brand = Brand::create($request->all());
            return response()->json($brand, 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Creazione del brand fallito', 'error' => $e->getMessage()], 500);
        }
    }

    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);

        if (!$brand) {
            return response()->json(['message' => 'Marchio non trovato'], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:64',
            'image' => 'required|image',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        try {
            $brand->update($request->all());
            return response()->json($brand, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Aggiornamento del brand fallito', 'error' => $e->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        $brand = Brand::find($id);

        if (!$brand) {
            return response()->json(['message' => 'Brand non trovato'], 404);
        }

        try {
            $brand->delete();
            return response()->json(['message' => 'Brand eliminato con successo!'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Eliminazione del brand fallita', 'error' => $e->getMessage()], 500);
        }
    }
}