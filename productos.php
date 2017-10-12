<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/diseñoVenta.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <title>productosAdmin</title>
</head>

<body>

    <?php include('header.php')?>

    <section class="gral">
        <div id="tabs">
            <ul>
                <li>
                    <a href="#tabs-1">Nuevo producto</a>
                </li>
                <li>
                    <a href="#tabs-2">Modificar</a>
                </li>
                <li>
                    <a href="#tabs-3">Eliminar</a>
                </li>
                <li>
                    <a href="#tabs-4">Departamentos</a>
                </li>
                <li>
                    <a href="#tabs-5">Ventas por periodo</a>
                </li>
            </ul>
            <div id="tabs-1">
                <div id="nuevo-producto">
                    <form action="">
                        <h2 class="title">Nuevo producto.</h2>
                        <label for="" class="label">Código de barras:</label>
                        <input type="text" name="" id="" class="input">
                        <label for="" class="label">Descripción:</label>
                        <input type="text" name="" id="" class="input">
                        <div>
                            <label for="" class="label">Se vende</label>
                            <label for="">
                                <input type="radio" class="radio">Por pieza</label>
                            <label for="">
                                <input type="radio" class="radio">A Granel</label>
                            <label for="">
                                <input type="radio" class="radio">Por kit</label>
                        </div>
                        <label for="" class="label">Precio costo:</label>
                        <input type="text" name="" id="" class="input">
                        <label for="" class="label">Precio venta:</label>
                        <input type="text" name="" id="" class="input">
                        <label for="" class="label">Precio mayoreo:</label>
                        <input type="text" name="" id="" class="input">
                        <label for="" class="label">Departamento:</label>
                        <input type="text" name="" id="" class="input">
                        <div id="check">
                            <label for="">
                                <input type="checkbox">Este producto si utiliza inventario
                            </label>
                        </div>
                        <label for="" class="label">Cantidad actual:</label>
                        <input type="text" name="" id="" class="input">
                        <label for="" class="label">Minimo:</label>
                        <input type="text" name="" id="" class="input">
                        <button class="btn btn-lg">Guardar producto</button>
                        <button class="btn btn-lg">Cancelar</button>
                    </form>
                </div>
            </div>
            <div id="tabs-2">
                <h2 class="title">Modificar producto</h2>
                <label for="">Código del producto</label>
                <input type="text">
                <button>Aceptar</button>
            </div>
            <div id="tabs-3">
                <h2 class="title">Eliminar producto</h2>
                <label for="">Código del producto</label>
                <input type="text">
                <button>Aceptar</button>
            </div>
            <div id="tabs-4">
            <h2 class="title">Departamentos</h2>
            <input type="text" placeholder="buscar departamento">
            <button>Nuevo departamento</button>
            <button>Eliminar</button>
            <label for="">Nombre:</label>
            <input type="text">
            <button>Guardar departamento</button>
            <button>Cancelar</button>
            </div>
            <div id="tabs-5">
            <h2 class="title">Reporte de productos vendidos</h2>
            <label for="">Mostrar ventas de:</label>
            <input type="text">
            <button>Exportar</button>
            <button>Imprimir</button>
            <table>
                <thead>
                <tr>
                <td>Código</td>
                <td>Descripcion del producto</td>
                <td>Cantidad</td>
                <td>Precio venta</td>
                <td>Departamento</td>
                </tr>
                </thead>
            </table>
            </div>
        </div>
    </section>

    <?php include('footer.php')?>
</body>

<script>
    $(function () {
        $("#tabs").tabs();
    });
</script>

</html>