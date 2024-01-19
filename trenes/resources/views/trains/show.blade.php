<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show trains</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>More info</h1>
        
        <div class="card">
            <div class="card-body">
                <p class="card-text">ID: {{ $trains->id }}</p>
                <p class="card-text">Name: {{ $trains->name }}</p>
                <p class="card-text">Passengers: {{ $trains->passengers }}</p>
                <p class="card-text">Years: {{ $trains->years }}</p>
                <p class="card-text">Train_Type_ID: {{ $trains->train_types_id }}</p>
            </div>
        </div>
    </div>

</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
