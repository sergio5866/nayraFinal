<?php

//require_once -> introduce codigo desde otro archivo php
require_once('../conexion/conexion.php');

// Crear conexión
$conn = conectar();

// Comprobar conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// SQL para crear tabla
$sql = "CREATE TABLE usuarios (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(30) NOT NULL,
apellidos VARCHAR(30) NOT NULL,
email VARCHAR(50),
fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "tabla creada";
} else {

  //No la crea y muestra el error
  echo "Error creando tabla: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>