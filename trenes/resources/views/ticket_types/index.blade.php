<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipos de tickets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="display-4">Tickets Type</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Type</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($ticket_types as $ticket_type)
                    <tr>
                        <td>{{ $ticket_type->id }}</td>
                        <td>{{ $ticket_type->type }}</td>
                        <td>
                            <form method="GET" action="{{ route('ticket_types.show', ['ticket_type' => $ticket_type->id]) }}">
                                <input type="submit" value="Show" class="btn btn-success">
                            </form>
                        </td>
                        <td>
                            <form method="GET" action="{{ route('ticket_types.edit', ['ticket_type' => $ticket_type->id]) }}">
                                <input type="submit" value="Update" class="btn btn-warning">
                            </form>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('ticket_types.destroy', ['ticket_type' => $ticket_type->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Botón "Crear Ticket" debajo de la tabla -->
        <div class="mt-3">
            <form method="GET" action="{{ route('ticket_types.create') }}">
                <button type="submit" class="btn btn-primary">New Ticket</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
