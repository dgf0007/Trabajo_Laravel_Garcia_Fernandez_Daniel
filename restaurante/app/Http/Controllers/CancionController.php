<?php

namespace App\Http\Controllers;

use App\Models\Canciones;
use Illuminate\Http\Request;

class CancionController extends Controller
{
    public function index()
    {
        $canciones = Canciones::all();
        return view('canciones.index', compact('canciones'));
    }

    public function show($id)
    {
        $cancion = Canciones::findOrFail($id);
        return view('canciones.show', compact('cancion'));
    }

    public function create()
    {
        return view('canciones.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo_cancion' => 'required',
            'genero_cancion' => 'required',
            'duracion' => 'required|integer',
        ]);

        Canciones::create($request->all());

        return redirect()->route('canciones.index');
    }
}
