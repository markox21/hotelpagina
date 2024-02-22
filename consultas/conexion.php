<?php
    $contraseña = 'posada123';

    $conexion = new PDO('mysql:host=localhost;dbname=db_gliese', 'root', '');

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>