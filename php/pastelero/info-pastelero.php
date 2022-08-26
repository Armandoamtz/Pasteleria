<?php include('cabecera.php'); ?>
<?php include('conexion.php'); ?>
<?php
$objConexion = new conexion();
$pedidos = $objConexion->consultar("SELECT * FROM `pedidos`");

if ($_GET) {
    $objConexion = new conexion();
    $id = $_GET['borrar'];

    $sql = "DELETE FROM pedidos WHERE `pedidos`.`id` = " .$id;
    $objConexion->ejecutar($sql);
    header("location:info-pastelero.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
</head>
<body>
    <br>
    <div class="container table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Fecha</th>
                    <th>Descripción</th>
                    <th colspan="8">Sabores</th>
                    <th colspan="4">Adornos</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pedidos as $pedido) { ?>
                <tr>
                    <td><?php echo $pedido['id'];?></td>
                    <td><?php echo $pedido['nombre'];?></td>
                    <td><?php echo $pedido['direccion'];?></td>
                    <td><?php echo $pedido['email'];?></td>
                    <td><?php echo $pedido['telefono'];?></td>
                    <td><?php echo $pedido['fecha'];?></td>
                    <td><?php echo $pedido['descripcion'];?></td>
                    <td><?php echo $pedido['pastel-aleman'];?></td>
                    <td><?php echo $pedido['pastel-capuchino'];?></td>
                    <td><?php echo $pedido['pastel-tres-leches'];?></td>
                    <td><?php echo $pedido['pastel-queso'];?></td>
                    <td><?php echo $pedido['pastel-americano'];?></td>
                    <td><?php echo $pedido['pastel-moka'];?></td>
                    <td><?php echo $pedido['pastel-frutas'];?></td>
                    <td><?php echo $pedido['pastel-carlos'];?></td>
                    <td><?php echo $pedido['decoracion-geometrica'];?></td>
                    <td><?php echo $pedido['decoracion-drip-cake'];?></td>
                    <td><?php echo $pedido['decoracion-vela-tradicional'];?></td>
                    <td><?php echo $pedido['decoracion-vela-numerica'];?></td>
                    <td><a href="?borrar=<?php echo $pedido['id']?>" role="button" class="btn btn-danger">Eliminar</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>