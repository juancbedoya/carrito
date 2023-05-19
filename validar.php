<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carrito";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$sql = "SELECT * FROM usuario WHERE usuario = '$usuario' AND contraseña = '$contraseña'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // El usuario y la contraseña son válidos
    echo "Inicio de sesión exitoso. ¡Bienvenido!";
    header("location:usuario.html");
} else {
    // El usuario o la contraseña son incorrectos
    echo "Usuario o contraseña incorrectos. Por favor, intenta nuevamente.";
}

$conn->close();
?>
