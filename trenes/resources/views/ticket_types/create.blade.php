<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Ticket Type</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="display-4">Create Ticket Type</h1>

        <form method="POST" action="{{ route('ticket_types.store') }}">
            @csrf

            <div class="mb-3">
                <label for="type" class="form-label">Type:</label>
                <input type="text" name="type" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Create Ticket Type</button>
        </form>

        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
