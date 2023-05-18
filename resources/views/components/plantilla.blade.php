<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Aceros</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="{{ asset('/css/aceros.css') }}" rel="stylesheet">


</head>

<body>

    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">

                        <div class="col-sm-6">
                            <h2><b>Aceros</b></h2>
                        </div>
                        <div class="col-sm-6">

                            <a href="#Agregar" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar</span></a>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="#logout" class="btn btn-success" data-toggle="modal"><img src="{{asset('/imagenes/img_log_out.svg')}}" class="img_archivo">Log Out</></a>
                            </form>

                            <form method="POST" action="{{ route('archivo.index') }}">
                                @csrf
                                <button type="submit" href="#archivo" class="btn btn-success " data-toggle="modal"><img src="{{asset('/imagenes/img_archivo.svg')}} " class="img_archivo">Archivos</button>
                            </form>

                        </div>
                    </div>
                </div>

                <table class="table table-striped table-hover text-center">
                    <thead>
                        <tr>
                            <th>Tipo de calibre</th>
                            <th>Costo</th>
                            <th>Cantidad</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            @foreach ($acero as $m)
                    <tbody>
                        <td>{{$m->tipo_de_calibre}}</td>
                        <td>{{$m->costos}}</td>
                        <td>{{$m->cantidad}}</td>
                        <td>

                            <a href="#Editar-{{$m->id}}" class="Editar" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE8B8;</i></a>
                            <a href="#deleteEmployeeModal" class="Eliminar" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
                        </td>
                    </tbody>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- add Modal HTML -->

    <div id="Agregar" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content d-flex justify-content-center">
                <form action=" {{route('aceros.store')}}" method="POST">
                    @csrf <!--para cuando se reenvia info del formulario no se duplique-->
                    <div class="modal-header">
                        <h4 class="modal-title">Agregar</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <label for="tipo_de_calibre">tipo de calibre</label><br>
                            <input type="text" name="tipo_de_calibre" id="tipo_de_calibre" required><br>
                            @error('tipo_de_calibre')
                            <h2>{{$message}}</h2>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="costos">costo</label><br>
                            <input type="number" name="costos" id="costos" step="0.01" min="0" required><br>
                            @error('costos')
                            <h2>{{$message}}</h2>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="cantidad">cantidad</label><br>
                            <input type="number" name="cantidad" id="cantidad" min="0" required><br>
                            @error('cantidad')
                            <h2>{{$message}}</h2>
                            @enderror
                        </div>

                    </div>

                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Enviar">
                    </div>


                </form>
            </div>
        </div>
    </div>


    {{$slot}}

</body>

</html>