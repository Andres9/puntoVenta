<!DOCTYPE html>
<html lang="es">

<head>
    <title>Punto de venta | Iniciar Sesión</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/logincss.css">
</head>

<body>
    <div id="sesion">
        <form action="login.php" method="POST">
            <div id="inicio_sesion">
                <img src="img/masventas.svg" width="40%">
                <h4>Iniciar Sesión<h4>
            </div>
            <input type="text" name="user" value="" placeholder="Usuario" class="campo form-control  col-12">
            <input type="password" name="pass" value="" placeholder="Contraseña" class="campo form-control  col-12">
            <input type="submit" value="Acceder" name="submit" class="btn-campo btn btn-primary form-control  col-12">
        </form>
    </div>

    <div class="servicios container">
    <div class="row">
        <div class="item col-md-4">
            <div class="item-img"><i class="fa fa-check-circle-o" aria-hidden="true"></i></div>
            <p>Conoce en detalle tus ganancias</p>
        </div>
        <div class="item col-md-4">
        <div class="item-img"><i class="fa fa-check-circle-o" aria-hidden="true"></i></div>
        <p>Conoce tus productos más vendidos.</p>
        </div>
        <div class="item col-md-4">
        <div class="item-img"><i class="fa fa-check-circle-o" aria-hidden="true"></i></div>
        <p>Lleva el control total de tus ventas.</p>
        </div>
    </div>
    </div>

    <footer id="creditos">
        <p id="sistema">Punto de venta</p>
        <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
    </footer>

</body>

</html>