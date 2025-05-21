<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>

<?php
    require '../../modelo/conexion.php';

    session_start();

    if (isset($_SESSION['username'])) {
        $id_apoyo = $_POST['id_apoyo'];
        $nombre_apoyo = $_POST['nombre_apoyo'];
        $correo_apoyo = $_POST['correo_apoyo'];
        $password_apoyo = $_POST['password_apoyo'];
        $foto_apoyo = $_POST['foto_apoyo'];
        $id_universidad = $_POST['id_universidad'];

        $query = "INSERT INTO Apoyo(id_apoyo, nombre_apoyo, correo_apoyo, password_apoyo, foto_apoyo, id_universidad)
                  VALUES ('$id_apoyo', '$nombre_apoyo', '$correo_apoyo', '$password_apoyo', '$foto_apoyo', '$id_universidad')";

        $insercion = mysqli_query($conexion, $query) or trigger_error("Error en la inserción de los datos: " . mysqli_error($conexion));

        if ($insercion) {
            echo '<script type="text/javascript">
                    alert("Apoyo registrado!");
                    window.location.href = "../Registrar_apoyo.php";
                  </script>';
        } else {
            header('location: ../index.php');
        }
    }
?>
