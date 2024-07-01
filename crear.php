<?php
require_once 'conexion.php';

$sql = "SELECT * FROM ordenes_produccion WHERE estado = 1;";
$result = $mysqli->query($sql);


// while ( $fila = $result->fetch_assoc() ) {
//     echo $fila["nombre_orden"] . "<br>";
// }


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Orden</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div class="contenedor crear-orden">
        <h1>CREAR NUEVA ORDEN</h1>
        <form action="crear-registrar.php" method="POST">
            <div class="orden-form">
                <!-- <div class="form-group">
                <label for="numero_orden_crear">N° DE ORDEN: <span>0001</span></label>
            </div> -->
                <div class="form-group">
                    <label for="fecha_orden">FECHA:</label>
                    <input type="date" name="fecha_orden" id="fecha_orden" placeholder="" value="<?= date('Y-m-d') ?>">
                </div>
                <div class="form-group">
                    <label for="nombre_orden">NOMBRE DE LA ORDEN:</label>
                    <input type="text" id="nombre_orden_crear" name="nombre_orden" placeholder="Ingrese el nombre de la orden*">
                </div>
                <div class="form-group-button">
                    <button class="btn btn-red">CREAR ORDEN</button>
                </div>
            </div>
        </form>

        <hr><br>
        <div class="ordenes-existentes">
            <h2>Lista de órdenes existentes</h2>
            <table class="ordenes">
                <thead>
                    <tr>
                        <th>N° DE ORDEN</th>
                        <th>FECHA</th>
                        <th>NOMBRE DE LA ORDEN</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ( $fila = $result->fetch_assoc() ) {?>
                    <tr>
                        <td><?= $fila['numero_orden'] ?></td>
                        <td><?= $fila['nombre_orden'] ?></td>
                        <td><?= $fila['fecha_expedicion'] ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <button class="btn btn-green" onclick="window.location.href='index.php'">REGRESAR</button>
    </div>
</body>

</html>