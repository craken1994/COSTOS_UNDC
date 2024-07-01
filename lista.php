<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Órdenes</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="contenedor lista-ordenes">
        <h1>LISTA DE ÓRDENES</h1>
        <h2>BUSCAR ÓRDENES</h2>
        <div class="buscar">
            <label for="numero_orden">N° DE ORDEN:</label>
            <input type="text" id="numero_orden" placeholder="Buscar N° de orden*">
            <label for="nombre_orden">NOMBRE DE LA ORDEN:</label>
            <input type="text" id="nombre_orden" placeholder="Buscar nombre de la orden*">
        </div>
        <hr><br>
        <table class="ordenes">
            <thead>
                <tr>
                    <th>N° DE ORDEN</th>
                    <th>NOMBRE DE LA ORDEN</th>
                    <th>FECHA DE EXPEDICIÓN</th>
                    <th>ESTADO</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>0001</td>
                    <td>Orden A</td>
                    <td>2024-06-30</td>
                    <td class="completado">COMPLETADO</td>
                    <td><button class="accion-ver"><img src="recursos/ojo.svg" alt="Ver"></button></td>
                </tr>
                <tr>
                    <td>0002</td>
                    <td>Orden B</td>
                    <td>2024-06-29</td>
                    <td class="en-proceso">EN PROCESO</td>
                    <td><button class="accion-ver"><img src="recursos/ojo.svg" alt="Ver"></button></td>
                </tr>
                <tr>
                    <td>0003</td>
                    <td>Orden C</td>
                    <td>2024-06-28</td>
                    <td class="en-proceso">EN PROCESO</td>
                    <td><button class="accion-ver"><img src="recursos/ojo.svg" alt="Ver"></button></td>
                </tr>
            </tbody>
        </table>
        <button class="btn btn-green regresar" onclick="window.location.href='index.php'">REGRESAR</button>
    </div>
</body>
</html>
