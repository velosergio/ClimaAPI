<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Esta Pagina revela el clima</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="A new design system for developing with less effort.">
    <meta name="author" content="BootstrapBay">
    <link href="assets/img/favicon.ico" rel="icon" type="image/png">
    <link rel="stylesheet" href="./assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/lazy.css">
    <link rel="stylesheet" href="./assets/css/demo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css"
        integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">
</head>

<body class="landing">
    <nav class="navbar navbar-expand-md navbar-light bg-white mb-4">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="./"><img src="assets/img/logo.svg"
                    alt="Example Navbar 1" class="mr-2" height="30"> ClimaAPI</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-3"
                aria-controls="navbarNavDropdown-3" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mr-auto text-center" id="navbarNavDropdown-3">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item mx-2">
                        <a class="btn btn-outline-primary" href="https://github.com/velosergio/ClimaAPI">
                            <i class="fab fa-github"></i> GitHub
                        </a>
                    </li>
                    <li class="nav-item m-2 m-md-0">
                        <a class="btn btn-primary" href="https://github.com/velosergio/ClimaAPI/archive/master.zip">
                            <i class="fa fa-download"></i> Descargar
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="header bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h1 class="display-4">Conoce el estado del tiempo de:</h1>
                    <p class="lead my-4">Elige una ciudad</p>
                    <div class="btn-group" role="group" aria-label="Listas de ciudades">
                        <button type="button" class="btn btn-primary">Sincelejo</button>
                        <div class="btn-group" role="group">
                            <button id="ciudades" type="button" class="btn btn-primary dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="dropdown-menu" aria-labelledby="ciudades">
                                <a class="dropdown-item" href="#">Proximanete mas ciudades</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
				<?php include('api.php');?>
                    <div class="devices pl-md-4 pt-5 pt-md-0">
                        <!-- Ciudad -->
                        <h1 class="display-1"><?php echo $data->name; ?></h1>
						<!-- Temperatura Max - Temperatura Min -->
                        <h1 class="display-8"><?php echo $data->main->temp_min; ?>°C - <?php echo $data->main->temp_max; ?> °C</h1>
                        <!-- Descripción -->
                        <h1 class="display-8"><?php echo ucwords($data->weather[0]->description); ?></h1>
                        <!-- Humedad - Vientos -->
                        <h3 class="display-12">Humedad: <?php echo $data->main->humidity; ?> % - Vientos: <?php echo $data->wind->speed; ?> km/h</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="features bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="feature">
                        <div class="big-icon text-primary"><i class="fas fa-tools"></i></div>
                        <h5 class="text-primary">Hecho con Bootstrap</h5>
                        <p class="lead">Bootstrap 4, FontAwesome 5 y Open Weather Map.</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="feature">
                        <div class="big-icon text-secondary"><i class="fas fa-puzzle-piece"></i></div>
                        <h5 class="text-secondary">Open Weather Map</h5>
                        <p class="lead">Usamos la API de <a href="https://openweathermap.org">https://openweathermap.org</a>.</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="feature">
                        <div class="big-icon text-success"><i class="fas fa-palette"></i></div>
                        <h5 class="text-success">Lazy Kit Tema</h5>
                        <p class="lead">Usamos el tema Lazy Kit para darle un estilo fresco a la pagina, <a href="https://github.com/bootstrapbay/lazy-kit">Ver GitHub</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cta bg-primary text-center text-white">
        <h1 class="text-white">Nuevas Actualizaciones pronto...</h1>
		<p class="lead">Mas ciudades, correciones de errores, toda la documentacipon en GitHub</p>
        <a href="#a" class="btn btn-white btn-lg mt-4"><i class="fab fa-github"></i> Ver GitHub</a>
    </div>

    <footer class="footer-1 bg-light text-dark">
            <div class="copyright text-center">
                <hr />
                <p class="small">&copy; 2019, hecho por German Perez, Carolina Peralta, Moises Troncoso y Hugo Valeta</p>
            </div>
    </footer>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./assets/vendor/jquery/jquery.min.js"></script>
    <script src="./assets/vendor/popper/popper.min.js"></script>
    <script src="./assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- optional plugins -->
    <script src="./assets/vendor/nouislider/js/nouislider.min.js"></script>

    <!--   lazy javascript -->
    <script src="./assets/js/lazy.js"></script>
</body>

</html>