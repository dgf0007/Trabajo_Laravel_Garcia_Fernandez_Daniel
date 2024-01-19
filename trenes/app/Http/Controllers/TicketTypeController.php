<?php

namespace App\Http\Controllers;

use App\Models\TicketType;
use Illuminate\Http\Request;

class TicketTypeController extends Controller
{
    public function index()
    {
        $ticket_types = TicketType::all();
        return view('ticket_types.index', compact('ticket_types'));
    }

    public function show($id)
    {
        $ticket_type = TicketType::find($id);
        return view('ticket_types.show', compact('ticket_type'));
    }

    public function create()
    {
        return view('ticket_types.create');
    }

    public function store(Request $request)
    {
        $type = new TicketType;
        $type->type = $request->input('type');
        $type->save();

        return redirect('ticket_types');
    }
    
    public function edit(string $id)
    {
        return view('ticket_types/edit', ['ticket_type' => TicketType::find($id)]);

    }

    public function update(Request $request, string $id)
    {
        $ticket_type = TicketType::find($id);

        $ticket_type->type = $request->input('type');
        $ticket_type->save();

        return redirect('ticket_types');
    }

    public function destroy(string $id)
    {
        TicketType::find($id)->delete();
        return redirect('ticket_types');
    }
}
