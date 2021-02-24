<?php

// Retornar conexión con BBDD
function conectar() {
    $servername = "";// IP del servidor
    $username = "";// Usuario de la base de datos
    $password = "";// Contraseña de la base de datos
    $dbname = "";//Nombre de la base de datos (si todavia no se ha creado dejar este campo vacio)

    return $conn = new mysqli($servername, $username, $password, $dbname);
}
?>