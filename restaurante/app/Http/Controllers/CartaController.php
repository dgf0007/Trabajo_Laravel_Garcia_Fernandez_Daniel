<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mensaje = "Estas son mis bebidas";

        $bebidas = [
            ["Coca-Cola", 4.95, "300Ml"],
            ["Cerveza", 9.95, "600Ml"],
            ["Agua", 3.5, "900Ml"],
            ["Ron Barceló", 10.95, "500Ml"]
        ];

        $platos = [
            ["Tortilla de patatas", 4.95, "Ración"],
            ["Chuletillas de cordero", 9.95, "Ración"],
            ["Ensaladilla rusa", 3.5, "Tapa"],
            ["Paella", 10.95, "Plato"]
        ];
        //Para que se mande a la lista:
        return view('carta', ['mensaje' => $mensaje, 'bebidas' => $bebidas, 'platos' => $platos]);
       

        
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
