<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $producto = htmlspecialchars($_POST['producto']);
    $cantidad = (int)$_POST['cantidad'];

    $mensaje = "Gracias, $nombre. Tu pedido de $cantidad $producto(s) ha sido recibido. Te contactaremos al $telefono.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar Pedido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/pedidos.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-red">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mi Negocio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sucursales.php">Sucursales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="pedido.php"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    
    <div class="container mt-4">
        <h1 class="text-center">Realizar Pedido</h1>
        <p class="text-center">Complete los datos para realizar su pedido:</p>

        
        <?php if (isset($mensaje)): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $mensaje; ?>
            </div>
        <?php endif; ?>

        <form action="pedido.php" method="POST" class="mt-4">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono:</label>
                <input type="tel" class="form-control" id="telefono" name="telefono" required>
            </div>
            <div class="mb-3">
                <label for="producto" class="form-label">Producto:</label>
                <input type="text" class="form-control" id="producto" name="producto" required>
            </div>
            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad:</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" min="1" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar Pedido</button>
        </form>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>