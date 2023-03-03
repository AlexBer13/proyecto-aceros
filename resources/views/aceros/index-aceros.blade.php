<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listado de aceros</h1>
    <a href="/acero/create">Agregar acero</a>

    <ul>
        @foreach ($aceros as $m)
            <li>{{$m->tipo_de_calibre}}</li>
            <li>{{$m->costos}}</li>
            <li>{{$m->cantidad}}</li>
            <a href="{{  route( 'aceros.show', $m->id) }}"> Ver Detalle</a>
            <a href="{{  route( 'aceros.edit', $m->id) }}"> Editar </a>
        @endforeach 
        </ul>
</body>
</html>