<?php
//require_once -> introduce codigo desde otro archivo php
require_once('../conexion/conexion.php');

// Crear conexión
$conn = conectar();

// Comprobar conexión
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Crear BBDD
$sql = "CREATE DATABASE cabecera";

if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>