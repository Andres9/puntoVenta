<?php 
session_start();
include('conexion.php');
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
                    <a href="#tabs-2">Buscar producto</a>
                </li>
                <li>
                    <a href="#tabs-3">Departamentos</a>
                </li>
                <li>
                    <a href="#tabs-4">Ventas por periodo</a>
                </li>
            </ul>
            <div id="tabs-1">
                <div class="data-forms">
                    <form action="" method="POST">
                        <h2 class="title">Nuevo producto.</h2>
                        <label for="" class="label-title">Código de barras:</label>
                        <input type="text" name="codigo" id="" class="input-info">
                        <label for="" class="label-title">Descripción:</label>
                        <input type="text" name="description" id="" class="input-info">
                        <label for="" class="label-title">Precio costo:</label>
                        <input type="text" name="costo" id="" class="input-info">
                        <label for="" class="label-title">Precio venta:</label>
                        <input type="text" name="venta" id="" class="input-info">
                        <label for="" class="label-title">Precio mayoreo:</label>
                        <input type="text" name="mayoreo" id="" class="input-info">
                        
                        <label for="" class="label-title">Departamento:</label>
                        <select name="depto" class="input-info">
                        <?php
                        $sql = 'SELECT * FROM departamento';
                        $result = mysqli_query($conn,$sql);
                        while($nombre = mysqli_fetch_assoc($result)){
                            echo "<option value='" .$nombre['id_departamento']."'>".$nombre['nombre']."</option>";
                        }
                        ?>
                        </select>
                        <div id="check">
                            <label for="">
                                <input type="checkbox">Este producto si utiliza inventario
                            </label>
                        </div>
                        <label for="" class="label-title">Cantidad actual:</label>
                        <input type="text" name="actual" id="" class="input-info">
                        <label for="" class="label-title">Minimo:</label>
                        <input type="text" name="minimo" id="" class="input-info">
                        <input class="btn btn-lg" type="submit" value="Guardar producto"></input>
                        <button class="btn btn-lg">Cancelar</button>
                        <?php
                        if(isset ($_POST["codigo"]) && ($_POST["description"]) && ($_POST["costo"]) 
                        && ($_POST["venta"]) && ($_POST["mayoreo"]) && ($_POST["depto"]) 
                        && ($_POST["actual"]) && ($_POST["minimo"]) && ($_POST["codigo"]<>"")
                        && ($_POST["description"]<>"") && ($_POST["costo"]<>"") && ($_POST["venta"]<>"")
                        && ($_POST["mayoreo"]<>"") && ($_POST["depto"]<>"") && ($_POST["actual"]<>"") 
                        && ($_POST["minimo"]<>""))
                            {
                            $codigo = $_POST["codigo"];
                            $descripcion = $_POST["description"];
                            $costo = $_POST["costo"];
                            $venta = $_POST["venta"];
                            $mayoreo = $_POST["mayoreo"];
                            $depto = $_POST["depto"];
                            $actual = $_POST["actual"];
                            $minimo = $_POST["minimo"];

                            $consulta = "INSERT INTO producto(codigo,descripcion,compra,venta,mayoreo,depto,cantidad_actual,minimo) 
                            VALUES ('$codigo','$descripcion','$costo','$venta','$mayoreo','$depto','$actual','$minimo')";
                            $result = mysqli_query($conn,$consulta);
                            echo '<script type="text/javascript"> alert("Dato agregado correctamente")</script>'; 
                            }
                        ?>
                    </form>
                </div>
            </div>
            <div id="tabs-2">
                <div class="data-forms">
                <h2 class="title">Buscar producto</h2>
                <form action="" method="POST">
                <label for="" class="label-title">Introduzca el codigo de barras:</label>
                        <input type="text" name="codigo" id="" class="input-info">
                        <input class="btn btn-lg" type="submit" value="Encontrar producto"></input></br></br>
                        <?php 
                        if(isset($_POST["codigo"]) && ($_POST["codigo"]<>""))
                        {
                            $codigo = $_POST["codigo"];
                           
                            $consulta = "SELECT * FROM producto WHERE codigo='$codigo'";
                            $result = mysqli_query($conn,$consulta);
                            $row = mysqli_fetch_array($result);
                            if($row['codigo'] == $codigo){
                                echo '<script type="text/javascript"> alert("Codigo encotrado")</script>'; 
                                echo "<table class='table'>";
                                echo "<tr>";
                                echo "<td>Codigo</td>";
                                echo "<td>Descripcion</td>";
                                echo "<td>Precio</td>";
                                echo "<td>Existencia</td>";
                                echo "</tr>";
                                echo "<tr>";
                                echo "<td>" . $row['codigo'] ."</td>";
                                echo "<td>" . $row['descripcion'] ."</td>";
                                echo "<td>" ."$". $row['venta'] ."</td>";
                                echo "<td>" . $row['cantidad_actual'] ."</td>";
    
                                echo $codigo =  '<td class="control_detalles"><a href="../detalle_estudiante.php?codigo='.$row["id_producto"].'">
                                <i class="fa fa-trash-o" aria-hidden="true"></i><span> ELIMINAR</span></a></td>';
                                echo $codigo =  '<td class="control_detalles"><a href="../detalle_estudiante.php?codigo='.$row["id_producto"].'">
                                <i class="fa fa-cog" aria-hidden="true"></i><span> MODIFICAR<span></a></td>';
                                echo "</tr>";
                                echo "</table>"; 
                            }else{
                                echo '<script type="text/javascript"> alert("No existe producto con el codigo especificado")</script>'; 
                            }
                                           
                        }else{
                            echo '<script type="text/javascript"> alert("No existe producto con el codigo especificado")</script>'; 
                        }
                        ?>
                       <!-- <label for="" class="label-title">Descripción:</label>
                        <input type="text" name="description" id="" class="input-info">
                        <label for="" class="label-title">Precio costo:</label>
                        <input type="text" name="costo" id="" class="input-info">
                        <label for="" class="label-title">Precio venta:</label>
                        <input type="text" name="venta" id="" class="input-info">
                        <label for="" class="label-title">Precio mayoreo:</label>
                        <input type="text" name="mayoreo" id="" class="input-info">
                        
                        <label for="" class="label-title">Departamento:</label>
                        <select name="depto" class="input-info">
                        </*?php
                        $sql = 'SELECT * FROM departamento';
                        $result = mysqli_query($conn,$sql);
                        while($nombre = mysqli_fetch_assoc($result)){
                            echo "<option value='" .$nombre['id_departamento']."'>".$nombre['nombre']."</option>";
                        }
                        ?*/>
                        </select>
                        <div id="check">
                            <label for="">
                                <input type="checkbox">Este producto si utiliza inventario
                            </label>
                        </div>
                        <label for="" class="label-title">Cantidad actual:</label>
                        <input type="text" name="actual" id="" class="input-info">
                        <label for="" class="label-title">Minimo:</label>
                        <input type="text" name="minimo" id="" class="input-info">
                        <input class="btn btn-lg" type="submit" value="Guardar cambios"></input>
                        <button class="btn btn-lg">Cancelar</button>-->
                </form>
                </div>
            </div>
            <div id="tabs-3">
                <div class="data-forms">
                <!--<h2 class="title">Departamentos</h2>
                <input type="text"  class="input-info"placeholder="buscar departamento">
                <button class="btn">Nuevo departamento</button>
                <button class="btn">Eliminar</button>-->
                <form action="" method="POST">
                <label for="" class="label-title">Nombre:</label>
                <input type="text" class="input-info" name="depto_name" >
                <input type="submit" class="btn btn-lg" value="Guardar departamento"></input>
                <button class="btn btn-lg">Cancelar</button>
                <?php
                if(isset ($_POST["depto_name"]) && ($_POST["depto_name"]<>""))
                    {
                    $nombre = $_POST["depto_name"];
                    $consulta = "INSERT INTO departamento (nombre) VALUES ('$nombre')";
                    $result = mysqli_query($conn,$consulta);
                    echo '<script type="text/javascript"> alert("Dato agregado correctamente")</script>'; 
                    }?>
                </form>
                </div>
            </div>
            <div id="tabs-4">
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