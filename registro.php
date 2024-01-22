<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);


    $sql = "INSERT INTO usuarios (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso. ¡Bienvenido, $username!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Verificar la conexión antes de cerrarla
if ($conn->ping()) {
    echo "Conexión a la base de datos cerrada correctamente";
} else {
    echo "Error al cerrar la conexión a la base de datos";
}

$conn->close();
?>
