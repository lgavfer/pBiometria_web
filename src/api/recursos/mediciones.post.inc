<?php

// AÑADIR MEDICIÓN

if (!isset($peticion)) {
    http_response_code(500);
    echo json_encode(["status" => "error", "message" => "Petición no definida"]);
    die();
}

require_once 'includes/connection.php';

if (!isset($connexion)) {
    http_response_code(500);
    echo json_encode(["status" => "error", "message" => "Conexión no establecida"]);
    die();
}

// Asumiendo que los datos POST vienen como JSON
$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, TRUE); //convertir JSON en array

// Comprobar si las claves existen en el array
$valorO3 = isset($input['valorO3']) ? $input['valorO3'] : null;
$idUsuario = isset($input['idUsuario']) ? $input['idUsuario'] : null;
$latitud = isset($input['latitud']) ? $input['latitud'] : null;
$longitud = isset($input['longitud']) ? $input['longitud'] : null;
$fecha = isset($input['fecha'])? $input['fecha'] : null;
$hora = isset($input['hora'])? $input['hora'] : null;

$sql = "INSERT INTO `mediciones` (`valorO3`, `idUsuario`, `latitud`, `longitud`, `fecha`, `hora`) 
        VALUES ('$valorO3', '$idUsuario', '$latitud', '$longitud', '$fecha', '$hora')";


try {
    mysqli_query($connexion, $sql);
    http_response_code(200);
    echo json_encode(["status" => "success", "message" => "Datos insertados con éxito"]);
} catch (Exception $exception) {
    http_response_code(500);
    echo json_encode(["status" => "error", "message" => mysqli_error($connexion)]);
    die();
}
