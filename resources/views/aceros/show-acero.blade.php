<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>

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
            <ul class="navbar-nav ms-auto">
                <a href="/aceros" class="btn btn-success "><img src="{{asset('/imagenes/img_regresar.svg')}}" class="img_regresar"><span>Regresar</span></a>

            </ul>
        </div>
    </div>
</nav>

<body>

<section class="form-edit">
        <h4>Eliminar</h4>
        <hr>
        <h4>¿Esta seguro de eliminar el siguiente registro?</h4>

        <ul>
            <li><span>Tipo de calibre: </span>{{$acero->tipo_de_calibre}}</li>
            <li><span>Costo: </span>{{$acero->costos}}</li>
            <li><span>Cantidad: </span> {{$acero->cantidad}}</li>

            <form action="{{ route('aceros.destroy', $acero ) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="boton_eliminar">BORRAR</button>



</form>

            
        </ul>


    </section>
    <br>
    <br>


 
        




 <!-- /**********FOOTER************/-->

    <!-- /**********FOOTER************/-->

    <!-- /**********FOOTER************/-->


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
                <!--Grid column-->

                <!--Grid column-->
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