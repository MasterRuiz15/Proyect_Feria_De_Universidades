<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Seleccionar tipo de usuario</title>

</head>
<body>
    <center>
    <h1>Feria De Universidades</h1>
    <h2>Colegio San Jose De Guanenta</h2>
    <h3>Ingresar como</h3>
    <br><br>
        </form>
        <form action="modelo/login_admin.php" method="get">
            <button type="submit" class="admin-btn">Administrador</button>
        </form>
        <hr>
        <form action="modelo/login_delegado.php" method="get">
            <button type="submit" class="delegado-btn">Delegado</button>
        </form>
        <hr>
        <form action="modelo/login_apoyo.php" method="get">
            <button type="submit" class="apoyo-btn">Apoyo</button>
        </form>
        <hr>
        <form action="modelo/login_guia.php" method="get">
            <button type="submit" class="guia-btn">Guía</button>
        </form>
        <hr>
    </center>
</body>
</html>
