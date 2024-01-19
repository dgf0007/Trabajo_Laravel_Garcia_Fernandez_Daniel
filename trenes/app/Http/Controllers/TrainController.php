<?php

namespace App\Http\Controllers;

use App\Models\Train;
use App\Models\TrainType; // Importar el modelo TrainType
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TrainController extends Controller
{
    
    public function index()
    {
        $trains = Train::all();
        return view('trains.index', compact('trains'));
    }

    public function show($id)
    {
        $trains = Train::findOrFail($id); // Cambiado de $train a $trains
        return view('trains.show', compact('trains')); // Cambiado de 'train' a 'trains'
    }

    public function create()
    {
        $train_types = TrainType::all(); // Cargar los tipos de tren
        return view('trains.create', compact('train_types'));
    }

    public function edit(Train $train)
    {
        $train_types = TrainType::all(); //  cargar los tipos de tren
        return view('trains.edit', compact('train', 'train_types'));
    }

    public function update(Request $request, Train $train)
    {
        $train->name = $request->input('name');
        $train->passengers = $request->input('passengers');
        $train->years = $request->input('years');
        $train->train_types_id = $request->input('train_types_id');
        $train->save();
        return redirect('trains');
    }

public function destroy(Train $train)
{
    try {
        // Eliminar los tickets relacionados
        $train->tickets()->delete();

        // Ahora puedes eliminar el tren
        $train->delete();

        return redirect()->route('trains.index')->with('success', 'El tren se eliminó exitosamente.');
    } catch (\Exception $e) {
        return redirect()->route('trains.index')->with('error', 'Error al eliminar el tren: ' . $e->getMessage());
    }
}

public function store(Request $request)
{

    $train = new Train;
        $train->name = $request->input('name');
        $train->passengers = $request->input('passengers');
        $train->years = $request->input('years');
        $train->train_types_id = $request->input('train_types_id');
        $train->save();


        return redirect('trains');
}


}

