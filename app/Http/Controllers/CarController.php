<?php

namespace App\Http\Controllers;

// Models
use App\Models\Car;
use App\Models\Brand;
use App\Models\Optional;
use App\Models\CarModel;
use App\Models\Preventive;
use Illuminate\Http\Request;

class CarController extends MainController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::with('optional')->get();
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::all();
        $optionals = Optional::all();
        $carModels = CarModel::all();
        $preventives = Preventive::all();
        return view('cars.create', compact('brands', 'optionals', 'carModels', 'preventives'));
    }

    /**
     * Store a newly created resource in storage.
     */
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

        if (isset($data['optionals'])) {
            $car->optional()->attach($data['optionals']);
        }

        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        $brands = Brand::all();
        $optionals = Optional::all();
        $carModels = CarModel::all();
        $preventives = Preventive::all();
        return view('cars.edit', compact('car', 'brands', 'optionals', 'carModels', 'preventives'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $data = $request->all();

        $request->validate([
            'brand_id' => 'required|exists:brands,id',
            'car_model_id' => 'required|exists:car_models,id',
            'preventives' => 'exists:preventives,id',
            'base_price' => 'required|numeric',
            'warranty' => 'required|numeric',
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
            'description' => 'required|text',
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

        if (isset($data['optionals'])) {
            $car->optional()->attach($data['optionals']);
        }

        return redirect()->route('cars.show', ['car' => $car->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('cars.index');
    }
}
