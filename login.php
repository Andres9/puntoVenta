<?php
session_start();
include('conexion.php');

if(isset($_POST['user']) && $_POST['user'] == !NULL
&& isset($_POST['pass']) && $_POST['pass'] == !NULL)
{
    $username = $_POST['user'];
    $password = $_POST['pass'];
    
    $sql = ("SELECT * FROM usuario WHERE user = '$username' AND password = '$password'" );
    $result = mysqli_query ($conn,$sql);
    $row = mysqli_fetch_array($result);
    
    if($username == $row['user'] && $password == $row['password']
    && $username == !NULL && $password == !NULL)
    {
        $usuario = utf8_encode($row['nombre']);
        $_SESSION['name'] = $usuario;
        header('Location: ventaAdmin.php');
    }else{
        header('Location: index.php');
    }
}else{
    header('Location: index.php');
}

?>