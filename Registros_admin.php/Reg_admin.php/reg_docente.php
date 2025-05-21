<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>

<?php
    require '../../modelo/conexion.php';

    session_start();

    if (isset($_SESSION['username'])) {
        $id_docente = $_POST['id_docente'];
        $nombre_docente = $_POST['nombre_docente'];
        $doc_ident_docente = $_POST['doc_ident_docente'];
        $correo_docente = $_POST['correo_docente'];
        $telefono_docente = $_POST['telefono_docente'];
        $password_docente = $_POST['password_docente'];
        $id_colegio = $_POST['id_colegio'];
        $id_ruta = $_POST['id_ruta'];

        $query = "INSERT INTO Docente(id_docente, nombre_docente, doc_ident_docente, correo_docente, telefono_docente, password_docente, id_colegio, id_ruta)
                  VALUES ('$id_docente', '$nombre_docente', '$doc_ident_docente', '$correo_docente', '$telefono_docente', '$password_docente', '$id_colegio', '$id_ruta')";

        $insercion = mysqli_query($conexion, $query) or trigger_error("Error en la inserción de los datos: " . mysqli_error($conexion));

        if ($insercion) {
            echo '<script type="text/javascript">
                    alert("Docente registrado!");
                    window.location.href = "../Registrar_docente.php";
                  </script>';
        } else {
            header('location: ../index.php');
        }
    }
?>
