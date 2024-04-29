
<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "casosena");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

// Obtener datos del formulario
$email = $_POST['email'];
$password = $_POST['password'];

// Consulta SQL para obtener la contraseña asociada al correo electrónico proporcionado
$sql = "SELECT password FROM usuarios WHERE email='$email'";
$result = $conexion->query($sql); // Cambiado de $conn a $conexion

if ($result->num_rows > 0) {
    // Si se encontró un registro con el correo electrónico dado
    $row = $result->fetch_assoc();
    $stored_password = $row["password"];
    
    // Verificar la contraseña
    if (password_verify($password, $stored_password)) {
        echo "Autenticación exitosa";
    } else {
        echo "Error en la autenticación";
    }
} else {
    echo "Usuario no encontrado";
}

// Cerrar conexión
$conexion->close(); // Cambiado de $conn a $conexion
?>
