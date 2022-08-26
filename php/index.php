<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <script defer src="../js/index.js"></script>
    <title>PasteLaunchX</title>
</head>
<body>
    <header class="logo-nav">
        <img src="../img/logo.png" alt="logo PasteLaunchX">
        <nav class="topnav">
            <button class="open-menu" aria-label="Abrir meú">
                <img src="../img/menu_black_24dp.svg" alt="abrir menu">
            </button>
            <div class="menu">
                <button class="close-menu" aria-label="Cerrar meú">
                    <img src="../img/close_white_24dp.svg" alt="cerrar menu">
                </button>
                <a href="#sabores">sabores</a>
                <a href="#adornos">adornos</a>
                <a href="#pedido">pedido</a>
                <a href="./pastelero/login.php">pastelero</a>
            </div>
        </nav>
    </header>
    <div class="content-fondo">
        <h1>Bienvenidos</h1>
        <p>a la mejor colección de pasteles</p>
    </div>

    <!--SABORES-->
    <div class="separador" id="sabores">
        <section class="contenedor">
            <h2 class="titulos">sabores</h2>
            <ul class="productos">
                <li class="pastel-adornos">
                    <img src="../img/pastel aleman.png" alt="pastel aleman" class="img">pastel aléman
                    <ul>
                        <li class="precio">$ 270</li>
                    </ul>
                </li>
                <li class="pastel-adornos">
                    <img src="../img/pastel capuchino.png" alt="pastel de capuchino" class="img">pastel capuchino
                    <ul>
                        <li class="precio">$ 420</li>
                    </ul>
                </li>
                <li class="pastel-adornos">
                    <img src="../img/pastel tres leches.png" alt="pastel de tres leches" class="img">pastel de tres leches
                    <ul>
                        <li class="precio">$ 380</li>
                    </ul>
                </li>
                <li class="pastel-adornos">
                    <img src="../img/pastel queso.png" alt="pastel de queso" class="img">pastel queso
                    <ul>
                        <li class="precio">$ 270</li>
                    </ul>
                </li>
                <li class="pastel-adornos">
                    <img src="../img/pastel americano.png" alt="pastel americano" class="img">pastel americano
                    <ul>
                        <li class="precio">$ 395</li>
                    </ul>
                </li>
                <li class="pastel-adornos">
                    <img src="../img/pastel moka.png" alt="pastel de moka" class="img">pastel moka
                    <ul>
                        <li class="precio">$ 390</li>
                    </ul>
                </li>
                <li class="pastel-adornos">
                    <img src="../img/pastel frutas.png" alt="pastel de frutas" class="img">pastel fruta
                    <ul>
                        <li class="precio">$ 420</li>
                    </ul>
                </li>
                <li class="pastel-adornos">
                    <img src="../img/pastel carlos v.png" alt="pastel de carlos V" class="img">pastel carlos v
                    <ul>
                        <li class="precio">$ 430</li>
                    </ul>
                </li>
            </ul>
        </section>
    </div>

    <!--ADORNOS-->
    <div class="separador" id="adornos">
        <section class="contenedor">
            <h2 class="titulos" >adornos</h2>
            <ul class="productos">
                <li class="pastel-adornos">
                    <img src="../img/Geometrico.jpg" alt="decoracion geometrica" class="img">decoracion geometrica
                    <ul>
                        <li class="precio">$ 300</li>
                    </ul>
                </li>
                <li class="pastel-adornos">
                    <img src="../img/drip cake.jpg" alt="decoracion drip cake" class="img">decoracion drip cake
                    <ul>
                        <li class="precio">$ 100</li>
                    </ul>
                </li>
                <li class="pastel-adornos">
                    <img src="../img/vela de cumpleaños tradicional.png" alt="decoracion velas tradicional"
                        class="img">decoracion vela tradicional
                    <ul>
                        <li class="precio">$ 20</li>
                    </ul>
                </li>
                <li class="pastel-adornos">
                    <img src="../img/vela de cumpleaños numerica.jpg" alt="decoracion velas numerica"
                        class="img">decoracion vela numerica
                    <ul>
                        <li class="precio">$ 30</li>
                    </ul>
                </li>
            </ul>
        </section>
    </div>

    <div class="separador">
        <div class="contenedor">
            <div class="enlace" id="pedido">
                <a href="formulario.php" target="_blank">pedido</a>
            </div>
        </div>
    </div>

    <!--FOOTER-->
    <footer>
        <h5 id="cinta-copy">Copyright &copy; PasteLaunchX.com Todo los derechos reservados.</h5>
    </footer>
</body>
</html>