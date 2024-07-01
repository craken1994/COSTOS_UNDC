<?php

require_once 'conexion.php';
print_r($_POST);

$fechaOrden = $_POST['fecha_orden'];
$nombreOrden = $_POST['nombre_orden'];

$sql = "INSERT INTO ordenes_produccion VALUES (null, '{$nombreOrden}','{$fechaOrden}', 00.00, 00.00, 0, 1);";
$result = $mysqli->query($sql);

if($result){
    echo "Datos insertados correctamente";
}else{
    echo "Error: " . $result;
}

header('Location: crear.php');

?>