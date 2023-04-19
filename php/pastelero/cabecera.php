<?php
session_start();

if (isset($_SESSION['user']) != "Pastelero") {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Pedidos</title>
</head>
<body>
    <br>
    <div class="container">
        <a href="cerrarSesion.php" class="btn btn-danger">Cerrar sesión</a>
    </div>
</body>
</html>