<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "puntoventa";

    $conn = mysqli_connect($servername,$username,$password,$db);
   
    if(!$conn){
        die("Conexion fallida: ".mysql_connect_error());
    }
    else{
        echo 'Conexion exitosa';
    }

     mysqli_set_charset($conn,'utf-8');
?>