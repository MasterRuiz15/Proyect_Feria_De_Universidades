<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>

<?php
    require '../../modelo/conexion.php';

    session_start();

    if(isset($_SESSION['username']))
    {
        $nombre_acompañante = $_POST['nombre_acompañante'];

        $query = "INSERT INTO Acompañante(nombre_acompañante) VALUES ('$nombre_acompañante')";

        $insercion = mysqli_query($conexion, $query) or trigger_error("Error en la inserción de los datos: ".mysqli_error($conexion));

        if($insercion)
        {
            echo '<script type "text/javascript">
                    alert("Acompañante registrado!");
                    window.location.href = "../registrar_administrador.php"
                </script>';
        }
        else
        {
            header('location: ../index.php');
        }
    }
?>