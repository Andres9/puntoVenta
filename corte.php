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
    <title>Corte</title>
</head>

<body>
<?php include_once('header.php')?>
<section class="gral">
        <div id="tabs">
            <ul>
                <li>
                    <a href="#tabs-1">Detalles de la caja</a>
                </li>
            </ul>
            <div id="tabs-1">
                <div class="data-forms">
                <input type="submit"value="Imprimir reporte">
                <span>Dinero en caja</span>

                <table class="table">
                <tr>
                <td>Cocepto</td>
                <td>Cantidad</td>
                </tr>
                </table>

            <span>Pagos al contado</span>
            <table class="table">
                <tr>
                <td>Cocepto</td>
                <td>Cantidad</td>
                </tr>
                <tr>
                <td>Efectivo</td>
                <td>$0.00</td>
                </tr>
                <tr>
                <td>Tarjetas de credito</td>
                <td>$0.00</td>
                </tr>
                </table>
            <span>Ventas por departamento</span>
            <table class="table">
                <tr>
                <td>Cocepto</td>
                <td>Cantidad</td>
                </tr>
                </table>

                <table class="table">
                <tr>
                <td>Sin departamento</td>
                <td>$0.00</td>
                </tr>
                <tr>
                <td>Refrescos</td>
                <td>$0.00</td>
                </tr>
                </table>

                <table class="table">
                <tr>
                <td>Ventas totales</td>
                <td>$0.00</td>
                </tr>
                <tr>
                <td>Ganancias del día</td>
                <td>$0.00</td>
                </tr>
                </table>
                </div>
</section>

            </div>
    
            <?php include('footer.php')?>
</body>

<script>
    $(function () {
        $("#tabs").tabs();
    });
</script>

</html>