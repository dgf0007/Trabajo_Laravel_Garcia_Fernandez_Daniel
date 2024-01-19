<?php

namespace App\Http\Controllers;
use App\Models\Artistas;

use Illuminate\Http\Request;

class ArtistasController extends Controller
{
    public function index()
{
    $artistas = Artistas::all();
    return view('artistas.index', compact('artistas'));
}

    public function show($id)
    {
        $cancion = Artistas::findOrFail($id);
        return view('artistas.show', compact('artista'));
    }

    public function create()
    {
        return view('artistas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_artista' => 'required',
            'genero_artista' => 'required'
        ]);

        Artistas::create($request->all());

        return redirect()->route('artistas.index');
    }
}
