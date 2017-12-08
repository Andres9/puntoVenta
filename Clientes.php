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
    <title>clientes</title>
</head>

<body>

    <?php include_once('header.php')?>

    <section class="gral">
        <div id="tabs">
            <ul>
                <li>
                    <a href="#tabs-1">Nuevo cliente</a>
                </li>
                <li>
                    <a href="#tabs-2">Buscar cliente</a>
                </li>
            </ul>
            <div id="tabs-1">
                <div class="data-forms">
                    <form action="">
                        <h2 class="title" >Nuevo cliente.</h2>
                        <p>Llene la siguiente informacion acerca del nuevo cliente.</p>
                        <label for="" class="label-info">Nombre completo:</label>
                        <input type="text" name="" id="" class="input-info">
                        <label for="" class="label-info">Dirección:</label>
                        <input type="text" name="" id="" class="input-info">
                        <label for="" class="label-info">Telefono(s):</label>
                        <input type="text" name="" id="" class="input-info">
                        <label for="" class="label-info">Limite de credito:</label>
                        <input type="text" name="" id="" class="input-info"> <p>si es cero, no tiene limite de credito</p>
                        
                        <button class="btn btn-lg">Guardar cliente</button>
                        <button class="btn btn-lg">Cancelar</button>
                    </form>
                </div>
            </div>
            <div id="tabs-2">
                <div class="data-forms">
                <h2 class="title" >Modificar cliente</h2>
                <label for="">Teclee el nombre o número del cliente.</label>
                <input type="text" class="input-info">
                <button class="btn btn-lg">Aceptar</button>
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