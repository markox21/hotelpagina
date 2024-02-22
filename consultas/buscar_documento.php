<?php

// Obtener el número de documento del formulario
$document_number = $_POST['document_number'];

try {
    $conn = new PDO("mysql:host=127.0.0.1;dbname=db_gliese", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta SQL para buscar registros similares en la base de datos
    $stmt = $conn->prepare("SELECT * FROM guest WHERE document_number LIKE :document_number");
    $stmt->bindParam(':document_number', $document_number, PDO::PARAM_STR);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {

        $resultadosName = "";
    
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Mostrar nombre y apellido si están disponibles
            if (!empty($row["first_names"]) && !empty($row["last_names"])) {
                $resultadosName .= $row["first_names"] . " " . $row["last_names"];
            }
            // Mostrar nombre de la empresa si está disponible
            elseif (!empty($row["company_name"])) {
                $resultadosName .= $row["company_name"];
            }
        }
    } else {
        $resultadosName = "No se encontraron registros.";
    }

    echo $resultadosName;

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
