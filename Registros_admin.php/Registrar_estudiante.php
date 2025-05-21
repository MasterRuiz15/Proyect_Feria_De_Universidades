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
    <title>Registrar Estudiante</title>
</head>
<body>
    <h1>Registrar Estudiante</h1>
    <?php
        echo 'Usuario: '.$nombre_usuario;
    ?>
    <!--Formulario de registro de un acompañante-->
    <form action="Reg_admin.php/reg_estudiante.php" method = "post">
        <h2>Registrar</h2>
        <label for="">Codigo Del Estudiante:</label> 
        <input type="text" name="id_estudiante" id="" required>
        <br><br>
        <label for="">Nombre Del Estudiante:</label> 
        <input type="text" name="nombre_estudiante" id="" required>
        <br><br>
        <label for="">Documento De Identidad Del Estudiante:</label> 
        <input type="text" name="doc_ident_estudiante" id="" required>
        <br><br>
        <label for="">Correo Del Estudiante:</label> 
        <input type="text" name="correo_estudiante" id="" required>
        <br><br>
        <label for="">Telefono Del Estudiante:</label> 
        <input type="text" name="telefono_estudiante" id="" required>
        <br><br>
        <label for="">Codigo Del Colegio:</label> 
        <?php
    $query_col = "SELECT id_colegio, nombre_colegio FROM Colegio ORDER BY nombre_colegio ASC";
    $consulta_col = mysqli_query($conexion, $query_col) or die("Error en la consulta: ".mysqli_error($conexion));

    echo "<select name='id_colegio' required>";
    echo "<option value=''>Seleccione un Colegio</option>";
    while($row = mysqli_fetch_array($consulta_col)) {
        echo '<option value="'.$row['id_colegio'].'">'.$row['nombre_colegio'].'</option>';
    }
    echo "</select>";
?>
<br><br>
<label for="">Código Ruta:</label>
<?php
    $query_ruta = "SELECT id_ruta, nombre_ruta FROM Ruta ORDER BY nombre_ruta ASC";
    $consulta_ruta = mysqli_query($conexion, $query_ruta) or die("Error en la consulta: ".mysqli_error($conexion));

    echo "<select name='id_ruta' required>";
    echo "<option value=''>Seleccione una Ruta</option>";
    while($row = mysqli_fetch_array($consulta_ruta)) {
        echo '<option value="'.$row['id_ruta'].'">'.$row['nombre_ruta'].'</option>';
    }
    echo "</select>";
    ?>
    <br><br>

    <button type="submit">Registrar</button>
    </form>
</body>
</html>