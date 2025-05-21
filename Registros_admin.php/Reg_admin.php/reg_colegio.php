<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>

<?php
    require '../../modelo/conexion.php';

    session_start();

    if (isset($_SESSION['username'])) {
        $id_colegio = $_POST['id_colegio'];
        $nombre_colegio = $_POST['nombre_colegio'];
        $municipio_colegio = $_POST['municipio_colegio'];
        $correo_colegio = $_POST['correo_colegio'];
        $telefono_colegio = $_POST['telefono_colegio'];
        $rector_colegio = $_POST['rector_colegio'];

        $query = "INSERT INTO Colegio(id_colegio, nombre_colegio, municipio_colegio, correo_colegio, telefono_colegio, rector_colegio)
                  VALUES ('$id_colegio', '$nombre_colegio', '$municipio_colegio', '$correo_colegio', '$telefono_colegio', '$rector_colegio')";

        $insercion = mysqli_query($conexion, $query) or trigger_error("Error en la inserción de los datos: " . mysqli_error($conexion));

        if ($insercion) {
            echo '<script type="text/javascript">
                    alert("Colegio registrado!");
                    window.location.href = "../Registrar_apoyo.php";
                  </script>';
        } else {
            header('location: ../index.php');
        }
    }
?>
