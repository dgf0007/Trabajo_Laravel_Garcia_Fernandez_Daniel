<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bebida;

class BebidasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mensaje = "Estas son mis bebidas";

        /*$bebidas = [
            ["Coca-Cola", 4.95, "300Ml"],
            ["Cerveza", 9.95, "600Ml"],
            ["Agua", 3.5, "900Ml"],
            ["Ron Barceló", 10.95, "500Ml"]
        ];*/

        $bebidas = Bebida::all();
        //Para que se mande a la lista:
        return view('bebidas/index', ['mensaje' => $mensaje, 'bebidas' => $bebidas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       //Coge el plato con el id que le pasamos.
       $bebidas = Bebida::find($id);
       return view('bebidas/show', ['bebida'=>$bebidas]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bebidas = bebida::find($id);
        return view('platos/edit', ['plato'=> $bebidas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
