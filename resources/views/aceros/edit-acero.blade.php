<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Aceros</h1>
    <form action="{{ route('aceros.update', $acero) }}" method="POST">
    @csrf
    @method('patch')
    <label for="tipo_de_calibre">Tipo de calibre</label><br>
    <input type="number" name="tipo_de_calibre" id="tipo_de_calibre" value="{{$acero->tipo_de_calibre}}"><br>
    @error('tipo_de_calibre')
        <h4>{{ $message }}</h4>
    @enderror

    <br>
    <label for="costos">costos</label><br>
    <input type="number" name="costos" id="costos" value= "{{$acero->costos}}">
    @error('costos')
        <h4>{{$message}}</h4>
    @enderror
    
    <br>
    <label for="cantidad">cantidad</label><br>
    <input type="number" name="cantidad" id="cantidad" value= "{{$acero->cantidad}}">
    @error('cantidad')
    <h4>{{$message}}</h4>
    @enderror

    <input type="submit" value="enviar">
</form>
</body>
</html>