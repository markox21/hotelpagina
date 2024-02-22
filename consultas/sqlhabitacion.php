<?php
require_once ("conexion.php");
$consulta = "SELECT price_day FROM room_type WHERE id_type = 1";
$consulta2 = "SELECT price_day FROM room_type WHERE id_type = 2";
$consulta3 = "SELECT price_day FROM room_type WHERE id_type = 3";
$resultado = $conexion->query($consulta);
$resultado2 = $conexion->query($consulta2);
$resultado3 = $conexion->query($consulta3);
$preciosimple = $resultado->fetch(PDO::FETCH_ASSOC);
$preciodoble = $resultado2->fetch(PDO::FETCH_ASSOC);
$preciotriple = $resultado3->fetch(PDO::FETCH_ASSOC);
?>
