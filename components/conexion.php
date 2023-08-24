<?php

    $server     = "localhost";
    $username   = "root";
    $password   = "";
    $database   = "estacmucuritas";

    $conexion   = new mysqli($server,$username,$password,$database);

    if ($conexion->connect_errno) {
        die("Conexión Fallida" . $conexion->connect_errno );
    } else {
        echo"Conexión Exitosa";
    }

?>