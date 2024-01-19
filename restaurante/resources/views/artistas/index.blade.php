<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artistas</title>
</head>
<body>
    <h1>Listado de Artistas</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre del Artista</th>
                <th scope="col">Genero Artista</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($artistas as $artista)
                <tr>
                    <td>{{ $artista->id }}</td>
                    <td>{{ $artista->nombre_artista }}</td>
                    <td>{{ $artista->genero_artista }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
