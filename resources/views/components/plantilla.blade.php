<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Aceros</title>
    <link href="{{ asset('/css/aceros.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container px-4">

        <a class="navbar-brand" href="{{ route('aceros.index') }}">ACEROX</a>



        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                </ul>

                <form method="POST" action="{{ route('logout') }}" class="d-flex">
                    @csrf
                    <button type="submit" class="btn btn-success"><img src="{{asset('/imagenes/img_log_out.svg')}}" class="img_archivo">Log Out</button>
                </form>
            </div>
        </div>
    </div>
</nav>
<!-- Header-->
<header class="bg-primary bg-gradient text-white">
    <div class="container px-4 text-center">
        <p class="lead">Venta de Aceros</p>
    </div>
</header>

<body>

    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2><b>ACEROX</b></h2>
                        </div>
                        <div class="col-sm-6">

                        <a href="{{ route('aceros.create') }}" class="btn btn-success" ><i class="material-icons">&#xE147;</i><span>Agregar</span></a>

                            <form method="POST" action="{{ route('archivo.index') }}">
                                @csrf
                                <button type="submit" href="#archivo" class="btn btn-success"> <img src="{{asset('/imagenes/img_archivo.svg')}}" class="img_archivo">Archivos</button>
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

                            <a href="{{ route('aceros.show',$m) }}"><i class="material-icons">&#xE872;</i><span>Eliminar</span></a>
                            <a href="{{ route('aceros.edit',$m) }}"><i class="material-icons">&#xE8B8;</i><span>Editar</span></a>



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
                            <input type="number" name="tipo_de_calibre" id="tipo_de_calibre" required><br>
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

    <footer class="footer text-center text-lg-start text-white">
        <!-- Grid container -->
        <div class="container pt-2 pl-4 pr-4 textoclaro">
            <!--Grid row-->
            <div class="row my-4 ">
                <div class="col-lg-6 col-md-6 mb-4 mb-md-0">

                    <div class="rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto" style="width: 150px; height: 150px;">
                        <img src="{{asset('/imagenes/img_acero.jpg')}} " height="70" alt="" loading="lazy" />
                    </div>

                    <p class="text-center textoclaro">ACEROS Y ALGO MAS</p>


                </div>
            
                <div class="col-lg-6 col-md-6 mt-5 mb-md-0">
                    <h5 class="text-uppercase mb-4 textoclaro">Contacto</h5>

                    <ul class="list-unstyled">
                        <li>
                            <p class="textoclaro"><i class="fas fa-map-marker-alt pe-2"></i>Calle Alegre.
                                Moctezuma #1500,
                                Calz. Olímpica, C.P. 44444
                                Zapopan, Jalisco, México</p>
                        </li>
                        <li>
                            <p class="textoclaro">+ 52 33 3538 3546</p>
                        </li>
                        <li>
                            <p class="textoclaro">Aceros.ejemplo@gmail.com</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2023 Copyright:
            <p>Aceros.com</p>
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>