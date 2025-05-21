<?php
    require 'modelo/conexion.php';
    session_start();

    // Verificar que haya sesión activa
    if (isset($_SESSION['username'])) {
        $nombre_usuario = $_SESSION['username'];
    } else {
        // Redirigir al login si no hay sesión
        header("Location: ../index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido Administrador</title>
</head>
<body>
    <h1>Bienvenido Administrador</h1>
    <hr>
    <?php
        echo 'Nombre Del Administrador:  <strong>' . $nombre_usuario . '</strong>';
    ?>
    <hr>
    <a href="Registros_admin.php/Registrar_admin.php">Registrar Administrador</a>
    <hr>
    <a href="Registros_admin.php/Registrar_delegado.php">Registrar Delegado</a>
    <hr>
    <a href="Registros_admin.php/Registrar_apoyo.php">Registrar Apoyo</a>
    <hr>
    <a href="Registros_admin.php/Registrar_guia.php">Registrar Guia</a>
    <hr>
    <a href="Registros_admin.php/Registrar_colegio.php">Registrar Colegio</a>
    <hr>
    <a href="Registros_admin.php/Registrar_estudiante.php">Registrar Estudiante</a>
    <hr>
    <a href="Registros_admin.php/Registrar_docente.php">Registrar Docente</a>
    <hr>
    <a href="Registros_admin.php/Registrar_ruta.php">Registrar Ruta</a>
    <hr>
    <a href="Registros_admin.php/Registrar_acompañante.php">Registrar Acompañante</a>
    <hr>
    <a href="Registros_admin.php/Registrar_visita.php">Registrar Visita</a>
    <hr>
    <a href="Registros_admin.php/Registrar_universidad.php">Registrar Universidad</a>
    <hr>
    <a href="modelo/cerrar_sesion.php">Cerrar Sesion</a>
</body>
</html>
