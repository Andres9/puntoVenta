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
    <title>inventarioAdmin</title>
</head>

<body>

    <?php include('header.php')?>

    <section class="gral">
        <div id="tabs">
            <ul>
                <li>
                    <a href="#tabs-1">Agregar a inventario</a>
                </li>
                <li>
                    <a href="#tabs-2">Ajustes</a>
                </li>
                <li>
                    <a href="#tabs-3">Productos bajos en inventario</a>
                </li>
                <li>
                    <a href="#tabs-4">Reporte de inventario</a>
                </li>                
                <li>
                    <a href="#tabs-5">Reporte de movimientos</a>
                </li>
            </ul>
            <div id="tabs-1">
                <div id="nuevo-producto">
                    <form action="">
                        <h2 class="title" >Agregar inventario.</h2>
                        <label for="" class="label">Código del producto:</label>
                        <input type="text" name="" id="" class="input">
                        <label for="" class="label">Descripción:</label>
                        <label for="" class="label">Cantidad actual:</label>
                        <label for="" class="label">Cantidad</label>
                        <input type="text" name="" id="" class="input">
                        
                        <button class="btn btn-lg">Agregar cantidad a inventario</button>
                     
                    </form>
                </div>
            </div>
            <div id="tabs-2">
                <h2 class="title" >Ajustes de inventario</h2>
                <label for="" class="label">Código del producto:</label>
                <input type="text" name="" id="" class="input">
                <label for="" class="label">Descripción:</label>
                <label for="" class="label">Cantidad actual:</label>
                <label for="" class="label">Cantidad</label>
                <input type="text" name="" id="" class="input">
                
                <button class="btn btn-lg">Agregar cantidad a inventario</button>
            </div>
            <div id="tabs-3">
                <h2 class="title" >Productos bajos en inventario</h2>
                 <p>A continuación se muestra un listado con productos con inventario debajo de su minimo</p>
                 <button type="">Exportar a excel</button>
                 <table>
                    <thead>
                    <tr>
                    <td>Código</td>
                    <td>Descripción del producto</td>
                    <td>Precio venta</td>
                    <td>Inventario</td>
                    <td>Inv. minimo</td>
                    <td>Departamento</td>
                    </tr>
                    </thead>
                 </table>
            </div>
            <div id="tabs-4">
            <h2 class="title" >Reporte de inventario</h2>
            <h3>Coste del inventario</h3>
            <h3>Cantidad de productos en inventario</h3>
            <label for="">Departamento</label>
            <input type="text">
            <button>Agregar inventario</button>
            <button>Modificar producto</button>
            <button>Exportar</button>
            <button>Imprimir</button>

            <table>
            <thead>
            <tr>
            <td>Código</td>
            <td>Descripcion del producto</td>
            <td>Costo</td>
            <td>Precio venta</td>
            <td>Existecia</td>
            <td>Inv. minimo</td>
            </tr>
            </thead>
            </table>
            </div>
        </div>
        <div id="tabs-5">
        <h2 class="title" >Historial de movimientos de inventario</h2>
        <label for="">Del dia</label>
        <input type="text">
        <label for="">Buscar por</label>
        <input type="text">
        <label for="">Movimientos</label>
        <input type="text">

        <table>
            <thead>
            <tr>
            <td>Hora</td>
            <td>Descripcion del producto</td>
            <td>Habia</td>
            <td>Tipo</td>
            <td>Cantidad</td>
            <td>Cajero</td>
            <td>Depto</td>
            </tr>
            </thead>
            </table>
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