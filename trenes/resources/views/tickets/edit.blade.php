<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Ticket</title>
    <!-- Agrega la referencia al archivo CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <form action="{{ route('tickets.update', ['ticket' => $ticket->id]) }}" method="post">
            @csrf
            {{ method_field('PUT') }}

            <div class="mb-3">
                <label for="date" class="form-label">Fecha</label>
                <input type="date" class="form-control" name="date" value="{{$ticket->date}}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Precio</label>
                <input type="number" class="form-control" name="price" value="{{$ticket->price}}">
            </div>

            <div class="mb-3">
                <label for="train_name" class="form-label">Nombre del tren</label>
                <select class="form-select" name="train_name">
                    <option selected hidden value="{{ $ticket->train->id }}">{{ $ticket->train->name }}</option>
                    @foreach($trains as $train)
                        <option value="{{ $train->id }}">{{ $train->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="ticket_type_id" class="form-label">Tipo de ticket</label>
                <select class="form-select" name="ticket_type_id">
                    <option selected hidden value="{{ $ticket->ticket_type->id }}">{{ $ticket->ticket_type->type }}</option>
                    @foreach($ticketTypes as $ticketType)
                        <option value="{{ $ticketType->id }}">{{ $ticketType->type }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Editar</button>
        </form>
    </div>

    <!-- Agrega los archivos JavaScript de Bootstrap para funcionalidades adicionales (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
