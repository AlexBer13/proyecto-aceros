<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Aceros</h1>

    <form action="{{ route('aceros.store') }}" method="POST">
        @csrf
        <label for="tipo_de_calibre">tipo de calibre</label><br>
        <input type="number" name="tipo_de_calibre" id="tipo_de_calibre" value="{{ old('tipo_de_calibre') }}"><br>
        @error('tipo_de_calibre')
        <h2>{{$message}}</h2>
        @enderror

        <label for="costos">costos</label><br>
        <input type="number" name="costos" id="costos" step="0.01" min="0" value="{{ old('costos')}}"><br>
        @error('costos')
        <h2>{{$message}}</h2>
        @enderror

        <label for="cantidad">cantidad</label><br>
        <input type="number" name="cantidad" id="cantidad" min="0" value="{{ old('cantidad') }}"><br>
        @error('cantidad')
        <h2>{{$message}}</h2>
        @enderror

        <input type="submit" value="Enviar">

    </form>
</body>
</html>