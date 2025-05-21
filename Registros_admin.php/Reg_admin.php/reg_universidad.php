<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>

<?php
    require '../../modelo/conexion.php';

    session_start();

    if (isset($_SESSION['username'])) {
        $id_universidad = $_POST['id_universidad'];
        $nombre_universidad = $_POST['nombre_universidad'];
        $nit_universidad = $_POST['nit_universidad'];
        $correo_universidad = $_POST['correo_universidad'];
        $telefono_universidad = $_POST['telefono_universidad'];
        $sitio_web_universidad = $_POST['sitio_web_universidad'];
        $rector_universidad = $_POST['rector_universidad'];

        $query = "INSERT INTO Universidad(id_universidad, nombre_universidad, nit_universidad, correo_universidad, telefono_universidad, sitio_web_universidad, rector_universidad)
                  VALUES ('$id_universidad', '$nombre_universidad', '$nit_universidad', '$correo_universidad', '$telefono_universidad', '$sitio_web_universidad' '$rector_universidad')";

        $insercion = mysqli_query($conexion, $query) or trigger_error("Error en la inserción de los datos: " . mysqli_error($conexion));

        if ($insercion) {
            echo '<script type="text/javascript">
                    alert("Universidad registrado!");
                    window.location.href = "../Registrar_apoyo.php";
                  </script>';
        } else {
            header('location: ../index.php');
        }
    }
?>
