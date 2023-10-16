<?php
// Asegúrate de importar la clase PeticionREST correctamente
namespace api;

use includes\PeticionREST;

// OBTENER MEDICIONES

if (!isset($peticion)) {
    http_response_code(500);
    die();
}

require_once 'includes/connection.php';
if (!isset($connexion)) die();

// Consulta SQL para obtener todas las mediciones
$sql = "SELECT * FROM `mediciones`";

// Ejecutar la consulta
$result = mysqli_query($connexion, $sql);

// Inicializamos el array de salida
$salida = [];

// Rellenamos el array de salida con todas las filas obtenidas
while ($row = mysqli_fetch_assoc($result)) {
    $salida[] = $row;
}
