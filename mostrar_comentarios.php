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

// Consultar comentarios
$sql = "SELECT nombre, mensaje, fecha FROM comentarios ORDER BY fecha DESC";
$result = $conn->query($sql);

// Mostrar comentarios
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<p><strong>" . htmlspecialchars($row["nombre"]) . "</strong> (" . $row["fecha"] . "): " . htmlspecialchars($row["mensaje"]) . "</p>";
    }
} else {
    echo "No hay comentarios.";
}

// Cerrar conexión
$conn->close();
?>