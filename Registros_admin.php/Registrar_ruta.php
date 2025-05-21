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
    <form action="Reg_admin.php/reg_ruta.php" method = "post">
        <h2>Registrar</h2>
        <label for="">Codigo Del Guia:</label> 
        <input type="text" name="id_ruta" id="" required>
        <br><br>
        <label for="">Correo Del Guia:</label> 
        <input type="text" name="nombre_ruta" id="" required>
        <br><br>
        <label for="">Password Del Guia:</label> 
        <input type="text" name="password_guia" id="" required>
        <br><br>
        <label for="">Nombre Del Guia:</label> 
        <input type="text" name="nombre_guia" id="" required>
        <br><br>
        <label for="">Foto Del Guia:</label> 
        <input type="text" name="foto_guia" id="" required>
        <br><br>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>