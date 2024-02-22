<?php
require_once("conexion.php");

$consultafotolomo = "SELECT photo from meal WHERE id_meal = 1";
$fotolomo = $conexion->query($consultafotolomo);
$imagenlomo = $fotolomo->fetchColumn();


$consultafotocaucau = "SELECT photo from meal WHERE id_meal = 2";
$fotocaucau = $conexion->query($consultafotocaucau);
$imagencaucau = $fotocaucau->fetchColumn();


$consultafotoceviche = "SELECT photo from meal WHERE id_meal = 3";
$fotoceviche = $conexion->query($consultafotoceviche);
$imagenceviche = $fotoceviche->fetchColumn();


$consultafotochaufa = "SELECT photo from meal WHERE id_meal = 4";
$fotochaufa = $conexion->query($consultafotochaufa);
$imagenchaufa = $fotochaufa->fetchColumn();


$consultafotorellenita = "SELECT photo from product WHERE id_product = 1";
$fotorellenita = $conexion->query($consultafotorellenita);
$imagenrellenita = $fotorellenita->fetchColumn();

$consultafotoagua = "SELECT photo from product WHERE id_product = 2";
$fotoagua = $conexion->query($consultafotoagua);
$imagenagua = $fotoagua->fetchColumn();

$consultafotococacola = "SELECT photo from product WHERE id_product = 3";
$fotococacola = $conexion->query($consultafotococacola);
$imagencocacola = $fotococacola->fetchColumn();

$consultafotoritz = "SELECT photo from product WHERE id_product = 4";
$fotoritz = $conexion->query($consultafotoritz);
$imagenritz = $fotoritz->fetchColumn();

$consultafotoyogurt = "SELECT photo from product WHERE id_product = 6";
$fotoyogurt = $conexion->query($consultafotoyogurt);
$imagenyogurt = $fotoyogurt->fetchColumn();

$consultafotovinorosa = "SELECT photo from product WHERE id_product = 7";
$fotovinorosa  = $conexion->query($consultafotovinorosa );
$imagenvinorosa  = $fotovinorosa->fetchColumn();

$consultafotochampagne = "SELECT photo from product WHERE id_product = 8";
$fotochampagne = $conexion->query($consultafotochampagne);
$imagenchampagne = $fotochampagne->fetchColumn();

$consultafotocusqueña = "SELECT photo from product WHERE id_product = 9";
$fotocusqueña = $conexion->query($consultafotocusqueña);
$imagencusqueña = $fotocusqueña->fetchColumn();

$consultafotopilsen = "SELECT photo from product WHERE id_product = 10";
$fotopilsen = $conexion->query($consultafotopilsen);
$imagenpilsen = $fotopilsen->fetchColumn();

$consultafotocristal = "SELECT photo from product WHERE id_product = 11";
$fotocristal = $conexion->query($consultafotocristal);
$imagencristal = $fotocristal->fetchColumn();

$consultafotocorona = "SELECT photo from product WHERE id_product = 12";
$fotocorona = $conexion->query($consultafotocorona);
$imagencorona = $fotocorona->fetchColumn();

$consultafotofresa = "SELECT photo from product WHERE id_product = 13";
$fotofresa = $conexion->query($consultafotofresa);
$imagenfresa = $fotofresa->fetchColumn();

$consultafotopapaya = "SELECT photo from product WHERE id_product = 14";
$fotopapaya = $conexion->query($consultafotopapaya);
$imagenpapaya = $fotopapaya->fetchColumn();
