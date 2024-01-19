<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Canciones</title>
</head>
<body>
    <h1>Listado de Canciones</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Título</th>
                <th scope="col">Género</th>
                <th scope="col">Duración</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($canciones as $cancion)
                <tr>
                    <td>{{ $cancion->id }}</td>
                    <td>{{ $cancion->titulo_cancion }}</td>
                    <td>{{ $cancion->genero_cancion }}</td>
                    <td>{{ $cancion->duracion }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
