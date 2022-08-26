<?php
session_start();

if ($_POST) {
    if (($_POST['user'] == "Pastelero") && ($_POST['password'] == "root")) {
        $_SESSION['user'] = "Pastelero";
        header("location:info-pastelero.php");
    } else {
        echo "<script> alert('Usuario o contraseña es incorrecto.); </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Pastelero</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">  
            </div>

            <div class="col-md-4">
                <br>
                <div class="card border-primary mb-3 shadow-lg p-3 bg-body rounded">
                    <div class="card-header text-center">
                        <style>.card-header {background-color: white;}</style>
                        Iniciar sesión
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="post">
                            <label for="user">Usuario:</label>
                            <input type="text" name="user" id="user" class="form-control border-primary">
                            <br/>
                            <label for="password">Contraseña:</label>
                            <input type="password" name="password" id="password" class="form-control border-primary">
                            <br/>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                    <div class="card-footer text-muted">
                        <style>.card-footer {background-color:white;}</style>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                
            </div>
            
        </div>
    </div>
</body>
</html>