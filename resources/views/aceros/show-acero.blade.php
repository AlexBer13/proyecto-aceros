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
    

    <h1>{{ $acero->tipo_de_calibre }}</h1>
    <h2>{{ $acero->costos }} </h2>
    <h3>{{ $acero->cantidad }}</h3>
    <a href="{{ route('aceros.index', $acero) }}">Inicio</a>
    <hr>
    <form action="{{ route('aceros.destroy', $acero) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Borrar</button>
    </form>
        
</html>