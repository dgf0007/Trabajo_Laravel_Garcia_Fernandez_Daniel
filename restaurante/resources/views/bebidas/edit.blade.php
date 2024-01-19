<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar plato</title>
</head>
<body>
    <h1>Modificar Bebidas</h1>
    <form action="post" action="{{route('bebidas.update', ['bebida'=>$bebida->id])}}">
        @csrf
        {{method_field('PUT')}}
        <label for="">Tipo</label>
        <input type="text" name="nombre" value="{{$bebida->nombre}}" placeholder="Introduzca su nombre"> <br><br>
        
        <label for="">Precio</label>
        <input type="text" name="precio" value="{{$bebida->precio}}" placeholder="Introduzca el precio"> <br><br>

        <label for="">Tipo</label>
        <select name="tipo" id="">
            <option selected hidden value="{{$bebida->cantidad}}">{{$bebida->cantidad}}</option>
            <option value="300Ml">300Ml</option>
            <option value="600Ml">600Ml</option>
            <option value="900Ml">900Ml</option>
        </select>
        <br><br>
        <input type="submit" value="Editar">
    </form>
</body>
</html>