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
    <title>Registrar Acompañante</title>
</head>
<body>
    <h1>Registrar Acompañante</h1>
    <?php
        echo 'Usuario: '.$nombre_usuario;
    ?>
    <!--Formulario de registro de un acompañante-->
    <form action="Reg_admin/reg_acompañante.php" method = "post">
        <h2>Registrar</h2>
        <label for="">Codigo:</label> 
        <input type="text" name="id_acompañante" id="" required>
        <br><br>
        <label for="">Nombre:</label> 
        <input type="text" name="nombre_acompañante" id="" required>
        <br><br>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>