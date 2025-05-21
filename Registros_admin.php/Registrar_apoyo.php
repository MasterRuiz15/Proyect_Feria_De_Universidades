<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>

<?php
    require '../modelo/conexion.php';
    session_start();

    if(isset($_SESSION['username'])) {
        $nombre_usuario = $_SESSION['username'];
    } else {
        header('location: ../index.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Apoyo</title>
</head>
<body>
    <h1>Registrar Apoyo</h1>
    <?php echo 'Usuario: '.$nombre_usuario; ?>

    <!--Formulario de registro de un apoyo-->
    <form action="Reg_admin.php/reg_apoyo.php" method="post">
        <h2>Registrar</h2>
        <label for="">Código:</label> 
        <input type="text" name="id_apoyo" required>
        <br><br>
        <label for="">Nombre:</label> 
        <input type="text" name="nombre_apoyo" required>
        <br><br>
        <label for="">Correo:</label> 
        <input type="text" name="correo_apoyo" required>
        <br><br>
        <label for="">Password:</label> 
        <input type="text" name="password_apoyo" required>
        <br><br>
        <label for="">Foto:</label> 
        <input type="text" name="foto_apoyo" required>
        <br><br>

        <label for="">Código Universidad:</label>
        <?php
            $query_univ = "SELECT id_universidad, nombre_universidad FROM Universidad ORDER BY nombre_universidad ASC";
            $consulta_univ = mysqli_query($conexion, $query_univ) or die("Error en la consulta: ".mysqli_error($conexion));

            echo "<select name='id_universidad' required>";
            echo "<option value=''>Seleccione una Universidad</option>";
            while($row = mysqli_fetch_array($consulta_univ)) {
                echo '<option value="'.$row['id_universidad'].'">'.$row['nombre_universidad'].'</option>';
            }
            echo "</select>";
        ?>
        <br><br>

        <button type="submit">Registrar</button>
    </form>
</body>
</html>
