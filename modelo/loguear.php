<?php
require "conexion.php";
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

// Consulta para verificar en la tabla Administrador
$query = "SELECT * FROM Administrador WHERE email = '$email' AND password = '$password'";
$resultado = mysqli_query($conexion, $query) or die("Error en la consulta: " . mysqli_error($conexion));

if (mysqli_num_rows($resultado) > 0) {
    $admin = mysqli_fetch_assoc($resultado);
    $_SESSION['username'] = $admin['nombre_administrador'];
    header("Location: ../Home.php");
} else {
    echo "Correo o contraseña incorrectos.";
}
?>
