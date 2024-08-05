<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "librarydb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT nombre, email, comentario, fecha FROM comentarios ORDER BY fecha DESC";
$result = $conn->query($sql);

$comentarios = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $comentarios[] = $row;
    }
}

echo json_encode($comentarios);

$conn->close();
?>
