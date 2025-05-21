<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>

<?php
    require '../../modelo/conexion.php';

    session_start();

    if (isset($_SESSION['username'])) {
        $id_guia = $_POST['id_guia'];
        $nombre_guia = $_POST['nombre_guia'];
        $correo_guia = $_POST['correo_guia'];
        $password_guia = $_POST['password_guia'];
        $foto_guia = $_POST['foto_guia'];

        $query = "INSERT INTO Guia(id_guia, nombre_guia, correo_guia, password_guia, foto_guia)
                  VALUES ('$id_guia', '$nombre_guia', '$correo_guia', '$password_guia', '$foto_apoyo')";

        $insercion = mysqli_query($conexion, $query) or trigger_error("Error en la inserción de los datos: " . mysqli_error($conexion));

        if ($insercion) {
            echo '<script type="text/javascript">
                    alert("Guia registrado!");
                    window.location.href = "../Registrar_apoyo.php";
                  </script>';
        } else {
            header('location: ../index.php');
        }
    }
?>
