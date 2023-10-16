<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "datos";

// Crear conexión
$connexion = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($connexion->connect_error) {
    die("Connection failed: " . $connexion->connect_error);
}
