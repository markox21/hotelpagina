<?php
require_once("conexion.php");

// Obtener los datos del POST
$typedocument = "DNI";
$companyname = "";
$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];

// Consulta de inserción en la base de datos (ajusta la consulta según tu esquema)
$sql = "INSERT INTO guest (document_type, document_number, first_names, last_names, address, company_name) VALUES (:document_type, :document_number, :first_names, :last_names, :address, :company_name)";

$stmt = $conexion->prepare($sql);
$stmt->bindParam(':document_type', $typedocument);
$stmt->bindParam(':document_number', $dni);
$stmt->bindParam(':first_names', $nombre);
$stmt->bindParam(':last_names', $apellido);
$stmt->bindParam(':address', $direccion);
$stmt->bindParam(':company_name', $companyname);

$stmt->execute();

$conexion = null;
?>
