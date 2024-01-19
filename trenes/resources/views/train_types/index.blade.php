<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipos de trenes</title>
    <!-- Agrega la referencia al archivo CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Listado de Tipos de trenes</h1>

        <!-- Agrega la clase "table" de Bootstrap a tu tabla -->
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Types</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($train_types as $train_type)
                    <tr>
                        <td>{{ $train_type->id }}</td>
                        <td>{{ $train_type->type }}</td>
                        <td>
                            <form method="GET" action="{{route('train_types.show',['train_type' =>$train_type->id])}}"> 
                                <input type="submit" class="btn btn-info" value="Show">
                            </form>
                        </td>
                        <td>
                            <form method="GET" action="{{route('train_types.edit',['train_type' =>$train_type->id])}}"> 
                                <input type="submit" class="btn btn-warning" value="Update">
                            </form>
                        </td>
                        <td>
                            
                            <form method="POST" action="{{ route('train_types.destroy', ['train_type' => $train_type->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form> 
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-3">
            <form method="GET" action="{{ route('train_types.create') }}">
                <button type="submit" class="btn btn-primary">New Train Type</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
