<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Ticket</title>
    <!-- Agrega la referencia al archivo CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <form action="{{ route('tickets.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="date" class="form-label">Fecha</label>
                <input type="date" class="form-control" name="date" id="date">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Precio</label>
                <input type="number" class="form-control" name="price" id="price">
            </div>

            <div class="mb-3">
                <label for="train_name" class="form-label">Nombre del tren</label>
                <select class="form-select" name="train_name" id="train_name">
                    @foreach ($train_names as $train_name)
                        <option value="{{ $train_name->id }}">{{ $train_name->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="ticket_type_id" class="form-label">Tipo de ticket</label>
                <select class="form-select" name="ticket_type_id" id="ticket_type_id">
                    @foreach ($ticket_types as $ticket_type)
                        <option value="{{ $ticket_type->id }}">{{ $ticket_type->type }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
