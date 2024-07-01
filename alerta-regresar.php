<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventana Modal</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="modal.css"> <!-- Archivo CSS para los modales -->
</head>
<body>
    <!-- Botón para abrir el modal -->
    <button id="openModalBtn">Alerta Modal</button>

    <!-- El modal -->
    <div id="myModal" class="modal">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <img src="recursos/alerta.svg" alt="Alerta">
            <h1>¡ALERTA!</h1>
            <h2>¿Deseas REGRESAR sin actualizar la orden?</h2>
            <div class="modal-buttons">
                <button class= "btn btn-cancelar" id="cancelBtn">CANCELAR</button>
                <button class= "btn btn-acpetar" id="acceptBtn">ACEPTAR</button> 
            </div>
        </div>
    </div>

    <script src="main.js"></script>
</body>
</html>
