<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUESTRAS SUCURSALES</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="css/sucursales.css">


</head>


<body>
<nav class="navbar navbar-expand-lg navbar-red">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Pizze Il Napolitano</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="pedido.php"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col text-center">
                <h1 class="animate__animated animate__backInLeft display-4">Nuestras Sucursales</h1>
                <p class="lead">Hacé tu pedido online o vía WhatsApp y retirá:</p>
                <button class="btn btn-outline-danger accordion collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <h4 class="accordion-header" id="flush-headingOne">HORARIOS
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <p class="lead">En todas nuestras suscursales estamos:</p>
                        <div class="accordion-body">
                            <h4>Martes a domingos de 10:30 a 14:00 hs<br>
                            Martes y jueves de 19:00 a 23:00 hs<br>
                            Viernes, sábados y domingos de 19:00 a 23:00 hs</div></h4>
                     </div>
                 </h4>
             </button>
            </div>
        </div>
    </div>
    <div class="text-center mt-5 mb-4">
    <a href="pedidos.php" class="btn btn-danger btn-lg">Realizar Pedido online <i class="fa-solid fa-pizza-slice"></i></a></div>
</div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 col-lg-6 mb-4">
                <div class="card">
                    <img src="img/Almagro pizzeria.jpg" class="card-img-top" alt="Sucursal Avenida Corrientes">
                    <div class="card-body">
                        <h5 class="card-title">Avenida Corrientes 3671 (Almagro-CABA)</h5><br>
                       <!-- <p class="card-text">
                            Horarios:<br>
                            Martes a domingos: 10:30 - 14:00<br>
                            Martes y jueves: 19:00 - 23:00<br>
                            Viernes, sábados y domingos: 19:00 - 23:00
                        </p> -->
                        <div class="d-flex">
                            <a href="https://wa.me/1234567890?text=Hola,%20quiero%20hacer%20un%20pedido%20para%20retirar%20en%20Avenida%20Corrientes%203671" class="btn btn-success btn-custom" target="_blank">
                                Pedir por WhatsApp <i class="fa-brands fa-whatsapp"></i>
                            </a>
                            <a href="https://maps.app.goo.gl/JbBBnGAMhRZd8JpS6" class="btn btn-primary btn-custom" target="_blank">
                                Ver en Google Maps <i class="fa fa-map-marker-alt"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 mb-4">
                <div class="card">
                    <img src="img/pizzeria_il_napoletano_villacrespo.jpg" class="card-img-top" alt="Sucursal Aguirre">
                    <div class="card-body">
                        <h5 class="card-title">Aguirre 470 (Villa Crespo-CABA)</h5><br>
                         <!-- <p class="card-text">
                            Horarios:<br>
                            Martes a domingos: 10:30 - 14:00<br>
                            Martes y jueves: 19:00 - 23:00<br>
                            Viernes, sábados y domingos: 19:00 - 23:00
                        </p> -->
                        <div class="d-flex">
                            <a href="https://wa.me/1234567890?text=Hola,%20quiero%20hacer%20un%20pedido%20para%20retirar%20en%20Aguirre%20470" class="btn btn-success btn-custom" target="_blank">
                                Pedir por WhatsApp <i class="fa-brands fa-whatsapp"></i>
                            </a>
                            <a href="https://maps.app.goo.gl/pjPsPmYVnKRTuC5g8" class="btn btn-primary btn-custom" target="_blank">
                                Ver en Google Maps <i class="fa fa-map-marker-alt"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 mb-4">
                <div class="card">
                    <img src="img/pizzeria_il_napoletano_barrionorte.jpg" class="card-img-top" alt="Sucursal Uriburu">
                    <div class="card-body">
                        <h5 class="card-title">Uriburu 456 (Barrio Norte-CABA)</h5><br>
                         <!-- <p class="card-text">
                            Horarios:<br>
                            Martes a domingos: 10:30 - 14:00<br>
                            Martes y jueves: 19:00 - 23:00<br>
                            Viernes, sábados y domingos: 19:00 - 23:00
                        </p> -->
                        <div class="d-flex">
                            <a href="https://wa.me/1234567890?text=Hola,%20quiero%20hacer%20un%20pedido%20para%20retirar%20en%20Uriburu%20456" class="btn btn-success btn-custom" target="_blank">
                                Pedir por WhatsApp <i class="fa-brands fa-whatsapp"></i>
                            </a>
                            <a href="https://maps.app.goo.gl/LypCULBPXLou2oMw7" class="btn btn-primary btn-custom" target="_blank">
                                Ver en Google Maps <i class="fa fa-map-marker-alt"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 mb-4">
                <div class="card">
                    <img src="img/Pizzeria carabobo.jpg" class="card-img-top" alt="Sucursal Carabobo">
                    <div class="card-body">
                        <h5 class="card-title">Av. Carabobo 309 (Flores-CABA)</h5><br>
                         <!-- <p class="card-text">
                            Horarios:<br>
                            Martes a domingos: 10:30 - 14:00<br>
                            Martes y jueves: 19:00 - 23:00<br>
                            Viernes, sábados y domingos: 19:00 - 23:00
                        </p> -->
                        <div class="d-flex">
                            <a href="https://wa.me/1234567890?text=Hola,%20quiero%20hacer%20un%20pedido%20para%20retirar%20en%20Avenida%20Carabobo%20309" class="btn btn-success btn-custom" target="_blank">
                                Pedir por WhatsApp <i class="fa-brands fa-whatsapp"></i>
                            </a>
                            <a href="https://maps.app.goo.gl/UTp2Vj8mYgRQbTxK8" class="btn btn-primary btn-custom" target="_blank">
                                Ver en Google Maps <i class="fa fa-map-marker-alt"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>