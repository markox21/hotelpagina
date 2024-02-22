<?php
require_once ("conexion.php");

$consultalomo = "SELECT meal_price FROM meal WHERE id_meal = 1";
$consultacaucau = "SELECT meal_price FROM meal WHERE id_meal = 2";
$consultaceviche = "SELECT meal_price FROM meal WHERE id_meal = 3";
$consultachaufa = "SELECT meal_price FROM meal WHERE id_meal = 4";

$consultarellenitas = "SELECT product_price FROM product WHERE id_product = 1";
$consultaritz = "SELECT product_price FROM product WHERE id_product = 4";


$nombreagua = "SELECT product_name FROM product WHERE id_product = 2";
$consultaagua = "SELECT product_price from product where id_product = 2";
$consultagaseosa = "SELECT product_price from product WHERE id_product = 3";

$consultayogurt = "SELECT product_price from product WHERE  id_product = 6";

$consultavinorosa = "SELECT product_price from product WHERE id_product = 7";

$consultachampagne = "SELECT product_price from product WHERE id_product = 8";

$consultacusqueña = "SELECT product_price from product WHERE id_product = 9";
$consultapilsen = "SELECT product_price from product WHERE id_product = 10";
$consultacristal = "SELECT product_price from product WHERE id_product = 11";
$consultacorona = "SELECT product_price from product WHERE id_product = 12";
$consultafresa = "SELECT product_price from product WHERE id_product = 13";
$consultapapaya = "SELECT product_price from product WHERE id_product = 14";

$resultado = $conexion->query($consultalomo);
$resultado2 = $conexion->query($consultacaucau);
$resultado3 = $conexion->query($consultaceviche);
$resultado4 = $conexion->query($consultachaufa);
$resultado5 = $conexion ->query($consultaagua);
$resultado6 = $conexion->query($nombreagua);
$resultado7 = $conexion->query($consultagaseosa);
$resultado8 = $conexion->query($consultayogurt);
$resultado9 = $conexion->query($consultaritz);
$resultado10 = $conexion->query($consultarellenitas);
$resultado11 = $conexion->query($consultavinorosa);
$resultado12 = $conexion->query($consultachampagne);
$resultado13 = $conexion->query($consultacusqueña);
$resultado14 = $conexion->query($consultapilsen);
$resultado15 = $conexion->query($consultacristal);
$resultado16 = $conexion->query($consultacorona);
$resultado17 = $conexion->query($consultafresa);
$resultado18 = $conexion->query($consultapapaya);





$preciolomo = $resultado->fetch(PDO::FETCH_ASSOC);
$preciocaucau = $resultado2->fetch(PDO::FETCH_ASSOC);
$precioceviche = $resultado3->fetch(PDO::FETCH_ASSOC);
$preciochaufa = $resultado4->fetch(PDO::FETCH_ASSOC);
$precioagua = $resultado5 ->fetch(PDO::FETCH_ASSOC);
$aguanombre = $resultado6->fetch(PDO::FETCH_ASSOC);
$preciogaseosa = $resultado7->fetch(PDO::FETCH_ASSOC);
$precioyogurt = $resultado8->fetch(PDO::FETCH_ASSOC);
$precioritz = $resultado9->fetch(PDO::FETCH_ASSOC);
$preciorellenitas = $resultado10->fetch(PDO::FETCH_ASSOC);
$preciovinorosa = $resultado11->fetch(PDO::FETCH_ASSOC);
$preciochampagne = $resultado12->fetch(PDO::FETCH_ASSOC);
$preciocusqueña = $resultado13->fetch(PDO::FETCH_ASSOC);
$preciocristal = $resultado14->fetch(PDO::FETCH_ASSOC);
$preciopilsen = $resultado15->fetch(PDO::FETCH_ASSOC);
$preciocorona = $resultado16->fetch(PDO::FETCH_ASSOC);
$preciofresa = $resultado17->fetch(PDO::FETCH_ASSOC);
$preciopapaya = $resultado18->fetch(PDO::FETCH_ASSOC);


?>
