<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modify Ticket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Modify Ticket</h1>

        <form action="{{ route('ticket_types.update', ['ticket_type' => $ticket_type->id]) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="type" class="form-label">Ticket Type:</label>
                <input type="text" name="type" value="{{ $ticket_type->type }}" class="form-control" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
