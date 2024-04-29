<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "casosena");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

// Obtener datos del formulario
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Encriptar contraseña
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Consulta SQL para insertar datos en la tabla de usuarios
$sql = "INSERT INTO usuarios (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

if ($conexion->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar usuario: " . $conexion->error;
}

// Cerrar conexión
$conexion->close();
?>
