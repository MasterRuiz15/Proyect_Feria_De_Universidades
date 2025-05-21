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
    <title>Registrar Colegio</title>
</head>
<body>
    <h1>Registrar Coleio</h1>
    <?php
        echo 'Usuario: '.$nombre_usuario;
    ?>
    <!--Formulario de registro de un acompañante-->
    <form action="Reg_admin.php/reg_colegio.php" method = "post">
        <h2>Registrar</h2>
        <label for="">Codigo Del Colegio:</label> 
        <input type="text" name="id_colegio" id="" required>
        <br><br>
        <label for="">Nombre Del Colegio:</label> 
        <input type="text" name="nombre_colegio" id="" required>
        <br><br>
        <label for="">Municipio Del Colegio:</label> 
        <input type="text" name="municipio_colegio" id="" required>
        <br><br>
        <label for="">Correo Del Colegio:</label> 
        <input type="text" name="correo_colegio" id="" required>
        <br><br>
        <label for="">Telefono Del Colegio:</label> 
        <input type="text" name="telefono_colegio" id="" required>
        <br><br>
        <label for="">Rector Del Colegio:</label> 
        <input type="text" name="rector_colegio" id="" required>
        <br><br>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>