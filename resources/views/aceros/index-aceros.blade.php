<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    holaaaaaaa

    <ul>
        @foreach ($aceros as $m)
            <li>{{$m->tipo_de_calibre}}</li>
            <li>{{$m->costos}}</li>
            <li>{{$m->cantidad}}</li>
        @endforeach 
        </ul>
</body>
</html>