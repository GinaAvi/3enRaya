<?php

$servername = "localhost";
$username = "root";
$password = "";

$conex = new mysqli($servername, $username, $password);

if ($conex->connect_error) {
    die("Conexión fallida: " . $conex->connect_error);
}

$sql = "CREATE DATABASE base_Registros";

if ($conex->query($sql) === TRUE) {
    echo "<h2>Base de datos creada correctamente</h2> \n";
} else {
    die ("Erro al crear base de datos". $conex->error);
}

$conex->close();

require_once 'conexion.php';

$sqlTab = "CREATE TABLE datos(
    usuario VARCHAR(50) NOT NULL,
    pass VARCHAR(10) NOT NULL
)";

if ($conn->query($sqlTab) === TRUE) {
    echo "<h3>La tabla se ha creado correctamente.</h3>";
} else {
    die("Error al crear la tabla: " . $conn->error);
}

$conn->close();
