<?php

$servername = "localhost";      // IP del servidor o Nombre del Servidor
$username = "root";             // Usuario de la base de datos
$password = "password";   // Contraseña del usuario de base de datos
$dbname = "SisInvent";          // Nombre de la base de datos

// Crear la conexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexion

if ($conn->connect_error)
{
  die("Connection failed: " . $conn->connect_error);
}
else {
   echo "Conexion Exitosa";
}

?>
