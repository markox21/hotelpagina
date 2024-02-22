<?php

// Tu archivo de conexión
require_once("conexion.php");

function get_guest($bind)
{
    global $conexion;

    try {
        $sql = 'SELECT id_guest, document_type, document_number, first_names, last_names, company_name
                FROM guest
                WHERE (document_type = :document_type)';
        
        $stmt = $conexion->prepare($sql);
        $stmt->execute($bind);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($result) {
            return array('status' => 'OK', 'result' => $result);
        } else {
            return array('status' => 'ERROR', 'result' => array());
        }
    } catch (PDOException $e) {
        return array('status' => 'EXCEPTION', 'result' => $e->getMessage());
    }
}


?>