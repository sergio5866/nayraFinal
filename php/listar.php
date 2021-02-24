<?php

//require_once -> introduce codigo desde otro archivo php
require_once('../conexion/conexion.php');

// Crear conexión
$conn = conectar();

// Comprobar conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// SQL para listar datos de la tabla anteriormente creada
$sql = "SELECT id, nombre, apellidos FROM usuarios";

// Guardar resultados
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  // Datos de salida de cada fila
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Nombre: " . $row["nombre"]. " " . $row["apellidos"]. "<br>";
  }

} else {
  echo "0 resultados";
}

//Cerrar conexión
$conn->close();
?>