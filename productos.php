<?php session_start()?>
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
                <div class="data-forms">
                    <form action="">
                        <h2 class="title">Nuevo producto.</h2>
                        <label for="" class="label-title">Código de barras:</label>
                        <input type="text" name="" id="" class="input-info">
                        <label for="" class="label-title">Descripción:</label>
                        <input type="text" name="" id="" class="input-info">
                        <label for="" class="label-title">Precio costo:</label>
                        <input type="text" name="" id="" class="input-info">
                        <label for="" class="label-title">Precio venta:</label>
                        <input type="text" name="" id="" class="input-info">
                        <label for="" class="label-title">Precio mayoreo:</label>
                        <input type="text" name="" id="" class="input-info">
                        
                        <label for="" class="label-title">Departamento:</label>
                        <select name="depto" class="input-info">
                            <option value="">Sin departamento</option>
                            <option value="">Papeleria</option>
                        </select>
                        <div id="check">
                            <label for="">
                                <input type="checkbox">Este producto si utiliza inventario
                            </label>
                        </div>
                        <label for="" class="label-title">Cantidad actual:</label>
                        <input type="text" name="" id="" class="input-info">
                        <label for="" class="label-title">Minimo:</label>
                        <input type="text" name="" id="" class="input-info">
                        <button class="btn btn-lg">Guardar producto</button>
                        <button class="btn btn-lg">Cancelar</button>
                    </form>
                </div>
            </div>
            <div id="tabs-2">
                <div class="data-forms">
                <h2 class="title">Modificar producto</h2>
                <label for="" class="label-title">Código del producto</label>
                <input type="text" input="input-info">
                <button class="btn btn-lg">Aceptar</button>
                </div>
            </div>
            <div id="tabs-3">
                <div class="data-forms">
                <h2 class="title">Eliminar producto</h2>
                <label for="" class="label-title">Código del producto</label>
                <input type="text" class="input-info">
                <button class="btn btn-lg">Aceptar</button>
                </diV>
                </div>
            <div id="tabs-4">
                <div class="data-forms">
                <h2 class="title">Departamentos</h2>
                <input type="text"  class="input-info"placeholder="buscar departamento">
                <button class="btn">Nuevo departamento</button>
                <button class="btn">Eliminar</button>
                <label for="" class="label-title">Nombre:</label>
                <input type="text" class="input-info">
                <button class="btn btn-lg">Guardar departamento</button>
                <button class="btn btn-lg">Cancelar</button>
                </div>
            </div>
            <div id="tabs-5">
            <div class="data-forms">
            <h2 class="title">Reporte de productos vendidos</h2>
            <label for="">Mostrar ventas de:</label>
            <input type="text">
            <button >Exportar</button>
            <button>Imprimir</button>
            <table class="table">
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