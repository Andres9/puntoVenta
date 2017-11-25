<?php
  include('conexion.php');
  session_start();
  if(!$_SESSION){header('Location: index.php');}
?>

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
    <title>masVenta - Admin</title>
</head>

<body>
<?php include('header.php')?>
    <section id="operaciones-venta">
        <div id="accordion">
            <h3>Buscar - venta por pieza</h3>
            <div>
            <form action="" method="POST">
                <div class="input-group">
                    <input type="text" name="producto" class="form-control" placeholder="Buscar producto...">
                    <span class="input-group-btn">
                        <input class="btn btn-secondary" type="submit" <i class="fa fa-search" aria-hidden="true"></i>>
                    </span>
                </div>
                <?php   
                if(isset($_POST['producto']) && ($_POST["producto"]<>""))
                {
                $consulta = $_POST['producto'];
                $sql = "SELECT * FROM producto WHERE descripcion LIKE '%$consulta%'";
                $result = mysqli_query($conn,$sql);
                  while($row = mysqli_fetch_array($result))
                  {
                    echo "<table class='table'>";
                    echo "<tr>";
                    echo "<td>" . $row['descripcion'] ."</td>";
                    echo "<td>" .'$'. $row['venta'] ."</td>";
                    echo $producto =  '<td class="control_detalles"><a href="../detalle_estudiante.php?codigo='.$row["id_producto"].'">
                    <span> AGREGAR</span></a></td>';
                    echo "";
                    echo "</tr>";
                    echo "</table>";
                  }
                }
            ?>
            </form>
            </div>

            <h3>Varios</h3>
            <div>
            
            <input type="text" class="form-control" placeholder="Código del producto"><br>
            <input type="number" class="form-control" placeholder="Cantidad"><br>
            <input class="btn btn-secondary" type="submit" value="Aceptar">
            <input class="btn btn-secondary" type="submit" value="Cancelar">  
            </div>

            <h3>Buscar - venta por paquete</h3>
            <div>
            <form action="" method="POST">
                <div class="input-group">
                    <input type="text" name="producto" class="form-control" placeholder="Buscar producto...">
                    <span class="input-group-btn">
                        <input class="btn btn-secondary" type="submit" <i class="fa fa-search" aria-hidden="true"></i>>
                    </span>
                </div>
                <?php   
                if(isset($_POST['producto']) && ($_POST["producto"]<>""))
                {
                $consulta = $_POST['producto'];
                $sql = "SELECT * FROM producto WHERE descripcion LIKE '%$consulta%'";
                $result = mysqli_query($conn,$sql);
                  while($row = mysqli_fetch_array($result))
                  {
                    echo "<table class='table'>";
                    echo "<tr>";
                    echo "<td>" . $row['descripcion'] ."</td>";
                    echo "<td>" .'$'. $row['venta'] ."</td>";
                    echo $producto =  '<td class="control_detalles"><a href="../detalle_estudiante.php?codigo='.$row["id_producto"].'">
                    <span> AGREGAR</span></a></td>';
                    echo "";
                    echo "</tr>";
                    echo "</table>";
                  }
                }
            ?>
            </form>
            </div>
            </div>

        <!--Detalles de las ventas registradas y hacer devoluciones-->
        <button type="button" id="ventaDia" class="btn btn-md" data-toggle="modal" data-target=".bd-ventas-lg">Ventas del día y Devoluciones</button>

        <div class="modal fade bd-ventas-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ventas del día</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                    </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-12">

                                    <label for="">Puedes buscar por folio o nombre del ticket:</label>

                                    <div>
                                        <input id="input-folio" type="text" placeholder="Buscar">
                                    </div>
                                    <div>
                                        <table class="table">
                                            <thead>
                                                <th>Folio</th>
                                                <th>Arts</th>
                                                <th>Hora</th>
                                                <th>Total</th>
                                            </thead>
                                            <tbody>
                                                <th>------</th>
                                                <th>------</th>
                                                <th>------</th>
                                                <th>$------</th>
                                            </tbody>
                                        </table>
                                    </div>

                                    <label class="detalles" for="">Del día: <input type="text" id="datepicker"></label>
                                    <label class="detalles" for="">Cajero: <input type="text"> </label>
                                    <label class="detalles" for="">Ventas a creditos</label>

                                </div>
                                <div class="col-md-6 col-12">
                                    <h4>Ticket</h4>
                                    <label class="detalles" for="">Folio: 5372</label>
                                    <label class="detalles" for="">Cajero: CAJERO</label>
                                    <label class="detalles" for="">Cliente:Al contado</label>

                                    <label for="">-------------</label>

                                    <table class="table">
                                        <thead>
                                            <th>Cant.</th>
                                            <th>Descripción</th>
                                            <th>Importe</th>
                                        </thead>

                                        <tbody>
                                            <th>------</th>
                                            <th>------</th>
                                            <th>$------</th>
                                        </tbody>
                                    </table>

                                    <button class="btn btn-success btn-devolver btn-sm">Devolver Artículo seleccionado</button>

                                    <label class="detalles" for="">Total : <span class="cantidad">$00.00</span></label>
                                    <label class="detalles" for="">Pagó con: <span class="cantidad">$00.00</span></label>
                                    <button class="btn btn-primary btn-nota btn-sm">Notas de la venta</button>
                                    <div>
                                        <button class="btn btn-primary btn-sm btn-grupo">Anular venta</button>
                                        <button class="btn btn-primary btn-sm btn-grupo">Facturar</button>
                                        <button class="btn btn-primary btn-sm btn-grupo">Imprimir copia</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

    <section id="principal">
        <!--Codigo de barras para registrar la venta-->
        <div id="codigobarras" class="busqueda">
            <div class="container ">
                <div class="row">
                    <div class="col-12">
                        <form action="" method="POST">
                        <div class="input-group">
                            <input type="text" name="insert_code" class="form-control agregar" placeholder="Codigo de barras...">
                            <span class="input-group-btn">
                                <input class="btn btn-secondary agregar " type="submit" value="Agregar producto">
                            </span>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div id="tabla">
            <h4 id="titulo-tabla">Detalles de la venta</h4>
            <table class="table">
                <colgroup>
                    <col class="col1">
                    <col class="col2">
                    <col class="col3">
                    <col class="col4">
                    <col class="col5">
                    <col class="col6">
                </colgroup>
                <thead>
                    <tr>
                        <th>Código de barras</th>
                        <th>Descripcion del producto.</th>
                        <th>Precio venta.</th>
                        <th>Cantidad</th>
                        <th>Importe</th>
                        <th>Existencia</th>
                    </tr>
                </thead>
        <?php
            if(isset($_POST["insert_code"]) && ($_POST["insert_code"])){
            $codigo = $_POST["insert_code"];
            $consulta = "SELECT * FROM producto WHERE codigo='$codigo'";
            $result = mysqli_query($conn,$consulta);
            $fila = mysqli_fetch_array($result);

            if($fila["codigo"] == $codigo){?>
       
                <tbody>
                    <tr>
                    <td><?php echo $fila["codigo"]?></td>
                    <td><?php echo $fila["descripcion"]?></td>
                    <td><?php echo '$'. $fila["venta"]?></td>
                    <td><?php echo $cantidad = 1;?></td>
                    <td><?php echo '$'. $fila["venta"]*1?></td>
                    <td><?php echo $fila["cantidad_actual"]-1?></td>
                    </tr>

                </tbody>

            <?php
                                }
                                
                            }
                            ?>
                                        </table>
        </div>


        <!--Boton modal para el cobro de la venta-->
        <div id="cobrar-venta">
            <button type="button" id="btn-cobrar" class="btn btn-succe btn-md" data-toggle="modal" data-target=".bd-cobrar-lg">Cobrar</button>

            <div class="modal fade bd-cobrar-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Cobrar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                    </button>
                        </div>
                        <div class="modal-body">
                            <div id="formas-pago" class="container-fluid">
                                <div class="row">
                                    <div class="col-md-7 col-12">
                                        <div id="etiqueta-informacion">
                                            <label for="">Total a cobrar: <span class="cantidad">$00.00</span></label>
                                        </div>

                                        <div id="tabs">
                                            <ul>
                                                <li><a href="#tabs-1">Efectivo</a></li>
                                                <li><a href="#tabs-2">Credito</a></li>
                                                <li><a href="#tabs-3">Tarjeta de credito</a></li>
                                            </ul>
                                            <div id="tabs-1">
                                                <label class="detalles" for="">Págo con: <input type="number"></label>
                                                <label class="detalles" for="">Su cambio: <span class="cantidad">$100.00</span> </label>
                                            </div>
                                            <div id="tabs-2">
                                                <p>Credito</p>
                                            </div>
                                            <div id="tabs-3">
                                                <p>Tarjeta de credito</p>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-md-5 col-12">
                                        <button type="button" class="btn btn-primary boton-cobrar">Cobrar e imprimir ticket</button>
                                        <button type="button" class="btn btn-primary boton-cobrar">Cobrar solo registrado la venta</button>
                                        <button type="button" class="btn btn-primary boton-cobrar">Ingresar notas de la venta</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <label for="">Total de articulos: <span class="cantidad">00.00</span></label>
                        </div>
                    </div>
                </div>
            </div>

            <!--Boton para la impresion de la ultima venta-->
            <button id="ticket" class="btn btn-md">Reimprimir ultimo ticket</button>

        </div>

        <!--Detalles del total de productos vendidos y total a pagar-->
        <div id="detalles-compra">
            <div class="venta"><span class="cant">00.00</span> Productos en la venta actual </div>
            <div class="total">Total: <span class="cant">$00.00</span></div>
        </div>
    </section>

<?php include('footer.php')?>
</body>

<script>
    $(function () {
        $("#accordion").accordion();
    });

    $(function () {
        $("#tabs").tabs();
    });

    $(function () {
        $("#datepicker").datepicker();
    });
</script>



</html>