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
            <h2>EDITAR MATERIA PRIMA</h1>
            <h3>Puedes reemplazar lo datos ingresados anteriormente</h3>
            <div class="seccion">
                <div class="form-group">
                    <label for="material">MATERIAL:</label>
                    <input type="text" id="material" placeholder="Ingrese el nombre del material*">
                </div>
                <div class="form-group">
                    <label for="cantidad">CANTIDAD:</label>
                    <input type="text" id="cantidad" placeholder="Ingrese cantidad*">
                </div>
                <div class="form-group">
                    <label for="precio_unit">PRECIO UNITARIO:</label>
                    <input type="text" id="precio_unit" placeholder="Ingrese el precio unitario*">
                </div>
            </div>
            <div class="modal-buttons">
                <button class= "btn btn-cancelar" id="cancelBtn">CANCELAR</button>
                <button class= "btn btn-acpetar" id="acceptBtn">ACEPTAR</button> 
            </div>

        </div>
    </div>

    <script src="main.js"></script>
</body>
</html>
