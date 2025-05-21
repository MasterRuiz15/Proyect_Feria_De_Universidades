<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>

<?php
    require '../../modelo/conexion.php';

    session_start();

    if (isset($_SESSION['username'])) {
        $id_delegado = $_POST['id_delegado'];
        $nombre_delegado = $_POST['nombre_delegado'];
        $correo_delegado = $_POST['correo_delegado'];
        $password_delegado = $_POST['password_delegado'];
        $telefono_delegado = $_POST['telefono_delegado'];
        $id_universidad = $_POST['id_universidad'];

        $query = "INSERT INTO Delegado(id_delegado, nombre_delegado, correo_delegado, password_delegado, telefono_delegado, id_universidad)
                  VALUES ('$id_delegado', '$nombre_delegado', '$correo_delegado', '$password_delegado', '$telefono_delegado', '$id_universidad')";

        $insercion = mysqli_query($conexion, $query) or trigger_error("Error en la inserción de los datos: " . mysqli_error($conexion));

        if ($insercion) {
            echo '<script type="text/javascript">
                    alert("Delegado registrado!");
                    window.location.href = "../Registrar_delegado.php";
                  </script>';
        } else {
            header('location: ../index.php');
        }
    }
?>
