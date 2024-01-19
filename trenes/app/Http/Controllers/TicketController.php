<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\TicketType;
use App\Models\Train;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::all();

        return view(
            'tickets/index',['tickets' => $tickets]
        );
    }

    public function create()
    {
        return view('tickets/create', ['tickets' => Ticket::all(),'train_names' =>Train::all(),'ticket_types' =>TicketType::all()]);

    }

    public function store(Request $request)
    {
        $ticket = new Ticket;
        $ticket->date = $request->input('date');
        $ticket->price = $request->input('price');
        $ticket->train_id = $request->input('train_name');
        $ticket->ticket_type_id = $request->input('ticket_type_id');
        $ticket->save();

        return redirect('tickets');
    }

    public function show(string $id)
    {
        return view('tickets/show', ['ticket' => Ticket::find($id)]);
    }

    public function edit(string $id)
    {
        return view('tickets/edit', ['ticket' => Ticket::find($id), 'trains' => Train::all(), 'ticketTypes' => ticketType::all()]);
    }

    public function update(Request $request, string $id)
    {
        $ticket = Ticket::find($id);

        $ticket->date = $request->input('date');
        $ticket->price = $request->input('price');
        $ticket->train_id = $request->input('train_name');
        $ticket->ticket_type_id = $request->input('ticket_type_id');
        $ticket->save();

        return redirect('tickets');
    }

    public function destroy(string $id)
    {
        Ticket::find($id)->delete();
        return redirect('tickets');
    }
}