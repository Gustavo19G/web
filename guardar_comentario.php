<?php
$servername = "localhost"; // Cambia si es necesario
$username = "root"; // Cambia si es necesario
$password = ""; // Cambia si es necesario
$dbname = "vanguardia_segura";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// Preparar y vincular
$stmt = $conn->prepare("INSERT INTO comentarios (nombre, email, mensaje) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nombre, $email, $mensaje);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Comentario guardado exitosamente.";
} else {
    echo "Error: " . $stmt->error;
}

// Cerrar conexión
$stmt->close();
$conn->close();
?>