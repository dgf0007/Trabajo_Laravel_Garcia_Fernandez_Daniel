<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carta</title>
</head>
<body>
    <h1>Este es el Index de las bebidas</h1>
    <h2>{{$mensaje}}</h2>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Bebida</th>
            <th scope="col">Precio</th>
            <th scope="col">cantidad</th>
          </tr>
        </thead>

        <!--ForEach en -->
        @foreach ($bebidas as $bebida) 
          <tr>
            <td>{{$bebida[0]}}</td>
            <td>{{$bebida[1]}}</td>
            <td>{{$bebida[2]}}</td>
          </tr>
        @endforeach
    
      </table>

      <h1>Este es el Index de los platos</h1>
    <h2>{{$mensaje}}</h2>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Plato</th>
            <th scope="col">Precio</th>
            <th scope="col">Tipo</th>
          </tr>
        </thead>

        <!--ForEach en -->
        @foreach ($platos as $plato) 
          <tr>
            <td>{{$plato[0]}}</td>
            <td>{{$plato[1]}}</td>
            <td>{{$plato[2]}}</td>
          </tr>
        @endforeach
    
      </table>
</body>
</html>