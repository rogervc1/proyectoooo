<?php
session_start(); // Iniciar sesión para manejar variables de sesión
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Consulta para obtener el usuario de la base de datos
    $sql = "SELECT * FROM usuarios WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Usuario encontrado, verificar la contraseña
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            // Contraseña válida, iniciar sesión y redirigir a la página principal
            $_SESSION["username"] = $username;
            header("Location: index.html");
            exit();
        } else {
            $error_message = "Contraseña incorrecta";
        }
    } else {
        $error_message = "Usuario no encontrado";
    }
}

$conn->close();
?>