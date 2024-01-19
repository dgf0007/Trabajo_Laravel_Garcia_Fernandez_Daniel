<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Trenes</title>
    <!-- Agrega la referencia al archivo CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Listado de Trenes</h1>

        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Passengers</th>
                    <th scope="col">Years</th>
                    <th scope="col">Train_Type_ID</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <td>{{ $train->id }}</td>
                        <td>{{ $train->name }}</td>
                        <td>{{ $train->passengers }}</td>
                        <td>{{ $train->years }}</td>
                        <td>{{ $train->train_types_id }}</td>
                        <td>
                            <form method="GET" action="{{route('trains.show',['train' =>$train->id])}}"> 
                                <input type="submit" class="btn btn-info" value="Show">
                            </form>
                        </td>
                        <td>
                            <form method="GET" action="{{route('trains.edit',['train' =>$train->id])}}"> 
                                <input type="submit" class="btn btn-warning" value="Update">
                            </form>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('trains.destroy', ['train' => $train->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Botón "Crear Tren" debajo de la tabla -->
        <div class="mt-3">
            <form method="GET" action="{{ route('trains.create') }}">
                <button type="submit" class="btn btn-primary">Nuevo Tren</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
