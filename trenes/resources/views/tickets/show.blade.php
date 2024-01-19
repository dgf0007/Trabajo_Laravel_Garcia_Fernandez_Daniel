<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show ticket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>Fecha</th>
                <th>Precio</th>
                <th>Nombre del tren</th>
                <th>Tipo de ticket</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $ticket->date }}</td>
                <td>{{ $ticket->price }}</td>
                <td>{{ $ticket->train->name }}</td>
                <td>{{ $ticket->ticket_type->type }}</td>
            </tr>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
