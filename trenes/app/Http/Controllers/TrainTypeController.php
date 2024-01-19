<?php

namespace App\Http\Controllers;

use App\Models\TrainType;
use Illuminate\Http\Request;

class TrainTypeController extends Controller
{
    public function index()
    {
        $train_types = TrainType::all();
        return view('train_types.index', compact('train_types'));
    }

    public function show($id)
    {
        $train_types = TrainType::findOrFail($id);
        return view('train_types.show', compact('train_types'));

    }

    public function create()
    {
        return view('train_types.create');
    }

    public function store(Request $request)
    {
        $train_types = new TrainType;
        $train_types->type = $request->input('type');
        $train_types->save();


        return redirect('train_types');
    }

    public function edit(TrainType $train_type)
    {
        return view('train_types.edit', ['train_type' => $train_type]);
    }

    public function update(Request $request, TrainType $train_type)
    {
        $train_type->type = $request->input('type');
        $train_type->save();
        return redirect('train_types');
    }
    
    public function destroy(string $id)
    {
        TrainType::find($id)->delete();
        return redirect('train_types');
    }
}
