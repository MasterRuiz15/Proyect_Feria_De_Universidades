<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login Apoyo</title>

</head>
<body>
    <!--Formulario de inicio de sesion-->
    <form action="loguear_admin.php" method = "post">
        <h2>Iniciar sesion</h2>
        <label for="">E-mail:</label>
        <input type="text" name="email" id="" required>
        <br><br>
        <label for="">Password:</label>
        <input type="text" name="password" id="" required>
        <br><br>
        <button type="submit">Ingresar</button>
    </form>
</body>
</html>
