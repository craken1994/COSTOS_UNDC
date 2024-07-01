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
            <h2>EDITAR MANO DE OBRA</h1>
            <h3>Puedes reemplazar lo datos ingresados anteriormente</h3>

            <div class="seccion">
                <div class="form-group">
                    <label for="trabajador">TRABAJADOR:</label>
                    <input type="text" id="trabajador" placeholder="Ingrese el nombre del empleado*">
                </div>
                <div class="form-group">
                    <label for="horas_trabajadas">HORAS TRABAJADAS:</label>
                    <input type="text" id="horas_trabajadas" placeholder="Ingrese las horas trabajadas*">
                </div>
                <div class="form-group">
                    <label for="costo_hora">COSTO x HORA:</label>
                    <input type="text" id="costo_hora" placeholder="Ingrese el costo por hora*">
                </div><br>
                <p>¿El trabajador tiene horas extras?</p>
                <div class="form-group">
                    <label for="horas_extras">HORAS EXTRAS:</label>
                    <input type="text" id="horas_extras" placeholder="Ingrese las horas extras*">
                </div>
                <div class="form-group">
                    <label for="minutos_extras">MINUTOS EXTRAS:</label>
                    <input type="text" id="minutos_extras" placeholder="Ingrese los minutos extras*">
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
