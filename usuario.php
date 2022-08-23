<?php
// Importar Conexión
require 'includes/config/database.php';
$db = conectarDB();

// Crear email y password
$email = "francolpz001@gmail.com";
$password = "123456";
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

// Consulta para crear el usuario
$query = " INSERT INTO usuarios (email, password) VALUES ( '${email}', '${passwordHash}'); ";
//echo $query;

// Agregar usuario en db
mysqli_query($db, $query);
