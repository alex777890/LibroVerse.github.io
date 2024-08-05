<?php
$servername = "localhost";
$username = "root"; // Usuario por defecto en XAMPP/WAMP/MAMP
$password = ""; // Contraseña por defecto en XAMPP/WAMP/MAMP
$dbname = "librarydb"; // Nombre de tu base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$comentario = $_POST['comentario'];

// Insertar datos en la tabla
$sql = "INSERT INTO comentarios (nombre, email, comentario) VALUES ('$nombre', '$email', '$comentario')";

if ($conn->query($sql) === TRUE) {
    echo "Comentario enviado exitosamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
