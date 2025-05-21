<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>

<?php
    require '../modelo/conexion.php';
    session_start();

    if(isset($_SESSION['username']))
    {
        $nombre_usuario = $_SESSION['username'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Guia</title>
</head>
<body>
    <h1>Registrar Guia</h1>
    <?php
        echo 'Usuario: '.$nombre_usuario;
    ?>
    <!--Formulario de registro de un acompañante-->
    <form action="Reg_admin.php/reg_universidad.php" method = "post">
        <h2>Registrar</h2>
        <label for="">Codigo:</label> 
        <input type="text" name="id_universidad" id="" required>
        <br><br>
        <label for="">nombre:</label> 
        <input type="text" name="nombre_universidad" id="" required>
        <br><br>
        <label for="">nit:</label> 
        <input type="text" name="nit_universidad" id="" required>
        <br><br>
        <label for="">correo:</label> 
        <input type="text" name="correo_universidad" id="" required>
        <br><br>
        <label for="">Telefono:</label> 
        <input type="text" name="telefono_universidad" id="" required>
        <br><br>
        <label for="">Sitio web:</label> 
        <input type="text" name="sitio_web_universidad" id="" required>
        <br><br>
        <label for="">Rector:</label> 
        <input type="text" name="rector_universidad" id="" required>
        <br><br>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>