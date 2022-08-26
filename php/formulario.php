<?php include('pastelero/conexion.php'); ?>
<?php
if ($_POST) {
    $nombre = $_POST['fullname'];
    $direccion = $_POST['direccion'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $fechaEntrega = $_POST['entrega'];
    $descripcion = $_POST['descripcion'];
    $pastelAleman = $_POST['pastel-aleman'];
    $pastelCapuchino = $_POST['pastel-capuchino'];
    $pastelTresLeches = $_POST['pastel-tres-leches'];
    $pastelQueso = $_POST['pastel-queso'];
    $pastelAmericano = $_POST['pastel-americano'];
    $pastelMoka = $_POST['pastel-moka'];
    $pastelFruta = $_POST['pastel-frutas'];
    $pastelCalos = $_POST['pastel-carlos'];
    $decoGeometrica = $_POST['decoracion-geometrica'];
    $decoDripCake = $_POST['decoracion-drip-cake'];
    $decoVelaTradicional = $_POST['decoracion-vela-tradicional'];
    $decoVelaNumerica = $_POST['decoracion-vela-numerica'];

    $objConexion = new conexion();
    $sql = "INSERT INTO `pedidos` (`id`, `nombre`, `direccion`, `email`, `telefono`, `fecha`, `descripcion`, `pastel-aleman`, `pastel-capuchino`, `pastel-tres-leches`, `pastel-queso`, `pastel-americano`, `pastel-moka`, `pastel-frutas`, `pastel-carlos`, `decoracion-geometrica`, `decoracion-drip-cake`, `decoracion-vela-tradicional`, `decoracion-vela-numerica`) VALUES (NULL, '$nombre', '$direccion', '$email', '$telefono', '$fechaEntrega', '$descripcion', '$pastelAleman', '$pastelCapuchino', '$pastelTresLeches', '$pastelQueso', '$pastelAmericano', '$pastelMoka', '$pastelFruta', '$pastelCalos', '$decoGeometrica', '$decoDripCake', '$decoVelaTradicional', '$decoVelaNumerica');";
    $objConexion->ejecutar($sql);
    header("location:formulario.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formulario.css">
    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <!--FONT AWESOME-->
    <script src="https://kit.fontawesome.com/843c3be67a.js" crossorigin="anonymous"></script>
    <title>PasteLaunchX-Formulario</title>
</head>
<body>

    <!--FORMULARIO-->
    <div class="content">
        <div class="contact-wrapper">
            <h3 class="titulo">formulario</h3>
            <div class="contact-form">
                <form action="formulario.php" method="post">
                    <!--Datos del cliente-->
                    <div>
                        <label for="fullname">nombre completo:</label>
                        <input type="text" name="fullname" id="fullname" class="datos" required>
                    </div>
                    <div>
                        <label for="direccion">dirección:</label>
                        <input type="text" name="direccion" id="direccion" class="datos" required>
                    </div>
                    <div>
                        <label for="email">correo electronico:</label>
                        <input type="email" name="email" id="email" class="datos" required>
                    </div>
                    <div>
                        <label for="telefono">telefono:</label>
                        <input type="tel" name="telefono" id="telefono" class="datos" required>
                    </div>
                    <div>
                        <label for="entrega">fecha de entrega:</label>
                        <input type="datetime-local" name="entrega" id="entrega" class="datos" required>
                    </div>
                    <div class="block">
                        <label for="descripcion">describe tu pastel, ¿como lo quieres?:</label>
                        <textarea name="descripcion" id="descripcion" rows="3"></textarea>
                    </div>

                    <!--Sabores-->
                    <h2 class="titulo block">sabores</h2>
                    <div>
                        <input type="checkbox" name="pastel-aleman" id="aleman" value="pastel-aleman">
                        <label for="aleman">aleman</label>
                    </div>
                    <div>
                        <input type="checkbox" name="pastel-capuchino" id="capuchino" value="pastel-capuchino">
                        <label for="capuchino">capuchino</label>
                    </div>
                    <div>
                        <input type="checkbox" name="pastel-tres-leches" id="leches" value="pastel-tres-leches">
                        <label for="leches">tres leches</label>
                    </div>
                    <div>
                        <input type="checkbox" name="pastel-queso" id="queso" value="pastel-queso">
                        <label for="queso">queso</label>
                    </div>
                    <div>
                        <input type="checkbox" name="pastel-americano" id="americano" value="pastel-americano">
                        <label for="americano">americano</label>
                    </div>
                    <div>
                        <input type="checkbox" name="pastel-moka" id="moka" value="paste- moka">
                        <label for="moka">moka</label>
                    </div>
                    <div>
                        <input type="checkbox" name="pastel-frutas" id="frutas" value="pastel-frutas">
                        <label for="frutas">frutas</label>
                    </div>
                    <div>
                        <input type="checkbox" name="pastel-carlos" id="carlosv" value="pastel-carlos v">
                        <label for="carlosv">carlosv</label>
                    </div>
                    <!--Decoración-->
                    <h3 class="titulo block">adornos</h3>
                    <div>
                        <input type="checkbox" name="decoracion-geometrica" id="geometrica" value="decoracion-geometrica">
                        <label for="geometrica">geometrica</label>
                    </div>
                    <div>
                        <input type="checkbox" name="decoracion-drip-cake" id="drip-cake" value="decoracion-drip-cake">
                        <label for="drip-cake">drip cake</label>
                    </div>
                    <div>
                        <input type="checkbox" name="decoracion-vela-tradicional" id="tradicional" value="decoracion-vela-tradicional">
                        <label for="tradicional">vela tradicional</label>
                    </div>
                    <div>
                        <input type="checkbox" name="decoracion-vela-numerica" id="numerica" value="decoracion-vela-numerica">
                        <label for="numerica">vela numerica</label>
                    </div>

                    <div>
                        <button type="submit">enviar</button>
                    </div>
                    <div>
                        <button type="reset">borrar</button>
                    </div>
                </form>
                <div class="info-tienda">
                    <ul>
                        <li><i class="fa-solid fa-location-dot"></i> dirección: av. americas #1234</li>
                        <li><i class="fa-solid fa-phone"></i>telefono: (+52) 1234567890</li>
                        <li><i class="fa-solid fa-calendar-days"></i> horario: L-V 9am a 6pm</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>