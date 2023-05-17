<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="{{route('archivo.store') }} " method="POST" enctype="multipart/form-data">
    @csrf
    <label class= "block mt-4 text-sm">
        <span class= "text-gray-700 dark:text-gray-400">
            Seleccione el archivo a cargar
        </span>
        <input type="file" name="archivo" id="archivo">

    </label>

    <div class="mt-4">
        <button class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5"
        type="submit"
        >
         <span>Cargar</span>
        </button>
    </div>
    
    </form>

    <div class="w-full overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
    <table class="w-full whitespace-no-wrap">
        <thead>
        <th class="px-4 py-3" >Nombre del Archivo</th> 
        <th class="px-4 py-3">Acciones</th>
 
        </thead>
    <tbody
        class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
    >
    
    @foreach ($archivos as $archivo)

    <tr class="text-gray-700 dark:text-gray-400">
    <td class="px-4 py-3"> 
        <div class="flex items-center text-sm">
            {{ $archivo->nombre_original }}</a>
        </div>
        </td>
        <td class="px-4 py-3"> 
         <div class="flex items-center text-sm">
             <a href="{{ route('archivo.descargar', $archivo) }}">Descargar</a>
            </div>
        </td> 
    </tr>

    @endforeach
    </tbody>
</table>
</body>
</html>


