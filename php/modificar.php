<?php

//require_once -> introduce codigo desde otro archivo php
require_once('../conexion/conexion.php');

// Crear conexión
$conn = conectar();


// Comprobar conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// SQL para modificar registro proporcionando id
$sql = "UPDATE usuarios SET nombre='Pepe' WHERE id=2";

if ($conn->query($sql) === TRUE) {
  echo "registro modificado";
} else {

  // No lo crea y muestra el error
  echo "Error modificando el registro: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>