<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "pagina";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
else {
    echo "Conexión exitosa a la base de datos";
}
?>
