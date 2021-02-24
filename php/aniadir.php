<?php

//require_once -> introduce codigo desde otro archivo php
require_once('../conexion/conexion.php');

// Crear conexión
$conn = conectar();

// Verificar conexión
if ($conn->connect_error) {

  // Terminar conexión
  die("Conexión fallida: " . $conn->connect_error);
}

// (SQL) Insertar datos en la tabla creada
$sql = "INSERT INTO usuarios (nombre, apellidos, email)
VALUES ('Maria', 'Perez', 'prueba@gmail.com')";

if ($conn->query($sql) === TRUE) {
  echo "registro añadido";
} else {

  // Si hubiese un error no lo inserta y te muestra el error
  echo "Error: " . $sql . "<br>" . $conn->error;
}

//Cerrar conexión
$conn->close();
?>