<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DenTI ti</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{!! asset('img/logo.png') !!}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>

    <style>
        a {
            text-decoration: none;
            color: white
        }

        .carousel-inner img {
            width: 100%;
            height: 100%;
        }

        .container-fluid {
            padding-top: 70px;
            padding-bottom: 70px;
        }

        .bg-2 {
            background-color: #092a6b;
            /* Black Gray */
            color: #fff;
        }

    </style>
</head>

<body class="antialiased">
    <div class="fixed-top" style="background-color: #011640;">
        <nav class="container navbar navbar-expand-sm navbar-dark  justify-content-between" style=" height: 80px;">
            <div style="max-height: 100%;width: 50px;height: 100%;">
                <a href="">
                    <img style="max-height: 100%" src="{!! asset('img/logo.png') !!}" alt="">
                </a>
            </div>
            <ul class="navbar-nav ">
                @auth
                    <li><a href="{{ url('/odontologias') }}"
                            class="text-sm text-gray-700 dark:text-gray-500 underline">Inicio</a>
                    </li>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Ingresar</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrarse</a>
                    @endif
                @endauth
            </ul>
        </nav>
    </div>

    <!-- /container -->

    <div id="demo" class="carousel slide" data-ride="carousel" style="margin-top:80px">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{!! asset('img/folio01.png') !!}" alt="Ortodoncia" width="1100" height="500">
                <div class="carousel-caption">
                    <h3 style="color: #011640;font-weight: 900;font-size:2.5rem;">Ortodoncia</h3>
                    <p style="color: #011640;font-weight: 500;font-size:2rem;">Los mejores costos y con Resultados
                        Increibles!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{!! asset('img/folio02.png') !!}" alt="Odontopediatria" width="1100" height="500">
                <div class="carousel-caption">
                    <h3 style="color: #011640;font-weight: 900;font-size:2.5rem;">Odontopediatría</h3>
                    <p style="color: #011640;font-weight: 500;font-size:2rem;">Cuida de tu sonrisa!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{!! asset('img/folio03.png') !!}" alt="Odontologia Preventiva" width="1100" height="500">
                <div class="carousel-caption">
                    <h3 style="color: #011640;font-weight: 900;font-size:2.5rem;">Odontología Preventiva</h3>
                    <p style="color: #011640;font-weight: 500;font-size:2rem;">Previene dolores bucales</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <div class="container-fluid bg-2 text-center">
        <h3 class="margin" style="font-weight: bold">Denti TI</h3>
        <p>Ofrecemos todas las especialidades odontológicas a su disposición</p>
    </div>
    <div class="container-fluid bg-3 text-center">
        <h3 class="margin" style="font-weight: bold">ESPECIALIDADES</h3><br>
        <div class="row">
            <div class="col-sm-4">
                <h3>Ortodoncia Dental</h3>
                <img src="{!! asset('img/orto.png') !!}" class="img-responsive margin rounded" style="width:100%" alt="Image">
            </div>
            <div class="col-sm-4">
                <h3>Carrillas Dentales</h3>
                <img src="{!! asset('img/blanc.png') !!}" class="img-responsive margin rounded" style="width:100%" alt="Image">
            </div>
            <div class="col-sm-4">
                <h3>Estetica Dental</h3>
                <img src="{!! asset('img/este.png') !!}" class="img-responsive margin rounded" style="width:100%" alt="Image">
            </div>
        </div>
    </div>
    <footer class="bg-light text-center text-white" style="">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-primary btn-floating m-1 rounded" style="background-color: #3b5998;"
                    href="https://www.facebook.com/Denti-T-669760909749889/about/?ref=page_internalhttps://www.facebook.com/Denti-T-669760909749889/about/?ref=page_internal"
                    target="_blank" role="button"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee;" href="#!"
                    role="button"><i class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39;" href="#!"
                    role="button"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;" href="#!"
                    role="button"><i class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;" href="#!"
                    role="button"><i class="fab fa-linkedin-in"></i></a>
                <!-- Github -->
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: #011640;">
            <span>Proyecto Odontología </span><br>
            <span>Dayana Chavez - Bryan Gallo</span>
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>
