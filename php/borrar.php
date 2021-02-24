<?php

//require_once -> introduce codigo desde otro archivo php
require_once('../conexion/conexion.php');

// Crear conexión
$conn = conectar();

// Comprobar conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// SQL para borrar un registro proporcionando un id
$sql = "DELETE FROM usuarios WHERE id=1";

if ($conn->query($sql) === TRUE) {
  echo "registro borrado";
} else {

  // Si hubiese un error, no lo borra y muestra el error
  echo "Error borrando el registro: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>