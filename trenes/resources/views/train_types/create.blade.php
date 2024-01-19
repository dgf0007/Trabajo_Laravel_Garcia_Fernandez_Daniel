<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Train Types</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Create Train Types</h1>

        <form method="POST" action="{{ route('train_types.store') }}">
            @csrf <!-- Agrega el token CSRF para protección contra ataques CSRF -->

            <div class="mb-3">
                <label for="type" class="form-label">Train Type:</label>
                <input type="text" name="type" value="{{ old('type') }}" class="form-control" required>
            </div>         

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
