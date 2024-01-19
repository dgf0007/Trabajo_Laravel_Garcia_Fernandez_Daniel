<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Trains</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Crear Tren</h1>

        <form method="POST" action="{{ route('trains.store') }}">
            @csrf <!-- Agrega el token CSRF para protección contra ataques CSRF -->

            <div class="mb-3">
                <label for="name" class="form-label">Nombre del Tren:</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="passengers" class="form-label">Número de Pasajeros:</label>
                <input type="number" name="passengers" value="{{ old('passengers') }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="years" class="form-label">Año:</label>
                <input type="number" name="years" value="{{ old('years') }}" class="form-control" required>
            </div>            

            <div class="mb-3">
                <label for="train_types_id" class="form-label">Tipo de Tren:</label>
                <select name="train_types_id" class="form-select" required>
                    @foreach($train_types as $train_type)
                        <option value="{{ $train_type->id }}">{{ $train_type->type }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Crear Tren</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
