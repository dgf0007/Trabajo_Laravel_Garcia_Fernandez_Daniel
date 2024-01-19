<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ticket Index</title>
    <!-- Agrega la referencia al archivo CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <a href="{{ route('tickets.create') }}" class="btn btn-primary">Crear ticket</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Precio</th>
                    <th>Nombre del tren</th>
                    <th>Tipo de ticket</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tickets as $ticket)
                    <tr>
                        <td>{{ $ticket->date }}</td>
                        <td>{{ $ticket->price }}</td>
                        <td>{{ $ticket->train->name }}</td>
                        <td>{{ $ticket->ticket_type->type }}</td>
                        <td>
                            <form action="{{ route('tickets.show', ['ticket' => $ticket->id]) }}">
                                <button type="submit" class="btn btn-success">Ver</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('tickets.edit', ['ticket' => $ticket->id]) }}" method="get">
                                <button type="submit" class="btn btn-warning">Editar</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('tickets.destroy', ['ticket' => $ticket->id]) }}" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger">Borrar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
